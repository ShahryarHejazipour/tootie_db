<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentHashtag extends Model
{
    use HasFactory;

    protected $table='comment_hashtag';
    public $timestamps=false;
    protected $fillable=[
        'hashtag_id',
        'comment_id',
    ];
}
