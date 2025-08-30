<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogCategory extends Model
{
    use HasFactory;
     protected $fillable = [
        'id', 
        'name',
        'url',
        'status',  
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'category', 'id');
    }
}
