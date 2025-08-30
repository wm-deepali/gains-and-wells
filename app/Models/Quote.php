<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
     protected $table = 'contact_us';
    protected $fillable = [
        'first_name',
        'last_name',
        'country_code',
        'mobile_number',
        'email',
        'type',
        'service_id',
        'apply_for',
        'message'
        
    ];


    
  
}
