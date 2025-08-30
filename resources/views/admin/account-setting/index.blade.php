@include('admin.header')
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-2">
                <h3 class="content-header-title mb-0">Account</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Account Setting</li>
                            <li class="breadcrumb-item active">Account Setting
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
         <h1> account setting</h1>
    </div>
</div>
@include('admin.footer')

