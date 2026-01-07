<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class user_my extends Model
{
    protected $table = "user_my";
    public $timestamps = false;
    protected $fillable = [
        'message',
    ];
    public function messages(): HasMany
    {
        return $this->hasMany(UserMessage::class, 'user_my_id');
    }
}
