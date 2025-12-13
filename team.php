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
            $page_title = "Our team";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Our team', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- team start -->
            <section class="team">
                <div class="container">
                    <div class="row mt-none-55">
                        <div class="col-xl-6 col-lg-6 col-md-8 mt-55">
                            <div class="xb-team-item xb-team-item-big xb-border">
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img09.jpg" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Sebastian Patel</h2>
                                        <span class="xb-item--desig">CEO & Chairman at, <span>Aivora</span></span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i
                                            class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="assets/img/team/noice-bg02.png" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8 mt-55">
                            <div class="xb-team-item xb-team-item-big xb-border">
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img10.jpg" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Lennox Gabriel</h2>
                                        <span class="xb-item--desig">Chief Operating Officer at,
                                            <span>Aivora</span></span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i
                                            class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="assets/img/team/noice-bg02.png" alt="image"></div>
                            </div>
                        </div>

                        <?php
                        $data = json_decode(file_get_contents("data/service.json"), true);
                        $teamData = $data['team'];
                        ?>

                        <?php foreach ($teamData as $member): ?>
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
                                        <img src="assets/img/team/noice-bg.png" alt="bg">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- team end -->

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