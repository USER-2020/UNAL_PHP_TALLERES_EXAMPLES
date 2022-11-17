<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    /* Telling the model to use the table called product. */
    use HasFactory;
    protected $table = 'product';
}



