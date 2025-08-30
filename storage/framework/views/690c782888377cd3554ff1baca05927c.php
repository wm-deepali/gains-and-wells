<?php $__env->startSection('title'); ?>
  FAQ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <main>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <section id="faq" class="faq section py-5">
      <div class="container">

        <!-- Section Heading -->
        <div class="section-title text-center mb-5">
          <h2>Frequently Asked Questions</h2>
          <p class="text-muted">Find answers to the most common questions</p>
        </div>

        <?php
          use App\Models\Faq;
          use App\Models\Page;

          $currentslug = Route::current()->getName();
          $faqs = collect();

          $page = Page::where('slug', $currentslug)->first();
          if ($page) {
            $faqs = Faq::where('page_id', $page->id)->get();
          }
        ?>

        <!-- Single Accordion Wrapper -->
        <div class="accordion" id="faqAccordion">

          <div class="row g-4 align-items-start">

            <?php if($faqs->isNotEmpty()): ?>
              <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo e($index); ?>">
                      <button class="accordion-button <?php echo e($index != 0 ? 'collapsed' : ''); ?>" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq<?php echo e($index); ?>"
                        aria-expanded="<?php echo e($index == 0 ? 'true' : 'false'); ?>" aria-controls="faq<?php echo e($index); ?>">
                        <?php echo e($index + 1); ?>. <?php echo e($faq->question); ?>

                      </button>
                    </h2>
                    <div id="faq<?php echo e($index); ?>" class="accordion-collapse collapse <?php echo e($index == 0 ? 'show' : ''); ?>"
                      aria-labelledby="heading<?php echo e($index); ?>" data-bs-parent="#faqAccordion">
                      <div class="accordion-body">
                        <?php echo $faq->answer; ?>

                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>
              <!-- FAQ 1 -->
              <div class="col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq1">
                      01. Donec sollicitudin molestie malesuada?
                    </button>
                  </h2>
                  <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in
                      faucibus.
                    </div>
                  </div>
                </div>
              </div>
              <!-- FAQ 2 -->
              <div class="col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq2">
                      02. Sed porttitor lectus nibh vivamus magna justo?
                    </button>
                  </h2>
                  <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                    </div>
                  </div>
                </div>
              </div>

              <!-- FAQ 3 -->
              <div class="col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq3">
                      03. Pellentesque habitant morbi tristique senectus?
                    </button>
                  </h2>
                  <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    </div>
                  </div>
                </div>
              </div>

              <!-- FAQ 4 -->
              <div class="col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq4">
                      04. Lorem ipsum dolor sit amet consectetur?
                    </button>
                  </h2>
                  <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                    </div>
                  </div>
                </div>
              </div>

              <!-- FAQ 5 -->
              <div class="col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq5">
                      05. Curabitur aliquet quam id dui posuere blandit?
                    </button>
                  </h2>
                  <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque.
                    </div>
                  </div>
                </div>
              </div>

            <?php endif; ?>
          </div>

        </div>
      </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Style -->
    <style>
      .faq .accordion-button {
        font-weight: 600;
        font-size: 16px;
        color: #333;
        background: #fff;
        transition: all 0.3s ease;
        box-shadow: none !important;
        /* remove default shadow */
      }

      .faq .accordion-button:focus {
        border-color: transparent !important;
        /* remove blue border */
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.15) !important;
        /* custom shadow */
      }

      .faq .accordion-button:not(.collapsed) {
        color: #0d6efd;
        background: #f8f9fa;
      }

      .faq .accordion-item {
        border: 1px solid #e5e5e5;
        border-radius: 10px;
        overflow: hidden;
      }
    </style>


  </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-mingo-project\gains-and-wells\resources\views/front/faq.blade.php ENDPATH**/ ?>