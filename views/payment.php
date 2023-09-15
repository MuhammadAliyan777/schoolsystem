<?php
 ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>Plan Payment</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/flaticon.css" />
  <link rel="stylesheet" href="../css/themify-icons.css" />
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php
    include "../controller/nav.php";
    include "../model/_checkout.php";
    ?>
  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Online Payment</h2>
              <div class="page_link">
                <a href="index.php">Home</a>
                <a href="payment.php">Payement</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Contact Area =================-->
  <section class="contact_area section_gap">
    <div class="container">
      <div></div>

      <div class="row-lg-9">
        <form class="row contact_form" action="#" method="post" id="contactForm" style="align-items: center; display: flex; justify-content: space-around;">

          <div class="col-md-6">
            <h2 style="text-align: center;">Checkout</h2>
            <br>
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="card_name" placeholder="Enter Name on Card" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Card Name'" required="true" />
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="name" name="card_number" placeholder="Enter Card Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Card Number'" required="true" />
            </div>
            <div class="form-group">
             <select class="form-control w-100" name="card_type" id="">
                <option value="" selected>Choose Card Type</option>
                <option value="master">Master Card</option>
                <option value="credit">Credit Card</option>
                <option value="debit">Debit Card</option>
                <option value="visa">Visa Card</option>
             </select>
            </div>
            <br><br>
            <div class="form-group">
              <input type="date" class="form-control" id="name" name="card_expiry" placeholder="Enter Card Expiry Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Card Expiry Date'" required="true" />
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="name" name="cvv" placeholder="Enter Card CVV" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Card CVV'" required="true" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="pass" name="school_name" placeholder="Enter School Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter School Name'" required="true" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="pass" name="school_address" placeholder="Enter School Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter School Address'" required="true" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="pass" name="admin_name" placeholder="Enter Admin Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Admin Name'" required="true" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="pass" name="admin_email" placeholder="Enter Admin Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Admin Email'" required="true" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pass" name="password" placeholder="Choose Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Choose Password'" required="true" />
            </div>
      

            <button type="submit" name="btn" value="submit" class="btn primary-btn w-100">
              Submit
            </button>

          </div>
        </form>
      </div>
    </div>
    </div>
  </section>
  <!--================Contact Area =================-->
  <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../vendors/nice-select/../js/jquery.nice-select.min.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/owl-carousel-thumb.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../js/gmaps.min.js"></script>
    <script src="../js/theme.js"></script>
<?php include '../controller/footer.php';
ob_end_flush();
?>