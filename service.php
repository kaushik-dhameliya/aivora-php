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
            $page_title = "Service";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Service', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- service start -->
            <section class="service pos-rel bg_img" data-background="assets/img/bg/service-gradient-bg.png">
                <div class="container">
                    <div class="row mt-none-30">

                        <?php
                        $data = json_decode(file_get_contents('data/service.json'), true);
                        $services = $data["services"];
                        ?>

                        <?php foreach ($services as $item): ?>
                            <div class="col-lg-6 mt-30">
                                <div class="xb-ser-item xb-border img-hove-effect">
                                    <div class="xb-item--inner">
                                        <h3 class="xb-item--title border-effect">
                                            <a href="service-details.php">
                                                <?php echo $item['name']; ?>
                                            </a>
                                        </h3>
                                        <a class="xb-item--icon" href="service-details.php">
                                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6.29004" y="21.4111" width="22.36" height="2.83936"
                                                    transform="rotate(-40.2798 6.29004 21.4111)" fill="white" />
                                                <rect x="9.44824" y="7.57031" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 9.44824 7.57031)" fill="white" />
                                                <rect x="13.4492" y="7.90015" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 13.4492 7.90015)" fill="white" />
                                                <rect x="17.4512" y="8.23047" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 17.4512 8.23047)" fill="white" />
                                                <rect x="21.123" y="12.5627" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 21.123 12.5627)" fill="white" />
                                                <rect x="20.793" y="16.5649" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 20.793 16.5649)" fill="white" />
                                                <rect x="20.4619" y="20.5669" width="2.83936" height="2.83936"
                                                    transform="rotate(-40.2798 20.4619 20.5669)" fill="white" />
                                            </svg>
                                        </a>
                                        <p class="xb-item--content">
                                            <?php echo $item['description']; ?>
                                        </p>
                                        <div class="xb-item--img xb-img">
                                            <a href="service-details.php">
                                                <img src="<?php echo $item['image']; ?>" alt="image">
                                            </a>
                                            <a href="service-details.php">
                                                <img src="<?php echo $item['image2']; ?>" alt="image">
                                            </a>
                                            <a href="service-details.php">
                                                <img src="<?php echo $item['image3']; ?>" alt="image">
                                            </a>
                                            <a href="service-details.php">
                                                <img src="<?php echo $item['image4']; ?>" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
            <!-- service end -->

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