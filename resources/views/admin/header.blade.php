<!-- fixed-top-->
<div class="row d-none">
    <!-- success message open -->
    <div class="col-10">
        @if(session()->get('success'))
        <div class="alert alert-info alert-dismissible fade in">
            <a href="javascript:void(0);" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session()->get('success') }}
        </div>
        @endif

        @if(session()->get('error'))
        <div class="alert alert-danger alert-dismissible fade in">
            <a href="javascript:void(0);" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> {{ session()->get('error') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <!-- success message close -->
</div>

<div id='cssmenu'>
    <ul class="pt-0">
        <li><a href="{{url('admin/dashboard')}}"> <i class="fa-solid fa-gauge"></i> Dashboard</a></li>

<li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Website Enquiries</a>
            <ul>
                 <li class=''><a href="{{ route('admin.manage-quotation.index') }}">Quotation Enquiries</a> </li>
                 <li> <a href="{{ route('admin.manage-offersdetails') }}">Offer Enquiries</a></li>
                 <li> <a href="{{ route('admin.manage-packagedeatils') }}">Package Enquiries</a></li>
                 <li class=''><a href="{{ route('admin.manage-servicers.index') }}">Business Enquiries</a> </li>
               
            </ul>
        </li>








        <li><a href="{{ route('admin.manage-faq.index') }}"> <i class="fa-solid fa-gear"></i> FAQs</a></li>

       

        <li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Blogs</a>
            <ul>
                <li class=''><a href="{{ route('admin.manage-blog-category.index') }}">Manage Blog Category</a> </li>
                <li class=''><a href="{{ route('admin.manage-blog.index') }}">Manage Blog</a> </li>
               
            </ul>
        </li>

        
     <li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Cost Calculator</a>
            <ul>
                <li class=''><a href="{{ route('admin.manage-business.index') }}">Manage Business Activities</a> </li>
                <li class=''><a href="{{ route('admin.manage-visa.index') }}">Manage Visa Cost</a> </li>
               <!--  <li class=''><a href="{{ route('admin.manage-quotation.index') }}">Quotation Enquiries</a> </li> -->
               
            </ul>
        </li>

         <li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Offers</a>
            <ul>
               
                <li class=''><a href="{{ route('admin.manage-offers.index') }}">Manage Offers</a> </li>
            <!--   <li> <a href="{{ route('admin.manage-offersdetails') }}">Offer Enquiries</a></li> -->

                
                
               
            </ul>
        </li>
        
        <li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Packages</a>
            <ul>
               
                <li class=''><a href="{{ route('admin.manage-packages.index') }}">Manage Packages</a> </li>
              
 <!--<li> <a href="https://ashtonwell.com/admin/manage-packagedeatils">Package Enquries</a></li> -->
                
                
               
            </ul>
        </li>
        <!--<li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Other Enquiries</a>
            <ul>
               
                <li class=''><a href="{{ route('admin.manage-servicers.index') }}">Business Enquiries</a> </li>
              
 
                
                
               
            </ul>
        </li> -->
        
         <li><a href='#'>
                <i class="fa-brands fa-blogger"></i>Contact us</a>
            <ul>
               
                <li class=''><a href="{{ route('admin.manage-contact.index') }}">Manage contact</a> </li>
              

                
                
               
            </ul>
        </li>

        

        

        
        <li><a href='#'> <i class="fa-solid fa-gears"></i> Settings</a>
            <ul>
                <li><a href="{{ route('admin.manage-pages.index') }}"> Pages</a></li>
                <li class=''><a href="{{ route('admin.manage-country.index') }}">Country List</a> </li>
                <li class=''><a href="{{ route('admin.manage-state.index') }}">State List</a> </li>
                <li class=''><a href="{{ route('admin.manage-city.index') }}">City List</a> </li>
                <li class=''><a href="{{ route('admin.manage-page-seo.index') }}">Manage SEO Meta</a> </li>
                <li><a href="{{ route('admin.manage-sections.index') }}"> Manage Sections</a></li>
            </ul>
        </li> 

        

    </ul>
</div>