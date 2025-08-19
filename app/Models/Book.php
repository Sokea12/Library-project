<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'name',
        'category_id',
        'auther_id',
        'publisher_id'
    ];


    public function authers()
    {
        return $this->belongsTo(Author::class, 'auther_id','id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function publishers()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
