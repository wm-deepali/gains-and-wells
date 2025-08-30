
<?php $__env->startSection('title'); ?>
Cost Calculation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
Cost Calculation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  /* Basic Styling */



  .calculator-card {
    width: 60%;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  .calculator {
    padding: 20px;
  }

  h2 {
    font-size: 16px;
    margin-bottom: 0px;
    margin-top: 10px;
  }

  /* Steps Styling */
  .steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
  }

  .step {
    width: 30%;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    background: #ccc;
  }

  .step.active {
    background: #ff6600;
    color: white;
  }

  /* Form Inputs */
  select,
  input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  /* Buttons */
  button {
    width: 100%;
    padding: 10px;
    border: none;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
  }

  .next-btn {
    background: #ff6600;
    color: white;
  }

  .prev-btn {
    background: #555;
    color: white;
  }

  .update-btn {
    background: #007BFF;
    color: white;
  }

  .calcu-btn {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }
</style>
<style>
  .step-title {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 600;
    color: #333;
    text-align: center;
  }

  .cost-cards {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 30px;
  }

  .cost-card {
    background: #f8f9fa;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    display: flex;
    justify-content: space-between;
    font-size: 18px;
    color: #333;
  }

  .calcu-btn {
    display: flex;
    justify-content: space-between;
    gap: 15px;
  }

  .prev-btn,
  .update-btn {
    padding: 10px 25px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .prev-btn {
    background-color: #6c757d;
    color: white;
  }

  .update-btn {
    background-color: #007bff;
    color: white;
  }

  @media (min-width: 768px) {
    .cost-cards {
      flex-direction: row;
      justify-content: space-between;
    }

    .cost-card {
      width: 32%;
      flex-direction: column;
    }
  }
  .cost-calculate-btn1{
      white-space:nowrap !important;
  }
  .cost-calculate-btn{
      white-space:nowrap !important;
  }
</style>

<!--site-main start-->
<div class="site-main">

  <div class="container calculator-card">
    <div class="calculator">
      <div class="steps">
        <div class="step active">Step 01 <br> Business Details</div>
        <div class="step">Step 02 <br> Personal Information</div>
        <div class="step">Step 03 <br> Get Quotation</div>
      </div>

      <!-- Step 1 -->
      <form action="<?php echo e(route('front.quotation.submit')); ?>" method="POST" id="quotationForm">
        <?php echo csrf_field(); ?>
<input type="hidden" id="quotationFormres" value="0">
        <!-- Step 1 -->
        <!-- Step 1 -->
        <div class="step-content" id="step1">
          <h2>Choose your business activity</h2>
          <select id="businessActivity" name="business_id" required>
            <option value="">Select Business</option>
            <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($business->id); ?>"><?php echo e($business->Business_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>

          <h2>Number of Owners/Partners</h2>
          <select id="owners" name="owners" required>
            <option value="1">1 Shareholder/Partner</option>
            <option value="2">2 Shareholders/Partners</option>
            <option value="3">3 Shareholders/Partners</option>
            <option value="4">4 Shareholders/Partners</option>
            <option value="5">5 Shareholders/Partners</option>
            <option value="6">6 Shareholders/Partners</option>
            <option value="7">7 Shareholders/Partners</option>
            <option value="8">8 Shareholders/Partners</option>
            <option value="9">9 Shareholders/Partners</option>
            <option value="10">10 Shareholders/Partners</option> <!-- rest options -->
          </select>

          <h2>Number of Visas</h2>
          <select id="visas" name="visa_id" required>
            <option value="">Select Visa</option>
          </select>

          <button type="button" class="next-btn" onclick="nextStep(2)">Next →</button>
        </div>


        <!-- Step 2 -->
        <div class="step-content" id="step2" style="display: none;">
          <h2>Full Name *</h2>
          <input type="text" id="fullName" name="full_name" placeholder="Full Name" required>

          <h2>Email *</h2>
          <input type="email" id="email" name="email" placeholder="Email" required>
          
         <h2>Country Code *</h2>
         <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
          <select id="cost_country_code" name="country_code" class="codecountry" required>
            <option value="">Select Country Code</option>
            <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
            <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </select>

          
          <h2>Phone *</h2>
          <input type="tel" id="phone" name="phone" placeholder="Phone" oninput="validatePhone(this)" required>
          <div class="mobile-error" style="color: red; font-size: 14px;"></div>
          <p id="cost_verified_badge" style="color:green;display:none;">Verified</p>
          
            
                <input type="tel" name="phone" id="cost_mob_in" class="form-control" style="display:none;"/>
                <input type="text" name="isValid" id="cost_is_valid_number" value="1" class="form-control" style="display:none;"/>
                <div  id="cost_otp_field" style="display: none;">
                    <input
                        type="text"
                       
                        id="cost_otp"
                        name="otp"
                        placeholder="Enter OTP"
                        maxlength="6"
                    />
                </div>
                <button type="button" class="btn btn-primary mb-2" id="cost-send-otp-bt" onclick="sendcostOTP()" style="display: none;">Send OTP</button>
                <button type="button" class="btn btn-primary mb-2" id="cost-verify-otp-bt" style="display: none;" onclick="verifycostOTP()">Verify</button>
                <button type="button" class="btn btn-primary mb-2" id="cost-resend-otp-bt" onclick="sendcostOTP()" style="display: none;">Resend OTP</button>
                
            
          
          
          <label>
            <input type="checkbox" id="terms" required style="width:30px;"> I agree to <a href="#">terms & conditions</a>
          </label>

          <div class="calcu-btn">
            <button type="button" class="prev-btn " onclick="prevStep(1)">Back</button>
            <button type="button" class="next-btn " onclick="validateStep2()">Next →</button>
          </div>

        </div>

        <!-- Step 3 (Cost Estimation) -->
        <div class="step-content" id="step3" style="display: none;">
          <h2 class="step-title" style="margin-top:50px;">Approximate Cost</h2>

          <div class="cost-cards">
            <div class="cost-card">
              <strong>Dubai Mainland:</strong>
              <span id="cost-mainland-display">AED 0</span>
              <input type="hidden" id="cost-mainland" name="cost_mainland" value="0">
            </div>
            <div class="cost-card">
              <strong>UAE Freezone:</strong>
              <span id="cost-dubai-display">AED 0</span>
              <input type="hidden" id="cost-dubai" name="cost_dubai" value="0">
            </div>
            <div class="cost-card">
              <strong>UAE Offshore:</strong>
              <span id="cost-sharjah-display">AED 0</span>
              <input type="hidden" id="cost-sharjah" name="cost_sharjah" value="0">
            </div>
          </div>

         <div class="calcu-btn">
  <button type="button" class="prev-btn" onclick="prevStep(2)">Back</button>
  <button type="submit" class="update-btn" id="submit-btn">Submit Quotation</button>
  <a href="<?php echo e(route('contact-us')); ?>" class="update-btn" id="contact-btn" style="display: none;">Contact for Price</a>
</div>
        </div>

      </form>
    </div>
  </div>




</div><!-- site-main end-->
<?php $__env->stopSection(); ?>
<script>
  const allVisas = <?php echo json_encode($visas, 15, 512) ?>;

  document.addEventListener('DOMContentLoaded', function() {
    const visaSelect = document.getElementById('visas');
    const businessSelect = document.getElementById('businessActivity');

    // businessSelect.addEventListener('change', function() {
    //   const selectedBusinessId = this.value;

    //   const filteredVisas = allVisas.filter(visa => visa.business_id == selectedBusinessId);

    //   visaSelect.innerHTML = '<option value="">Select Visa</option>';

    //   filteredVisas.forEach(visa => {
    //     const option = document.createElement('option');
    //     option.value = visa.id;
    //     option.dataset.quantity = visa.quantity;
    //     option.textContent = `${visa.quantity} Visa${visa.quantity > 1 ? 's' : ''}`;
    //     visaSelect.appendChild(option);
    //   });

    //   visaSelect.disabled = filteredVisas.length === 0;
    // });

    // if (businessSelect.value) {
    //   businessSelect.dispatchEvent(new Event('change'));
    // }
  });

  function nextStep(step) {
    document.querySelectorAll('.step-content').forEach(el => el.style.display = 'none');
    document.getElementById(`step${step}`).style.display = 'block';

    document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.steps .step:nth-child(${step})`).classList.add('active');

    if (step === 3) calculateCost();
  }

  function prevStep(step) {
    document.querySelectorAll('.step-content').forEach(el => el.style.display = 'none');
    document.getElementById(`step${step}`).style.display = 'block';

    document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.steps .step:nth-child(${step})`).classList.add('active');
  }
  
  function validateStep2() {
    const fullName = document.getElementById("fullName").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const countryCode = document.getElementById("cost_country_code").value.trim();
    const validnum = document.getElementById("cost_is_valid_number").value.trim();
    const termsChecked = document.getElementById("terms").checked;
    const visaSelected = document.getElementById("visas").value;
    const quotationResponse = document.getElementById("quotationFormres").value;
     

    if (!fullName || !email || !phone || !termsChecked || !visaSelected || !countryCode) {
      alert("Please fill out all fields, accept terms, and select a visa.");
      return;
    }
    
    if (validnum == '0') {
      alert("Please verify your mobile number.");
      return;
    }
    if (quotationResponse == '0') {
      alert("Please enter valid mobile number");
      return;
    }

    nextStep(3);
  }

 function calculateCost() {
  const visaId = parseInt(document.getElementById("visas").value);
  const visa = allVisas.find(v => v.id === visaId);

  if (!visa) {
    alert("Please select a valid visa.");
    return;
  }

  const costMainland = parseInt(visa.dubai_mainland);
  const costFreezone = parseInt(visa.uae_freezone);
  const costOffshore = parseInt(visa.uae_offshore);

  // Set values in UI
  document.getElementById("cost-mainland-display").innerText = `AED ${costMainland}`;
  document.getElementById("cost-dubai-display").innerText = `AED ${costFreezone}`;
  document.getElementById("cost-sharjah-display").innerText = `AED ${costOffshore}`;

  document.getElementById("cost-mainland").value = costMainland;
  document.getElementById("cost-dubai").value = costFreezone;
  document.getElementById("cost-sharjah").value = costOffshore;

  // Toggle Submit / Contact buttons
  const submitBtn = document.getElementById("submit-btn");
  const contactBtn = document.getElementById("contact-btn");

  if (costMainland === 0 || costFreezone === 0 || costOffshore === 0) {
    submitBtn.style.display = "none";
    contactBtn.style.display = "inline-block";
  } else {
    submitBtn.style.display = "inline-block";
    contactBtn.style.display = "none";
  }
}

</script>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    var navListItems = $('div.setup-panel div a'),
      allWells = $('.setup-content'),
      allNextBtn = $('.nextBtn');

    allWells.hide(); // hide all steps initially

    navListItems.click(function(e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
        $item = $(this);

      if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-secondary');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
      }
    });

    allNextBtn.click(function() {
      var curStep = $(this).closest(".setup-content"),
        curStepId = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepId + '"]').parent().next().children("a"),
        curInputs = curStep.find("input, textarea"),
        isValid = true;

      curInputs.each(function() {
        if (!this.checkValidity()) {
          $(this).addClass('is-invalid');
          isValid = false;
        } else {
          $(this).removeClass('is-invalid');
        }
      });

      if (isValid) {
        nextStepWizard.removeClass('disabled btn-secondary').addClass('btn-primary');
        nextStepWizard.trigger('click');
      }
    });

    // Trigger first step
    $('div.setup-panel div a.btn-primary').trigger('click');
    
    
    $("#cost_country_code").on("change", function() {
        var code = $(this).val();
        
        if(code == '91')
        {
            $('#cost_is_valid_number').val('0');
            $('#cost-send-otp-bt').css('display', 'block');
        }
        else
        {
            $('#cost_is_valid_number').val('1');
            $('#cost-send-otp-bt').css('display', 'none');
            $('#cost-resend-otp-bt').css('display', 'none');
            $('#cost-verify-otp-bt').css('display', 'none');
            $('#cost_otp_field').css('display', 'none');
        }
    });
    
  });
  
    
    function sendcostOTP() {
            var mobileNumber = document.getElementById('phone').value;
            document.getElementById('cost_mob_in').value = mobileNumber;
            document.getElementById('cost_otp_field').value ="";
            var token = '<?php echo e(csrf_token()); ?>';
            $.post('<?php echo e(route("mobileVerify")); ?>', { _token: token,mobile: mobileNumber }, function(data) {
                // Show OTP field if OTP is sent successfully
                if (data.success) {
                    document.getElementById('cost_otp_field').style.display = 'block';
                    document.getElementById('cost-send-otp-bt').style.display = 'none';
                    document.getElementById('cost-resend-otp-bt').style.display = 'block';
                    document.getElementById('cost-verify-otp-bt').style.display = 'block';
                    Swal.fire({
                    title: "OTP Sent!",
                    text: "OTP sent to the entered mobile number...",
                    icon: "success"
                    });
                }else{
                    document.getElementById('cost_otp_field').style.display = 'none';
                    document.getElementById('cost-send-otp-bt').style.display = 'block';
                    document.getElementById('cost-resend-otp-bt').style.display = 'none';
                    document.getElementById('cost-verify-otp-bt').style.display = 'none';
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
        function verifycostOTP() {
            var otp = $('#cost_otp').val();
            var mobileNumber = document.getElementById('phone').value;
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
                        document.getElementById('cost_is_valid_number').value = '1';
                        document.getElementById('phone').classList.add('verified');
                        document.getElementById('cost_otp_field').style.display = 'none';
                        document.getElementById('cost-send-otp-bt').style.display = 'none';
                        document.getElementById('cost-resend-otp-bt').style.display = 'none';
                        document.getElementById('cost-verify-otp-bt').style.display = 'none';
                        document.getElementById('phone').disabled = true;
                        document.getElementById('cost_verified_badge').style.display = 'block';
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
        $(document).on('change', '#businessActivity', function(event) {
            var business = $(this).val();
            var owners = $('#owners').val();
            fetchData(business, owners);
        });
        $(document).on('change', '#owners', function(event) {
            var business = $(this).val();
            var owners = $('#owners').val();
            fetchData(business, owners);
        });
        function fetchData(business, owners) {
            $('#visas').html("")
            $.ajax({
                url: `<?php echo e(URL::to('fetchvisadata/${business}/${owners}')); ?>`,
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        
                         $('#visas').append(result.html);
                      
                    } else {
                        
                    }
                },
            });
        }
</script>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/cost-calculation.blade.php ENDPATH**/ ?>