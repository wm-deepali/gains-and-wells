<?php
$currentslug = Route::current()->getName();
$logoSec = App\Helpers\Helper::isMarqueShow($currentslug);
?>
<?php if($logoSec == "yes"): ?>
<div class="prt-row padding_zero-section home02-client-section bg-base-grey clearfix">
    <div class="container-fluid">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-12">
                <!-- slick_slider -->
                <div class="slick_slider row" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}'>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img class="img-fluid" src="https://ebmsbusiness.com/wp-content/uploads/2022/05/Emirates-Islamic-bank1.jpeg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img class="img-fluid" src="https://ebmsbusiness.com/wp-content/uploads/2022/05/Emirates-NBD_logo.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img class="img-fluid" src="https://ebmsbusiness.com/wp-content/uploads/2022/05/Dubai-Islamaic-Bank.jpeg" alt="image" height="100px">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img class="img-fluid" src="https://ebmsbusiness.com/wp-content/uploads/2022/05/First-Abu-Dhabi-Bank1.jpg" alt="image" style="height: 150px;" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img class="img-fluid" src="https://ebmsbusiness.com/wp-content/uploads/2022/05/RAKBANK.png" alt="image">
                            </div>
                        </div>
                    </div>
                   
                </div> <!-- slick_slider end -->      
            </div>
        </div> <!-- row end -->
    </div>
</div>
<?php endif; ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/marque.blade.php ENDPATH**/ ?>