<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    use HasFactory;
    public $table="seo_meta";
    protected $fillable=[
        'page_slug',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'scripts_text',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_slug', 'slug');
    }
}
