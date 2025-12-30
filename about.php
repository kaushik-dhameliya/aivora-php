<?php require_once 'layouts/template_top.php'; ?>

<body class="about-page inner-page">

    <?php require_once('layouts/setting.php'); ?>

    <div class="body_wrap o-clip">

        <!-- header start -->
        <?php require_once 'layouts/header.php'; ?>
        <!-- header end -->

        <div class="body-overlay"></div>

        <!-- main area start -->
        <main>
            <?php
            $page_title = "About Us";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'About Us', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>

            <!-- about start -->
            <section class="about pos-rel pb-140">
                <div class="container">
                    <div class="about-top-image ul_li_between align-items-start">
                        <div class="img-hove-effect">
                            <div class="xb-img">
                                <a href="#!"><img src="assets/img/about/img05.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img05.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img05.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img05.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="img-hove-effect">
                            <div class="xb-img">
                                <a href="#!"><img src="assets/img/about/img06.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img06.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img06.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img06.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="xb-video">
                            <video loop="" muted="" playsinline="" autoplay="" poster="assets/img/about/video-img.png">
                                <source src="https://www.pexels.com/download/video/18069701/">
                            </video>
                        </div>
                        <div class="img-hove-effect">
                            <div class="xb-img">
                                <a href="#!"><img src="assets/img/about/img07.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img07.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img07.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img07.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="img-hove-effect">
                            <div class="xb-img">
                                <a href="#!"><img src="assets/img/about/img08.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img08.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img08.jpg" alt="image"></a>
                                <a href="#!"><img src="assets/img/about/img08.jpg" alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="sec-title sec-title-center about-sec-title about-sec-title-two mt-45">
                        <span class="sub-title mb-10">Who We are?</span>
                        <h2 class="title">
                            We helping<span><img src="assets/img/icon/original-66948a0d81d.gif" alt="image"></span> grow
                            businesses and<span><img src="assets/img/icon/0deec720000b2066289b.gif"
                                    alt="image"></span>scale with smart, <span><img
                                    src="assets/img/icon/b10c3e43e836d32554bf.gif" alt="image"></span> data-driven AI
                            agency
                        </h2>
                        <p class="content">We help grow and scale your business by delivering smart, data-driven AI
                            solutions tailored to your needs. Our technology optimizes operations, enhances
                            decision-making, and uncovers new opportunities for growth.</p>
                    </div>
                    <?php
                    $data = json_decode(file_get_contents("data/service.json"), true);
                    $aboutFeatures = isset($data['about_features']) ? $data['about_features'] : [];
                    ?>

                    <div class="row mt-40">
                        <?php foreach ($aboutFeatures as $feature): ?>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-feature-item">
                                    <div class="xb-item--inner xb-border">
                                        <span class="xb-item--icon"><img src="<?php echo $feature['icon']; ?>" alt="icon"></span>
                                        <div class="xb-item--holder">
                                            <h2 class="xb-item--title"><?php echo htmlspecialchars($feature['title']); ?></h2>
                                            <p class="xb-item--content"><?php echo htmlspecialchars($feature['content']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="about-bg">
                    <img src="assets/img/bg/about-bg02.png" alt="bg-image">
                </div>
            </section>
            <!-- about end -->

            <!-- brand start -->
            <section class="brand pb-150">
                <div class="container">
                    <div class="sec-title sec-title-center brand-sec-title text-center mb-40">
                        <p class="sub-title">
                            World's Best <span>120 Companies</span> Work With Us
                        </p>
                    </div>
                </div>
                <div class="brand-marquee ac-brand-marquee marquee-left">
                    <?php
                    $brandData = [];
                    if (!isset($data)) {
                        $data = json_decode(file_get_contents("data/service.json"), true);
                    }
                    if (isset($data['brand']) && is_array($data['brand'])) {
                        $brandData = $data['brand'];
                    }
                    ?>
                    <div class="ac-brand-inner ul_li_between">
                        <?php foreach ($brandData as $brand): ?>
                            <div class="xb-brand-item">
                                <img src="<?php echo htmlspecialchars($brand['image']); ?>" alt="logo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- brand end -->

            <!-- feature start -->
            <section class="feature-section bg_img parallaxie" data-background="assets/img/bg/feature-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="xb-feature-content">
                                <div class="sec-title sec-title-center fea-sec-title mb-35">
                                    <span class="sub-title mb-20">Why We are Better?</span>
                                    <h2 class="title title-line_height">Why our services are better than others?</h2>
                                </div>
                                <div class="row mt-none-30">
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img
                                                        src="assets/img/icon/fea-small-icon01.svg" alt="icon"></span>
                                                <h2 class="xb-item--title">Secure, ethical & <br> scalable AI</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2 xb-border">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img
                                                        src="assets/img/icon/fea-small-icon04.svg" alt="icon"></span>
                                                <h2 class="xb-item--title">Expert team of AI <br> specialists</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img
                                                        src="assets/img/icon/fea-small-icon02.svg" alt="icon"></span>
                                                <h2 class="xb-item--title">Custom-built <br> solutions that fit you</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2 xb-border">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img
                                                        src="assets/img/icon/fea-small-icon06.svg" alt="icon"></span>
                                                <h2 class="xb-item--title">Client-centered, <br> business-focused</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature end -->

            <!-- team start -->
            <section class="team pt-140 pb-150 bg_img" data-background="assets/img/bg/team-bg.png">
                <div class="container">
                    <div class="sec-title sec-title-center text-center mb-45">
                        <span class="sub-title mb-20">Our Specialists</span>
                        <h2 class="title title-line_height">Dedicated professionals</h2>
                    </div>
                    <div class="row mt-none-55">

                        <?php
                        $data = json_decode(file_get_contents("data/service.json"), true);
                        $professionsl = $data['professionals'];
                        ?>

                        <?php foreach ($professionsl as $member): ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                                <div class="xb-team-item xb-border">
                                    <div class="xb-item--img">
                                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                                    </div>
                                    <div class="xb-item--holder ul_li_between">
                                        <div class="xb-item--author">
                                            <h2 class="xb-item--name"><?php echo $member['name']; ?></h2>
                                            <span class="xb-item--desig"><?php echo $member['designation']; ?></span>
                                        </div>
                                        <span class="xb-item--social xb-border">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </span>
                                    </div>
                                    <div class="xb-bg">
                                        <img src="assets/img/team/noice-bg.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
            <!-- team end -->

            <!-- award start -->
            <section class="award pos-rel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="sec-title mb-30">
                                <span class="sub-title mb-20">Our awards</span>
                                <h2 class="title title-line_height mb-5">We are prestigious award winner</h2>
                                <p class="content">We are a prestigious award-winning agency, recognized for our
                                    excellence and innovation in delivering cutting-edge AI solutions that help
                                    businesses achieve remarkable growth and success. Our commitment client
                                    satisfaction.</p>
                                <div class="team-btn mt-40">
                                    <a class="thm-btn agency-btn" href="contact.php">
                                        <span class="text">Begin Today with us</span>
                                        <span class="arrow">
                                            <span class="arrow-icon">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="5.06592" y="19.9785" width="20.5712" height="2.61221"
                                                        transform="rotate(-40.2798 5.06592 19.9785)" fill="white" />
                                                    <rect x="7.97095" y="7.24463" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 7.97095 7.24463)" fill="white" />
                                                    <rect x="11.6523" y="7.54834" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 11.6523 7.54834)" fill="white" />
                                                    <rect x="15.334" y="7.85205" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 15.334 7.85205)" fill="white" />
                                                    <rect x="18.7119" y="11.8374" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.7119 11.8374)" fill="white" />
                                                    <rect x="18.4084" y="15.52" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.4084 15.52)" fill="white" />
                                                    <rect x="18.104" y="19.2012" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.104 19.2012)" fill="white" />
                                                </svg>
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="5.06592" y="19.9785" width="20.5712" height="2.61221"
                                                        transform="rotate(-40.2798 5.06592 19.9785)" fill="white" />
                                                    <rect x="7.97095" y="7.24463" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 7.97095 7.24463)" fill="white" />
                                                    <rect x="11.6523" y="7.54834" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 11.6523 7.54834)" fill="white" />
                                                    <rect x="15.334" y="7.85205" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 15.334 7.85205)" fill="white" />
                                                    <rect x="18.7119" y="11.8374" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.7119 11.8374)" fill="white" />
                                                    <rect x="18.4084" y="15.52" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.4084 15.52)" fill="white" />
                                                    <rect x="18.104" y="19.2012" width="2.61221" height="2.61221"
                                                        transform="rotate(-40.2798 18.104 19.2012)" fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="integration-logo-wrap ul_li">
                                <div class="award-logo-inner marquee-first">
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img01.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img02.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img03.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img04.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img05.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img06.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img07.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img08.png" alt="award-logo">
                                    </div>
                                </div>
                                <div class="award-logo-inner marquee2">
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img01.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img02.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img07.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img08.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img03.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img04.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img05.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img06.png" alt="award-logo">
                                    </div>
                                </div>
                                <div class="award-logo-inner marquee-first">
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img01.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img03.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img02.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img04.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img06.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img05.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img08.png" alt="award-logo">
                                    </div>
                                    <div class="integration-logo award-logo">
                                        <img src="assets/img/award/img07.png" alt="award-logo">
                                    </div>
                                </div>
                                <div class="xb-shape">
                                    <div class="shape shape--1"></div>
                                    <div class="shape shape--2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="award-gradiant"></span>
            </section>
            <!-- award end -->

        </main>
        <!-- main area end -->

        <!-- footer strt -->
        <?php require_once 'layouts/footer.php'; ?>
        <!-- footer end -->

    </div>

    <!-- jquery include -->

    <?php require_once 'layouts/script.php'; ?>

</body>

</html>