<?php
session_start();
include "./model/_viewprofile.php";
$std_id = $_SESSION['std_id'];
$std_name = $_SESSION['std_name'];
$school_id = $_SESSION['school_id'];
if(!($std_id))
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
 
<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>

<ul class="nav user-menu">
    <li class="nav-item dropdown noti-dropdown language-drop me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="../assets/img/icons/header-icon-01.svg" alt="">
        </a>
        <div class="dropdown-menu ">
            <div class="noti-content">
                <div>
                    <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                    <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                    <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                </div>
            </div>
        </div>
    </li>

    <li class="nav-item dropdown noti-dropdown me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="../assets/img/icons/header-icon-05.svg" alt="">
        </a>
        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
                <ul class="notification-list">
                    <li class="notification-message">
                        <a href="#">
                            <div class="media d-flex">
                                <span class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="../assets/img/profiles/avatar-02.jpg">
                                </span>
                                <div class="media-body flex-grow-1">
                                    <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                        approved <span class="noti-title">your estimate</span></p>
                                    <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                   
                </ul>
            </div>
      
        </div>
    </li>

    <li class="nav-item zoom-screen me-2">
        <a href="#" class="nav-link header-nav-list win-maximize">
            <img src="../assets/img/icons/header-icon-04.svg" alt="">
        </a>
    </li>

    <li class="nav-item dropdown has-arrow new-user-menus">
        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
                <img class="rounded-circle" src="../uploaded_img/<?php echo $row['image'];?>" width="31" alt="Soeng Souy">
                <div class="user-text">
                    <h6><?php echo $_SESSION['std_name'];?></h6>
                    <p class="text-muted mb-0">Student</p>
                </div>
            </span>
        </a>
        <div class="dropdown-menu">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="../uploaded_img/<?php echo $row['image'];?>" alt="User Image" class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6><?php echo $_SESSION['std_name'];?></h6>
                    <p class="text-muted mb-0">Student</p>
                </div>
            </div>
            <a class="dropdown-item" href="profile.php">My Profile</a>
            <a class="dropdown-item" href="inbox.html">Inbox</a>
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
            <li>
                <a href="profile.php"><i class="fas fa-user"></i> <span> Profile</span></a>
                 
            </li>
            <li class="submenu">
                <a href="#"><i class="fas fa-graduation-cap"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="my_teachers.php">My Teachers</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#"><i class="fas fa-graduation-cap"></i> <span> Classes</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="my_classes.php">My Classes</a></li>
                </ul>
            </li>
            <li>
                <a href="my_subjects.php"><i class="fas fa-user"></i> <span> Subjects</span></a>
                 
            </li>
            <li>
                <a href="exam.php"><i class="fa fa-list"></i> <span>Exam</span></a>
                 
            </li>
            <li>
                <a href="my_mates.php"><i class="fa fa-list"></i> <span>Class Mates</span></a>
                 
            </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>