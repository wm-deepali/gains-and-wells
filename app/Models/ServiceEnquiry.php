<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEnquiry extends Model
{
    use HasFactory;

    protected $table = 'service_enquiries';

    protected $fillable = [
        'service_id',
        'page_id',
        'full_name',
        'email',
        'country_code',
        'mobile',
        'location',
        'details',
    ];

    // Relationship to the "page" table
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    // Relationship to the "service" table (note singular table name)
   public function service()
{
    return $this->belongsTo(Service::class);
}
}