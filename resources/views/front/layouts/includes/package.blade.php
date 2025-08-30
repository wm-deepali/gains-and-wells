   <style>
    .phone-input {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;
    }
    
    .error {
      color: red;
      font-size: 14px;
    }
    .success {
      color: green;
      font-size: 14px;
    }
  </style>
   <section class=" service02-about-section mb-30 ">
                <div class="" style="padding: 0px 30px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <!-- <h3 class="text-center">Take the step to</h3> -->
                                        
 

                                      <h2 class="title text-center">
  Customize Package for your <span style="color: orange !important;">Business</span> Solution
</h2>

                                    <div class="title-desc text-center">
                                        <p>Choose from the below give packages that suits your business requirements
Stay ahead among your competitors</p>
                                    </div>
                                </div><!-- section title end -->

                                <div class="slick_slider row mt-5"
                                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 3}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}' >
                                    

                    @foreach($packages as $package)
    <div class="col-lg-4">
        <div class="prt-pricing-plan pricing-recommended-plan">
            
            <div class="prt-p_table-head">
                <div class="prt-icon prt-icon_element-onlytxt">
                    <i class="flaticon-teamwork"></i>
                </div>
                <div class="prt-p_table-title">
                    <h3 style="line-height: 35px;">
                        <span style="font-size: 22px;">{{ $package->name }}</span><br>
                       @if($package->price_required === 'yes')
    <span style="font-size: 15px;">INR</span>
    <span style="font-size: 34px; font-weight: 800; color: #fff;">
        {{ number_format($package->offered_price, 2) }}
    </span>
@else
    <span style="font-size: 16px; font-weight: 600; color: #fff;">
        Contact for Price
    </span>
@endif

                    </h3>
                </div>
            </div>
            <div class="prt-p_table-body">
                <ul class="prt-p_table-features">
                    @foreach(json_decode($package->services, true) as $service)
                        <li>{{ $service }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="prt-p_table-footer1">
                 <button class="overlay-btn" onclick="openModal('{{ $package->id }}')">Register Now</button>


                 <a class="home-page-price-btn1" href="tel:+91 6291033761">
<i class="fa-solid fa-phone-volume"></i>

 
</a>

{{-- WhatsApp Button --}}
<a class="home-page-price-btn1" href="https://wa.me/+9162910 33761" target="_blank">
<i class="fa-brands fa-whatsapp"></i>
</a>
            </div>
            <p style="color: red; padding-left: 20px; font-size: 12px;margin-top: -10px;">*Terms & Conditions Apply</p>
        </div>
    </div>
 
@endforeach

                                   
                                   
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
@foreach($packages as $package)
  <div id="modal-{{ $package->id }}" class="custom-modal">
    <div class="custom-modal-content">
      <span class="close-btn" onclick="closeModal('{{ $package->id }}')">&times;</span>
              <section class="prt-row contact-us-contact-form-section clearfix">
          <div class="container-fluid">
            <div class="row g-0">
              
              <div class="col-lg-12">
                <div class="bg-base-grey spacing-25">
                  <div class="section-title style7">
                    <div class="title-header">
                      <h2 class="title" style="font-size:20px;line-height:27px">Have any question? Feel free to <span>Contact</span></h2>
                    </div>
                  </div>
                  <form action="{{ route('home.submit') }}" method="POST" class="contact_form clearfix pFrm" id="pFrm{{$package->id}}" data-id="{{$package->id}}">
                    @csrf
                     <div class="row">
                      <div class="col-md-12">  
                      <input type="hidden" id="pFrm{{$package->id}}res" value="0">
                       @php $pageData = App\Helpers\Helper::getCurrentPage(); @endphp
                 
                          <input type="hidden" name="p_id" id="contactFormModal"  value="{{ $pageData ?? "" }}">
                        <input type="hidden" name="offer_id" id="contactFormModal"  value="{{ $package->id }}">                
                        <input name="name" type="text" placeholder="Your Full Name" required>
                      </div>
                      <div class="col-md-12">
                        <input name="email" type="email" placeholder="Email Address" required>
                      </div>
                       <div class="col-md-12 phone-input" style="display:flex;">
                           
                        @php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); @endphp
                      <select id="country_code{{$package->id}}" data-id="{{$package->id}}" class="ccode codecountry" name="country_code" required style="width:48%;">
                        <option value="">Select Country Code</option>
                        @if(isset($phonecodes) && count($phonecodes)>0)
                        @foreach($phonecodes as $phonecode)
                        <option value="{{$phonecode->phonecode}}">{{$phonecode->name." (+".$phonecode->phonecode.")"}}</option>
                        @endforeach
                        @endif
                      </select>
                        <input type="tel" name="mobile" id="phoneNumber{{$package->id}}" placeholder="1234567890" maxlength="15" oninput="validatePhone(this)" style="width:50%;margin-left: 10px;" required/>

                        
                      </div>
                      <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                        <p id="verifiedBadge{{$package->id}}" style="color:green;display:none;">Verified</p>
                      <div class="col-12">
                    <input type="tel" name="mobile" id="mobIn{{$package->id}}" class="form-control" style="display:none;"/>
                        <input type="text" name="isValid" id="isValid_number{{$package->id}}" value="1" class="form-control" style="display:none;"/>
                        <div class="form-group mb-2" id="otpField{{$package->id}}" style="display: none;">
                            <input
                                type="text"
                                class="form-control"
                                id="potp{{$package->id}}"
                                name="otp"
                                placeholder="Enter OTP"
                                maxlength="6"
                            />
                        </div>
                        <button type="button" class="btn btn-primary mb-2" id="sendOtp-bt{{$package->id}}" onclick="sendPOTP({{ $package->id }})" style="display: none;">Send OTP</button>
                        <button type="button" class="btn btn-primary mb-2" id="verifyOtp-bt{{$package->id}}" style="display: none;" onclick="verifyPOTP({{ $package->id }})">Verify</button>
                        <button type="button" class="btn btn-primary mb-2" id="resendOtp-bt{{$package->id}}" onclick="sendPOTP({{ $package->id }})" style="display: none;">Resend OTP</button>
                        
                    </div>
                       <div class="col-md-12">
                        <input name="location" type="text" placeholder="location" required>
                      </div>
                           
                      <div class="col-md-12">
                        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                      </div>
                      <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                 <!-- Google Recaptcha -->
                                <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                            </div>
                           
                        </div>  
                      <div class="mt-4">
                        <button class="submit 
                        prt-btn prt-btn-size-md prt-btn-shape-round
                         prt-btn-style-fill prt-btn-color-skincolor" type="submit" onclick="validatePhoneNumber()">Submit Here</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>                        
            </div>
          </div>
        </section>
    </div>
  </div>
@endforeach
