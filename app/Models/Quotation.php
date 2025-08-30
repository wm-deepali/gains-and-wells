<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    public $table = 'quotations';

    protected $fillable = [
    'business_id', 'owners', 'visa_id',
    'full_name', 'email', 'phone','country_code',
    'cost_mainland', 'cost_dubai', 'cost_sharjah',
];
    



public function business()
{
    return $this->belongsTo(Business::class, 'business_id');
}

public function visa()
{
    return $this->belongsTo(Visa::class, 'visa_id');
}

}