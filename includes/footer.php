  <section class="sec_form">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="global_content">
            <h2>Your Literary Partners Are Just a Message Away.</h2>
            <p>Have questions about the process? Or perhaps you're ready to
              submit your manuscript for review? Our team of publishing consultants is
              ready to provide the clarity and support you need to move forward with
              confidence.
            </p>
            <ul>
              <li>
                <span>
                  <img src="assets/images/phone.webp" alt="" width="100%" height="100%">
                </span>
                <span>
                  <h5>Toll Free </h5>
                  <a href="tel:+1 (213) 319-5085">+1 (213) 319-5085</a>
                </span>
              </li>
              <li>
                <span>
                  <img src="assets/images/envelope.webp" alt="" width="100%" height="100%">
                </span>
                <span>
                  <h5>Email Us</h5>
                  <a href="mailto:info@primeleafpublishing.com">info@primeleafpublishing.com</a>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="center_girl">
            <img src="assets/images/contact.png" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form_inner">
            <form action="/thank-you/" method="POST">
              <input type="text" name="name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="tel" name="phone" placeholder="Phone number *" required
                oninvalid="this.setCustomValidity('Please Enter Your Full Phone Number')" maxlength="12" minlength="12">
              <textarea name="brief" placeholder="Message"></textarea>
              <input type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="main_footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="footer_logo">
            <a href="/"><img src="assets/images/logo1-01.png" alt="" width="100%" height="100%"></a>
            <p>A dedicated publishing house committed to empowering authors with exceptional quality and personalized
              support.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer_inner">
            <h5>Contact us</h5>
            <ul class="info">
              <li><a href="tel:+1 (213) 319-5085"><i class="fa-solid fa-phone"></i> +1 (213) 319-5085</a></li>
              <li><a href="mailto:info@primeleafpublishing.com"><i
                    class="fa-solid fa-envelope"></i>info@primeleafpublishing.com</a></li>
              <li><i class="fa-solid fa-location-dot"></i> United State</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer_inner right">
            <h5>merchants</h5>
            <ul>
              <!-- <li><img src="assets/images/merchant1.webp" alt="" width="100%" height="100%"></li>
                        <li><img src="assets/images/merchant2.webp" alt="" width="100%" height="100%"></li> -->
              <li><img src="assets/images/merchant3.webp" alt="" width="100%" height="100%"></li>
              <li><img src="assets/images/merchant4.webp" alt="" width="100%" height="100%"></li>
              <!-- <li><img src="assets/images/merchant5.webp" alt=""></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <section class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="bottom_desc">
            <p>Copyrights © 2026. Powered by <a href="/">MIG Innovations</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bottom_desc">
            <ul>
              <li><a target="_blank" href="terms-conditions/">Terms & Condition</a></li>
              <li>|</li>
              <li><a target="_blank" href="privacy-policy/">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer end -->

  <!-- modal -->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="popup_form_wrp">
                <h2>GET FREE <span class="color_form">CONSULTATION</span></h2>
                <p><b>Discuss your idea</b> with our consultants <b>today</b></p>
                <form action="/thank-you/" method="POST">
                  <input type="text" name="name" placeholder="Full Name" required="">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <input type="tel" name="phone" placeholder="Phone Number" required maxlength="12" minlength="12"
                    oninvalid="this.setCustomValidity('Please Enter Your Full Phone Number')">
                  <textarea name="brief" placeholder="Enter a brief description about your project"></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="popup_img">
                <img src="assets/images/popup.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>

  <script>
    zE(function () {
      $zopim.livechat.setOnUnreadMsgs(function (numUnread) {
        if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
          $zopim.livechat.window.show();
        }
      })
    });

    function setButtonURL() {
      $zopim.livechat.window.show();
    }

    function toggleChat() {
      $zopim.livechat.window.show();
    }
  </script>
  <script type="text/javascript">
    zE(function () {
      zE.activate();
    });
  </script>

  <script>
    (function () {
      $('.toggle-wrap').on('click', function () {
        $(this).toggleClass('active');
        $('aside').animate({
          width: 'toggle'
        }, 200);
      });
    })();
  </script>


  <script>
    var Slider = (function () {
      var initSlider = function () {
        var dir = $("html").attr("dir");
        var swipeHandler = new Hammer(document.getElementById("slider"));
        var interval; // To store the interval reference

        swipeHandler.on('swipeleft', function (e) {
          if (dir == "rtl")
            $(".arrow-left").trigger("click");
          else
            $(".arrow-right").trigger("click");
        });

        swipeHandler.on('swiperight', function (e) {
          if (dir == "rtl")
            $(".arrow-right").trigger("click");
          else
            $(".arrow-left").trigger("click");
        });

        $(".arrow-right , .arrow-left").click(function (event) {
          var nextActiveSlide;

          // If right arrow is clicked
          if ($(this).hasClass("arrow-right")) {
            nextActiveSlide = $(".slide.active").next();
            // If we're at the last slide, go to the first slide
            if (nextActiveSlide.length === 0) {
              nextActiveSlide = $(".slide").first();
            }
          }

          // If left arrow is clicked
          if ($(this).hasClass("arrow-left")) {
            nextActiveSlide = $(".slide.active").prev();
            // If we're at the first slide, go to the last slide
            if (nextActiveSlide.length === 0) {
              nextActiveSlide = $(".slide").last();
            }
          }

          if (nextActiveSlide.length > 0) {
            var nextActiveIndex = nextActiveSlide.index();
            $(".dots span").removeClass("active");
            $($(".dots").children()[nextActiveIndex]).addClass("active");

            updateSlides(nextActiveSlide);
          }
        });

        $(".dots span").click(function (event) {
          var slideIndex = $(this).index();
          var nextActiveSlide = $($(".slider").children()[slideIndex]);
          $(".dots span").removeClass("active");
          $(this).addClass("active");

          updateSlides(nextActiveSlide);
        });

        var updateSlides = function (nextActiveSlide) {
          var nextActiveSlideIndex = $(nextActiveSlide).index();

          $(".slide").removeClass("prev-1");
          $(".slide").removeClass("next-1");
          $(".slide").removeClass("active");
          $(".slide").removeClass("prev-2");
          $(".slide").removeClass("next-2");

          nextActiveSlide.addClass("active");

          nextActiveSlide.prev().addClass("prev-1");
          nextActiveSlide.prev().prev().addClass("prev-2");
          nextActiveSlide.addClass("active");
          nextActiveSlide.next().addClass("next-1");
          nextActiveSlide.next().next().addClass("next-2");
        }

        // Auto loop logic
        var startAutoLoop = function () {
          interval = setInterval(function () {
            $(".arrow-right").trigger("click"); // Automatically trigger right arrow click
          }, 3000); // Speed of 1500ms (1.5 seconds)
        }

        var stopAutoLoop = function () {
          clearInterval(interval); // Clear the interval to stop looping
        }

        // Start the loop when the slider initializes
        startAutoLoop();
      }

      return {
        init: function () {
          initSlider();
        }
      }
    })();

    $(function () {
      Slider.init();
    });
  </script>


  <script>
    $(document).ready(function () {
      $('.your-class').slick({
        // options for the slider
      });
    });
  </script>

  <script>
    $('.package_slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });


    $(document).ready(function () {
      $('.logo_slider').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024, // screen width 1024px or less
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768, // screen width 768px or less
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480, // screen width 480px or less
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

    $(document).ready(function () {
      $('.portfolio_slider').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

    $(document).ready(function () {
      $('.testimonial_slider').slick({
        arrows: false,
        dot: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

    $(document).ready(function () {
      $('.mobile_slider').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>
  <script>
    let name = document.querySelectorAll(".tel");
    name.addEventListener("input", function (e) {
      name.setCustomValidity(''); //remove message when new text is input
    });
    name.addEventListener("invalid", function (e) {
      name.setCustomValidity('Please enter your full name'); //custom validation message for invalid text
    });
  </script>
  <script>
    document.getElementById('serv').addEventListener('click', function () {
      const targetElement = document.getElementById('serv_list');
      if (targetElement.classList.contains('active')) {
        targetElement.classList.remove('active');
      } else {
        targetElement.classList.add('active');
      }
    });
  </script>



  </body>

  </html>