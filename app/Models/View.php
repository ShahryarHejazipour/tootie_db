<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tooti;

class View extends Model
{
    use HasFactory;

    protected $table='views';
    public $timestamps=false;
    protected $fillable=[
        'tooti_id',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tooti(){
        return $this->belongsTo(Tooti::class);
    }



}
