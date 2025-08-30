<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;
    public $table = 'sub_services';

    protected $fillable = [
        'name',
        'service_id',
    ];
    public function serviceName()
    {
        return $this->belongsTo(Service::class);
    }
}