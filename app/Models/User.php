<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Follower;
use App\Models\Following;
use App\Models\Bookmark;
use App\Models\View;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Device;
use App\Models\Tooti;
use App\Models\Image;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Mention;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
        'name_user',
        'email',
        'register_first_time',
        'latitude_X',
        'longitude_Y',
        'password',
        'family_user',
        'role_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'register_first_time' => 'datetime',
    ];

    //
    public function following()
    {

        return $this->hasMany(Following::class);
    }

    //
    public function follower()
    {

        return $this->hasMany(Follower::class);
    }


    //
    public function like()
    {

        return $this->hasMany(Like::class);
    }

    //
    public function bookmark()
    {

        return $this->hasMany(Bookmark::class);
    }

    //
    public function comment()
    {

        return $this->hasMany(Comment::class);
    }

    //
    public function notification()
    {

        return $this->hasMany(Notification::class);
    }

    //
    public function device()
    {

        return $this->hasMany(Device::class);
    }

    //
    public function view()
    {

        return $this->hasMany(View::class);
    }

    //
    public function tooti()
    {
        return $this->hasOne(Tooti::class);
    }

    //
    public function image()
    {
        return $this->hasMany(Image::class);
    }

    //
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function mention()
    {
        return $this->hasMany(Mention::class);
    }


}
