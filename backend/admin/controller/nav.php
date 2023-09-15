<?php
session_start();

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$school_id = $_SESSION['school_id'];
if(!($admin_id))
{
    header('Location: ../../controller/logout.php');
}
?>
<div class="header">

    <div class="header-left">
        <a href="index.php" class="logo">
            <img src="../assets/img/logo.png" alt="Logo">
        </a>
        <a href="index.php" class="logo logo-small">
            <img src="../assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown language-drop me-2">
            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                <img src="../assets/img/icons/header-icon-01.svg" alt="">
            </a>
          
        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                <img src="../assets/img/icons/header-icon-04.svg" alt="">
            </a>
        </li>

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="../assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy">
                    <div class="user-text">
                        <h6><?php echo $_SESSION['name']; ?></h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="../assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?php echo $_SESSION['name']; ?></h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="../../controller/logout.php">Logout</a>
            </div>
        </li>

    </ul>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li>
                    <a href="index.php"><i class="feather-grid"></i> <span> Dashboard</span></a>

                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="students.php">Student List</a></li>
                        <li><a href="add-student.php">Student Add</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Classes</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="classes.php">Classes</a></li>
                        <li><a href="add_classes.php">Add Classes</a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Exam</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="exam.php">All Exams</a></li>
                        <li><a href="add-exam.php">Add Exam</a></li>
                        <li><a href="grant-result.php">Grant Result</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="teachers.php">Teacher List</a></li>
                        <li><a href="add-teacher.php">Teacher Add</a></li>
                    </ul>
                </li>
        
                <li>
                    <a href="parents.php"><i class="fa fa-list"></i> <span>Parents</span></a>

                </li>
                <li>
                    <a href="subjects.php"><i class="fa fa-list"></i> <span>Subjects</span></a>

                </li>
                
            </ul>
        </div>
    </div>
</div>