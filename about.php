<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include('header.php'); ?>
    <!-- end header section -->
  </div>


  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          About Us
        </h2>
      </div>

      <div class="img-box">
        <img src="images/about-medicine.png" alt="">
      </div>
      <div class="detail-box">
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
        <div class="d-flex justify-content-center">
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>



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