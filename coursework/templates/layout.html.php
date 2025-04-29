<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?=$title?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
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
                urls: ["assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <!-- Home -->
                        <li class="nav-item">
                            <a href="index.php">
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

                        <!-- Questions/Posts Dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#questionsMenu">
                                <i class="fas fa-book-open"></i>
                                <p>Questions/Posts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="questionsMenu">
                                <ul class="nav nav-collapse">
                                    <li><a href="ques.php"><span class="sub-item">View Questions</span></a></li>
                                    <li><a href="addques.php"><span class="sub-item">Add Question</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- Module -->
                        <li class="nav-item">
                            <a href="module.php">
                                <i class="fas fa-book"></i>
                                <p>Module</p>
                            </a>
                        </li>

                        <!-- Contact -->
                        <li class="nav-item">
                            <a href="contact.php">
                                <i class="fas fa-envelope"></i>
                                <p>Contact us</p>
                            </a>
                        </li>

                        

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Admin Site</h4>
                            <!-- Admin -->
                            <li class="nav-item">
                                <a href="admin/user.php">
                                    <i class="fas fa-user-shield"></i>
                                    <p>Admin</p>
                                </a>
                            </li>
                        </li>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <!-- Logout -->
                        <li class="nav-item">
                            <a href="logout.php">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Header -->
            <div class="main-header">
                <div class="logo-header d-flex justify-content-right align-items-center w-100" data-background-color="blue">
                    <a href="index.php" class="logo text-center w-100">
                        <span class="text-white fs-4">CoursWork Greenwich</span>
                    </a>
                </div>
            </div>

            <!-- Content -->
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3"><?=$title?></h3>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="ques.php" class="btn btn-label-info btn-round me-2">Question/Post</a>
                            <a href="addques.php" class="btn btn-primary btn-round">Post Question</a>
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
                        &copy; <?=date('Y')?> CourWork Greenwich. 
                        <a href="contact.php">Contact us</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    
    <!-- Optional JS -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    
    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
</body>
</html>