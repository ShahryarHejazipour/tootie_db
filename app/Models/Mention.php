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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
