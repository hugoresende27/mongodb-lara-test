<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Copy extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'copy';
}
