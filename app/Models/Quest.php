<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'quest_name',
        'players',
        'time',
        'price',
        'level',
        'age',
        'descr'
    ];

    protected $hidden = [
        'id',
        'img_title',
        'images'
    ];

    public function tags() {
        return $this->hasMany(Tag::class, 'quest_name', 'quest_name');
    }
}
