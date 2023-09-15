<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Classes</title>

    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <?php
        include "controller/nav.php";
        ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Classes</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Classes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="student-group-form">
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input name="by_id" type="text" class="form-control" placeholder="Search by ID ...">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" name="by_name" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <input type="number" name="by_grade" class="form-control" placeholder="Search by Grade ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" name="search_btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">

                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Classes List</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">
                                            <a href="classes.php" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                            <a href="teachers-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                            <a href="../export_classes.php" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                            <a href="add-teacher.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Name</th>
                                                <th>Teacher Name</th>
                                                <th>Grade</th>
                                                <th>Year</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php include "model/_viewclasses.php"; ?>

                                                <?php
                                                while($row = mysqli_fetch_assoc($res))
                                                {
                                                    echo'
                                                <td>'.$row['id'].'</td>
                                                <td>'.$row['class_name'].'</td>
                                                <td>'.$row['teacher_name'].'</td>
                                                <td>'.$row['grade'].'</td>
                                                <td>'.$row['year'].'</td>
                                                <td class="text-end">
                                                    <div class="actions ">
                                                    <a href="classes.php?delete='?><?php echo $row['id'];?><?php echo'" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-delete"></i>
                                                    </a>
                                                       
                                                        <a href="edit-classes.php?update='?><?php echo $row['id'];?><?php echo'" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                        </a>
                                                    
                                                    </div>
                                                </td>
                                                </tr>';
                                                ?>
                                                <?php
                                                }
                                                ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer>
                <p>Copyright © 2022 Dreamguys.</p>
            </footer>

        </div>

    </div>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/feather.min.js"></script>

    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets/plugins/datatables/datatables.min.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>
<?php
ob_end_flush();
?>