<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    public $table = 'careers';

    protected $fillable = [
        'id',
        'heading',
        'content',
        'button_name',
        'button_link',
        'image'
      
    ];
}
