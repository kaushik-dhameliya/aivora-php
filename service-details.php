<?php require_once 'layouts/template_top.php'; ?>

<body class="service-page inner-page">

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
            $page_title = "Service details";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Service details', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- service-details start -->
            <section class="service-details pos-rel">
                <div class="container">
                    <div class="single-item-image service-det-img mb-75">
                        <img src="assets/img/service/img13.jpg" alt="image">
                        <a class="popup-video btn-video btn-video-center"
                            href="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                            <span><svg width="27" height="30" viewBox="0 0 27 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.0957 13.268C26.429 14.0378 26.429 15.9623 25.0957 16.7321L3.95285 28.9389C2.61951 29.7087 0.952845 28.7465 0.952845 27.2069L0.952846 2.79319C0.952846 1.25359 2.61951 0.291337 3.95285 1.06114L25.0957 13.268Z"
                                        fill="#00020F" />
                                </svg></span>
                        </a>
                    </div>
                    <h2 class="details-content-title mb-15">Data and intelligence solutions for smarter.</h2>
                    <p class="">Unlock the true value of your data with our comprehensive AI-driven data and
                        intelligence solutions. We help businesses collect, organize, and analyze vast amounts of
                        information to extract meaningful insights and make smarter, faster decisions. By leveraging
                        advanced analytics, machine learning, and real-time data processing, we transform raw data into
                        powerful tools for innovation, strategy, and growth. Whether you're looking to optimize
                        operations, improve customer experiences, or forecast trends, our solutions provide the
                        intelligence you need to stay ahead in a competitive, data-driven world.</p>
                    <p class="mt-30">We turn complex information into clear, actionable insights. These insights empower
                        smarter decisions, streamline operations, enhance customer experiences, and drive measurable
                        business growth. Whether you're navigating market trends, optimizing workflows, or building
                        data-driven strategies, we provide the tools and expertise to help you lead with confidence in a
                        data-first world.</p>
                    <div class="service-process-wrap pt-120 pb-125">
                        <div class="row mt-none-50 align-items-center">
                            <div class="col-lg-6 mt-50">
                                <h2 class="details-content-title mb-40">Service process</h2>
                                <div class="service_process_faq">
                                    <div class="accordion" id="service_process_faq">
                                        <div class="accordion-item">
                                            <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_one" aria-expanded="false"
                                                aria-controls="collapse_one">
                                                01. Listening to Your Needs
                                            </div>
                                            <div id="collapse_one" class="accordion-collapse collapse"
                                                data-bs-parent="#service_process_faq">
                                                <div class="accordion-body">
                                                    <p class="m-0">
                                                        We deliver customized AI solutions built around your specific
                                                        business goals and challenges. By understanding your unique
                                                        needs, we create intelligent systems that drive efficiency,
                                                        enhance performance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_two"
                                                aria-expanded="true" aria-controls="collapse_two">
                                                02. Tailored Solutions
                                            </div>
                                            <div id="collapse_two" class="accordion-collapse collapse show"
                                                data-bs-parent="#service_process_faq">
                                                <div class="accordion-body">
                                                    <p class="m-0">
                                                        We deliver customized AI solutions built around your specific
                                                        business goals and challenges. By understanding your unique
                                                        needs, we create intelligent systems that drive efficiency,
                                                        enhance performance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_three"
                                                aria-expanded="false" aria-controls="collapse_three">
                                                03. Tactical Alignment
                                            </div>
                                            <div id="collapse_three" class="accordion-collapse collapse"
                                                data-bs-parent="#service_process_faq">
                                                <div class="accordion-body">
                                                    <p class="m-0">
                                                        We deliver customized AI solutions built around your specific
                                                        business goals and challenges. By understanding your unique
                                                        needs, we create intelligent systems that drive efficiency,
                                                        enhance performance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_four"
                                                aria-expanded="false" aria-controls="collapse_four">
                                                04. Measurable Results
                                            </div>
                                            <div id="collapse_four" class="accordion-collapse collapse"
                                                data-bs-parent="#service_process_faq">
                                                <div class="accordion-body">
                                                    <p class="m-0">
                                                        We deliver customized AI solutions built around your specific
                                                        business goals and challenges. By understanding your unique
                                                        needs, we create intelligent systems that drive efficiency,
                                                        enhance performance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-50">
                                <ul class="content_layer_group list-unstyled">
                                    <li data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="false"
                                        aria-controls="collapse_one"><span>Listening to Your Needs</span></li>
                                    <li data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="true"
                                        aria-controls="collapse_two"><span>Tailored Solutions</span></li>
                                    <li data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false"
                                        aria-controls="collapse_three"><span>Tactical Alignment</span></li>
                                    <li data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false"
                                        aria-controls="collapse_four"><span>Measurable Results</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services-outcome-wrap">
                        <h2 class="details-content-title mb-15">Services outcome</h2>
                        <p>We help Fortune 500 companies accelerate innovation through advanced data and intelligence
                            solutions. Using AI, machine learning, and real-time analytics, we turn complex data into
                            actionable insights. Our services empower smarter decisions, improve performance.</p>
                        <ul class="service-outcome-list list-unstyled mt-35">
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                AI-Powered Data Analysis.
                            </li>
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                Real-Time Analytics.
                            </li>
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                Scalable Data Infrastructure.
                            </li>
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                Enterprise System Integration.
                            </li>
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                Automated Data Processing.
                            </li>
                            <li>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z"
                                            fill="#00FF97" />
                                        <path
                                            d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z"
                                            fill="#00FF97" />
                                    </svg>
                                </span>
                                Smart Decision Support.
                            </li>
                        </ul>
                    </div>
                    <div class="service-gallary ul_li_between mt-125">

                        <?php
                        $data = json_decode(file_get_contents('data/service.json'), true);
                        $service = $data["service_detail"];
                        ?>

                        <?php foreach ($service as $item): ?>
                            <div class="single-item-image img-hove-effect">
                                <div class="xb-img">
                                    <a href="service-details.php"><img src="<?= $item['image'] ?>" alt="image"></a>
                                    <a href="service-details.php"><img src="<?= $item['image2'] ?>" alt="image"></a>
                                    <a href="service-details.php"><img src="<?= $item['image3'] ?>" alt="image"></a>
                                    <a href="service-details.php"><img src="<?= $item['image4'] ?>" alt="image"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- service-details end -->

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