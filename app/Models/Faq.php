<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

   public $table='faqs';

   protected $fillable = [
        'id',
        'page_id',
        'faq_title_id',
        'question',
        'answer',
        'is_default',
        'status',
        
    ];
    

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    

    

}
