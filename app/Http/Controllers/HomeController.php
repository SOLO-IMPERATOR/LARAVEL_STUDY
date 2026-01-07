<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_my;
use App\Models\UserMessage;

class HomeController extends Controller
{
    public function index(){

        $users = user_my::with('messages')->take(50)->get();
        $users_count = user_my::count();
        return view('home', [
            'users' => $users,
            'count' => $users_count
        ]);
    }

    public function add_message(Request $request){
        $validate = $request->validate([
            'user_id' => 'required|string',
            'message' => 'required|string|max:255'
        ]);
        UserMessage::create([
            'message' => $validate['message'],
            'user_my_id' => $validate['user_id']
        ]);

        return redirect('/home')->with('success', 'Запись создана');
    }

    public function delete_message(UserMessage $userMessage){
        $userMessage->delete();
        return redirect('/home')->with('success', 'Запись успешно удалена');
    }

    public function form_edit(UserMessage $userMessage){
        return view('user_message.edit', compact('userMessage'));
    }

    public function edit_message(UserMessage $userMessage, Request $request){
        $validate = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $userMessage->update($validate);
        
        return redirect('/home')->with('success', 'Запись успешно обновлена');
    }


}
