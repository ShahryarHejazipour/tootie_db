<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;
use App\Models\TootiImage;
use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Mention;
use App\Models\Hashtag;
use App\Models\Device;
use App\Models\View;
use App\Models\Image;
use App\Models\Notification;

class Tooti extends Model
{
    use HasFactory;

    protected $table = 'tootis';
    public $timestamps = false;
    protected $fillable = [
        'tooti_text',
        'tooti_time_creation',
        'quote_text',
        'device_id',
        're_tooti_id',
        'image_url_id',
        'view_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function tootiImage()
    {

        return $this->hasMany(TootiImage::class);
    }

    //
    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function mention()
    {
        return $this->hasMany(Mention::class);
    }

    public function hashtag()
    {
        return $this->belongsToMany(Hashtag::class);
    }

    public function device()
    {
        return $this->hasOne(Device::class);
    }

    public function view()
    {
        return $this->hasMany(View::class);
    }

    public function notification(){

        return $this->hasMany(Notification::class);

    }







}
