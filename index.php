<?php include ('header.php');?>
<?php
    include 'db_con.php';
    $query = "SELECT * FROM testimonial ORDER BY s_no DESC";
    $result = mysqli_query($con, $query);
?>

<!-- main-area -->
<main class="main-area fix">

    <!-- banner-area -->
<div id="heroBannerCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <section class="banner-area banner-bg-five tg-motion-effects" style="background-image: url('assets/img/banner/h5_hero_bg.jpg');">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-lg-5">
              <div class="banner__content-five">
                <span class="sub-title">Welcome to <span class="text-warning fw-bold">Think Champ</span></span>
                <h2 class="title">Learn Better. <span>Think Bigger </span></h2>
                <p>We help students learn better with smart methods and experienced teachers. Your future starts here with strong basics and clear concepts.</p>
                <div class="banner__btn">
                  <a href="package" class="btn arrow-btn">Start Learning</a>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
              <div class="banner__images-five">
                <img src="assets/img/banner/h5_hero_img.png" alt="img">
                <div class="shape-wrap">
                  <div class="shape-one">
                    <img src="assets/img/banner/h5_hero_shape04.svg" alt="shape" class="tg-motion-effects1">
                  </div>
                  <div class="shape-two">
                    <img src="assets/img/banner/h5_hero_shape05.svg" alt="shape" class="tg-motion-effects3">
                  </div>
                  <div class="shape-three">
                    <img src="assets/img/banner/h5_hero_shape06.svg" alt="shape">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner__shape-wrap-two">
          <img src="assets/img/banner/h5_hero_shape01.svg" alt="shape">
          <img src="assets/img/banner/h5_hero_shape02.svg" alt="shape" class="tg-motion-effects7">
          <img src="assets/img/banner/h5_hero_shape03.svg" alt="shape" class="tg-motion-effects3">
        </div>
      </section>
    </div>

    <!-- Slide 2 (copy of slide 1) -->
    <div class="carousel-item">
      <section class="banner-area banner-bg-five tg-motion-effects" style="background-image: url('assets/img/banner/h5_hero_bg.jpg');">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-lg-5">
              <div class="banner__content-five">
                <span class="sub-title">Welcome to <span class="text-warning fw-bold">Think Champ</span></span>
                <h2 class="title">Learn Better. <span>Think Bigger </span></h2>
                <p>We help students learn better with smart methods and experienced teachers. Your future starts here with strong basics and clear concepts.</p>
                <div class="banner__btn">
                  <a href="package" class="btn arrow-btn">Start Learning</a>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
              <div class="banner__images-five">
                <img src="assets/img/banner/h5_hero_img.png" alt="img">
                <div class="shape-wrap">
                  <div class="shape-one">
                    <img src="assets/img/banner/h5_hero_shape04.svg" alt="shape" class="tg-motion-effects1">
                  </div>
                  <div class="shape-two">
                    <img src="assets/img/banner/h5_hero_shape05.svg" alt="shape" class="tg-motion-effects3">
                  </div>
                  <div class="shape-three">
                    <img src="assets/img/banner/h5_hero_shape06.svg" alt="shape">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner__shape-wrap-two">
          <img src="assets/img/banner/h5_hero_shape01.svg" alt="shape">
          <img src="assets/img/banner/h5_hero_shape02.svg" alt="shape" class="tg-motion-effects7">
          <img src="assets/img/banner/h5_hero_shape03.svg" alt="shape" class="tg-motion-effects3">
        </div>
      </section>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <section class="banner-area banner-bg-five tg-motion-effects" style="background-image: url('assets/img/banner/h5_hero_bg.jpg');">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-lg-5">
              <div class="banner__content-five">
                <span class="sub-title">Welcome to <span class="text-warning fw-bold">Think Champ</span></span>
                <h2 class="title">Learn Better. <span>Think Bigger </span></h2>
                <p>We help students learn better with smart methods and experienced teachers. Your future starts here with strong basics and clear concepts.</p>
                <div class="banner__btn">
                  <a href="package" class="btn arrow-btn">Start Learning</a>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
              <div class="banner__images-five">
                <img src="assets/img/banner/h5_hero_img.png" alt="img">
                <div class="shape-wrap">
                  <div class="shape-one">
                    <img src="assets/img/banner/h5_hero_shape04.svg" alt="shape" class="tg-motion-effects1">
                  </div>
                  <div class="shape-two">
                    <img src="assets/img/banner/h5_hero_shape05.svg" alt="shape" class="tg-motion-effects3">
                  </div>
                  <div class="shape-three">
                    <img src="assets/img/banner/h5_hero_shape06.svg" alt="shape">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner__shape-wrap-two">
          <img src="assets/img/banner/h5_hero_shape01.svg" alt="shape">
          <img src="assets/img/banner/h5_hero_shape02.svg" alt="shape" class="tg-motion-effects7">
          <img src="assets/img/banner/h5_hero_shape03.svg" alt="shape" class="tg-motion-effects3">
        </div>
      </section>
    </div>

  </div>

  <!-- Navigation Buttons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- banner-area-end -->




    <section class="features__area-four section-pb-90">
        <div class="container">
            <div class="features__item-wrap-two">
                <div class="row justify-content-center">

                    <!-- Card 1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="features__item-three">
                            <div class="features__icon-three">
                                <i class="fas fa-brain fa-2x"></i>
                            </div>
                            <div class="features__content-three">
                                <h2 class="title">Smart Learning</h2>
                                <p>We focus on building strong skills in every subject.
                                    Concepts are explained with clarity and real examples.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="features__item-three">
                            <div class="features__icon-three">
                                <i class="fas fa-user-tie fa-2x"></i>
                            </div>
                            <div class="features__content-three">
                                <h2 class="title">Expert Tutors</h2>
                                <p>Our Teachers are experienced and student-friendly professionals.
                                    They simplify topics to help students learn faster.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="features__item-three">
                            <div class="features__icon-three">
                                <i class="fas fa-puzzle-piece fa-2x"></i>
                            </div>
                            <div class="features__content-three">
                                <h2 class="title">Creative Growth</h2>
                                <p>We boost creativity with fun, mind-sharpening learning exercises.
                                    Students learn to think deeply and outside the box.


                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="features__item-three">
                            <div class="features__icon-three">
                                <i class="fas fa-book-open fa-2x"></i>
                            </div>
                            <div class="features__content-three">
                                <h2 class="title">All-in-One Course</h2>
                                <p>One simple plan covers Maths, English, and core subjects.
                                    No need to switch — everything essential is included.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- about-area -->
    <section class="about-area-five section-pb-140">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about__images-five">
                        <div class="about__mask-img-one">
                            <img src="assets\img\Home\h5_about_image.jpg" alt="img">
                        </div>
                        <div class="about__mask-img-two aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="200">
                            <img src="assets\img\Home\h5_about_image02.jpg" alt="img">
                        </div>
                        <div class="shape">
                            <img src="assets/img/others/h5_about_img_shape01.svg" alt="shape" data-aos="fade-down-left"
                                data-aos-delay="400" class="aos-init aos-animate">
                            <img src="assets/img/others/h5_about_img_shape02.svg" alt="shape" data-aos="fade-up-right"
                                data-aos-delay="400" class="aos-init aos-animate">
                            <img src="assets/img/others/h5_about_img_shape03.svg" alt="shape" class="rotateme">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-five courses__details-content">
                        <div class="section__title mb-15">
                            <span class="sub-title"> About Us</span>
                            <h2 class="title bold">Learn, Improve, and Succeed with Think Champ</h2>
                        </div>
                        <p style="text-align: justify;">
                            Think Champ is a US-based learning platform designed specially
                            for children aged 8 to 16.
                            We offer focused Classes in key subjects like Maths, English, Logical Reasoning,
                            Personality Development, and Creative Thinking. Our goal is to make learning fun, easy, and
                            meaningful for every child—no matter their school grade.
                            
                        </p>
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
                        <div class="about__content-bottom">
                            <a href="about" class="btn arrow-btn">Read More
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="about__contact">
                                <div class="icon">
                                    <i class="skillgro-phone-call"></i>
                                    <svg width="61" height="57" viewBox="0 0 61 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M33.8271 1.03084C45.4231 1.45238 55.2747 9.02544 58.7825 19.8885C62.2129 30.5119 58.2066 41.852 49.1968 48.6277C39.3708 56.0171 26.0908 58.9731 15.8124 52.2032C4.34981 44.6532 -2.0548 30.6516 2.45508 17.8409C6.75857 5.61644 20.666 0.552417 33.8271 1.03084Z"
                                            stroke="currentcolor" stroke-width="2"></path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <a href="tel:0123456789">+123 599 8989</a>
                                    <span>Call to Questions</span>
                                </div>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="assets/img/others/h5_about_shape02.png" alt="shape" class="alltuchtopdown">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__shape">
            <img src="assets/img/others/h5_about_shape01.png" alt="shape" data-aos="fade-right" data-aos-delay="800"
                class="aos-init aos-animate">
        </div>
    </section>
    <!-- about-area-end -->


    <!-- choose-area -->
    <section class="choose__area tg-motion-effects section-py-140 courses__bg"
        data-background="assets/img/bg/h3_courses_bg.jpg">
        <div class="container">
            <div class="choose__inner-wrap">
                <div class="row">
                    <div class="col-lg-5 order-0 order-lg-2">
                        <div class="choose__img" data-aos="fade-left" data-aos-delay="300">
                            <img src="assets\img\Home\choose_image.jpg" alt="img">
                           
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="choose__content">
                            <div class="section__title mb-15">
                                <span class="sub-title">Package & Course</span>
                                <h2 class="title">All-in-One Learning Plan</h2>
                            </div>
                            <p style="text-align:justify">Think Champ offers a simple, all-in-one learning plan specially designed for children
                                aged 8 to 16. This package includes key subjects like <b>
                                    Maths, English, Logical Reasoning,
                                Personality Development, and Creative Thinking
                                </b> — all covered under one price without the
                                need to switch between different plans.
                            </p>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Age 8–16 focused</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Logic and reasoning boost</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Personality development support</p>
                                </li>
                            </ul>
                            <a href="free-assessment" class="btn arrow-btn">Enroll Now  <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                            <div class="shape">
                                <img src="assets/img/others/choose_shape03.svg" alt="shape" class="tg-motion-effects4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose__shape">
            <img src="assets/img/others/choose_shape01.svg" alt="shape" class="tg-motion-effects4">
            <img src="assets/img/others/choose_shape02.svg" alt="shape" class="tg-motion-effects5">
        </div>
    </section>
    <!-- choose-area-end -->


    <!-- faq-area -->
    <section class="faq__area-two tg-motion-effects section-py-140">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8 order-0 order-lg-2">
                    <div class="faq__img-three">
                        <div class="faq__mask-img">
                            <img src="assets\img\Home\h5_faq_img.jpg" alt="img">
                        </div>
                        <div class="faq__img-shape">

                            <svg viewBox="0 0 718 554" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="animation-dashed"
                                    d="M53.9109 99.5086C16.9646 159.342 -0.37752 230.84 2.26149 301.21C3.0155 324.541 6.03153 347.872 12.8176 370.45C29.4057 425.391 69.368 471.677 118.001 501.782C166.635 531.886 223.939 546.938 281.244 551.078C429.029 560.862 583.223 492.374 664.278 368.192C703.864 307.231 725.73 232.345 711.781 160.847C697.832 89.7247 642.789 24.6234 571.536 9.94741C523.279 0.163409 475.023 12.9579 427.898 21.613C370.593 31.7733 326.861 28.0101 271.819 10.7C185.108 -16.3942 102.167 21.6129 53.9109 99.5086Z"
                                    stroke="#CACACA" stroke-width="3" stroke-dasharray="20 20" />
                            </svg>

                        </div>
                        <div class="shape shape-one aos-init aos-animate" data-aos="fade-down-left"
                            data-aos-delay="400">
                            <img src="assets/img/others/h5_faq_shape02.svg" alt="shape" class="tg-motion-effects3">
                        </div>
                        <div class="shape shape-two aos-init aos-animate" data-aos="fade-up-left" data-aos-delay="400">
                            <img src="assets/img/others/h5_faq_shape03.svg" alt="shape" class="tg-motion-effects4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq__content-two">
                        <div class="section__title mb-15">
                            <span class="sub-title">Faq’s</span>
                            <h2 class="title bold">Got Questions? We’ve Got Answers!</h2>
                        </div>
                        <div class="faq__wrap faq__wrap-two">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Who can join the program?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Any student between the age of 8 to 16 can join. No school class or grade
                                                restriction is required.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What subjects are covered?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We cover Maths, English, Logical Reasoning, Personality Development, and
                                                Creative Thinking — all in one plan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How do I enroll my child?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Just fill out the form on our website. Our team will contact you for a
                                                quick consultation and guide you through enrollment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            Do all students get the same content?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, all students receive the same high-quality content, regardless of
                                                age or class. The program is skill-focused.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq__shape">
            <img src="assets/img/others/h5_faq_shape01.svg" alt="shape" class="tg-motion-effects3">
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- counter-area -->
    <!-- <section class="fact__area-three fact__bg" data-background="assets/img/bg/fact_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="fact__content-wrap">
                        <h2 class="title">High results come from quality <span> education.</span></h2>
                        <p>Think Champ means smart learning with results. You learn better, faster, and stronger.
                        </p>
                       
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="fact__item-wrap-two">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6">
                                <div class="fact__item fact__item-two">
                                    <h2 class="count"><span class="odometer" data-count="05"></span>+</h2>
                                    <p>Subjects Covered</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="fact__item fact__item-two">
                                     <h2 class="count"><span class="odometer" data-count="10"></span>+</h2>
                                    <p>Experienced Tutors</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="fact__item fact__item-two">
                                     <h2 class="count"><span class="odometer" data-count="100"></span>%</h2>
                                    <p>	Parent Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fact__shape-wrap">
            <img src="assets/img/others/h3_fact_shape01.svg" alt="shape" class="alltuchtopdown">
            <img src="assets/img/others/h3_fact_shape02.svg" alt="shape" class="rotateme">
        </div>
    </section> -->
    <!-- counter-area-end -->

    <!-- cta-area -->
    <section class="cta__area">
        <div class="cta__bg" data-background="assets/img/bg/cta_bg.jpg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta__content">
                        <h2 class="title">One Plan. Many Skills. Full Support.</h2>
                        <p>We teach the right things at the right age. Fill the form to get your child started today.
                        </p>
                        <a href="free-assessment" class="btn arrow-btn">Enroll Now<svg width="16" height="14" viewBox="0 0 16 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->

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