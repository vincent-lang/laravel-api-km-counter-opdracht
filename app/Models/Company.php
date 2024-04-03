<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'street',
        'house_number',
        'zipcode',
        'place',
        'country',
        'kvk_number',
        'phone_number',
        'user_id'
    ];
}
