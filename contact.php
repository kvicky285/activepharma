<!DOCTYPE html>
<html>

<?php include('head.php'); ?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include('header.php'); ?>
    <!-- end header section -->
  </div>



  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form>
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputNumber1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="form-group ">
                <label for="inputState">Select medicine</label>
                <select id="inputState" class="form-control">
                  <option selected>Medicine 1</option>
                  <option selected>Medicine 2</option>
                  <option selected>Medicine 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputMessage">Message</label>
                <input type="text" class="form-control" id="exampleInputMessage">
              </div>
              <button type="submit" class="">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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