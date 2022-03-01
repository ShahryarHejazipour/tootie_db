<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tooti;

class TootiImage extends Model
{
    use HasFactory;
    protected $table='tooti_images';
    public $timestamps=false;
    protected $fillable=[

        'tooti_id',
        'image_id',

    ];

    public function tooti(){
        return $this->belongsTo(Tooti::class);
    }

    public function image(){
        return $this->hasMany(Bookmark::class);
    }
}
