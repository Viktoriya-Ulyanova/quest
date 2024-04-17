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
        'booking_date',
        'quest_name',
        'count_people',
        'price',
        'id',
        'img_title',
        'images',
        'order_status',
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}