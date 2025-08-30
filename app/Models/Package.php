<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
     protected $table = 'packages';
    protected $fillable = [
        'id',
        'page_id',
        'services',
        'name',
        'mrp',
         'discount',
         'offered_price',
         'show_on_home',
          'watsup_no' ,
        'call_no' ,
        'price_required'
        
    ];
public function enquiries()
{
    return $this->hasMany(PackageEnquiry::class, 'offer_id'); 
}


public function page()
{
    return $this->belongsTo(Page::class, 'page_id');
}
    
  
}
