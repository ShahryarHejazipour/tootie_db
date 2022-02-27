<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tooti;
use App\Models\Like;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    public $timestamps = false;
    protected $fillable = [
        'isSend',
        'notify_time_creation',
        'like_id',
        'comment_id',
        're_tooti_id',
        'following_id',
        'user_id',
        'device_id',
        'mention_id',

    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'notify_time_creation' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function tooti()
    {
        return $this->belongsTo(Tooti::class);
    }

    public function like()
    {

        return $this->belongsTo(Like::class);
    }
}
