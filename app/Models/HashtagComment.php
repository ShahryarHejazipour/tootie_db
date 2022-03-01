<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashtagComment extends Model
{
    use HasFactory;

    protected $table='hashtag_comments';
    public $timestamps=false;
    protected $fillable=[
        'hashtag_id',
        'comment_id',
    ];
}
