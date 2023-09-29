<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Post extends Controller
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];
}
