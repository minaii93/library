<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    

    protected $primarykey = 'copy_id'; //elsődéeges kulcs neve

    use HasFactory;

    protected $fillable = [
        'book_id', 
        'user_id'
    ];

  
}
