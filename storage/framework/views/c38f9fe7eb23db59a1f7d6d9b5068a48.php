<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(asset('assets/js/jquery-migrate-3.4.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-validate.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.prettyPhoto.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-waypoints.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/numinate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/imagesloaded.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-isotope.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.twentytwenty.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/circle-progress.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js
    "></script>
    

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Revolution Slider -->
    <script src="<?php echo e(asset('assets/revolution/js/revolution.tools.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/revolution/js/rs6.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/revolution/js/slider.js')); ?>"></script>
    <script async src="https://www.google.com/recaptcha/api.js"></script>
      <script src="https://unpkg.com/libphonenumber-js/bundle/libphonenumber-max.js"></script>

    <!-- Javascript end-->
    <script>
        document.querySelectorAll('.accordion-title').forEach(item => {
            item.addEventListener('click', () => {
                const content = item.nextElementSibling;
                const icon = item.querySelector('i');
    
                item.classList.toggle('active');
                content.classList.toggle('active');
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const progressBars = document.querySelectorAll(".radial-progress");
        
          progressBars.forEach((svg) => {
            const percent = parseFloat(svg.getAttribute("data-countervalue"));
            const circle = svg.querySelector(".bar--animated");
            const radius = circle.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            const offset = circumference - (percent / 100) * circumference;
        
            circle.style.strokeDasharray = circumference;
            circle.style.strokeDashoffset = offset;
        
            const text = svg.querySelector("text.countervalue");
            if (text) {
              text.textContent = percent + "%";
            }
          });
        });
        </script>
        
        <script>
            // document.getElementsByClassName('oferfrm').addEventListener('submit', function(e) {
            //     var response = grecaptcha.getResponse();
            //     if (response.length === 0) {
            //         e.preventDefault();
            //         alert("Please complete the reCAPTCHA.");
            //     }
            // }); 
        </script>
        <script>
               const countryRules = {
                  '+971': { country: 'UAE', minLen: 9, maxLen: 9, regex: /^[2-9]\d{8}$/ },
                  '+91':  { country: 'India', minLen: 10, maxLen: 10, regex: /^[6-9]\d{9}$/ },
                  '+92':  { country: 'Pakistan', minLen: 10, maxLen: 10, regex: /^3\d{9}$/ },
                  '+880': { country: 'Bangladesh', minLen: 10, maxLen: 10, regex: /^1[3-9]\d{8}$/ },
                  '+1':   { country: 'USA/Canada', minLen: 10, maxLen: 10, regex: /^\d{10}$/ },
                  '+44':  { country: 'United Kingdom', minLen: 10, maxLen: 10, regex: /^7\d{9}$/ },
                  '+7':   { country: 'Russia', minLen: 10, maxLen: 10, regex: /^\d{10}$/ },
                  '+86':  { country: 'China', minLen: 11, maxLen: 11, regex: /^1[3-9]\d{9}$/ },
                  '+98':  { country: 'Iran', minLen: 10, maxLen: 10, regex: /^9\d{9}$/ },
                  '+20':  { country: 'Egypt', minLen: 10, maxLen: 10, regex: /^1[0-2,5]\d{8}$/ },
                  '+49':  { country: 'Germany', minLen: 10, maxLen: 11, regex: /^\d{10,11}$/ },
                  '+33':  { country: 'France', minLen: 9, maxLen: 9, regex: /^[67]\d{8}$/ },
                  '+90':  { country: 'Turkey', minLen: 10, maxLen: 10, regex: /^5\d{9}$/ },
                  '+31':  { country: 'Netherlands', minLen: 9, maxLen: 9, regex: /^6\d{8}$/ },
                  '+966': { country: 'Saudi Arabia', minLen: 9, maxLen: 9, regex: /^5\d{8}$/ },
                  '+968': { country: 'Oman', minLen: 8, maxLen: 8, regex: /^9[1-9]\d{6}$/ },
                  '+962': { country: 'Jordan', minLen: 9, maxLen: 9, regex: /^7[7-9]\d{7}$/ },
                  '+965': { country: 'Kuwait', minLen: 8, maxLen: 8, regex: /^[569]\d{7}$/ },
                };
                
            function validatePhone(el) {
                $('.mobile-error').css('color', 'red')
                const input = $(el).val().trim();
                
                const formId = $(el).closest('form').attr('id');
                const previousValue = $('#'+formId).find('.codecountry').val().trim();
                
                 const errorDiv = $('.mobile-error');
                const responsefldId = formId+"res";
                if(previousValue =="")
                {
                    alert('please select country code first.');
                    $('#'+responsefldId).val('0');
                }
                else
                {
                    
                    const numbermob = "+"+previousValue+""+input;
                   
                    if(!numbermob.startsWith('+')) 
                    {
                        $('#'+responsefldId).val('0');
                            errorDiv.text('Invalid mobile number format');
                            setTimeout(function () {
                                errorDiv.text(''); // Optional: clear the text too
                            }, 15000);
                            return false;
                    }

                      for (const code in countryRules) {
                        if (numbermob.startsWith(code)) {
                          const rule = countryRules[code];
                          const localNumber = numbermob.slice(code.length);
                    
                          // Check length
                          if (localNumber.length < rule.minLen || localNumber.length > rule.maxLen) {
                                $('#'+responsefldId).val('0');
                                errorDiv.text('Invalid mobile number length');
                                setTimeout(function () {
                                    errorDiv.text(''); // Optional: clear the text too
                                }, 15000);
                                return false;
                          }
                    
                          // Check pattern
                          
                          if(rule.regex.test(localNumber))
                          {
                              errorDiv.text('Valid');
                                $('#'+responsefldId).val('1');
                                errorDiv.css('color', 'green')
                                setTimeout(function () {
                                    errorDiv.text(''); // Optional: clear the text too
                                }, 15000);
                                return true;
                          }
                          else
                          {
                              $('#'+responsefldId).val('0');
                                errorDiv.text('Invalid mobile number');
                                setTimeout(function () {
                                    errorDiv.text(''); // Optional: clear the text too
                                }, 15000);
                                return false;
                          }
                           
                          
                        }
                      }
                      
                     $('#'+responsefldId).val('0');
                                errorDiv.text('Invalid mobile number');
                                setTimeout(function () {
                                    errorDiv.text(''); // Optional: clear the text too
                                }, 15000);
                                return false;
                      

                   
                   
                   
                   console.log(numbermob);
                   
                }
                    //  try {
                    //     // Try parsing with country code (international)
                    //     let phoneNumber;
                    //     if(numbermob.startsWith('+') && previousValue == '91')
                    //     {
                    //         phoneNumber = libphonenumber.parsePhoneNumber(numbermob, 'IN');
                    //     }
                    //   else if (numbermob.startsWith('+')) {
                    //       phoneNumber = libphonenumber.parsePhoneNumber(numbermob);
                    //     } else {
                          
                    //       phoneNumber = libphonenumber.parsePhoneNumber(numbermob, 'US');
                    //     }
                
                    //     if (phoneNumber.isValid() && phoneNumber.getType() === 'MOBILE') {
                    //         errorDiv.text('Valid');
                    //         $('#'+responsefldId).val('1');
                    //         errorDiv.css('color', 'green')
                    //         setTimeout(function () {
                    //             errorDiv.text(''); // Optional: clear the text too
                    //         }, 5000);
                    //         return true;
                    //     } else {
                           
                    //         $('#'+responsefldId).val('0');
                    //         errorDiv.text('Invalid mobile number');
                    //         setTimeout(function () {
                    //             errorDiv.text(''); // Optional: clear the text too
                    //         }, 5000);
                    //         return false;
                    //     }
                    //   } catch (err) {
                          
                    //       $('#'+responsefldId).val('0');
                    //       errorDiv.text('Invalid mobile number format');
                    //       setTimeout(function () {
                    //             errorDiv.text(''); // Optional: clear the text too
                    //         }, 5000);
                    //         return false;
                        
                    //   }
                
                
                
            }
        </script>
        <script>
        $('#callfrm').submit(function(event) {
            
            if(document.getElementById('callfrmres').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('is_valid_number').value == '0') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
            
        });
        $('#pkgfrm').submit(function(event) {
            
            if(document.getElementById('callfrmres').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('pkg_is_valid_number').value == '0') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
        });
        $('#bookfrm').submit(function(event) {
            
            if(document.getElementById('bookfrmres').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('faq_is_valid_number').value == '0') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
        });
        $('#contact-form').submit(function(event) {
            
             if(document.getElementById('contact-formres').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('quote_is_valid_number').value == '0') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
        });
         $('.oferfrm').submit(function(event) {
            var id = $(this).data('id'); 
            if(document.getElementById('oferfrm'+id+'res').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('isValidNumber'+id).value == '0') {
                
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
            
         });
         
          $('.pFrm').submit(function(event) {
            var id = $(this).data('id'); 
            if(document.getElementById('pFrm'+id+'res').value == '0')
            {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Mobile Number',
                    text: 'Please enter valid mobile number'
                });
            }
            else if (document.getElementById('isValid_number'+id).value == '0') {
                
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Phone Number Not Verified',
                    text: 'Please verify your phone number before submitting the form.'
                });
            }
            
         });
        function sendOTP() {
            var mobileNumber = document.getElementById('phone_number').value;
            document.getElementById('mob_in').value = mobileNumber;
            document.getElementById('otp').value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('otp_field').style.display = 'block';
                    document.getElementById('send-otp-bt').style.display = 'none';
                    document.getElementById('resend-otp-bt').style.display = 'block';
                    document.getElementById('verify-otp-bt').style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('otp_field').style.display = 'none';
                    document.getElementById('send-otp-bt').style.display = 'block';
                    document.getElementById('resend-otp-bt').style.display = 'none';
                    document.getElementById('verify-otp-bt').style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyOTP() {
            var otp = $('#otp').val();
            var mobileNumber = document.getElementById('phone_number').value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('is_valid_number').value = '1';
                        document.getElementById('phone_number').classList.add('verified');
                        document.getElementById('otp_field').style.display = 'none';
                        document.getElementById('send-otp-bt').style.display = 'none';
                        document.getElementById('resend-otp-bt').style.display = 'none';
                        document.getElementById('verify-otp-bt').style.display = 'none';
                        document.getElementById('phone_number').disabled = true;
                        document.getElementById('verified_badge').style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        function sendPkgOTP() {
            var mobileNumber = document.getElementById('pkg_phone_number').value;
            document.getElementById('pkg_mob_in').value = mobileNumber;
            document.getElementById('pkg_otp').value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('pkg_otp_field').style.display = 'block';
                    document.getElementById('pkg-send-otp-bt').style.display = 'none';
                    document.getElementById('pkg-resend-otp-bt').style.display = 'block';
                    document.getElementById('pkg-verify-otp-bt').style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('pkg_otp_field').style.display = 'none';
                    document.getElementById('pkg-send-otp-bt').style.display = 'block';
                    document.getElementById('pkg-resend-otp-bt').style.display = 'none';
                    document.getElementById('pkg-verify-otp-bt').style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyPkgOTP() {
            var otp = $('#pkg_otp').val();
            var mobileNumber = document.getElementById('pkg_phone_number').value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('pkg_is_valid_number').value = '1';
                        document.getElementById('pkg_phone_number').classList.add('verified');
                        document.getElementById('pkg_otp_field').style.display = 'none';
                        document.getElementById('pkg-send-otp-bt').style.display = 'none';
                        document.getElementById('pkg-resend-otp-bt').style.display = 'none';
                        document.getElementById('pkg-verify-otp-bt').style.display = 'none';
                        document.getElementById('pkg_phone_number').disabled = true;
                        document.getElementById('pkg_verified_badge').style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        function sendPOTP(id) {
            
            var mobileNumber = document.getElementById('phoneNumber'+id).value;
            document.getElementById('mobIn'+id).value = mobileNumber;
             document.getElementById('potp').value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('otpField'+id).style.display = 'block';
                    document.getElementById('sendOtp-bt'+id).style.display = 'none';
                    document.getElementById('resendOtp-bt'+id).style.display = 'block';
                    document.getElementById('verifyOtp-bt'+id).style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('otpField'+id).style.display = 'none';
                    document.getElementById('sendOtp-bt'+id).style.display = 'block';
                    document.getElementById('resendOtp-bt'+id).style.display = 'none';
                    document.getElementById('verifyOtp-bt'+id).style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyPOTP(id) {
            var otp = $('#potp'+id).val();
            var mobileNumber = document.getElementById('phoneNumber'+id).value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('isValid_number'+id).value = '1';
                        document.getElementById('phoneNumber'+id).classList.add('verified');
                        document.getElementById('otpField'+id).style.display = 'none';
                        document.getElementById('sendOtp-bt'+id).style.display = 'none';
                        document.getElementById('resendOtp-bt'+id).style.display = 'none';
                        document.getElementById('verifyOtp-bt'+id).style.display = 'none';
                        document.getElementById('phoneNumber'+id).disabled = true;
                        document.getElementById('verifiedBadge'+id).style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        
        function sendOffOTP(id) {
            
            var mobileNumber = document.getElementById('mobileNumber'+id).value;
            document.getElementById('mobileIn'+id).value = mobileNumber;
            document.getElementById('otp'+id).value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('otpFld'+id).style.display = 'block';
                    document.getElementById('sendOtpbt'+id).style.display = 'none';
                    document.getElementById('resendOtpbt'+id).style.display = 'block';
                    document.getElementById('verifyOtpbt'+id).style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('otpFld'+id).style.display = 'none';
                    document.getElementById('sendOtpbt'+id).style.display = 'block';
                    document.getElementById('resendOtpbt'+id).style.display = 'none';
                    document.getElementById('verifyOtpbt'+id).style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyOffOTP(id) {
            var otp = $('#otp'+id).val();
            var mobileNumber = document.getElementById('mobileNumber'+id).value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('isValidNumber'+id).value = '1';
                        document.getElementById('mobileNumber'+id).classList.add('verified');
                        document.getElementById('otpFld'+id).style.display = 'none';
                        document.getElementById('sendOtpbt'+id).style.display = 'none';
                        document.getElementById('resendOtpbt'+id).style.display = 'none';
                        document.getElementById('verifyOtpbt'+id).style.display = 'none';
                        document.getElementById('mobileNumber'+id).disabled = true;
                        document.getElementById('verifiedBadge'+id).style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
            
        function sendquoteOTP() {
            var mobileNumber = document.getElementById('quote_phone_number').value;
            document.getElementById('quote_mob_in').value = mobileNumber;
            document.getElementById('quote_otp').value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('quote_otp_field').style.display = 'block';
                    document.getElementById('quote-send-otp-bt').style.display = 'none';
                    document.getElementById('quote-resend-otp-bt').style.display = 'inline-block';
                    document.getElementById('quote-verify-otp-bt').style.display = 'inline-block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('quote_otp_field').style.display = 'none';
                    document.getElementById('quote-send-otp-bt').style.display = 'inline-block';
                    document.getElementById('quote-resend-otp-bt').style.display = 'none';
                    document.getElementById('quote-verify-otp-bt').style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyquoteOTP() {
            var otp = $('#quote_otp').val();
            var mobileNumber = document.getElementById('quote_phone_number').value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('quote_is_valid_number').value = '1';
                        document.getElementById('quote_phone_number').classList.add('verified');
                        document.getElementById('quote_otp_field').style.display = 'none';
                        document.getElementById('quote-send-otp-bt').style.display = 'none';
                        document.getElementById('quote-resend-otp-bt').style.display = 'none';
                        document.getElementById('quote-verify-otp-bt').style.display = 'none';
                        document.getElementById('quote_phone_number').disabled = true;
                        document.getElementById('quote_verified_badge').style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } 
        
        
        
        function sendfaqOTP() {
            var mobileNumber = document.getElementById('faq_phone_number').value;
            document.getElementById('faq_mob_in').value = mobileNumber;
            document.getElementById('faq_otp').value = "";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('faq_otp_field').style.display = 'block';
                    document.getElementById('faq-send-otp-bt').style.display = 'none';
                    document.getElementById('faq-resend-otp-bt').style.display = 'block';
                    document.getElementById('faq-verify-otp-bt').style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('faq_otp_field').style.display = 'none';
                    document.getElementById('faq-send-otp-bt').style.display = 'block';
                    document.getElementById('faq-resend-otp-bt').style.display = 'none';
                    document.getElementById('faq-verify-otp-bt').style.display = 'none';
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please retry after sometime.."
                    });
                }
            }).fail(function(response) {
                // Handle server-side validation errors
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.responseJSON.error
                });
            });
        }
        function verifyfaqOTP() {
            var otp = $('#faq_otp').val();
            var mobileNumber = document.getElementById('faq_phone_number').value;
            $.ajax({
                url: '<?php echo e(route("verifyOTP")); ?>',
                type: 'POST',
                data: {
                    otp: otp,
                    mobile: mobileNumber,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(data) {
                    if (data.success) {
                        document.getElementById('faq_is_valid_number').value = '1';
                        document.getElementById('faq_phone_number').classList.add('verified');
                        document.getElementById('faq_otp_field').style.display = 'none';
                        document.getElementById('faq-send-otp-bt').style.display = 'none';
                        document.getElementById('faq-resend-otp-bt').style.display = 'none';
                        document.getElementById('faq-verify-otp-bt').style.display = 'none';
                        document.getElementById('faq_phone_number').disabled = true;
                        document.getElementById('faq_verified_badge').style.display = 'block';
                        Swal.fire({
                            title: "OTP Verified!",
                            icon: "success"
                            });
                    } else {
                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You entered incorrect otp.."
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        $(document).ready(function() {
            $("#country_code").on("change", function() {
                var code = $(this).val();
                
                if(code == '91')
                {
                    $("#mob_in").prop("disabled", false);
                    $('#is_valid_number').val('0');
                    $('#send-otp-bt').css('display', 'block');
                }
                else
                {
                    $("#mob_in").prop("disabled", true);
                    $('#is_valid_number').val('1');
                    $('#send-otp-bt').css('display', 'none');
                    $('#resend-otp-bt').css('display', 'none');
                    $('#verify-otp-bt').css('display', 'none');
                    $('#otp_field').css('display', 'none');
                }
            });
            $("#faq_country_code").on("change", function() {
                var code = $(this).val();
                
                if(code == '91')
                {
                    $("#faq_mob_in").prop("disabled", false);
                    $('#faq_is_valid_number').val('0');
                    $('#faq-send-otp-bt').css('display', 'block');
                }
                else
                {
                    $("#faq_mob_in").prop("disabled", true);
                    $("#mob_in").prop("disabled", false);
                    $('#faq_is_valid_number').val('1');
                    $('#faq-send-otp-bt').css('display', 'none');
                    $('#faq-resend-otp-bt').css('display', 'none');
                    $('#faq-verify-otp-bt').css('display', 'none');
                    $('#faq_otp_field').css('display', 'none');
                }
            });
            
            
            $("#pkg_country_code").on("change", function() {
                var code = $(this).val();
                
                if(code == '91')
                {
                    $("#pkg_mob_in").prop("disabled", false);
                    $('#pkg_is_valid_number').val('0');
                    $('#pkg-send-otp-bt').css('display', 'block');
                }
                else
                {
                    $("#pkg_mob_in").prop("disabled", true);
                    $('#pkg_is_valid_number').val('1');
                    $('#pkg-send-otp-bt').css('display', 'none');
                    $('#pkg-resend-otp-bt').css('display', 'none');
                    $('#pkg-verify-otp-bt').css('display', 'none');
                    $('#pkg_otp_field').css('display', 'none');
                }
            });
            $(".ccode").on("change", function() {
                var id = $(this).data('id'); 
                var code = $('#country_code'+id).val();
                
                if(code == '91')
                {
                    $("#mobIn"+id).prop("disabled", false);
                    $('#isValid_number'+id).val('0');
                    $('#sendOtp-bt'+id).css('display', 'block');
                }
                else
                {
                    $("#mobIn"+id).prop("disabled", true);
                    $('#isValid_number'+id).val('1');
                    $('#sendOtp-bt'+id).css('display', 'none');
                    $('#resendOtp-bt'+id).css('display', 'none');
                    $('#verifyOtp-bt'+id).css('display', 'none');
                    $('#otpField'+id).css('display', 'none');
                }
            });
            
            
            $(".offercode").on("change", function() {
                var id = $(this).data('id'); 
                var code = $('#offcountry_code'+id).val();
                
                if(code == '91')
                {
                    $("#mobileIn"+id).prop("disabled", false);
                    $('#isValidNumber'+id).val('0');
                    $('#sendOtpbt'+id).css('display', 'block');
                }
                else
                {
                    $("#mobileIn"+id).prop("disabled", true);
                    $('#isValidNumber'+id).val('1');
                    $('#sendOtpbt'+id).css('display', 'none');
                    $('#resendOtpbt'+id).css('display', 'none');
                    $('#verifyOtpbt'+id).css('display', 'none');
                    $('#otpFld'+id).css('display', 'none');
                }
            });
            
            
            $("#quote_country_code").on("change", function() {
                var code = $(this).val();
                
                if(code == '91')
                {
                    $("#quote_mob_in").prop("disabled", false);
                    $('#quote_is_valid_number').val('0');
                    $('#quote-send-otp-bt').css('display', 'block');
                }
                else
                {
                    $("#quote_mob_in").prop("disabled", true);
                    $('#quote_is_valid_number').val('1');
                    $('#quote-send-otp-bt').css('display', 'none');
                    $('#quote-resend-otp-bt').css('display', 'none');
                    $('#quote-verify-otp-bt').css('display', 'none');
                    $('#quote_otp_field').css('display', 'none');
                }
            });
        
        });
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        
    </script>

        
        
        
        
        
        
        
        
        
        
        
        
        
            
                 
        <?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/layouts/includes/script.blade.php ENDPATH**/ ?>