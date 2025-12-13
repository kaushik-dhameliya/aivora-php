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
            $page_title = "Contact us";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Contact us', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- contact start -->
            <section class="contact pb-150">
                <div class="container">
                    <div class="row mt-none-30">

                        <?php
                        $data = json_decode(file_get_contents('data/service.json'), true);
                        $contact = $data['contact'];
                        ?>

                        <?php foreach ($contact as $item): ?>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-img">
                                            <a href="#!"><img src="<?php echo $item['image']; ?>" alt="image"></a>
                                            <a href="#!"><img src="<?php echo $item['image2']; ?>" alt="image"></a>
                                            <a href="#!"><img src="<?php echo $item['image3']; ?>" alt="image"></a>
                                            <a href="#!"><img src="<?php echo $item['image4']; ?>" alt="image"></a>
                                        </div>
                                        <div class="xb-item--holder">
                                            <p class="xb-item--location"><?php echo $item['name']; ?></p>
                                            <span class="xb-item--contact_info"><?php echo $item['number']; ?></span>
                                            <span class="xb-item--contact_info"><?php echo $item['email']; ?></span>
                                            <a href="#!" class="thm-btn form-btn mt-45">
                                                VIEW LOCATION
                                                <span class="xb-icon">
                                                    <img src="assets/img/icon/rotate-arrow-white02.svg" alt="icon">
                                                    <img src="assets/img/icon/rotate-arrow-black03.svg" alt="icon">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
            <!-- contact end -->

            <!-- contact start -->
            <section class="contact">
                <div class="container">
                    <div class="xb-contact-wrap xb-border bg_img" data-background="assets/img/bg/contact-bg02.png">
                        <div class="xb-contact-form xb-main-contact xb-border">
                            <div class="form-heading text-center mb-30">
                                <h3 class="title">Ready to collaborate with us?</h3>
                                <p class="sub-title clr-white">Who knows where a single message might lead you.</p>
                            </div>
                            <form action="#!" class="xb-contact-input-form main-contact-input-form">
                                <div class="row mt-none-20">
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-name" type="text" required>
                                            <label for="author-name">Your Name*</label>
                                            <img src="assets/img/icon/user-balck-icon.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-email" type="email" required>
                                            <label for="author-email">Email Address*</label>
                                            <img src="assets/img/icon/sms-balck-icon.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-phone" type="text" required>
                                            <label for="author-phone">Contact No*</label>
                                            <img src="assets/img/icon/call-icon02.svg" alt="icon">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field xb-select-file">
                                            <input type="file" required>
                                            <img src="assets/img/icon/upload-icon.svg" alt="icon">
                                            <span>Attach file...</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mt-20">
                                        <div class="xb-input-field xb-select-field">
                                            <select class="nice-select">
                                                <option value="1">Select Service*</option>
                                                <option value="2">AI - marketing</option>
                                                <option value="3">AI consulting</option>
                                                <option value="4">AI chatbot virtual</option>
                                            </select>
                                            <img src="assets/img/icon/list-icon.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mt-20">
                                        <div class="xb-input-field xb-massage-field">
                                            <textarea id="massage" required></textarea>
                                            <label for="massage">Your Message..</label>
                                            <img src="assets/img/icon/messages-icon.svg" alt="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit-btn mt-35">
                                    <button type="submit" class="thm-btn form-btn">
                                        send a message
                                        <span class="xb-icon">
                                            <img src="assets/img/icon/rotate-arrow-black02.svg" alt="icon">
                                            <img src="assets/img/icon/rotate-arrow-black02.svg" alt="icon">
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592852423971!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->

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