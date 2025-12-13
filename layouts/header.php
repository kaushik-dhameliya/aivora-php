<?php
$current_page = basename($_SERVER['PHP_SELF']);

$pages_group = [
    "service.php",
    "service-details.php",
    "career.php",
    "career-details.php",
    "project.php",
    "project-details.php",
    "team.php"
];

$service_group = [
    "service-details.php",
];

$blog_group = [
    "blog.php",
    "blog-details.php"
];
?>

<header id="xb-header-area" class="header-area header-style--one header-transparent is-sticky">
    <div class="xb-header stricky">
        <div class="container mxw-1650">
            <div class="header__wrap ul_li_between">

                <!-- Logo -->
                <div class="xb-header-logo">
                    <a href="index.php" class="logo1">
                        <img src="assets/img/logo/logo.svg" alt="Logo">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="main-menu__wrap navbar navbar-expand-lg p-0">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>

                            <!-- HOME -->
                            <li
                                class="menu-item-has-children <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                <a href="index.php"><span>Home</span></a>
                                <ul class="submenu">
                                    <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                        <a href="index.php"><span>Ai Agency</span></a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'ai-marketing.php') ? 'active' : ''; ?>">
                                        <a href="ai-marketing.php"><span>Ai Marketing</span></a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'ai-chatbot.php') ? 'active' : ''; ?>">
                                        <a href="ai-chatbot.php"><span>Ai Chatbot</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- ABOUT -->
                            <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                                <a href="about.php"><span>About Us</span></a>
                            </li>

                            <!-- PAGES MEGA MENU -->
                            <li
                                class="menu-item-has-children megamenu <?php echo (in_array($current_page, $pages_group)) ? 'active' : ''; ?>">
                                <a href="#!"><span>Pages</span></a>
                                <ul class="submenu">
                                    <li>
                                        <div class="mega_menu_wrapper">
                                            <div class="container-fluid p-0">
                                                <div class="mega_menu_wrapper_inner">

                                                    <div class="row mt-none-30">
                                                        <div class="col-xl-8 col-lg-12 mt-30">
                                                            <div class="megamenu_pages_wrapper">
                                                                <div class="row g-10">

                                                                    <!-- SERVICE -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="service.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <small class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_01.svg"
                                                                                        alt="">
                                                                                </small>
                                                                                <small
                                                                                    class="iconbox_title">Services</small>
                                                                            </span>
                                                                            <span class="description mb-0">Happy to help
                                                                                you!</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- SERVICE DETAILS -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="service-details.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'service-details.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <small class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_01.svg"
                                                                                        alt="">
                                                                                </small>
                                                                                <small class="iconbox_title">Service
                                                                                    details</small>
                                                                            </span>
                                                                            <span class="description mb-0">Happy to help
                                                                                you!</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- CAREER -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="career.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'career.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <span class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_03.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <small
                                                                                    class="iconbox_title">Career</small>
                                                                                <span class="badge">We’re Hiring</span>
                                                                            </span>
                                                                            <span class="description mb-0">Open jobs to
                                                                                join our team.</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- CAREER DETAILS -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="career-details.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'career-details.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <span class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_02.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <small class="iconbox_title">Career
                                                                                    details</small>
                                                                            </span>
                                                                            <span class="description mb-0">We are
                                                                                friendly. Join our team.</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- PROJECT -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="project.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'project.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <span class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_03.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <small
                                                                                    class="iconbox_title">Project</small>
                                                                            </span>
                                                                            <span class="description mb-0">Explore our
                                                                                casestudies.</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- PROJECT DETAILS -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="project-details.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'project-details.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <span class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_03.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <small class="iconbox_title">Project
                                                                                    details</small>
                                                                            </span>
                                                                            <span class="description mb-0">Explore our
                                                                                casestudies.</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- TEAM -->
                                                                    <div class="col-xl-4 col-lg-4">
                                                                        <a href="team.php"
                                                                            class="iconbox_block_2 <?php echo ($current_page == 'team.php') ? 'active' : ''; ?>">
                                                                            <span class="icon_title_wrap">
                                                                                <span class="iconbox_icon">
                                                                                    <img src="assets/img/icon/m_04.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <small class="iconbox_title">Our
                                                                                    team</small>
                                                                            </span>
                                                                            <span class="description mb-0">We are
                                                                                friendly. Join our team.</span>
                                                                        </a>
                                                                    </div>

                                                                </div>

                                                                <!-- MEGA MENU BOTTOM BUTTONS -->
                                                                <ul class="btns_group mt-80 p-0 ul_li_between">
                                                                    <li>
                                                                        <a href="contact.php"
                                                                            class="thm-btn agency-btn megamenu-btn">
                                                                            <span class="text">Get free
                                                                                consultation</span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <div class="review_short_info_2">
                                                                            <div class="review_admin_logo">
                                                                                <img src="assets/img/logo/client-logo.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="review_info_content">
                                                                                <ul class="rating_block unordered_list">
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                </ul>
                                                                                <div class="review_counter">From
                                                                                    <b>200+</b> reviews
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="review_short_info_2">
                                                                            <div class="review_admin_logo">
                                                                                <img src="assets/img/logo/client-logo2.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="review_info_content">
                                                                                <ul class="rating_block unordered_list">
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                </ul>
                                                                                <div class="review_counter">From
                                                                                    <b>150+</b> reviews
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- MEGA MENU RIGHT SIDE -->
                                                        <div class="col-xl-4 col-lg-12 mt-30">
                                                            <div class="mega_menu_left">

                                                                <!-- Block #1 -->
                                                                <div class="author_box">
                                                                    <div class="author_image">
                                                                        <img src="assets/img/blog/mega-robot.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="author_box_content">
                                                                        <h3 class="mb-60 text-white">
                                                                            Looking for custom AI solutions tailored to
                                                                            you?
                                                                        </h3>
                                                                        <a href="contact.php"
                                                                            class="thm-btn agency-btn megamenu-btn">
                                                                            <span class="text">Contact us now</span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- Block #2 -->
                                                                <div class="author_box">
                                                                    <div class="author_image">
                                                                        <img src="assets/img/avatar/mega-avatar.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="author_box_content">
                                                                        <p class="mb-45 text-white">
                                                                            “As CEO of Telligy, I’ve focused on clarity,
                                                                            efficiency, and results — turning ideas into
                                                                            real value without reinventing the wheel.”
                                                                        </p>
                                                                        <div class="author_holder">
                                                                            <h4 class="author_name text-white">Sebastian
                                                                                Patel</h4>
                                                                            <span class="author_designation text-white">
                                                                                CEO & Chairman at <a
                                                                                    href="index.php">Aivora</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div><!-- /row -->

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- SERVICES MEGA MENU -->
                            <li
                                class="menu-item-has-children megamenu <?php echo (in_array($current_page, $service_group)) ? 'active' : ''; ?>">
                                <a href="#!"><span>Services</span></a>
                                <ul class="submenu">
                                    <li>
                                        <div class="mega_menu_wrapper">
                                            <div class="container-fluid p-0">
                                                <div class="mega_menu_wrapper_inner megamenu_widget_wrapper">

                                                    <div class="row justify-content-lg-between">

                                                        <div class="col-xl-9 col-lg-8">
                                                            <div class="mega_menu_box">

                                                                <div class="megamenu_widget_inner">
                                                                    <div class="row">

                                                                        <div class="col-xl-4 col-lg-6 megamenu-col">
                                                                            <div class="megamenu_widget">
                                                                                <ul
                                                                                    class="icon_list unordered_list_block">
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                saas product.</span></a>
                                                                                    </li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">Data
                                                                                                and
                                                                                                intelligence.</span></a>
                                                                                    </li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                for
                                                                                                E-commerce.</span></a>
                                                                                    </li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                consulting.</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-8 col-lg-6 megamenu-col">
                                                                            <div class="megamenu_widget">
                                                                                <ul
                                                                                    class="icon_list unordered_list_block">
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                chatbot
                                                                                                virtual.</span></a></li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                marketing.</span></a>
                                                                                    </li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">Machine
                                                                                                learning.</span></a>
                                                                                    </li>
                                                                                    <li><a href="service-details.php"><span
                                                                                                class="icon_list_text">AI
                                                                                                integration.</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!-- Social -->
                                                                <div class="social_area">
                                                                    <div class="row mt-none-30 align-items-center">

                                                                        <div class="col-xl-4 mt-30">
                                                                            <div class="social_inner ul_li">
                                                                                <span>Follow Us:</span>
                                                                                <ul
                                                                                    class="social_icons_list unordered_list">
                                                                                    <li><a href="#"><i
                                                                                                class="fab fa-facebook-f"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fab fa-linkedin-in"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fab fa-github"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fab fa-dribbble"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-8 mt-30">
                                                                            <div class="service_link">
                                                                                <div
                                                                                    class="xb-item--inner ul_li_between">
                                                                                    <span class="xb-item--icon">
                                                                                        <img src="assets/img/icon/m_05.svg"
                                                                                            alt="">
                                                                                    </span>
                                                                                    <div>
                                                                                        <h3 class="xb-item--title">
                                                                                            <a href="contact.php">Need
                                                                                                any custom AI
                                                                                                services?</a>
                                                                                        </h3>
                                                                                        <p class="xb-item--text">
                                                                                            Discover our core offerings.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="contact.php"
                                                                                    class="xb-item--btn">
                                                                                    →
                                                                                </a>
                                                                                <a href="contact.php"
                                                                                    class="xb-overlay"></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- Right Column -->
                                                        <div class="col-xl-3 col-lg-4">
                                                            <div class="megamenu_case">
                                                                <div class="xb-item--inner">
                                                                    <div class="xb-item--img">
                                                                        <img src="assets/img/service/img21.png" alt="">
                                                                    </div>
                                                                    <div class="xb-item--holder">
                                                                        <h3 class="xb-item--title">General AI projects.
                                                                        </h3>
                                                                        <p class="xb-item--text">We deliver AI solutions
                                                                            that streamline operations and boost
                                                                            efficiency.</p>
                                                                        <a class="thm-btn agency-btn megamenu-btn"
                                                                            href="project.php">
                                                                            <span class="text">read more project</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!-- /row -->

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- BLOG -->
                            <li
                                class="menu-item-has-children <?php echo (in_array($current_page, $blog_group)) ? 'active' : ''; ?>">
                                <a href="blog.php"><span>Blog</span></a>
                                <ul class="submenu">
                                    <li class="<?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>">
                                        <a href="blog.php"><span>Blog</span></a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'blog-details.php') ? 'active' : ''; ?>">
                                        <a href="blog-details.php"><span>Blog Details</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- CONTACT -->
                            <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                                <a href="contact.php"><span>Contact Us</span></a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- Header Button -->
                <div class="header-btn">
                    <a class="thm-btn" href="contact.php">join now</a>
                </div>

                <!-- Mobile Toggle -->
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                </div>

            </div>

            <!-- MOBILE MENU PANEL -->
            <div class="xb-header-wrap">
                <div class="xb-header-menu">
                    <div class="xb-header-menu-scroll">
                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                        <div class="xb-logo-mobile xb-hide-xl">
                            <a href="index.php"><img src="assets/img/logo/logo.svg" alt=""></a>
                        </div>

                        <!-- MOBILE NAV -->
                        <nav class="xb-header-nav">
                            <ul class="xb-menu-primary clearfix">

                                <li
                                    class="menu-item menu-item-has-children <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                    <a href="#"><span>Home</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">Ai Agency</a></li>
                                        <li><a href="ai-marketing.php">Ai Marketing</a></li>
                                        <li><a href="ai-chatbot.php">Ai Chatbot</a></li>
                                    </ul>
                                </li>

                                <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                                    <a href="about.php">about us</a>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#"><span>page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="team.php">Team</a></li>
                                        <li><a href="project.php">Project</a></li>
                                        <li><a href="project-details.php">Project Details</a></li>
                                        <li><a href="career.php">Career</a></li>
                                        <li><a href="career-details.php">Career Details</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#"><span>services</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="service.php">Services</a></li>
                                        <li><a href="service-details.php">Service Details</a></li>
                                    </ul>
                                </li>

                                <li
                                    class="menu-item menu-item-has-children <?php echo ($current_page == 'blog.php' || $current_page == 'blog-details.php') ? 'active' : ''; ?>">
                                    <a href="blog.php"><span>Blog</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                                    <a href="contact.php"><span>Contact Us</span></a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="xb-header-menu-backdrop"></div>
            </div>

        </div>
    </div>
</header>