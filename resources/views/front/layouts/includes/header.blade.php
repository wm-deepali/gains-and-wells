<!-- header start -->



<style>
.left-social-icon {
    position: fixed;
    top: 223px;
    left: 0;
    display: flex;
    flex-direction: column;
    z-index: 2; /* kam rakha taki dropdown upar aaye */
}

header, .navbar, .dropdown-menu {
    position: relative;
    z-index: 99;
}

.left-social-icon .social-link {
    padding-left: 15px;
    display: flex;
    align-items: center;
    width: 60px; /* only icon visible */
    height: 50px;
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    overflow: hidden;
    border-radius: 0 25px 25px 0;
    margin-bottom: 5px;
    transition: width 0.3s ease;
}

.left-social-icon .social-link i {
    width: 60px;
    text-align: center;
}

.left-social-icon .separator {
    width: 1px;
    background: rgba(255,255,255,0.4);
    height: 20px;
    margin: 0 8px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.left-social-icon .label {
    white-space: nowrap;
    font-size: 1rem;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Hover Effects */
.left-social-icon .social-link:hover {
    width: 200px; /* expand to show text */
}

.left-social-icon .social-link:hover .label,
.left-social-icon .social-link:hover .separator {
    opacity: 1;
}

/* Default Platform Colors */
.facebook { background: #3b5998; }
.twitter { background: #1da1f2; }
.instagram { background: #e4405f; }
.linkedin { background: #0077b5; }
.youtube { background: #ff0000; }
.whatsapp { background: #25d366; }
.logo-btm{
    border-bottom: 1px solid #80808036;
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    @media (min-width: 540px) {
    .btn-show-menu-mobile {
       display:none !important;
    }
    
}
</style>

<header id="masthead" class="header prt-header-style-01">
  
     <div class="mobile-top-header" >
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="margin: auto;">
                    
                        
                        <div class="top_bar_contact_item top_bar_social ms-auto"
                            style="display: flex;gap: 10px; align-items: center; justify-content:space-between;">
                            <div class="top-call-icon">
                               <div class="top-call-icon-card">
    <a href="tel:+916291033761" title="Call Us">
        <i class="fa-solid fa-phone-volume"></i>
    </a>
</div>

<div class="top-call-icon-card">
    <a href="https://wa.me/+916291033761" target="_blank" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>

<div class="top-call-icon-card">
    <a href="mailto: info@indcorp.in" title="Send Email">
        <i class="fa fa-envelope" style="color:gray;"></i>
    </a>
</div>

                               
                                
                            </div>

                         <div class="" style="display:flex; gap:8px;">
                          <!--  <a href="#" class=""
                                style="margin: auto;margin-left: 0px; margin-right: 0px;">
                                <button class="cost-calculate-btn">
                                    Calculator</button>
                            </a> -->
                           
                                
 <a href="#" class=""
                                style="margin: auto;margin-left: 0px; margin-right: 0px;">
                                <button class="cost-calculate-btn">
                                     Free Consultation</button>
                            </a>
                            <!--<a href="#" class=""-->
                            <!--    style="margin: auto;margin-left: 0px; margin-right: 0px;">-->
                            <!--    <button class="cost-calculate-btn">-->
                            <!--        MSME Attention</button>-->
                            <!--</a>-->
                            </div>

                            

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    <!-- topbar -->
    <div class="top_bar prt-topbar-wrapper text-base-white clearfix">
        <div class="container-fluid" style="padding-left:0px;">
            <div class="row">
                <div class="col-lg-12" style="margin: auto;">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                        
                        <div class="top_bar_contact_item">
                            <a href="mailto:info@indcorp.com" style="color:#fff"><i class="fa-solid fa-envelope"></i>
                                info@indcorp.in
                            </a>
                        </div>
                        <div class="top-header-line"></div>
                        <div class="top_bar_contact_item">
                            <a href="tel:+91-62910 33761" style="color:#fff"><i class="fa-solid fa-phone"></i>+91-62910 33761</a>
                        </div>
                       
<!--                        <div class="d-flex"-->
<!--     style="height: 50px; gap: 15px; align-items: center; justify-content: center;">-->
  
<!--  <a href="https://www.instagram.com/yourprofile" target="_blank" style="color: inherit;">-->
<!--    <i class="fa-brands fa-instagram"></i>-->
<!--  </a>-->

<!--  <a href="https://www.facebook.com/yourprofile" target="_blank" style="color: inherit;">-->
<!--    <i class="fa-brands fa-facebook"></i>-->
<!--  </a>-->

<!--  <a href="https://twitter.com/yourprofile" target="_blank" style="color: inherit;">-->
<!--    <i class="fa-brands fa-x-twitter"></i>-->
<!--  </a>-->

<!--  <a href="https://www.linkedin.com/in/yourprofile" target="_blank" style="color: inherit;">-->
<!--    <i class="fa-brands fa-linkedin"></i>-->
<!--  </a>-->

<!--</div>-->

                        <!--<div class="top-header-line"></div>-->
                        <div class="top_bar_contact_item top_bar_social ms-auto"
                            style="display: flex;gap: 15px; align-items: center; ">

                         <!--   <a href="#" class=""
                                style="margin: auto;margin-left: 0px; margin-right: 0px;">
                                <button class="cost-calculate-btn1">
                                    <i class="fa-solid fa-calculator"></i> &nbsp; Cost Calculator</button>
                            </a> -->
                            
                            
                           
                            <a href="{{ route('blogs') }}" class="top-header-btn">
                                
                       <i class="fa-solid fa-mobile"></i> &nbsp; News</a>
                            
                        <div class="top-header-line"></div>
                        
                        
                             <a href="{{ route('blogs') }}" class="top-header-btn" >
                            <i class="fa-solid fa-mobile"></i> &nbsp; Blogs</p></a>
                             <div class="top-header-line"></div>
                             
                             
                              <a href="#" class="top-header-btn" ><i class="fa-solid fa-mobile"></i> &nbsp; Labour Law</p></a>
                              <div class="top-header-line"></div>
                              
                               <!--<a href="{{ route('corp-legal-compliances') }}" class="top-header-btn" >-->
                               <!--    <i class="fa-solid fa-mobile"></i> &nbsp; Corp Legal & Compliances</p></a>-->
                                    <a href="#" class="top-header-btn" >
                                   <i class="fa-solid fa-mobile"></i> &nbsp; Corp Legal & Compliances</p></a>
                                   <div class="top-header-line"></div>
                               
                               <a href="#" class="top-header-btn" >
                                   <i class="fa-solid fa-mobile"></i> &nbsp; Virtual CFO Services</p></a>
                                        
                               <!--<a href="{{ route('virtual-cfo-services') }}" class="top-header-btn" >-->
                               <!--    <i class="fa-solid fa-mobile"></i> &nbsp; Virtual CFO Services</p></a>-->
                                   <div class="top-header-line"></div>
                               
                               <a href="{{ route('hrms') }}" class="top-header-btn" >
                                   <i class="fa-solid fa-mobile"></i> &nbsp; HRMS</p></a>
                                  
                            <!--<button class="cost-calculate-btn1" data-bs-toggle="offcanvas"-->
                            <!--    href="#offcanvasExample">-->
                            <!--    <i class="fa-solid fa-mobile"></i> &nbsp;-->
                            <!--    Free Consultation</button>-->
                                
                                
                                
                            <!--<a href="{{route('company-setup-offer')}}" class=""-->
                            <!--    style="margin: auto;margin-left: 0px; margin-right: 0px;">-->
                            <!--    <button class="cost-calculate-btn">-->
                            <!--        <i class="fa-solid fa-gift"></i> &nbsp; Latest Offers</button>-->
                            <!--</a>-->

                            

                        </div>
                        <!-- <div class="top_bar_contact_item">
                            <button class="cost-calculate">Cost Calculate</button>
                            
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu border-bottom">
        <div class="site-header-menu-inner prt-stickable-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin: auto;">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-column align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class=" logo-btm me-auto  d-flex align-items-center justify-content-between " style="width:97%;    
    margin-bottom: 10px;">
                                <h1>
                                    <a class="home-link" href="{{ route('home') }}" title="Truvik" rel="home ">
<img id="logo-img" height="40" width="160" class="img-fluid auto_size"
    src="{{ asset('assets/img/indcorp.png') }}"
    alt="logo-img">

                                    </a>
                                </h1>
                                <div class="d-flex gap-2">
                                    <button class="cost-calculate-btn mobile-btn-none" data-bs-toggle="offcanvas"
                                href="#offcanvasExample">
                                <i class="fa-solid fa-mobile"></i> &nbsp;
                                Free Consultation</button>
                                
                            <!--<a href="{{route('msme-attention')}}" class=""-->
                            <!--    style="margin: auto;margin-left: 0px; margin-right: 0px;">-->
                            <!--    <button class="cost-calculate-btn mobile-btn-none">-->
                            <!--        <i class="fa-solid fa-gift"></i> &nbsp; MSME Attention</button>-->
                            <!--</a>-->
                            
                             <a href="#" class=""
                                style="margin: auto;margin-left: 0px; margin-right: 0px;">
                                <button class="cost-calculate-btn mobile-btn-none">
                                    <i class="fa-solid fa-gift"></i> &nbsp; MSME Attention</button>
                            </a>
                                    
                                </div>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box " style="margin-top:24px;">
                                    <i class="fa-solid fa-bars" style="font-size:22px;"></i>
                                    <!--<span class="menubar-inner"></span>-->
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu" style="width:100%;">
                                <ul class="menu">
                                    
                                    <li class="mega-menu-item">
                                    <a href="">About Us <i
                                            class="fa-solid fa-caret-down"></i></a>
                                    <ul class="mega-submenu">
                                        <li><a href="{{route('about-us')}}">About Us</a></li>
                                        <!--<li><a href="{{route('our-experts')}}">Our Experts</a></li>-->
                                        <li><a href="#">Our Experts</a></li>
                                         <li><a href="{{route('why-indcorp')}}">Why IndCorp</a></li>
                                          <!--<li><a href="{{route('awards-certifications')}}">Awards & Certifications</a></li>-->
                                            <li><a href="#">Awards & Certifications</a></li>
                                           <!--<li><a href="{{route('press-media')}}">Press & Media</a></li>-->
                                             <li><a href="#">Press & Media</a></li>
                                            <!--<li><a href="{{route('success-stories')}}">Success Stories</a></li>-->
                                            <li><a href="#">Success Stories</a></li>
                                        
                                       


                                    </ul>
                                </li>
                                    
                                    
                                    
                                    
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Startup Services <i
                                                class="fa-solid fa-caret-down"></i></a>
                                       <ul class="mega-submenu">
    <li><a href="#">Incorporation</a></li>
    <li><a href="{{route('accounts-and-book-keeping')}}">Accounting & Bookkeeping Services</a></li>
    <li><a href="{{route('auditing')}}">Financial Reporting & Audit Services</a></li>
    <li><a href="{{route('financial-advisory-service')}}">Business & Financial Advisory Services</a></li>
    <li><a href="{{route('compliances')}}">GST, VAT & TDS Compliance Services</a></li>
    <li><a href="{{route('hrms')}}">HR & Payroll Management Solutions</a></li>
    <li><a href="{{route('taxation')}}">Tax Computation & Filing Services</a></li>
    <li><a href="{{route('commercial-license-services')}}">Business, Commercial & Trade Licensing Services</a></li>
    
    <li><a href="{{route('bank-account-assistance')}}">Bank Account Assistance</a></li>
    <li><a href="{{route('trademark-and-copyrights')}}">Trademark & Copyright</a></li>
</ul></li>
 
<li class="mega-menu-item active">
 <a href="#" class="mega-menu-link">Cross-Border Business Advisory & Support <i class="fa-solid fa-caret-down"></i></a>
    <ul class="mega-submenu">
                                            
                                            
    <li><a href="">Incorporation</a></li>
    <li><a href="{{route('accounts-and-book-keeping')}}">Accounting & Bookkeeping Services</a></li>
    <li><a href="{{route('auditing')}}">Financial Reporting & Audit Services</a></li>
    <li><a href="{{route('financial-advisory-service')}}">Business & Financial Advisory Services</a></li>
    <li><a href="{{route('compliances')}}">GST, VAT & TDS Compliance Services</a></li>
    <li><a href="{{route('hrms')}}">HR & Payroll Management Solutions</a></li>
    <li><a href="{{route('taxation')}}">Tax Computation & Filing Services</a></li>
    <li><a href="{{route('commercial-license-services')}}">Business, Commercial & Trade Licensing Services</a></li> 
    <li><a href="#">SEMA Compliance</a></li>
    
    <li><a href="{{route('bank-account-assistance')}}">Bank Account Assistance</a></li>
    <li><a href="{{route('trademark-and-copyrights')}}">Trademark & Copyright</a></li>
    
    
   <!-- <li><a href="{{route('business-setup-usa')}}">USA</a></li>
  <li class="active"><ahref="{{route('business-setup-uk')}}">United Kingdoom (UK)</a> </li>
<li><a href="{{route('business-setup-dubai-uae')}}">UAE & Dubai </a></li>
  <li><a href="{{route('business-setup-canada')}}">Canada</a></li>
   <li class="mega-menu-item">
<li><a href="{{route('business-setup-singapore')}}">Singapore</a></li> -->
</li>
</ul> </li>

   <li><a href="{{route('accounts-and-book-keeping')}}">Accounting & Book-keeping Services</a></li>
 <li><a href="{{route('financial-advisory-service')}}">Business & Financial Advisory</a></li>
                               <!-- <li class="mega-menu-item">
                                    <a href="{{route('financial-advisory-service')}}">Business & Financial Advisory </a>
                                </li>
                              <li class="mega-menu-item">
                                    <a href="{{route('startups-investor-visa')}}">Startup & Investor Visa</a>
                                </li> -->
                           
                           <!--     <li class="mega-menu-item">
                                    <a href="#" class="mega-menu-link">Corporate Services <i
                                            class="fa-solid fa-caret-down"></i></a>
                                    <ul class="mega-submenu">
                                      <!--  <li><a href="#">Corporate Funding</a></li> 
                                        <li><a href="{{route('commercial-license-services')}}">Commercial & Trade License</a></li>
                                        
                                        <li><a href="{{route('permanent-residency-visa')}}">Permanent Residency Visa</a></li>
                                        
                                    </ul>
                                </li> -->
                                <li class="mega-menu-item">
 <a href="#" class="mega-menu-link">Taxation <i class="fa-solid fa-caret-down"></i></a>
        <ul class="mega-submenu">
        <!--<li><a href="{{route('income-tax-filling')}}">Income Tax</a></li>-->
          <li><a href="#">Income Tax</a></li>
         <!--<li><a href="{{route('gst-returns')}}">GST</a></li>-->
         <li><a href="#">GST</a></li>
                                        
                 </ul></li>
 
  <li class="mega-menu-item">
  <a href="{{route('contact-us')}}">Contact us</a>
  </li>
  
 <li class="mega-menu-item">
 <!-- <a href="{{route('contact-us')}}">Contact us<i class="fa-solid fa-caret-down"></i></a>-->
 <!-- <ul class="mega-submenu">-->
 <!--<li><a href="{{route('corp-legal-compliances')}}">Corp Legal & Compliances</a></li>-->
 <!-- <li><a href="#">Corp Legal & Compliances</a></li>-->
 <!-- <li><a href="{{route('virtual-cfo-services')}}">Virtual CFO Services</a></li>-->
 <!--   <li><a href="#">Virtual CFO Services</a></li>-->
 <!--  <li><a href="{{route('hrms')}}">HRMS</a></li>-->
 <!-- <li><a href="{{route('contact-us')}}">Contact us</a></li>-->
 <!--                                       <li><a href="{{route('share-your-feedback')}}">Share Your Feedback</a></li>-->
 <!--                                       <li><a href="{{route('become-a-channel-partner')}}">Become Channel Partner</a></li>-->
 <!--                                       <li><a href="{{route('career-with-us')}}">Career with Us</a></li> -->
 <!--                                   </ul>-->
 <!--                               </li>-->
                               
                                </ul>
                                
                            </nav><!-- menu end -->

                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!-- header end -->
<div class="left-social-icon">
    <a href="https://whatsapp.com" target="_blank" class="social-link whatsapp">
        <i class="bi bi-whatsapp"></i>
        <span class="separator"></span>
        <span class="label">Whatsapp</span>
    </a>
    <a href="https://facebook.com" target="_blank" class="social-link facebook">
        <i class="bi bi-facebook"></i>
        <span class="separator"></span>
        <span class="label">Facebook</span>
    </a>
    <a href="https://twitter.com" target="_blank" class="social-link twitter">
        <i class="bi bi-twitter"></i>
        <span class="separator"></span>
        <span class="label">Twitter</span>
    </a>
    <a href="https://instagram.com" target="_blank" class="social-link instagram">
        <i class="bi bi-instagram"></i>
        <span class="separator"></span>
        <span class="label">Instagram</span>
    </a>
    <a href="https://linkedin.com" target="_blank" class="social-link linkedin">
        <i class="bi bi-linkedin"></i>
        <span class="separator"></span>
        <span class="label">LinkedIn</span>
    </a>
    <a href="https://youtube.com" target="_blank" class="social-link youtube">
        <i class="bi bi-youtube"></i>
        <span class="separator"></span>
        <span class="label">YouTube</span>
    </a>
    
</div>



    