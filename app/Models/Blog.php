<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;
class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'category',
        'keywords',
        'publish_date',
        'url',
        'image',
        'image_alt',
        'content',
        'short_description',
        'author',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status','facebook_link','twitter_link','linkdin_link',
    ];

    public function blogCategory()
    {
        return $this->hasOne(BlogCategory::class, 'id', 'category');
    }

    public function getKeywordsAttribute($value)
    {
        return explode(',', $value);
    }
}
