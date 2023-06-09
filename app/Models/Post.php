<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'blog_posts';
}
