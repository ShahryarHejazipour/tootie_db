<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TootiImage extends Model
{
    use HasFactory;
    protected $table='tooti_images';
    public $timestamps=false;
    protected $fillable=[

    ];
}
