<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['Book_Name', 'Book_Author', 'Book_Stock', 'Book_Date'];
}
