<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tooti;

class Hashtag extends Model
{
    use HasFactory;

    protected $table = 'hashtags';
    public $timestamps = false;
    protected $fillable = [
        'hashtag_creation_time',
        'tooti_id',
        'profile_id',
        'comment_id',
        'hashtag_main_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'hashtag_creation_time' => 'datetime',
    ];

    public function tooti()
    {

        return $this->belongsToMany(Tooti::class);
    }

    public function hashtagMain()
    {
        return $this->belongsTo(HashtagMain::class);
    }

    public function profile()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function comment()
    {
        return $this->belongsToMany(Comment::class);
    }
}
