<?php include ('header.php');?>
<?php
    include 'db_con.php';
    $query = "SELECT * FROM testimonial ORDER BY s_no DESC";
    $result = mysqli_query($con, $query);
?>
<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">About Us</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">About Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area-three section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about__images-three tg-svg">
                        <img src="assets/img/others/inner_about_img.png" alt="img">
                        <span class="svg-icon" id="about-svg"
                            data-svg-icon="assets/img/others/inner_about_shape.svg"></span>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-three courses__details-content">
                        <div class="section__title mb-10 ">
                            <span class="sub-title"> About Us</span>
                            <h2 class="title">
                                We Provide Smart
                                <span class="position-relative">
                                    <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                            fill="currentcolor" />
                                    </svg>
                                    Study Solutions
                                </span>
                                for Every Child
                            </h2>
                        </div>
                        <p class="desc" style="text-align:justify">Think Champ is a US-based platform
                            crafted especially for children aged 8 to 16. We offer a unique, grade-free learning
                            experience covering subjects like Maths, English, Logical Reasoning, Personality
                            Development, and Creative Thinking — all in one package. Our program focuses on building
                            strong foundational skills through engaging lessons and easy-to-follow guidance. Every
                            student progresses at their own pace with the support of experienced educators and
                            interactive content that makes learning enjoyable and effective.</p>
                        <h5>Subjects:</h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active">Maths</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active">English</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active">Logical Reasoning</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active">Personality Dev.</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active">Creative Thinking</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- features-area -->

    <section class="features__area-three section-pt-120 section-pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">What We Offer</span>
                        <h2 class="title">Everything Your Child Needs to Learn</h2>
                        <p>We offer a unique learning experience designed for children aged 8 to 16.</p>
                    </div>
                </div>
            </div>
            <div class="features__item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <i class="fas fa-book-open fa-2x"></i>
                                    </div>
                                    <h2 class="title">Complete Subject Coverage</h2>
                                </div>
                                <p>Maths, English, reasoning, and more — all included in one structured and simplified
                                    learning plan designed for every learner.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <i class="fas fa-brain fa-2x"></i>
                                    </div>
                                    <h2 class="title">Creative & Logical Development</h2>
                                </div>
                                <p>Our exercises help sharpen minds, boost confidence, and promote creative thinking
                                    through fun and interactive sessions.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <i class="fas fa-user-tie fa-2x"></i>
                                    </div>
                                    <h2 class="title">Guided by Experts</h2>
                                </div>
                                <p>Every class is led by trained educators who understand how to engage, support, and
                                    guide students at every learning step.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features-area-end -->

    <!-- choose-area -->
    <section class="choose__area-three section-pb-140 mt-5 pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="choose__img-three">
                        <img src="assets/img/others/h6_choose_img.jpg" alt="img">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__content-three">
                        <div class="section__title mb-15">
                            <span class="sub-title">Why Choose Us</span>
                            <h2 class="title bold">Our course turns learning into a fun and exciting adventure.</h2>
                        </div>
                        <p style="text-align:justify">Student don’t just read or listen — they learn through interactive
                            games, real-life stories, and creative activities that spark curiosity. Every lesson is
                            designed to keep them engaged, motivated, and smiling while they learn. We remove the
                            pressure of grades and replace it with joyful, meaningful learning. That’s why our program
                            is one of the easiest and most effective ways for young minds to grow — confidently,
                            happily, and smartly.</p>
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Fun Learning Methods</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Easy-to-Understand Lessons</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Expert Instructor Support</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- features-area -->
    <section class="features__area py-5 text-white">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center mb-50">
                    <div class="section__title white-title">
                        <span class="sub-title">How We Make Learning Fun</span>
                        <h2 class="title">Your Child’s Fun Learning Journey Starts Here</h2>
                        <p>We turn study time into a joyful experience with games, activities, and personalized guidance
                            designed especially for young learners.</p>
                    </div>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="features__item text-center">
                        <div class="features__icon mb-3">
                            <i class="fas fa-user-check fa-3x border p-3 rounded-circle"></i>
                        </div>
                        <div class="features__content">
                            <h4 class="title">Fun Practice Quizzes</h4>
                            <p>Quick mini quizzes and memory games help reinforce topics without making it feel like
                                testing.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="features__item text-center">
                        <div class="features__icon mb-3">
                            <i class="fas fa-users fa-3x border p-3 rounded-circle"></i>
                        </div>
                        <div class="features__content">
                            <h4 class="title">Peer Learning Moments</h4>
                            <p>Group tasks and friendly challenges allow students to share ideas, answer together, and
                                bond.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="features__item text-center">
                        <div class="features__icon mb-3">
                            <i class="fas fa-book-open fa-3x border p-3 rounded-circle"></i>
                        </div>
                        <div class="features__content">
                            <h4 class="title">Story-Based Lessons</h4>
                            <p>Chapters are explained using animated characters and stories that make learning feel
                                magical.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="features__item text-center">
                        <div class="features__icon mb-3">
                            <i class="fas fa-brain fa-3x border p-3 rounded-circle"></i>
                        </div>
                        <div class="features__content">
                            <h4 class="title">Creative Thinking Tools</h4>
                            <p>Kids build logic and imagination using puzzles, drawing, and storytelling challenges they
                                love.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial-area -->
    <section class="testimonial__area-six section-py-140 testimonial__bg-three "
        data-background="assets/img/bg/h8_testimonial_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title mb-50">
                        <span class="sub-title">Our Testimonials</span>
                        <h2 class="title">What Guardians & Students Say About Us</h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-4">
                    <div class="testimonial__nav-two">
                        <button class="testimonial-button-prev"><i class="skillgro-right-arrow"></i></button>
                        <button class="testimonial-button-next"><i class="skillgro-right-arrow"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper-container testimonial-active-five">
                <div class="swiper-wrapper">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="swiper-slide">
                        <div class="testimonial__item-two testimonial__item-five">
                            <div class="testimonial__content-two">

                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“<?php echo htmlspecialchars($row['paragraph']); ?>”</p>
                            </div>
                            <div class="testimonial__author testimonial__author-two">
                                <div class="testimonial__author-thumb testimonial__author-thumb-two">
                                    <img src="admin/testimonials_uploads/<?php echo htmlspecialchars($row['image']); ?>"
                                        alt="user image">
                                </div>
                                <div class="testimonial__author-content testimonial__author-content-two">
                                    <h2 class="title"><?php echo htmlspecialchars($row['name']); ?></h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="testimonial__shape-wrap-two">
            <img src="https://img.icons8.com/3d-fluency/graduation-cap.png" alt="shape" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="https://img.icons8.com/3d-fluency/student-male--v3.png" alt="shape" data-aos="fade-up-right"
                data-aos-delay="400">
        </div>
    </section>
    <!-- testimonial-area-end -->

</main>
<!-- main-area-end -->

<?php include ('footer.php');?>