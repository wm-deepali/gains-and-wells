<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    use HasFactory;
    public $table = 'book_appointments';

    protected $fillable = [
        'service_id',
        'sub_service_id',
        'name',
        'email',
        'contact',
        'details',
        'country_id'
    ];
    
    public function serviceName()
    {
        return $this->hasOne(Service::class,'id', 'service_id');
    }
    public function subservice()
    {
        return $this->hasOne(SubService::class,'id', 'sub_service_id');
    }
    public function country()
    {
        return $this->hasOne(Country::class,'id', 'country_id');
    }
}