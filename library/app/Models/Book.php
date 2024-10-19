<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  

    protected $primarykey = 'book_id'; //elsődéeges kulcs neve

    use HasFactory;


    protected $fillable = [
        'title',
        'author',
        'pieces'
    ];
}
