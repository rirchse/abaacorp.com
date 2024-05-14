<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo-transparent.png" alt="logo" class="logo-default">
                <img src="/images/logo.png" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown static">
                        <a class="nav-link active" href="/#home"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about"> About </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="#services" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="#"> Software system & Development </a>
                                            <a class="dropdown-item" href="#">App Development</a>
                                            <a class="dropdown-item" href="#">Website Design & Development</a>
                                            <a class="dropdown-item" href="#">Domain & Hosting</a>
                                            <a class="dropdown-item" href="#">BPO Support</a>
                                            <a class="dropdown-item" href="#">Online Marketing</a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="#">Content Development</a>
                                            <a class="dropdown-item" href="#">Graphic Design</a>
                                            <a class="dropdown-item" href="#">UI/UX Design</a>
                                            <a class="dropdown-item" href="#"> Social Media Management</a>
                                            <a class="dropdown-item" href="#"> Market Research</a>
                                            <a class="dropdown-item" href="#"> White Label Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#portfolio">Portfolio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-bs-toggle="collapse" href="#sideNavPages">
                            Services <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Software system & Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">App Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Website Design & Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Domain & Hosting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">BPO Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Online Marketing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Content Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Graphic Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">UI/UX Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Social Media Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Market Research</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">White Label Solution
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Admin Login</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; <span id="year"></span> <?php echo e(ENV('APP_NAME')); ?></p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header --><?php /**PATH /srv/www/abaacorp/resources/views/home/header.blade.php ENDPATH**/ ?>