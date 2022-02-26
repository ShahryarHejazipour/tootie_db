<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table='images';
    public $timestamps=false;
    protected $fillable=[
        'image_url',
        'image|_url_creation_time',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'image|_url_creation_time' => 'datetime',
    ];
}
