<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileHashtag extends Model
{
    use HasFactory;

    protected $table='profile_hashtag';
    public $timestamps=false;
    protected $fillable=[
        'profile_id',
        'hashtag_id',
    ];
}
