<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tooti;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    public $timestamps = false;
    protected $fillable = [
        'tooti_comment_time',
        'comment_text',
        'user_id',
        'tooti_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'tooti_comment_time' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tooti()
    {
        return $this->belongsTo(Tooti::class);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

    public function mention()
    {
        return $this->hasMany(Mention::class);
    }

    public function hashtag()
    {
        return $this->belongsToMany(Hashtag::class);
    }
}
