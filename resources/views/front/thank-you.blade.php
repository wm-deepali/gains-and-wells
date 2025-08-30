@extends('front.layouts.app-common')

@section('pagetitle')
Thank You
@stop
@push('require-script')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBHMMLXJ');</script>
<!-- End Google Tag Manager -->
@endpush
@push('require-body-script')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBHMMLXJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endpush
@section('content')

<div style="display: flex; justify-content: center; align-items: center; height: 80vh; background: linear-gradient(135deg, #e0f7fa, #ffffff);">
    <div style="text-align: center; padding: 40px; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); max-width: 600px;">
        <h1 style="font-size: 48px; color: #00bfa5; font-weight: 700; margin-bottom: 20px;">
            Thank You!
        </h1>
        <p style="font-size: 18px; color: #555555; margin-bottom: 30px;">
            We’ve received your request. Our team will get in touch with you shortly.
        </p>
        <a href="{{ url('/') }}" style="display: inline-block; padding: 12px 24px; background-color: #00bfa5; color: #fff; text-decoration: none; border-radius: 6px; font-size: 16px; font-weight: 600;">
            Back to Home
        </a>
    </div>
</div>

@endsection
