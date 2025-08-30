<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'phonecode',
    ];

    public function statename()
    {
        return $this->belongsTo('App\Models\State', 'country_id', 'id');
    }
}
