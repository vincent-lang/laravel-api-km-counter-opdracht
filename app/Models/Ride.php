<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        'pick_up_adress',
        'drop_off_adress',
        'progress',
        'distance',
        'totalPrice',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
