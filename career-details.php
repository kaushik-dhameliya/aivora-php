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
            $page_title = "Careers details";

            $breadcrumb_items = [
                ['label' => 'Home', 'url' => 'index.php'],
                ['label' => 'Careers details', 'url' => '']
            ];

            require_once('layouts/breadcrumb.php');
            ?>
            <!-- hero end -->

            <!-- details start  -->
            <section class="career-details">
                <div class="container">
                    <div class="cp-details-wrap">
                        <div class="cp-manager_info">
                            <h2 class="details-content-title mb-30">Technical project manager - (Full-time)</h2>
                            <ul class="xb-details-content list-unstyled mb-35">
                                <li><span>Department :</span> Technical Project Manager</li>
                                <li><span>No. of Openings :</span> (3)</li>
                                <li><span>FullJob Type :</span> -Time</li>
                                <li><span>Location :</span> San Francisco, USA.</li>
                                <li><span>Working days :</span> $80k to $100k (Based on your experience).</li>
                                <li> <span>Deadline :</span> December 10, 2025</li>
                                <li><span>Experience Required :</span> 5+ Years</li>
                            </ul>
                            <p class="mb-30">
                                We’re looking for a Technical Project Manager and knowledgeable Product Designer to join
                                our technical team in Warsaw, Poland. You’ll be expected to utilize bleeding-edge
                                technology and robust techniques. You should be an excellent communicator and
                                comfortable managing multiple tasks. you also need to be a team player and have a
                                problem-solving aptitude.
                            </p>
                            <p>
                                Working quickly and creatively should come naturally to you, as well as being an
                                innovative problem-solver who takes pride in producing logical, simple, and effective
                                solutions to what are often very new and complex issues.
                            </p>
                        </div>
                        <div class="xb-details-item">
                            <h3 class="details-title mt-70">What you'll get to do...</h3>
                            <ul class="content-list mt-25">
                                <li>Refactor current code to service-oriented architecture.</li>
                                <li>Collaborate with a unique background of engineering, product, and operations team
                                    members to deliver the best solution for our customers.</li>
                                <li>Solve technical problems that few have solved before – no one else helps local
                                    businesses the way we do.</li>
                                <li>Participate in the decision-making progress – we want you to speak up.</li>
                                <li>Mentor your team members to share your passion for software, your appreciation for
                                    engineering field, and your respect.</li>
                                <li>Take on the challenge of making what you build higher quality, faster, and more
                                    scalable.</li>
                                <li>Participate in on-call rotation.</li>
                            </ul>
                        </div>
                        <div class="xb-details-item">
                            <h3 class="details-title mt-70">Your experience should include...</h3>
                            <ul class="content-list mt-25">
                                <li>6+ years of previous professional Proficient Project Management experience.</li>
                                <li><span>Technical Expertise:</span> Solid understanding for effective communication.
                                </li>
                                <li><span>Stakeholder Management:</span> Track record of ensuring alignment and success.
                                </li>
                                <li><span>Agile Methodologies:</span> Hands-on experience in Agile frameworks.</li>
                                <li><span>Risk Management:</span> Skill in identifying and mitigating project risks.
                                </li>
                                <li> <span>Team Leadership:</span> Ability to motivate diverse teams.</li>
                                <li><span>Communication Skills:</span> Strong ability to convey technical concepts.</li>
                                <li><span>Problem-Solving:</span> Proactive approach to implement solutions.</li>
                                <li><span>Quality Assurance:</span> Experience in ensuring deliverable standards.</li>
                            </ul>
                        </div>
                        <div class="xb-details-item">
                            <h3 class="details-title mt-70">You might also have...</h3>
                            <ul class="content-list mt-25">
                                <li>Experience with AWS.</li>
                                <li>Experience building CI/CD and server/deployment automation solutions</li>
                                <li>Experience with open-source puppet, infrastructure-as-code.</li>
                                <li>Passion for technology.</li>
                                <li>You have high standards and want to make a difference with your work.</li>
                                <li>You are always trying to improve.</li>
                            </ul>
                        </div>
                        <div class="xb-details-item">
                            <h3 class="details-title mt-70">Great benefits...</h3>
                            <ul class="content-list mt-25">
                                <li>Company-wide 401(k) plan.</li>
                                <li>Life & disability insurance offered.</li>
                                <li>Competitive compensation—salary, bonus, equity</li>
                                <li>Medical, dental, and vision; flex spending account.</li>
                                <li>Flexible paid time off & sick leave.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="xb-contact-form details-contact-form xb-border mt-100">
                        <div class="form-heading mb-20">
                            <h3 class="title">Apply for this job</h3>
                            <p class="sub-title">Aivora doesn’t accept unsolicited resumes from recruiters or employment
                                agencies.</p>
                        </div>
                        <form action="#!" class="xb-contact-input-form details-contact-input-form">
                            <div class="row mt-none-20">
                                <div class="col-lg-6 col-md-6 mt-20">
                                    <label for="author-name">Your Name*</label>
                                    <div class="xb-input-field">
                                        <input id="author-name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-20">
                                    <label for="author-email">Email*</label>
                                    <div class="xb-input-field">
                                        <input id="author-email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-20">
                                    <label for="author-phone">Phone*</label>
                                    <div class="xb-input-field">
                                        <input id="author-phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-20">
                                    <label for="author-address">Address*</label>
                                    <div class="xb-input-field">
                                        <input id="author-address" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-20">
                                    <label for="massage">Message</label>
                                    <div class="xb-input-field xb-massage-field">
                                        <textarea id="massage" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="cp-contact-bottom ul_li_between mt-70">
                                <div class="xb-upload_file">
                                    <label for="file">Upload your resume / CV</label>
                                    <input id="file" type="file">
                                    <p class="xb-content">
                                        <span>Accepted file types :</span>
                                        pdf, doc, jpg, Max.
                                        <span>file size:</span> 15 MB.
                                    </p>
                                </div>
                                <div class="form-submit-btn">
                                    <button class="thm-btn agency-btn" type="submit">
                                        <span class="text">
                                            Submit now
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
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- details end  -->

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