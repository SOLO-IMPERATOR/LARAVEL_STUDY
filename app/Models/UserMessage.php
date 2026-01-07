<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class UserMessage extends Model
{
    protected $table = "user_messages";
    public $timestamps = false;

    protected $fillable = [
        'message',
        'user_my_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(user_my::class,'user_my_id');
    }

}
