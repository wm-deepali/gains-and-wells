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
<li class="breadcrumb-item active">Manage Events
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-event btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<th>Date &amp; Time</th>
<th>Image</th>
<th>Event Name</th>
<th>Event Date & Time</th>
<th>Venue</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($events) && count($events) > 0)
@foreach ($events as $event)
<tr>
<td>{{ $event->created_at }}</td>
<td>
@if ($event->image!=null)
<img src="{{ URL::asset('storage/events/' . $event->image) }}" class="img-fluid" style="height:50px;">
@else
NA
@endif   
</td>
<td>{{ $event->event_name }}</td>
<td>{{ $event->event_start_date }} - {{ $event->event_end_date }} <br/> {{$event->event_time}}</td>
<td>{{ $event->event_venue }}</td>
<td>{{ $event->status }}</td>
<td class="text-truncate">
<a href="{{ URL::to('admin/manage-event/show/'.$event->id) }}" class="text-dark mr-2" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
<a href="javascript:void(0)" class="edit-event text-dark mr-2" event_id="{{ $event->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $event->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>


</div>


</div>
</div>
<div id="event-modal" class="modal fade" role="dialog">
</div>
</div>
@include('admin.footer')
<script>
function deleteConfirmation(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
        $.ajax({
            url: `{{ URL::to('admin/manage-event/${id}') }}`,
            type: "DELETE",
            dataType: "json",
            success: function(result) {
                if (result.success) {
                    Swal.fire(
                    'Deleted!',
                    'success'
                    );
                    setTimeout(function() {
                        location.reload();
                    }, 400);
                } else {
                    Swal.fire(result.msgText);
                }
            }
        });

    }
})
};
$(document).ready(function() {
    $(document).on('keyup', "#event_name", function(event) {
        let title = $(this).val();
        let url = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $("#canonical_url").val(url);
        $("#slug").val(url);
    })

    $(document).on("click", ".add-event", function(event) {
        $.ajax({
            url: "{{ URL::to('admin/manage-event/create') }}",
            type: "GET",
            dataType: "json",
            success: function(result) {
                if (result.success) {
                    $("#event-modal").html(result.html);
                    $("#event-modal").modal('show');
                } else {

                }
            }
        });
    });

    $(document).on("click", ".add-event-btn", function(event) {
              for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
        $(this).attr('disabled', true);
        $('#event_name-err').html('');
        $('#slug-err').html('');
        $('#event_venue-err').html('');
        $('#event_start_date-err').html('');
        $('#event_end_date-err').html('');
        $('#event_time-err').html('');
        
        $('#description-err').html('');
        $('#image_alt-err').html('');
        $('#image-err').html('');
        $('#meta_title-err').html('');
        $('#meta_keyword-err').html('');
        $('#meta_description-err').html('');
        $('#status-err').html('');
        let formData = new FormData();
        formData.append('event_name', $('#event_name').val());
        formData.append('slug', $('#slug').val());
        formData.append('event_venue', $('#event_venue').val());
        formData.append('event_start_date', $('#event_start_date').val());
        formData.append('event_end_date', $('#event_end_date').val());
        formData.append('event_time', $('#event_time').val());
        
        formData.append('description', $('#description').val());
        formData.append('meta_title', $('#meta_title').val());
        formData.append('image_alt', $('#image_alt').val());
        formData.append('canonical_url', $('#canonical_url').val());
        
        formData.append('meta_keyword', $('#meta_keyword').val());
        formData.append('meta_description', $('#meta_description').val());
        formData.append('status', $('#status').val());
        formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
        $.ajax({
            url: "{{ URL::to('admin/manage-event') }}",
            type: 'POST',
            processData: false,
            contentType: false,
            dataType: 'json',
            data: formData,
            context: this,
            success: function(result) {
                if (result.success) {
                    location.reload();
                } else {
                    $(this).attr('disabled', false);
                    if (result.code == 422) {
                        for (const key in result.errors) {
                            $(`#${key}-err`).html(result.errors[key][0]);
                        }
                    } else {
                        console.log(result);
                    }
                }
            }
        });
    });

    $(document).on("click", ".edit-event", function(event) {
        let id = $(this).attr('event_id');
        $.ajax({
            url: `{{ URL::to('admin/manage-event/${id}/edit') }}`,
            type: "get",
            dataType: "json",
            success: function(result) 
            {
                if (result.success) {
                    $("#event-modal").html(result.html);
                    $("#event-modal").modal('show');
                } else {
                    toastr.error('error encountered ' + result.msgText);
                }
            },
            error: function(error) {
            toastr.error('error encountered ' + error.statusText);
            }
        });
    });

    $(document).on("click", ".update-event-btn", function(event) {
        $(this).attr('disabled', true);
              for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
        $('#event_name-err').html('');
        $('#slug-err').html('');
        $('#event_venue-err').html('');
        $('#event_start_date-err').html('');
        $('#event_end_date-err').html('');
        $('#event_time-err').html('');
        $('#canonical_url-err').html('');
        
        $('#description-err').html('');
        $('#image_alt-err').html('');
        $('#image-err').html('');
        $('#meta_title-err').html('');
        $('#meta_keyword-err').html('');
        $('#meta_description-err').html('');
        $('#status-err').html('');
        let formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('event_name', $('#event_name').val());
        formData.append('slug', $('#slug').val());
        formData.append('event_venue', $('#event_venue').val());
        formData.append('event_start_date', $('#event_start_date').val());
        formData.append('event_end_date', $('#event_end_date').val());
        formData.append('event_time', $('#event_time').val());
        formData.append('canonical_url', $('#canonical_url').val());
        
        formData.append('description', $('#description').val());
        formData.append('meta_title', $('#meta_title').val());
        formData.append('image_alt', $('#image_alt').val());
       
        formData.append('meta_keyword', $('#meta_keyword').val());
        formData.append('meta_description', $('#meta_description').val());
        formData.append('status', $('#status').val());
        formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
        let event_id = $(this).attr('event_id');
        $.ajax({
            url: `{{ URL::to('admin/manage-event/${event_id}') }}`,
            type: 'POST',
            processData: false,
            contentType: false,
            dataType: 'json',
            data: formData,
            context: this,
            success: function(result) 
            {
                if (result.success) 
                {
                    location.reload();
                } else {
                    $(this).attr('disabled', false);
                    if (result.code == 422) {
                        for (const key in result.errors) 
                        {
                            $(`#${key}-err`).html(result.errors[key][0]);
                        }
                    } else {
                        console.log(result);
                    }
                }
            }
        });
    });
});
</script>
