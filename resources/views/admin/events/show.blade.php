@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Events</li>
                        <li class="breadcrumb-item active">View Event
                        </li>
                    </ol>
                </div>
            </div>
            <div class="table-responsive">
                <p><strong>Event Name: </strong>{{$event->event_name}}</p>
                <p><strong>Slug: </strong>{{$event->slug}}</p>
                <p><strong>Event Venue: </strong>{{$event->event_venue}}</p>
                <p><strong>Event Start Date: </strong>{{$event->event_start_date}}</p>
                <p><strong>Event End Date: </strong>{{$event->event_end_date}}</p>
                <p><strong>Event Time: </strong>{{$event->event_time}}</p>
               
                <p><strong>Event Description: </strong>@php echo $event->description; @endphp</p>
                <p><strong>Event Image: </strong>
                @if ($event->image!=null)
                <img src="{{ URL::asset('storage/events/' . $event->image) }}" class="img-fluid" style="height:50px;">
                @else
                NA
                @endif</p>
                <p><strong>Image Alt Tag : </strong>{{$event->image_alt}}</p>
                <p><strong>Event Thumb Image: </strong>
                @if ($event->thumb_image!=null)
                <img src="{{ URL::asset('storage/events/thumb/' . $event->thumb_image) }}" class="img-fluid" style="height:50px;">
                @else
                NA
                @endif 
                </p>
               
                <p><strong>Meta Title: </strong>{{$event->meta_title}}</p>
                <p><strong>Meta Keyword: </strong>{{$event->meta_keyword}}</p>
                <p><strong>Meta Description: </strong>{{$event->meta_description}}</p>
                <p><strong>Status: </strong>{{$event->status}}</p>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')