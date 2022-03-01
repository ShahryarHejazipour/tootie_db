<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
        'user_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'birth_date' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hashtag(){

        return $this->belongsToMany(Hashtag::class);

    }

    public function mention(){
        return $this->hasMany(Mention::class);
    }





}
