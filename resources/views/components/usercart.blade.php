@props(['user'])
<div class="card bg-base-100 shadow mt-8">
    <div class="card-body">
        <div class="avatar">
            <div class="size-10 rounded-full">
                <img src="https://avatars.laravel.cloud/{{ urlencode($user->email) }}"
                    alt="avatar" class="rounded-full" />
            </div>
        </div>
        <div>
            <div class="font-semibold">{{ $user['name'] }}</div>
            <div class="font-semibold">{{ $user['email'] }}</div>
            <div class="font-semibold">{{ $user['city'] }}</div>
            <div class="mt-1">{{ $user['role'] }}</div>
            <div class="text-sm text-gray-500 mt-2">{{ $user['last_login'] }}</div>
        </div>
        @foreach ($user->messages as $message)
        <div class="bg-emerald-500 rounded-xl pl-4 p-1">
            {{ $message['message'] }}
        </div>        
        <a href="/user_message/{{ $message['id'] }}/edit" class="btn btn-ghost btn-xs">
            Редактировать
        </a>
        <form method="POST" action="/user_message/{{ $message['id'] }}">
            @csrf
            @method('DELETE')
            <button type="submit" 
                onclick="return confirm('Вы действительно хотите удалить запись?')"
            class="bg-red-400 text-white rounded p-2 cursor-pointer">Удалить</button>
        </form>
        @endforeach
      
    </div>
</div>
<pre>
</pre>

