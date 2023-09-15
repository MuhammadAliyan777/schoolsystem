<?php 
ob_start();
include "model/_addbank.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Add Bank</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

<?php include "controller/nav.php"; ?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="page-title">Invoice settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Bank Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-4">
               
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="card invoices-settings-card">
                            <div class="card-header">
                                <h5 class="card-title">Bank Settings</h5>
                            </div>
                            <div class="card-body">

                                <form method="post" action="#" class="invoices-settings-form">
                                
                                    <div class="row align-items-center form-group">
                                        <label for="email" class="col-sm-3 col-form-label input-label">Account Holder
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" required value="<?php if(isset($row['account_holder'])){$name = $row['account_holder']; echo $name; }?>" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">Bank name</label>
                                        <div class="col-sm-9">
                                            <input type="text" required value="<?php if(isset($row['bank_name'])){$bank_name = $row['bank_name']; echo $bank_name; }?>" name="b_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">IBAN Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="iban" required value="<?php if(isset($row['iban'])){$iban = $row['iban']; echo $iban; }?>" class="form-control">
                                        </div>
                                    </div>
                                 
                                  <div class="row align-items-center form-group">
                                        <label for="phone" class="col-sm-3 col-form-label input-label">Account
                                            Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="acc_no" required value="<?php if(isset($row['acc_no'])){$acc_no = $row['acc_no']; echo $acc_no; }?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="invoice-setting-btn text-end">
                                    <button type="submit" class="btn cancel-btn me-2">Cancel</button>
                                    <?php
                                    $sql = "SELECT * FROM `bank` WHERE user_id = $head_id";
                                    $res = mysqli_query($conn,$sql);
                                    $row = mysqli_num_rows($res);
                                    if(mysqli_num_rows($res) > 0)
                                    {
                                        echo '<button type="submit" name="up_btn" class="btn btn-primary-save-bg">Save Changes</button>';
                                    }
                                    else{
                                        echo '  <button type="submit" name="btn" class="btn btn-primary-save-bg">Add Bank Account</button>';
                                    }
                                  ?>
                                       
                                      
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../assets/plugins/apexchart/chart-data.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
<?php
ob_end_flush();
?>