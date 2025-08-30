@extends('front.layouts.app-common')

@section('pagetitle')
Page Not Found
@stop

@section('content')

<div style="display: flex; justify-content: center; align-items: center; height: 70vh; background: linear-gradient(135deg, #fdfdfd, #f1f1f1);">
    <div style="text-align: center; padding: 40px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 600px;">
        <h1 style="font-size: 96px; font-weight: 700; color: #ff5722; margin-bottom: 10px;">404</h1>
        <h2 style="font-size: 28px; color: #333;">Oops! Page not found</h2>
        <p style="font-size: 16px; color: #777; margin-top: 10px;">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <a href="{{ url('/') }}" style="display: inline-block; margin-top: 20px; padding: 12px 24px; background-color: #ff5722; color: #fff; text-decoration: none; border-radius: 6px; font-size: 16px; font-weight: 600;">
            Go to Homepage
        </a>
    </div>
</div>

@endsection
