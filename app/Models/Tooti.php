<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tooti extends Model
{
    use HasFactory;

    protected $table = 'tootis';
    public $timestamps = false;
    protected $fillable=[
        'tooti_text',
        'tooti_time_creation',
        'quote_text'
    ];
}
