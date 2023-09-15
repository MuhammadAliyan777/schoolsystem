<?php
 ob_start();
?>
<?php
if(!($_GET['plan_id']))
{
    header('Location: plans.php');
}
else{
    if($_GET['plan_id'])
    {
        $id = $_GET['plan_id'];
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>School Registration</title>
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
    include "../model/_school_reg.php";
    ?>
  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Register YourSchool</h2>
              <div class="page_link">
                <a href="index.php">Home</a>
                <a href="school_reg.php">School Register</a>
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
            <h2 style="text-align: center;">Register Your School In Our Managment System!</h2>
            <br>

            <div class="form-group">
              <input type="text" class="form-control" id="name" name="school_name" placeholder="Enter School Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter School Name'" required="true" />
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
              Register
            </button>

          </div>
        </form>
      </div>
    </div>
    </div>
  </section>
  <!--================Contact Area =================-->

<?php include '../controller/footer.php';
ob_end_flush();
?>