 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Teacher Dashboard</title>
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
<?php include "controller/connection.php"; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome <?php echo $teacher_name;?></h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <?php 
                                        $sql = "SELECT * FROM `student` WHERE school_id = $school_id";
                                        $res = mysqli_query($conn,$sql);
                                        $row = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $row;?></h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="../assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Highest Marks</h6>
                                        <?php 
                                        $sql = "SELECT total_marks FROM `result` WHERE school_id = $school_id ORDER BY total_marks  DESC LIMIT 1";
                                        $res = mysqli_query($conn,$sql);
                                        $row = mysqli_fetch_assoc($res);
                                        ?>
                                        <h3><?php echo $row['total_marks'];?></h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="../assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Teachers</h6>
                                        <?php 
                                        $sql = "SELECT * FROM `teacher` WHERE school_id = $school_id";
                                        $res = mysqli_query($conn,$sql);
                                        $row = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $row;?></h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="../assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Classes</h6>
                                        <?php 
                                        $sql = "SELECT * FROM `classes` WHERE school_id = $school_id";
                                        $res = mysqli_query($conn,$sql);
                                        $row = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $row;?></h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="../assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
            <footer>
                <p>Copyright © 2023 Team Anonymous.</p>
            </footer>
        </div>
    </div>
    <script>
    // Sample dynamic data (replace with your actual data)
    <?php
    $sql = "SELECT * FROM `teacher`";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($res);
    $sql2 = "SELECT * FROM `student`";
    $res2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_num_rows($res2);
    $teachers = $row;
    $students = $row2; // Replace with the actual number of students
    ?>

    // Create a chart instance
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut', // Use doughnut chart to show proportion
        data: {
            labels: ['Teacher', 'Student'],
            datasets: [{
                data: [<?php echo $teachers; ?>, <?php echo $students; ?>],
                backgroundColor: ['rgba(54, 162, 235, 0.6)', 'rgba(75, 192, 192, 0.6)'],
                borderColor: ['rgba(54, 162, 235, 1)', 'rgba(75, 192, 192, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            // Customize additional options, such as title, legend, etc.
            legend: {
                display: true,
                position: 'bottom'
            }
        }
    });
</script>

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/charts.js"></script>
</body>

</html>