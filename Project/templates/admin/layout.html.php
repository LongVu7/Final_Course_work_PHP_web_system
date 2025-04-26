<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?=$title?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">

                        <!-- Public Site Link -->
                        <li class="nav-item" >
                                <a href="../admin/user.php">
                                    <i class="fas fa-home"></i>
                                    <p>Home</p>
                                </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>

                        <!-- User Dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#userMenu">
                                <i class="fas fa-users"></i>
                                <p>User</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="userMenu">
                                <ul class="nav nav-collapse">
                                    <li><a href="../admin/user.php"><span class="sub-item">Users</span></a></li>
                                    <li><a href="../admin/adduser.php"><span class="sub-item" >Add User</span></a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Module Dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#moduleMenu">
                                <i class="fas fa-book"></i>
                                <p>Module</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="moduleMenu">
                                <ul class="nav nav-collapse">
                                    <li><a href="../admin/module.php"><span class="sub-item">Modules</span></a></li>
                                    <li><a href="../admin/addmodule.php"><span class="sub-item">Add Module</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Admin Site</h4>
                            <!-- Admin -->
                            <li class="nav-item">
                                <a href="../index.php">
                                    <i class="fas fa-users-cog"></i>
                                    <p>Public Site</p>
                                </a>
                            </li>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Header -->
            <div class="main-header">
                <div class="logo-header d-flex justify-content-center align-items-center" data-background-color="blue">
                    <a href="../admin/user.php" class="logo">
                        <span class="text-white text-center fs-4">Admin Site</span>
                    </a>
                </div>
            </div>

            <!-- Content -->
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <h6 class="op-7 mb-2">Admin Panel</h6>
                        </div>
                    </div>
                    
                    <!-- Dynamic Content -->
                    <main>
                        <?=$output?>
                    </main>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="copyright">
                        &copy; <?=date('Y')?> CourWork Greenwich. All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    
    <!-- Optional JS -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
</body>
</html>