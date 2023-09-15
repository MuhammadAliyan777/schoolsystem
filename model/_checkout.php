<?php
include "../controller/connection.php";
session_start();

$duration = $_SESSION['duration'];
$plan_id = $_SESSION['plan_id'];
if(isset($_POST['btn']))
{
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $card_type = $_POST['card_type'];
    $expiry_date = $_POST['card_expiry'];
    $cvv = $_POST['cvv'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $password = md5($_POST['password']);
    

    $today_date = date('mm/dd/yy');
    if($expiry_date<$today_date)
    {
        echo "<script>alert('Card was Expired')</script>";
    }
    $sql = "SELECT * FROM `schools_list` WHERE `school_name` = '$school_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo "<script>alert('School Already registered by this name')</script>";
    }

    else{
        $date = date("y/m/d");
        $sql1 = "INSERT INTO `schools_list`(`school_name`, `school_address`, `admin_name`, `admin_email`, `password`, `reg_date`,`period`,`plan`) VALUES ('$school_name','$school_address','$admin_name','$admin_email','$password','$date','$duration','$plan_id')";
        $res = mysqli_query($conn,$sql1);
        $check = "SELECT * FROM `schools_list` WHERE school_name = '$school_name'";
        $res1 = mysqli_query($conn,$check); 
        $row = mysqli_fetch_assoc($res1);
        $school_id = $row['id'];
        $sql2 = "INSERT INTO `user`(`name`, `email`, `password`,`school_id`,`role`) VALUES ('$admin_name','$admin_email','$password',$school_id,'admin')";
        $res2 = mysqli_query($conn,$sql2);
      
    require_once "../PHPMailer/PHPMailerAutoload.php";



    //==Email Process===================
    $mail = new PHPMailer;
    //Enable SMTP debugging. 
    //$mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "aliyanmuhammad840@gmail.com";
    $mail->Password = "nkrhruimghrigmwd";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to 
    $mail->Port = 587;

    $mail->From = "aliyanmuhammad840@gmail.com";
    $mail->FromName = "PreSkool";

    $mail->addAddress($admin_email, "PreSkool");
    //$mail->AddCC($varEmail,'');

    $mail->isHTML(true);

    $mail->Subject = "School Registered - PreSkool";
    $mail->Body = '<body style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
          <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">The ' . $school_name . '</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">has successfully been registered in our management system with admin email ' . $admin_email . '</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;" valign="top">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center; background-color: #3498db;" valign="top" align="center" bgcolor="#3498db">Plan Duration = ' . $duration . ' years</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Login in our website and enhanced your knowledge by visiting the Amazing Knowledge Resources Of Preskool.</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Thanks,<br> Regards, The Management Of Preskool.</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

            <!-- START FOOTER -->
            <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                <tr>
                  <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                    <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Company Inc, 3 Abbey Road, San Francisco CA 94102</span>
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                    Powered by <a href="http://localhost/vision/views/index.php" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Team Anonymous</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
      </tr>
    </table>
  </body>';

    $mail->AltBody = "This is the plain text version of the email content";
    $mail->send();

    //==End Email Process===================



 
        header('Location: plans.php');
    }
}
?>