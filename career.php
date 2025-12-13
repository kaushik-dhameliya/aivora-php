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
            <!-- hero start -->
            <?php
            $page_title = "Careers";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Careers', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- career-gallary start -->
            <section class="career">
                <div class="container">
                    <div class="career-gallary ul_li_between">

                        <?php
                        $data = json_decode(file_get_contents('data/service.json'), true);
                        $career = $data['career'];
                        ?>

                        <?php foreach ($career as $item): ?>
                            <div class="xb-image-item img-hove-effect">
                                <div class="xb-img">
                                    <a href="#!"><img src="<?php echo ($item['image']) ?>" alt="image"></a>
                                    <a href="#!"><img src="<?php echo ($item['image2']) ?>" alt="image"></a>
                                    <a href="#!"><img src="<?php echo ($item['image3']) ?>" alt="image"></a>
                                    <a href="#!"><img src="<?php echo ($item['image4']) ?>" alt="image"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div class="xb-career-btn text-center">
                        <a class="thm-btn agency-btn" href="contact.php">
                            <span class="text">
                                Begin Today with us
                            </span>
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
            </section>
            <!-- career-gallary end -->

            <!-- hiring-process start -->
            <section class="hiring-process pt-140 pb-150">
                <div class="container">
                    <div class="row mt-none-50 align-items-center">
                        <div class="col-lg-6 mt-50">
                            <div class="sec-title sec-title-center mb-35">
                                <span class="sub-title mb-20">Hiring Process</span>
                                <h2 class="title title-line_height">Our hiring process</h2>
                            </div>
                            <div class="xb-faq career-faq">
                                <ul class="accordion_box clearfix list-unstyled">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <span class="number">01</span> _Send your CV
                                            <span class="arrow"><span></span></span>
                                        </div>
                                        <div class="acc_body current">
                                            <div class="content">
                                                <p>Apply for a position by sending us your CV or providing a link to
                                                    your LinkedIn profile, and take the first step toward joining our
                                                    team.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <span class="number">02</span> _Initial screening
                                            <span class="arrow"><span></span></span>
                                        </div>
                                        <div class="acc_body">
                                            <div class="content">
                                                <p>Apply for a position by sending us your CV or providing a link to
                                                    your LinkedIn profile, and take the first step toward joining our
                                                    team.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <span class="number">03</span> _Job interview
                                            <span class="arrow"><span></span></span>
                                        </div>
                                        <div class="acc_body">
                                            <div class="content">
                                                <p>Apply for a position by sending us your CV or providing a link to
                                                    your LinkedIn profile, and take the first step toward joining our
                                                    team.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <span class="number">04</span> _Test task
                                            <span class="arrow"><span></span></span>
                                        </div>
                                        <div class="acc_body">
                                            <div class="content">
                                                <p>Apply for a position by sending us your CV or providing a link to
                                                    your LinkedIn profile, and take the first step toward joining our
                                                    team.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <span class="number">05</span> _You’re hired!
                                            <span class="arrow"><span></span></span>
                                        </div>
                                        <div class="acc_body">
                                            <div class="content">
                                                <p>Apply for a position by sending us your CV or providing a link to
                                                    your LinkedIn profile, and take the first step toward joining our
                                                    team.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-50">
                            <div class="process-img">
                                <img src="assets/img/career/process-img.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hiring-process end -->

            <!-- job Start -->
            <section class="job_section pt-90 pb-150 bg_img" data-background="assets/img/bg/job-bg.png">
                <div class="container">
                    <div class="sec-title sec-title-center fea-sec-title text-center mb-40">
                        <span class="sub-title">Open Positions</span>
                        <h2 class="title">Be part of <span><img src="assets/img/icon/diamond-icon02.gif"
                                    alt="icon"></span>the team</h2>
                    </div>
                    <div class="text-center">
                        <div class="career-menu ul_li">
                            <button class="active" data-filter="*">View all</button>
                            <button data-filter=".cat1">Technical</button>
                            <button data-filter=".cat2">Business</button>
                            <button data-filter=".cat3">Marketing</button>
                            <button data-filter=".cat4">Leadership</button>
                        </div>
                    </div>
                    <div class="career-nav-wrapper grid">
                        <div class="xb-career-item grid-item cat2 cat4 xb-border">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="career-details.php">Machine learning engineer.</a>
                                </h2>
                                <ul class="xb-item--holder ul_li list-unstyled">
                                    <li><img src="assets/img/icon/location-icon02.svg" alt="image"> Remote, (USA)</li>
                                    <li><img src="assets/img/icon/clock-icon.svg" alt="image"> Full time</li>
                                </ul>
                            </div>
                            <div class="team-btn">
                                <a class="thm-btn agency-btn" href="career-details.php">
                                    <span class="text">view job</span>
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
                        <div class="xb-career-item grid-item cat1 cat2 xb-border">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="career-details.php">NLP (natural language
                                        processing) engineer.</a></h2>
                                <ul class="xb-item--holder ul_li list-unstyled">
                                    <li><img src="assets/img/icon/location-icon02.svg" alt="image">In House, (USA)</li>
                                    <li><img src="assets/img/icon/clock-icon.svg" alt="image"> Full time</li>
                                </ul>
                            </div>
                            <div class="team-btn">
                                <a class="thm-btn agency-btn" href="career-details.php">
                                    <span class="text">view job</span>
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
                        <div class="xb-career-item grid-item cat1 cat3 xb-border">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="career-details.php">Technical project manager
                                        (AI).</a></h2>
                                <ul class="xb-item--holder ul_li list-unstyled">
                                    <li><img src="assets/img/icon/location-icon02.svg" alt="image">Remote, (USA)</li>
                                    <li><img src="assets/img/icon/clock-icon.svg" alt="image"> Full time</li>
                                </ul>
                            </div>
                            <div class="team-btn">
                                <a class="thm-btn agency-btn" href="career-details.php">
                                    <span class="text">view job</span>
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
                        <div class="xb-career-item grid-item cat3 cat4 xb-border">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="career-details.php">Conversational UX designer.</a>
                                </h2>
                                <ul class="xb-item--holder ul_li list-unstyled">
                                    <li><img src="assets/img/icon/location-icon02.svg" alt="image">Remote, (USA)</li>
                                    <li><img src="assets/img/icon/clock-icon.svg" alt="image"> Full time</li>
                                </ul>
                            </div>
                            <div class="team-btn">
                                <a class="thm-btn agency-btn" href="career-details.php">
                                    <span class="text">view job</span>
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
                        <div class="xb-career-item grid-item cat4 cat1 xb-border">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="career-details.php">HR & talent manager (AI
                                        Sector).</a></h2>
                                <ul class="xb-item--holder ul_li list-unstyled">
                                    <li><img src="assets/img/icon/location-icon02.svg" alt="image">Remote, (USA)</li>
                                    <li><img src="assets/img/icon/clock-icon.svg" alt="image"> Full time</li>
                                </ul>
                            </div>
                            <div class="team-btn">
                                <a class="thm-btn agency-btn" href="career-details.php">
                                    <span class="text">view job</span>
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
                </div>
            </section>
            <!-- job End -->

            <div class="container">
                <div class="xb-video">
                    <video src="https://www.pexels.com/download/video/7693469/" loop="" muted="" playsinline=""
                        autoplay="" poster="assets/img/career/img06.jpg"></video>
                </div>
            </div>

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