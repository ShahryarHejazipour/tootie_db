<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hashtag;

class HashtagMain extends Model
{
    use HasFactory;

    protected $table = 'hashtag_mains';
    public $timestamps = false;
    protected $fillable = [
        'hashtag_text',
        'hashtag_first_creation_time',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [


        'hashtag_first_creation_time' => 'datetime',
    ];

    public function hashtag()
    {
        return $this->hasMany(Hashtag::class);
    }
}
