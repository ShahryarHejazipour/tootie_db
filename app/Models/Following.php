<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Following extends Model
{
    use HasFactory;
    protected $table='followings';
    public $timestamps=false;
    protected $fillable=[
        'following_creation_time',
        'user_id',
        'following_user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'following_creation_time' => 'datetime',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
