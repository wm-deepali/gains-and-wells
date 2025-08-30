<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageEnquiry extends Model
{
    use HasFactory;

    protected $table = 'package_enquiry';

    protected $fillable = [
        'name', 'email', 'phone','country_code', 'subject', 'message', 'offer_id', 'status',
        'p_id'
    ];

public function package()
{
    return $this->belongsTo(Package::class, 'offer_id'); 
}
public function page()
{
    return $this->belongsTo(Page::class, 'p_id'); 
}

}
?>