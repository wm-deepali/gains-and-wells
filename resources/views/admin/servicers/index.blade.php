@include('admin.top-header')
<div class="main-section">
    <style type="text/css">
    .read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
    }
</style>
@include('admin.header')
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Enquiries</li>
<li class="breadcrumb-item active">Business Enquries 
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">

<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
        <tr>
                
                 <th>S.N.</th>
                 <th>Page Name </th>
                 <th>Service Opted</th>
                 <th> Customer</th>
                 <th>Location</th>
                 <th>Detail</th>
                <th>Action</th>
        </tr>
</thead>
<tbody> @php $i=1; @endphp
       
       
        @foreach ($offer as $business)
        <tr>
            <td>{{ $i++ }}</td>
            
   <td> {{ $business->page->title ?? 'NA' }}  </td>
   
     <td>{{ $business->service->service ?? 'NA' }}</td>
     
         <td>{{ $business->full_name }} </br>{{ $business->email  }} </br> {{ $business->mobile  }}
</td>
<td>{{ $business->location  }}</td>
<td>

@if(strlen($business->details) > 50)
            {{substr($business->details,0,50)}}
            <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
            <span class="read-more-content"> {{substr($business->details,50,strlen($business->details))}} 
            <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
            @else
            {{$business->details}}
            @endif
</td>
            <td class="text-truncate">
               
                <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $business->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    
</tbody>
</table>

</div>
</div>
</div>
</div>
<div id="state-modal" class="modal fade" role="dialog"></div>
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
                    url: `{{ URL::to('admin/manage-servicers/${id}') }}`,
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
       
        $(document).on("click", ".add-state", function(event) {
            
            $.ajax({
                url: "{{ URL::to('admin/manage-packages/create') }}",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
                    } else {

                    }
                }
            });
        });

        $(document).on("click", ".edit-state", function(event) {
            let id = $(this).attr('state_id');
            $.ajax({
                url: `{{ URL::to('admin/manage-packages/${id}/edit') }}`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
                    } else {
                        toastr.error('error encountered ' + result.msgText);
                    }
                },
                error: function(error) {
                    toastr.error('error encountered ' + error.statusText);
                }
            });
        });
    });
</script>
<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>