<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSetting extends Model
{
    use HasFactory;
    public $table = 'section_settings';

    protected $fillable = [
        'id',
        'page_slug',
        'is_show_faq_form',
        'is_show_blog_section',
        'is_show_logo_marque',
        'is_show_testimonial',
        'faq_type',
        'faq_id'
    ];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_slug', 'slug');
    }
}
