<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table='profiles';
    public $timestamps=false;
    protected $fillable=[
        'image_profile_url',
        'image_cover_url',
        'biography',
        'birth_date',
        'gender',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'birth_date' => 'datetime',
    ];
}
