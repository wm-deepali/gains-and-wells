

<?php $__env->startSection('pagetitle'); ?>
PRO Services
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
        .custom-accordion {
            border: 1px solid #dddddd3a;
            /* border-radius: 6px; */
            overflow: hidden;
        }

        .accordion-item {
            border-bottom: 1px solid #dddddd3a;
        }

        .accordion-title {
            cursor: pointer;
            padding: 15px;
            background: #162842;c
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }

        .accordion-title i {
            transition: transform 0.3s ease;
        }

        .accordion-title.active i {
            transform: rotate(180deg);
        }

        .accordion-content {
            display: none;
            padding: 15px;
            background: #162842;
            color: #fff;
            border-top: 1px solid #dddddd3a;
        }

        .accordion-content.active {
            display: block;
        }

        .accordion-item:first-of-type {
            border-radius: 0px !important;
        }

        .radial-progress {
            width: 190px;
            height: 190px;
            transform: rotate(-90deg);
            margin-bottom: 20px;
        }

        .radial-progress circle {
            fill: none;
            stroke-width: 10;
        }

        .bar-static {
            stroke: #eee;
        }

        .bar--animated {
            stroke: #f36f27;
            stroke-dasharray: 219.911;
            /* 2πr = 2 * π * 35 */
            stroke-dashoffset: 219.911;
            transition: stroke-dashoffset 1s ease;
        }

        .radial-progress text.countervalue {
            fill: #000;
            font-size: 16px;
            text-anchor: middle;
            dominant-baseline: middle;
            transform: rotate(90deg);
            transform-origin: 40px 40px;
        }
       .testimonial-section {
      padding: 60px 20px;
      background-color: #f0f5fb;
    }

    .testimonial-slider-wrapper {
        
      max-width: 1240px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .testimonial-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .testimonial-card {
      min-width: 100%;
      box-sizing: border-box;
      padding: 40px;
      background: #fff;
      border-radius: 20px;
      /*box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);*/
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .testimonial-content {
      flex: 1 1 60%;
      padding-right: 20px;
    }

    .testimonial-content h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .testimonial-text {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
    }

    .testimonial-client {
      display: flex;
      align-items: center;
      margin-top: 20px;
      gap: 10px;
    }

    .testimonial-client img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
    }

    .testimonial-client h4 {
      margin: 0;
      font-size:16px;
      font-weight:600;
    }

    .testimonial-image {
      flex: 1 1 35%;
      text-align: center;
    }

    .testimonial-image img {
      width: 100%;
      max-width: 300px;
      border-radius: 15px;
    }

    .testimonial-nav {
      text-align: center;
      margin-top: 30px;
    }

    .testimonial-nav button {
      background-color: #3e68d1;
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      margin: 0 8px;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.3s ease;
     
    }

    .testimonial-nav button:hover {
      background-color: #d1d5db;
    }
 .icon-box-col {
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  padding: 2rem;
}

/* Remove right border from every 2nd column (assuming 2 columns per row) */
.icon-box-col:nth-child(2n) {
  border-right: none;
}

/* Remove bottom border from last row */
.icon-box-col:nth-last-child(-n+2) {
  border-bottom: none;
}

@media (max-width: 576px) {
  .icon-box-col {
    border-right: none;
    border-bottom: 1px solid red;
  }
  .icon-box-col:last-child {
    border-bottom: none;
  }
}
 .custom-modal {
  display: none; 
  position: fixed;
  z-index: 99999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.6);
}

.custom-modal-content {
  background-color: #fff;
  margin:auto;
  padding: 20px;
  border-radius: 10px;
  width: 90%;
  max-width: 600px;
  position: relative;
  animation: fadeIn 0.3s ease-in-out;
}

.close-btn {
  position: absolute;
  right: 15px;
  top: 10px;
  font-size: 22px;
  cursor: pointer;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

    </style>
    
    
    


        <!--site-main start-->
        <div class="site-main">
           
 <section class="prt-row padding_zero-section service01-consulting-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <div class="prt-bg prt-col-bgcolor-yes prt-left-span bg-base-dark spacing-16 z-index-2">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                <div class="layer-content">
                                    <!--section-title -->
                                    <div class="section-title style2">
                                        <div class="title-header">
                                            <h3>RAK Al Khaimah Offshore</h3>
                                            <h2 class="title">RAK Offshore Company  <span>Formation Made Easy</span> </h2>
                                        </div>                                        
                                    </div><!--section-title-end -->
                                    <div class="row g-0 prt-vertical_sep">
                                        <div class="col-md-6 res-767-mt_25">
                                            <div class="featured-icon-box style5">
                                                <div class="featured-icon">
                                                    <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                        <i class="flaticon-coronavirus"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>Online Process</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p class="text-base-white mb-0">A Complete Online Process helps you to save your Cost & Time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-50 res-767-pl-0">
                                            <div class="featured-icon-box style5">
                                                <div class="featured-icon">
                                                    <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                        <i class="flaticon-teamwork"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>Hassle Free Approach</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p class="text-base-white mb-0">Our Team is just a step away from helping you from start to a fully established business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="col-bg-img-twenty prt-bg prt-col-bgimage-yes prt-right-span">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                <div class="layer-content">
                                    <div class="row g-0 h-100">
                                        <div class="col-lg-8">
                                            <div class="bg-base-light-skin1 h-100">
                                                <div class="spacing-17 h-100 d-flex flex-column justify-content-between">
                                                    <div class="section-title style4 mt-0">
                                                        <div class="title-header">
                                                            <h2 class="fs-42 text-white mb-0">Register your RAK offshore company in 3 easy steps and set up a bank account.  <br><span class="text-white">Consultation!.</span></h2>
                                                        </div>                                        
                                                    </div><!--section-title-end -->
                                                    <div class="">
                                                        <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-dark" data-bs-toggle="offcanvas" href="#offcanvasExample">Get Free Consultation</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <!-- about-section -->
            <section class="prt-row service02-about-section" >
                <div class="container" style="max-width:1275px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <!--<h3>Company Setup-->
                                        <!--    in Dubai Mainland</h3>-->
                                        <h2 class="title" style="font-size:34px">AJMAN OFFSHORE</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p><strong>AJMAN Offshore,
</strong> established under the Ajman Free Zone Authority (AFZA), is one of the most cost-effective and business-friendly offshore jurisdictions in the UAE. Designed to attract international investors and entrepreneurs, AJMAN Offshore offers a flexible company structure with 100% foreign ownership, zero taxation, and minimal operational requirements.</p>
<br>
<p>Strategically located near the major seaports of Dubai and Sharjah, AJMAN Offshore is ideal for companies involved in international trading, holding investments, owning property (in approved areas), or conducting global business operations. Its straightforward incorporation process, low setup costs, and investor privacy make it a preferred choice for small to mid-sized businesses looking for a reliable offshore solution in the UAE.</p>
<br>
<p>Whether you're seeking asset protection, tax efficiency, or a secure gateway for international expansion,<strong> AJMAN Offshore provides a robust platform with global credibility and UAE advantages.</strong></p>
                                    </div>
                                </div><!-- section title end -->
                                 <div class="section-title">
                                    <div class="title-header">
                                        <!--<h3>Company Setup-->
                                        <!--    in Dubai Mainland</h3>-->
                                        <h2 class="title" style="font-size:34px">Where are Ajman Offshore Companies Registered?</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman offshore companies are registered under the jurisdiction of the <b>Ajman Free Zone Authority (AFZA),</b> located in the Emirate of Ajman, United Arab Emirates. The registration process is governed by the <b>Ajman Offshore Companies Regulations,</b> which provide a clear legal framework for the incorporation and operation of offshore entities.</p>
<br>
<p>While the companies are registered in Ajman, they primarily operate outside the UAE, benefiting from the emirate’s business-friendly environment and regulatory support. The Ajman Free Zone Authority acts as the official regulatory body overseeing company formation, licensing, and compliance for offshore entities, ensuring internationally recognized standards are met.</p>
<br>
<p>This strategic registration enables Ajman offshore companies to enjoy tax benefits, confidentiality, and ease of international business transactions while leveraging Ajman’s advantageous geographic location near key UAE ports and logistics hubs.</p>
                                    </div>
                                </div>

                              
                                <div class="row mt-50 res-991-mt-30 " style=" 
                                gap:20px;display: grid;grid-template-columns: 1fr 1fr;">                                    
                                   <div class="col-lg-12 shadow">
                                        <div class="spacing-26">
                                            <div class="service-title mb-30">
                                                <div class="service-header">
                                                    <h3 class="mb-0">What are the Main Features of Ajman Offshore Companies</h3>
                                                    
                                                </div>                                        
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                                        
                                                        
                                                           
                                                            <div class="featured-desc">
  <p><strong><i class="fa-solid fa-angles-right"></i> 100% Foreign Ownership:</strong> Ajman offshore companies can be fully owned by non-residents without the need for a local partner or sponsor.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> No Corporate or Personal Income Tax:</strong> There are no taxes on corporate profits or personal income, making it a highly tax-efficient jurisdiction.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Confidentiality:</strong> Shareholder and director information is kept confidential and not publicly disclosed, ensuring privacy.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> No Physical Office Requirement:</strong> There is no obligation to maintain a physical office or local employees within Ajman.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Quick and Simple Incorporation:</strong> Companies can be set up swiftly, often within a few business days, with minimal paperwork.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> No Minimum Capital Requirement:</strong> There is no mandatory minimum capital to start an offshore company, reducing barriers to entry.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Flexible Corporate Structure:</strong> Allows a single shareholder and director, providing simplicity in ownership and management.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Ability to Own International Assets:</strong> Companies can own properties, bank accounts, shares, and other assets globally.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Legal Entity with Separate Juridical Status:</strong> Ajman offshore companies are recognized as legal persons under UAE law, capable of entering contracts and holding assets.</p>
</div>

                                                           
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 shadow">
                                        <div class="spacing-26">
                                            <div class="service-title mb-30">
                                                <div class="service-header">
                                                    <h3 class="mb-0">The Activities Not Permitted for Ajman Offshore Companies</h3>
                                                  
                                                </div>                                        
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                                        
                                                        
                                                           
                                                          <div class="featured-desc">
  <p><strong><i class="fa-solid fa-angles-right"></i> Conducting Business within the UAE Market:</strong> Ajman offshore companies are prohibited from trading or providing services directly within the UAE mainland or free zones.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Professional Services Requiring Licensing:</strong> Activities such as legal consultancy, accounting, auditing, or medical services are not allowed unless licensed locally.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Industrial or Manufacturing Activities:</strong> Offshore companies cannot carry out manufacturing, production, or industrial operations inside the UAE.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Banking and Insurance Activities:</strong> Offshore entities cannot operate banking, insurance, or financial services regulated under UAE laws.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Oil, Gas, and Mineral Exploration:</strong> Any activities related to natural resources within the UAE are prohibited.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Gambling and Related Businesses:</strong> Activities involving gambling, betting, or casinos are not permitted.</p>

  <p><strong><i class="fa-solid fa-angles-right"></i> Telecommunications and Broadcasting:</strong> These sectors require special licensing and are not allowed under offshore company activities.</p>
</div>


                                                             
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 shadow">
    <div class="spacing-26">
        <div class="service-title mb-30">
            <div class="service-header">
                <h3 class="mb-0">Activities Allowed for Ajman Offshore Companies</h3>
            </div>                                        
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                    <div class="featured-desc">
                        <p><strong><i class="fa-solid fa-angles-right"></i> International Trading and Commerce:</strong> Offshore companies can conduct trade with overseas clients, suppliers, and partners.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Holding and Managing Investments:</strong> Holding shares, intellectual property, real estate (outside UAE or approved areas), and other assets globally is permitted.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Asset Protection and Estate Planning:</strong> Ajman offshore companies are widely used for protecting family wealth and facilitating succession planning.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Consulting and Advisory Services (Outside UAE):</strong> Providing consultancy or advisory services to clients outside the UAE jurisdiction.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Intellectual Property Ownership:</strong> Holding trademarks, patents, copyrights, and licensing rights.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Import and Export Operations:</strong> Managing international import/export businesses without directly trading within the UAE.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> E-commerce and Digital Businesses:</strong> Operating online businesses that target markets outside the UAE.</p>

                        <p><strong><i class="fa-solid fa-angles-right"></i> Investment Holding:</strong> Serving as a holding company for subsidiaries, joint ventures, or international investments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                </div>
                                
                                 <div class="section-title">
                                    <div class="title-header">
                                        <!--<h3>Company Setup-->
                                        <!--    in Dubai Mainland</h3>-->
                                        <h2 class="title" style="font-size:34px">What Are the Benefits of Company Formation in Ajman Offshore?</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Forming a company in <b>Ajman Offshore</b> has become an increasingly popular choice for international entrepreneurs, investors, and businesses seeking a flexible, cost-effective, and tax-efficient offshore jurisdiction. Ajman Offshore, regulated by the Ajman Free Zone Authority (AFZA), provides a streamlined process and attractive features designed to support global business activities without the complexities of operating within the UAE mainland.</p>
<br>
<p>Below are the main benefits and features that make Ajman Offshore a compelling option for company formation:</p>
<br>

                                    </div>
                                </div>
                                 <div class="section-title">
                                    <div class="title-header">
                                        <!--<h3>Company Setup-->
                                        <!--    in Dubai Mainland</h3>-->
                                        <h2 class="title" style="font-size:26px"> 1. 100% Foreign Ownership and Control</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>One of the most significant advantages of Ajman Offshore companies is that they allow <b>full foreign ownership.</b> There is no requirement for a local UAE national partner or sponsor, giving investors complete control over their business operations and decision-making.</p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                        <!--<h3>Company Setup-->
                                        <!--    in Dubai Mainland</h3>-->
                                        <h2 class="title" style="font-size:26px"> 2. Tax Efficiency: No Corporate or Personal Taxes</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman Offshore companies benefit from a <b>tax-neutral environment</b> with <b>no corporate income tax, no personal income tax, no withholding tax,</b> and <b>no capital gains tax.</b> This makes it an ideal jurisdiction for international trading, investment holding, and asset management, allowing companies to maximize profitability and reinvest capital without tax leakage.</p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 3. Confidentiality and Privacy</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman Offshore offers a high level of <b>confidentiality</b> and <b>privacy</b> protection. The identities of shareholders and directors are not publicly disclosed, helping protect personal and business information. This feature is particularly beneficial for investors who prioritize discretion and security.</p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 4. No Physical Office or Local Employee Requirementsy</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>There is no obligation to maintain a physical office or hire employees locally in Ajman. This greatly reduces operating costs and administrative burdens, making it easier and more affordable for startups and small businesses to operate internationally.</p>


                                    </div>
                                </div>
                                 <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 5. Simplified and Quick Incorporation Process</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Setting up an Ajman Offshore company is straightforward and can typically be completed within <b>3 to 5 business days</b>. The process involves minimal paperwork and streamlined government approvals, allowing entrepreneurs to focus on growing their business rather than navigating complex bureaucracy.</p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 6. Flexible Company Structure</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman Offshore companies offer flexibility in their corporate structure. A company can be formed with just one shareholder and one director, who can be the same individual. This is ideal for sole proprietors and small businesses seeking simplicity in ownership and management.</p>


                                    </div>
                                </div>
                                 <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 7. No Minimum Capital Requirement</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>There is no mandatory minimum share capital requirement for Ajman Offshore companies. This allows businesses to start with a low initial investment, lowering entry barriers for entrepreneurs and small investors.</p>


                                    </div>
                                </div>
                                 <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 8. Ability to Own International Assets</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman Offshore companies can hold assets internationally, including real estate (subject to local laws), shares in other companies, intellectual property rights, and bank accounts. This makes it an excellent vehicle for <b>asset protection, investment holding, and estate planning.</b></p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 9. Access to International Banking Facilities</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Companies registered offshore in Ajman often find it easier to open multi-currency bank accounts with local UAE banks and reputable international financial institutions. This facilitates smooth international trade and capital management.</p>


                                    </div>
                                </div>
                                <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 10. Cost-Effective Maintenance and Compliance</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>The annual maintenance fees and renewal costs for Ajman Offshore companies are competitive compared to other jurisdictions. Furthermore, the compliance requirements are reasonable, with no mandatory auditing or complex reporting obligations for most companies.</p>


                                    </div>
                                </div>
                                   <div class="section-title">
                                    <div class="title-header">
                                       
                                        <h2 class="title" style="font-size:26px"> 11. Strategic Location and Time Zone Advantage</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Ajman is located in the UAE, a global business hub at the crossroads of Europe, Asia, and Africa. The region’s strategic location, advanced infrastructure, and time zone advantages make it easier to manage business operations across multiple continents.<br>Choosing Ajman Offshore for company formation offers a blend of <b>flexibility, privacy, and financial efficiency</b> supported by a simple and transparent regulatory framework. It is a trusted choice for investors and entrepreneurs aiming to establish a robust international business presence, protect their assets, and benefit from the UAE’s strategic advantages—without the complexities and costs associated with onshore operations.<br>Whether your goal is international trading, investment holding, or wealth protection,<b> Ajman Offshore provides an ideal platform to meet your business needs efficiently and cost-effectively.</b></p>


                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
           
 <section class="prt-row home03-process-section clearfix right-side-form-card1">
                <div class="container">
                    <div class="row p-0">
                        <div class="col-lg-12 p-0">
                            <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                                <div class="prt-processbox processbox-03" style="width: 57%; height: 700px; overflow: scroll; padding-top:50px;">
                                    <div class="">
                                        <h2 class="title m-0" style="font-size: 26px;">How to Open a Bank Account for an Ajman Offshore Company </span>
                                        </h2>
                                        <p>Opening a bank account is a crucial step for Ajman Offshore companies to manage their finances, facilitate international transactions, and build business credibility. While the process may vary slightly depending on the bank chosen, the general steps and requirements for opening a corporate bank account for an Ajman Offshore company are as follows:</p>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number"></span>
                                                <p>step</p>
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3> Choose the Right Bank</h3>
                                            </div>
                                            <div class="prt-box-description"> Ajman Offshore companies can open accounts with various local UAE banks as well as some international banks that have branches or correspondent banking relationships in the UAE. It’s important to select a bank that offers services aligned with your business needs, such as multi-currency accounts, online banking, and international wire transfers.</div>
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number"></span>
                                                <p>step</p>
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Prepare Required Documentation</h3>
                                            </div>
                                            <div class="prt-box-description"> Banks in the UAE have strict Know Your Customer (KYC) and Anti-Money Laundering (AML) policies. Commonly required documents include:
                                            <ul>
                                                <li><b>Certificate of Incorporation</b> of the Ajman Offshore company</li>
                                                <li><b>Memorandum and Articles of Association</b></li>
                                                <li><b>Board Resolution</b> approving the opening of the bank account and authorizing signatories</li>
                                                <li><b>Passport copies and proof of address</b> of all shareholders, directors, and authorized signatories</li>
                                                <li><b>Business plan or description of business activities</b></li>
                                                <li><b>Reference letters</b> from previous banks (if applicable)</li>
                                                <li><b>Proof of company’s registered address</b> (from Ajman Free Zone Authority)</li>
                                                <li><b>Completed bank account application forms</b></li>
                                            </ul>
                                            <p style="color:red;">Note: Some banks may request additional documents or due diligence depending on the nature of the business and the applicant’s profile.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number"></span>
                                                <p>step</p>
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3> Submit the Application
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">You or your appointed company representative must submit the application and all required documents to the chosen bank. Many banks require the account signatories and directors to attend an in-person interview as part of the verification process.</div>
                                           
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number"></span>
                                                <p>step</p>
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Bank Due Diligence and Approval</h3>
                                            </div>
                                            <div class="prt-box-description">The bank will conduct a thorough review of the submitted documents and perform background checks on the company and its beneficial owners. This process can take anywhere from a few days to several weeks depending on the bank’s internal policies.</div>
                                           
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number"></span>
                                                <p>step</p>
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Account Activation and Access</h3>
                                            </div>
                                            <div class="prt-box-description"> Once approved, the bank will provide account details, checkbooks, debit or credit cards, and online banking credentials as applicable. The company can then begin conducting business transactions using the account.</div>
                                           
                                        </div>
                                    </div>
                                    <br>
                                   <h2 class="margin-top:30px;">Additional Tips</h2>
                                   <ul>
                                       <li><b>Seek professional assistance:</b>  Engaging with experienced consultants like Ashton & Well can help navigate complex banking requirements and increase the likelihood of approval.</li>
                                       <li><b>Maintain good compliance:</b>  Ensure your company complies with all UAE regulations and keep your corporate records updated to avoid account suspension.</li>
                                       <li><b>Consider multi-currency accounts:</b> Many banks offer accounts that support multiple currencies, which is beneficial for international trading companies.</li>
                                      
                                      
                                   </ul>
                                   <p>Opening a bank account for an Ajman Offshore company requires careful preparation and attention to detail, but with the right guidance and documentation, the process can be smooth and efficient.</p>
                                    
                                </div>
                                <div class="prt-processbox processbox-01 right-side-form-card " style="width: 36%; margin-top:40px;">
                                   
                                   <?php echo $__env->make('front.layouts.includes.package-enquiry-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                                </div>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>



  <?php echo $__env->make('front.layouts.includes.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
            <!-- about-section-end -->
            <section class="prt-row wptb-why-choose-one">
            <div class="container" style="max-width:1300px;">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center mb-5">
                        <h6 class="wptb-item--subtitle">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                                </svg>
                            </span>
                            Why Choose Us
                        </h6>
                        <h1 class="wptb-item--title"> Why Choose Ashton & Well for Your Ajman Free Zone Company Formation?</h1>
                        <p>At <b>Ashton & Well,</b> we specialize in providing seamless and professional company formation services in the Ajman Free Zone, guiding you every step of the way to ensure a hassle-free setup experience. Here’s why businesses trust us to establish their presence in Ajman:</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 pe-md-5">
                        <div class="wptb-client-review bg-white wow skewIn card-review-card">
                            <div class="wptb-item--inner">
                                <div class="wptb-heading">
                                    <div class="wptb-item--inner text-center">
                                        <h6 class="wptb-item--subtitle">BUSINESS  OPPORTUNITIES</h6>
                                        <h1 class="wptb-item--title" style="font-family: 'fontello';"> <span>We help Making your dream into Reality</span></h1>
                                    </div>
                                </div>
                                
                                <div class="wptb-item--images">
                                    <div class="wptb-counter1">
                                        <div class="wptb-item--inner">
                                            <div class="wptb-item--value">4.8</div>
                                        </div>
                                    </div>
    
                                    <div class="wptb-avatar avatar-group">
                                        <!-- Avatar Group -->
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/1.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/2.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/3.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <span class="avatar-initials rounded-circle"><a href="#">12+</a></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="wptb--rating-label">Creating Business Growth</div>
                                <div class="wptb-item--star">
                                    <div class="item-star"> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i> </div> 
                                   <button style="background:#162842" data-bs-toggle="offcanvas" href="#offcanvasExample"> Get in Touch</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="wptb-why-choose--inner">
<div class="row g-0">
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Expertise and Local Knowledge:</h3>
        <p class="wptb-item--description mb-0"> With years of experience in the UAE business landscape, our team has deep knowledge of Ajman Free Zone regulations, procedures, and best practices, ensuring your company is structured efficiently and compliantly.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Tailored Solutions: </h3>
        <p class="wptb-item--description mb-0"> We understand that every business is unique. Our services are customized to meet your specific needs, whether you’re a startup, SME, or multinational looking to expand.
</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">End-to-End Support:</h3>
        <p class="wptb-item--description mb-0">From initial consultation to document preparation, license application, PRO services, and post-incorporation support, we handle all the complexities so you can focus on growing your business.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Quick and Transparent Process:
</h3>
        <p class="wptb-item--description mb-0">We prioritize efficiency and transparency, keeping you informed throughout the incorporation process to deliver your Ajman Free Zone company setup promptly and within budget.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Strong Network:</h3>
        <p class="wptb-item--description mb-0"> Our established relationships with government authorities and service providers in Ajman allow us to expedite approvals and facilitate smooth communication.</p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Compliance and Risk Management:</h3>
        <p class="wptb-item--description mb-0">We ensure your company complies with all legal and regulatory requirements, helping you avoid penalties and maintain good standing.</p>
      </div>
    </div>
  </div>
   <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Competitive Pricing:</h3>
        <p class="wptb-item--description mb-0">Ashton & Well offers competitive and clear pricing with no hidden costs, giving you excellent value for a premium service.</p>
      </div>
    </div>
  </div>
   <div class="col-sm-12 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
      
        <p class="wptb-item--description mb-0">Choose <b>Ashton & Well</b> for trusted guidance, personalized service, and a smooth company formation experience in Ajman Free Zone. Let us help you unlock the full potential of your business in one of the UAE’s most attractive economic hubs.</p>
      </div>
    </div>
  </div>

  <!-- Repeat for remaining 6 cards -->
</div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
             <div class="support-card ">
                <img src="<?php echo e(asset('assets/images/support-bg.png')); ?>" width="190px">
                <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3 style="font-size: 32px;
    line-height: 38px;font-weight:600; color:#fff;">Looking for an Experts Advice? </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p style="color:#fff;">Get expert advice tailored to your needs — no pressure, just solutions.<br>
Get instant solutions from professional advisors, who power the platforms our customers swear by</p>
                                                </div>
                                                
                                            </div>
<!--                <div class="support-card-text">-->
<!--                    <h2>Looking for an Experts Advice? </h2>-->
<!--                    <p style="color:#fff">Get expert advice tailored to your needs — no pressure, just solutions.<br>-->
<!--Get instant solutions from professional advisors, who power the platforms our customers swear by</p>-->


<!--                </div>-->
               <a href="tel:++971 52 993 0830">
  <button>Talk To A Specialist</button>
</a>
            </div>
            
<?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


           
           
        <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        
       <section class="testimonial-section mt-3">
    <div class="testimonial-slider-wrapper">
      <div class="testimonial-slider">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Kelly Williamson</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Sarah Jordan</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Anna Peterson</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>
      </div>

      <div class="testimonial-nav">
        <button id="prevBtn">&larr;</button>
        <button id="nextBtn">&rarr;</button>
      </div>
    </div>
  </section>
           

        </div><!-- site-main end-->
         <script>
    const slider = document.querySelector('.testimonial-slider');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let index = 0;

    function updateSlider() {
      const cardWidth = cards[0].offsetWidth;
      slider.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
      if (index > 0) {
        index--;
        updateSlider();
      }
    });

    nextBtn.addEventListener('click', () => {
      if (index < cards.length - 1) {
        index++;
        updateSlider();
      }
    });

    window.addEventListener('resize', updateSlider);
  </script>
  
  <script>
function openModal(id) {
  document.getElementById(`modal-${id}`).style.display = 'flex';
}

function closeModal(id) {
  document.getElementById(`modal-${id}`).style.display = 'none';
}

// Close modal if clicked outside
window.addEventListener('click', function (e) {
  document.querySelectorAll('.custom-modal').forEach(modal => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
});
</script>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/ajman-offshore.blade.php ENDPATH**/ ?>