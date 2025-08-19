<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authers'; // Ensure the table name is correct

    // Fields that are mass assignable
    protected $fillable = ['name'];

}
