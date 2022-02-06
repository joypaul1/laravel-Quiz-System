<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'content',
    ];
}
