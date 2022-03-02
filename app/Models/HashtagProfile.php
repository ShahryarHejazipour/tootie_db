<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashtagProfile extends Model
{
    use HasFactory;

    protected $table='hashtag_profile';
    public $timestamps=false;
    protected $fillable=[
        'profile_id',
        'hashtag_id',
    ];
}
