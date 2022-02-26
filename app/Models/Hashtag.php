<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;

    protected $table='hashtags';
    public $timestamps=false;
    protected $fillable=[
        'hashtag_creation_time',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'hashtag_creation_time' => 'datetime',
    ];
}
