<!-- page-title -->
<div class="prt-titlebar-wrapper prt-bg about-img">
    <div class="prt-titlebar-wrapper-bg-layer prt-bg-layer"></div>
    <div class="prt-titlebar-wrapper-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="prt-page-title-row-heading">
                        <div class="page-title-heading">
                            <h2 class="title">@yield('pagetitle')</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <i class="flaticon-home"></i>
                            <span>
                                <a title="Homepage" href="{{route('home')}}">Home</a>
                            </span>
                            <div class="prt-sep"> - </div>
                            <span>@yield('pagetitle')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<!-- page-title end -->