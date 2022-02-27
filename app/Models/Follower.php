<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Follower extends Model
{
    use HasFactory;
    protected $table='followers';
    public $timestamps=false;
    protected $fillable=[
        'follower_creation_time',
        'user_id',
        'follower_user_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'follower_creation_time' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
