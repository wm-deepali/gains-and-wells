
# Thank You, {{ $quotation->full_name }}

We have received your quotation request. Here’s a summary:

- **Business Activity:** {{ $quotation->business->Business_name ?? 'N/A' }}
- **Owners/Partners:** {{ $quotation->owners }}
- **Visa Option:** {{ $quotation->visa->quantity ?? 'N/A' }} Visas


- **Dubai Mainland:** AED {{ number_format($quotation->cost_mainland) }}
- **UAE Freezone:** AED {{ number_format($quotation->cost_dubai) }}
- **UAE Offshore:** AED {{ number_format($quotation->cost_sharjah) }}

We will get in touch with you shortly.

Thanks,<br>


