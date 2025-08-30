<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;
     protected $table = 'visas';
   protected $fillable = [
    'id',
    'business_id',
    'number_owner',
    'quantity',
    'dubai_mainland',
    'uae_offshore',
    'uae_freezone',
];


  public function business()
{
    return $this->belongsTo(Business::class, 'business_id');
}
}
