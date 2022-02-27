<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Notification;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';
    public $timestamps = false;
    protected $fillable = [
        'tooti_like_time',
        'user_id',
        'tooti_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'tooti_like_time' => 'datetime',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tooti()
    {
        return $this->belongsTo(Tooti::class);
    }

    public function notification(){

        return $this->hasMany(Notification::class);
    }
}
