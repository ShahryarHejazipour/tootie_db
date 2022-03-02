<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TootiHashtag extends Model
{
    use HasFactory;
    protected $table='hashtag_tooti';
    public $timestamps=false;
    protected $fillable=[
        'tooti_id',
        'hashtag_id',
    ];

}
