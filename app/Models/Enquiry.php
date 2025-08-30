<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable=[
        'package_id',
        'full_name',
        'email',
        'country_code',
        'mobile_number',
        'travelDate',
        'noofPepole',
        'message',
        'status'
    ];
}
