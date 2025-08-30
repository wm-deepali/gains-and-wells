<div class="col-md-5 offset-md-1">
    <div class="wptb-appointment-form-one">
        <div class="wptb-form--wrapper">
           <form class="wptb-form" id="bookfrm" method="POST" action="{{ route('submit.package') }}">
    @csrf

    <!-- service_id -->
    <select name="service_id" class="form-control" required>
        <option value="">Select Services</option>
        @foreach(App\Helpers\Helper::getServices() as $service)
            <option value="{{ $service->id }}">{{ $service->service }}</option>
        @endforeach
    </select>
 @php $pageData = App\Helpers\Helper::getCurrentPage(); @endphp
                    <input type="hidden" name="page_id" value="{{ $pageData ?? '' }}">
                    <input type="hidden" id="bookfrmres" value="0">
    <!-- full_name -->
     <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" name="full_name" id="name" class="form-control" placeholder="Full Name*" required>
                            </div>
                            <div class="text-danger" id="name-err"></div>
                        </div>
    <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email ID" required>
                            </div>
                            <div class="text-danger" id="email-err"></div>
                        </div>
    
                        <div class="col-md-12 col-lg-12 mb-4" style="display:flex;">
                            <div class="form-group"  style="width:34%;border-radius:3px;margin-top: 0px;">
                             @php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); @endphp
                              <select id="faq_country_code" name="country_code" class="codecountry" required style="border-radius:0px;margin-top:7px;    background: border-box;border:none;
    border-bottom: 1px solid #fff;
    color: #fff;">
                                <option value="">Select Country Code</option>
                               @foreach($phonecodes as $phonecode)
  <option value="{{ $phonecode->phonecode }}"
    {{ $phonecode->phonecode == '91' ? 'selected' : '' }}>
    {{ $phonecode->name . ' (+' . $phonecode->phonecode . ')' }}
  </option>
@endforeach

                              </select>
                            </div>  
                            <div class="form-group" style="width:65%;margin-left: 10px;">
                                <input type="mobile" name="mobile" id="faq_phone_number"
                                 class="form-control" placeholder="mobile" oninput="validatePhone(this)"  required>
                            </div>
                            <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                            <p id="faq_verified_badge" style="color:green;display:none;">Verified</p>
                        </div>
                        
                    <div class="col-12">
                        <input type="tel" name="mobile" id="faq_mob_in" class="form-control" style="display:none;"/>
                        <input type="text" name="isValid" id="faq_is_valid_number" value="1" class="form-control" style="display:none;"/>
                        <div class="form-group mb-2" id="faq_otp_field" style="display: none;">
                            <input
                                type="text"
                                class="form-control"
                                id="faq_otp"
                                name="otp"
                                placeholder="Enter OTP"
                                maxlength="6"
                            />
                        </div>
                        <button type="button" class="btn btn-primary mb-2" id="faq-send-otp-bt" onclick="sendfaqOTP()" style="display: none;">Send OTP</button>
                        <button type="button" class="btn btn-primary mb-2" id="faq-verify-otp-bt" style="display: none;" onclick="verifyfaqOTP()">Verify</button>
                        <button type="button" class="btn btn-primary mb-2" id="faq-resend-otp-bt" onclick="sendfaqOTP()" style="display: none;">Resend OTP</button>
                        
                    </div>
   
   <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" name="location" id="location"
                                 class="form-control" placeholder="Location" required>
                            </div>
                            <div class="text-danger" id="location-err"></div>
                        </div>

   <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <!-- details -->
    <input type="text" name="details" placeholder="Enter Detail" required>
                            </div>
                            <div class="text-danger" id="details-err"></div>
                        </div>

   <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <!-- details -->
    <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                            </div>
                            
                        </div>

    <!-- submit -->
    <button type="submit" class="bookappbutton" disabled>Make Appointment</button>
</form>


            <div class="wptb-form--bottom">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <h6 class="wptb-item--subtitle">Or just Give us a call</h6>
                        <h1 class="wptb-item--title"> <span>+91-62910 33761 </span></h1>
                        <p class="wptb-item--description"> <span>The Support Centre is available 24/7</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('after-scripts')
<script>
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
    $(document).on('change', '#service_id', function(event) {
        
        let service_id = $(this).val();
        $.ajax({
            url: `{{ URL::to('fetch-subservice/${service_id}') }}`,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    $('.service_div').after(result.html);
                } else {
                   
                }
            },
        });
        
        
        $(document).on("click", "#bookappoint", function(event) {
event.preventDefault()
            $(this).attr('disabled', true);
            $('#message-succ').html('');
            $('#service_id-err').html('');
            $('#name-err').html('');
            $('#email-err').html('');
            $('#contact-err').html('');
            $('#country_id-err').html('');
            $('#details-err').html('');
            
            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('service_id', $('#service_id').val());
            formData.append('sub_service_id', (typeof $('#sub_service_id').val() == 'undefined') ? '' : $('#sub_service_id').val());
            
            formData.append('name', $('#name').val());
            formData.append('email', $('#email').val());
            formData.append('contact', $('#contact').val());
            formData.append('country_id', $('#country_id').val());
            formData.append('details', $('#details').val());

            $.ajax({
                url: `{{ URL::to('book-appointments') }}`,
                type: 'POST',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                context: this,
                success: function(result) {
                    if (result.success) {
                        document.getElementById("bookfrm").reset();

                        $("#bookappoint").attr('disabled', false);
                        $('#message-succ').html(result.msgText);
                        $('#message-succ').delay(5000).fadeOut();
                        setTimeout((function() {
                          window.location.reload();
                        }), 5000);
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

        
    });
        
</script>
@endpush