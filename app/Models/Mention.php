<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tooti;

class Mention extends Model
{
    use HasFactory;

    protected $table = 'mentions';
    public $timestamps = false;
    protected $fillable = [
        'mention_time',
        'tooti_id',
        'profile_id',
        'comment_id',
        'mentioned_user_id',
        'mentioner_user_id',

    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'mention_time' => 'datetime',
    ];

    public function tooti()
    {
        return $this->belongsTo(Tooti::class);
    }

    /*
     * Connect to users Table this column
     * with mentioner_user_id => id users Table
     * */
    public function userMentioner()
    {
        return $this->belongsTo(User::class, "mentioner_user_id");
    }

    /*
     * Connect to users Table this column
     * with mentioned_user_id => id users Table
     * */
    public function userMentioned()
    {
        return $this->belongsTo(User::class, "mentioned_user_id");
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function notification()
    {
        return $this->hasOne(Notification::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }


}
