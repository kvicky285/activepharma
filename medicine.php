<!DOCTYPE html>
<html>
  <?php include('head.php'); ?>
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
      <?php include('header.php'); ?> 
    <!-- end header section -->
  </div>

  <!-- discount section -->
  <div class="layout_padding-top">
    <section class="discount_section ">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-lg-3 col-md-5 offset-md-2">
            <div class="detail-box">
              <h2>
                You get <br>
                any medicine <br>
                on
                <span>
                  10% discount
                </span>

              </h2>
              <p>
                It is a long established fact that a reader will be distracted by
              </p>
              <div>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-5">
            <div class="img-box">
              <img src="images/medicines.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>


  <!-- end discount section -->

  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Vitamins & Supplements


      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel owl-2">
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-6.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <div class="text">
                  <h6>
                    Medicine
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-6.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <div class="text">
                  <h6>
                    Medicine
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-6.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <div class="text">
                  <h6>
                    Medicine
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-6.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <div class="text">
                  <h6>
                    Medicine
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="">
        See more
      </a>
    </div>
  </section>

  <!-- end health section -->

  <!-- info section -->
    <?php include('info.php'); ?>
  <!-- end info section -->

  <!-- footer section -->
  <?php include('footer.php'); ?>
  <!-- footer section -->

  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>