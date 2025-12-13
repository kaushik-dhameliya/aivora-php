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
            $page_title = "Blog";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Blog', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- blog-slide start  -->
            <div class="blog pt-70">
                <div class="container">
                    <div class="blog-slider swiper-container pos-rel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blog-slide-item">
                                    <div class="xb-item--img"><img src="assets/img/blog/img04.jpg" alt=""></div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag xb-border"># ai business tips</a>
                                        <h2 class="xb-item--title"><a href="blog-details.php">We’re live! explore our
                                                smart AI solutions for the future of business.</a></h2>
                                        <p class="xb-item--content">We’re live! Discover our smart AI solutions designed
                                            to help businesses automate tasks, gain valuable insights, and grow faster.
                                            Experience the future of business with intelligent.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-slide-item">
                                    <div class="xb-item--img"><img src="assets/img/blog/img4.2.jpg" alt=""></div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag xb-border"># chatbots tips</a>
                                        <h2 class="xb-item--title"><a href="blog-details.php">Why AI chatbots are the
                                                next big thing in business communication..</a></h2>
                                        <p class="xb-item--content">AI chatbots are reshaping customer communication by
                                            providing instant, round-the-clock support and personalized responses. They
                                            help businesses reduce costs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-slide-item">
                                    <div class="xb-item--img"><img src="assets/img/blog/img4.3.jpg" alt=""></div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag xb-border"># ai business tips</a>
                                        <h2 class="xb-item--title"><a href="blog-details.php">How AI agencies help
                                                small businesses compete with global brands..</a></h2>
                                        <p class="xb-item--content">AI agencies empower small businesses with tools once
                                            reserved for large corporations—like advanced data analytics, automation,
                                            and personalized marketing by streamlining.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-slide-item">
                                    <div class="xb-item--img"><img src="assets/img/blog/img4.4.jpg" alt=""></div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag xb-border"># ai business tips</a>
                                        <h2 class="xb-item--title"><a href="blog-details.php">Top services you should
                                                expect from a modern AI agency..</a></h2>
                                        <p class="xb-item--content">A modern AI agency offers services that go beyond
                                            basic automation, including AI-powered chatbots, predictive analytics,
                                            personalized marketing, and process automation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="blog-item_button">
                            <div class="blog-swiper-btn swiper-button-prev"><img src="assets/img/shape/prev-shape.png"
                                    alt=""><i class="fa-regular fa-angles-left"></i></div>
                            <div class="blog-swiper-btn swiper-button-next"><img src="assets/img/shape/next-shape.png"
                                    alt=""><i class="fa-regular fa-angles-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-slide end  -->

            <!-- blog content start  -->
            <section class="blog_details_section pt-120">
                <div class="container">
                    <div class="row mt-none-50 g-0 align-items-start">
                        <div class="col-lg-8 mt-50">
                            <div class="blog_details_content">
                                <div class="blog_details_item img-hove-effect ul_li xb-border">
                                    <div class="xb-item--img xb-img">
                                        <a href="#!"><img src="assets/img/blog/img05.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img05.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img05.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img05.jpg" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag">#ai tools tips</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">How our
                                                AI agency delivers next-gen automation tools..</a></h3>
                                        <span class="xb-item--content">Our AI agency creates smart automation tools
                                            simplify.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_details_item xb-border">
                                    <div class="xb-item--inner">
                                        <a href="#!" class="xb-item--tag">#chatbots tips</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">From lead
                                                generation to sales conversion, how smart chatbots improve every step
                                                of..</a></h3>
                                        <span class="xb-item--content">Smart chatbots are transforming the way
                                            businesses interact with customers—from the first touchpoint to the final
                                            sale. By engaging visitors.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_details_item img-hove-effect ul_li xb-border">
                                    <div class="xb-item--img xb-img">
                                        <a href="#!"><img src="assets/img/blog/img06.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img06.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img06.jpg" alt=""></a>
                                        <a href="#!"><img src="assets/img/blog/img06.jpg" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag">#chatbots tips</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">How AI
                                                chatbots are boosting sales for E-commerce brands..</a></h3>
                                        <span class="xb-item--content">AI chatbots are becoming powerful sales
                                            tools.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_details_item xb-border">
                                    <div class="xb-item--inner">
                                        <a href="#!" class="xb-item--tag">#ai marketing</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">10
                                                Real-world ways AI solutions are improving efficiency across operations,
                                                marketing..</a></h3>
                                        <span class="xb-item--content">AI is no longer a future concept—it's actively
                                            reshaping how businesses run today. From automating back-office tasks to
                                            optimizing ad spend and streamlining.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_details_item img-hove-effect ul_li xb-border">
                                    <div class="xb-item--img xb-img">
                                        <a href="blog-details.php"><img src="assets/img/blog/img07.jpg" alt=""></a>
                                        <a href="blog-details.php"><img src="assets/img/blog/img07.jpg" alt=""></a>
                                        <a href="blog-details.php"><img src="assets/img/blog/img07.jpg" alt=""></a>
                                        <a href="blog-details.php"><img src="assets/img/blog/img07.jpg" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <a href="#!" class="xb-item--tag">#ai tips</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">Is your
                                                business AI-ready? here’s how to prepare..</a></h3>
                                        <span class="xb-item--content">Adopting AI can be a game-changer, but success
                                            starts.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_details_item xb-border">
                                    <div class="xb-item--inner">
                                        <a href="#!" class="xb-item--tag">#chatbots tips</a>
                                        <h3 class="xb-item--title border-effect-2"><a href="blog-details.php">How
                                                chatbots with natural language processing Are changing the way brands
                                                interact with..</a></h3>
                                        <span class="xb-item--content">Chatbots powered by Natural Language Processing
                                            (NLP) are revolutionizing brand communication by enabling more human-like,
                                            intuitive conversations.</span>
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="blog-details.php">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.7832" y="13.4631" width="14.3104"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 3.7832 13.4631)"
                                                                fill="white" />
                                                            <rect x="5.80664" y="4.60498" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 5.80664 4.60498)"
                                                                fill="white" />
                                                            <rect x="8.36719" y="4.81616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 8.36719 4.81616)"
                                                                fill="white" />
                                                            <rect x="10.9258" y="5.02759" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 10.9258 5.02759)"
                                                                fill="white" />
                                                            <rect x="13.2773" y="7.80029" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.2773 7.80029)"
                                                                fill="white" />
                                                            <rect x="13.0664" y="10.3616" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 13.0664 10.3616)"
                                                                fill="white" />
                                                            <rect x="12.8555" y="12.9229" width="1.81719"
                                                                height="1.81719"
                                                                transform="rotate(-40.2798 12.8555 12.9229)"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="blog-pagination ul_li">
                                    <li><a class="xb-border" href="#!"><i class="fas fa-chevron-double-left"></i></a>
                                    </li>
                                    <li><a class="xb-border" href="#!">1</a></li>
                                    <li class="active"><a class="xb-border" href="#!">2</a></li>
                                    <li><a class="xb-border" href="#!">3</a></li>
                                    <li><a class="xb-border" href="#!"><i class="fas fa-chevron-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-50">
                            <div class="sidebar">
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Search</h3>
                                    <div class="form-group">
                                        <input class="form-control" type="search" name="search" placeholder="">
                                        <button type="submit" class="search_icon">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.002 5H20.002" stroke="#00020F" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.002 8H17.002" stroke="#00020F" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M21.002 11.5C21.002 16.75 16.752 21 11.502 21C6.25195 21 2.00195 16.75 2.00195 11.5C2.00195 6.25 6.25195 2 11.502 2"
                                                        stroke="#00020F" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M22.002 22L20.002 20" stroke="#00020F" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Related posts</h3>
                                    <ul class="recent_post_block list-unstyled">
                                        <li class="recent_post_item xb-border">
                                            <h3 class="post-title border-effect-2"><a href="blog-details.php">Why your
                                                    business needs an AI strategy in 2025..</a></h3>
                                            <span><img src="assets/img/icon/profile-circle.svg" alt="">By Michael
                                                david</span>
                                        </li>
                                        <li class="recent_post_item xb-border">
                                            <h3 class="post-title border-effect-2"><a href="blog-details.php">AI
                                                    chatbots vs live chat, which Is better?..</a></h3>
                                            <span><img src="assets/img/icon/profile-circle.svg" alt="">By
                                                Christopher</span>
                                        </li>
                                        <li class="recent_post_item xb-border">
                                            <h3 class="post-title border-effect-2"><a href="blog-details.php">How AI
                                                    transforms data into business insights..</a></h3>
                                            <span><img src="assets/img/icon/profile-circle.svg" alt="">By William
                                                thomas</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Categories</h3>
                                    <ul class="category_list_block list-unstyled">
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i> Cybersecurity</span>
                                                <span>(05)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i>Digital Transformation</span>
                                                <span>(02)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i>Ai Business Growth</span>
                                                <span>(02)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i>Security Alerts</span>
                                                <span>(04)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i>Investor Highlights</span>
                                                <span>(07)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="far fa-arrow-right"></i>Cloud Computing</span>
                                                <span>(07)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Tags</h3>
                                    <ul class="tags_block list-unstyled">
                                        <li><a class="xb-border" href="#!">AI Solutions</a></li>
                                        <li><a class="xb-border" href="#!">Data Science</a></li>
                                        <li><a class="xb-border" href="#!">SaaS</a></li>
                                        <li><a class="xb-border" href="#!">AI Consulting</a></li>
                                        <li><a class="xb-border" href="#!">Enterprise AI</a></li>
                                        <li><a class="xb-border" href="#!">AI</a></li>
                                        <li><a class="xb-border" href="#!">Helpdesk</a></li>
                                        <li><a class="xb-border" href="#!">24/7 Chatbot</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog content end -->

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