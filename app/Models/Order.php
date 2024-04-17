<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_phone',
        'user_mail',
        'booking_time',
        'quest_name',
        'count_people',
        'price',
    ];

    protected $hidden = [
        'id',
        'img_title',
        'images',
        'order_status',
        'updated_at',
        'created_at'
    ];
}
