    <footer class="bg-primary-dark border-top border-white-10">
        <div class="container">
            <div class="row content-space-1">
                <div class="col-lg-8 text-center mx-auto mb-7 mb-lg-0">
                    <div class="mb-5">
                        <a class="navbar-brand" href="./" aria-label="Space">
                            <img class="" width="250" src="assets/img/logo-light.png" alt="Logo">
                        </a>
                    </div>

                    <div>
                        <a class="link-sm link-light me-3" href="about">About us</a>
                        <a class="link-sm link-light me-3" href="faq">FAQ's</a>
                        <a class="link-sm link-light me-3" href="contact">Contact us</a>
                        <a class="link-sm link-light" href="https://wa.me/message/TPBP2S5TYMQ5G1" target="_blank">Trade with us</a>
                    </div>
                </div>

            </div>

            <div class="border-top border-white-10"></div>

            <div class="row align-items-md-end py-5">
                <div class="col-md mb-3 mb-md-0">
                    <p class="text-white mb-0">© <script>document.write(new Date().getFullYear());</script> Koinwa&trade;. All rights reserved.</p>
                </div>

                <div class="col-md d-md-flex justify-content-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="https://instagram.com/koinwa_app" target="_blank">
                            <i class="bi-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="https://twitter.com/KoinwaA" target="_blank">
                            <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php include "./components/modals.php"; ?>
    
    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
       data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
      <i class="bi-chevron-up"></i>
    </a>

    <script src="assets/js/vendor.min.js"></script>

    <script src="assets/js/theme.min.js"></script>

    <script>
      (function() {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF SWIPER
        // =======================================================
        var sliderThumbs = new Swiper('.js-swiper-thumbs', {
          watchSlidesVisibility: true,
          watchSlidesProgress: true,
          history: false,
          breakpoints: {
            480: {
              slidesPerView: 2,
              spaceBetween: 15,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 15,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 15,
            },
          },
          on: {
            'afterInit': function (swiper) {
              swiper.el.querySelectorAll('.js-swiper-pagination-progress-body-helper')
              .forEach($progress => $progress.style.transitionDuration = `${swiper.params.autoplay.delay}ms`)
            }
          }
        });

        var sliderMain = new Swiper('.js-swiper-main', {
          effect: 'fade',
          autoplay: true,
          loop: true,
          thumbs: {
            swiper: sliderThumbs
          }
        })


        // INITIALIZATION OF TEXT ANIMATION (TYPING)
        // =======================================================
        const typed = HSCore.components.HSTyped.init('.js-typedjs')
      })()
    </script>
  </body>
</html>
