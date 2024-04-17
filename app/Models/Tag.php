<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'quest_name',
        'name' //tag name
    ];

    protected $hidden = [
        'id'
    ];
}
