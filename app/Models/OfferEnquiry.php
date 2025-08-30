<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferEnquiry extends Model
{
    use HasFactory;

    protected $table = 'offer_enquiry';

    protected $fillable = [
        'name', 'email', 'country_code', 'phone', 'subject', 'message', 'offer_id', 'status'
    ];

    public function offer()
{
    return $this->belongsTo(Offer::class, 'offer_id');
}
  public function page()
{
    return $this->belongsTo(Page::class, 'page_id');
}
}
?>