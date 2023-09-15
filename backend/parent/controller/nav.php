<?php
session_start();
include "./model/_viewprofile.php";
$parent_id = $_SESSION['parent_id'];
$parent_name = $_SESSION['parent_name'];
$school_id = $_SESSION['school_id'];
if(!($parent_id))
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
                    <h6><?php echo $_SESSION['parent_name'];?></h6>
                    <p class="text-muted mb-0">Parent</p>
                </div>
            </span>
        </a>
        <div class="dropdown-menu">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="../uploaded_img/<?php echo $row['image'];?>" alt="User Image" class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6><?php echo $_SESSION['parent_name'];?></h6>
                    <p class="text-muted mb-0">Student</p>
                </div>
            </div>
            <a class="dropdown-item" href="profile.php">My Profile</a>
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
            <li>
                  <a href="result.php"<i class="fas fa-book"></i><span> Child Result</span></a> 
            </li>
          
        </ul>
    </div>
</div>
</div>