<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tooti;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';
    public $timestamps = false;
    protected $fillable = [
        'device_name',
        'mac_address',
        'token',
        'last_time_visit',
        'os',
        'ip',
        'device_uu_id',
        'first_register_time',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'last_time_visit' => 'datetime',
        'first_register_time' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tooti()
    {
        return $this->belongsTo(Tooti::class);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }
}
