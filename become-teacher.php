<?php include ('header.php');?>

<style>
.iti {
    width: 100%;
}

.contact-map iframe {
    filter: none;
}

.consult-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: linear-gradient(to right, #f0571f, #faa419);
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    color: white;
    border-radius: 50px;
    z-index: 1050;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    transition: 0.3s ease;
}

.consult-btn:hover {
    background: linear-gradient(to right, #faa419, #f0571f);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.btn-gradient {
    background: linear-gradient(to right, #f0571f, #faa419);
    border: none;
}

.btn-gradient:hover {
    background: linear-gradient(to right, #faa419, #f0571f);
}

@media (min-width: 992px) {

    .modal-lg,
    .modal-xl {
        --bs-modal-width: 600px;
    }
}

@media (max-width: 991.98px) {
    .courses__details-sidebar {
        margin: 30px 0 0;
    }

    .course-det {
        margin: 30px 0px;
    }

    .breadcrumb__bg {
        padding: 20px 0;
    }

    .section-pb-90 {
        padding-bottom: 20px;
    }
    .section-pt-120 {
        padding-top: 70px;
    }
    .contact-form-wrap {
        margin-top: 20px;
    }
}

@media (max-width: 767.98px) {

    .section-py-120 {
        padding: 0px;
    }

    .courses__details-content .nav-tabs .nav-link {
        font-size: 13px;
        padding: 14px 15px;
    }
}
</style>
<!-- CSS for intl-tel-input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<main class=" main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Become A Teacher</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Become A Teacher</span>
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
    <section class="features__area-two section-pt-120 section-pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Become A Teacher</span>
                        <h2 class="title">Start your teaching journey today</h2>
                        <p>Become a part of Think Champ and bring out the champion in every child.</p>
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
                                        <i><img src="https://img.icons8.com/ios/50/FFFFFF/person-growth.png"
                                                alt="person-growth" /></i>
                                    </div>
                                    <h2 class="title">Recognition And Growth Path</h2>
                                </div>
                                <p>Get rewarded and recognized for your teaching quality and student performance too</p>
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
                                        <i class="far fa-star fa-2x"></i>
                                    </div>
                                    <h2 class="title">Be A Role Model For Students</h2>
                                </div>
                                <p>Make a lasting impression and help children build confidence in every subject they
                                    learn.</p>
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
                                        <img width="50" height="50" src="https://img.icons8.com/dotty/FFFFFF/money.png"
                                            alt="money" />
                                    </div>
                                    <h2 class="title">Get Paid For Your Passion</h2>
                                </div>
                                <p>Turn your teaching skills into earnings. Teach what you love and earn for every
                                    session.</p>
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

    <section class="courses__details-area mb-5">
        <div class="container">
            <div class="row" style="flex-wrap: wrap-reverse;">
                <div class="col-xl-8 col-lg-8 course-det">
                    <div class="contact-form-wrap">
                        <h4 class="title"> Apply to Teach with Us</h4>
                        <p>Fill in your details and submit your CV to take the first step toward becoming a valued
                            educator.
                        </p>
                        <form id="become_teacher_form" method="POST" enctype="multipart/form-data" class="p-3">
                            <div class="row g-3 mb-3">
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input name="name" type="text" id="name" class="form-control" required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input name="email" type="email" id="email" class="form-control" required>
                                </div>

                                <!-- Mobile -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Mobile Number *</label>
                                    <input name="phone" type="tel" id="phone" class="form-control"
                                        pattern="^\+?[0-9\s\-]{7,20}$" required>
                                </div>

                                <!-- Education -->
                                <div class="col-md-6">
                                    <label for="education" class="form-label">Highest Qualification *</label>
                                    <input name="education" type="text" id="education" class="form-control" required>
                                </div>

                                <!-- Experience -->
                                <div class="col-md-6">
                                    <label for="experience" class="form-label">Teaching Experience (in years) *</label>
                                    <input name="experience" type="number" id="experience" class="form-control" min="0"
                                        required>
                                </div>

                                <!-- Subject Expertise -->
                                <div class="col-md-6">
                                    <label for="subjects" class="form-label">Subjects You Can Teach *</label>
                                    <input name="subjects" type="text" id="subjects" class="form-control"
                                        placeholder="e.g. Maths, English, Reasoning" required>
                                </div>

                                <!-- Skills -->
                                <div class="col-md-6">
                                    <label for="skills" class="form-label">Skills *</label>
                                    <input name="skills" type="text" id="skills" class="form-control"
                                        placeholder="e.g. Communication, Time Management" required>
                                </div>

                                <!-- CV Upload -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cv" class="form-label">Upload Your CV or Image (Max: 1MB) *</label>
                                        <input type="file" name="cv" id="cv" class="form-control"
                                            accept=".pdf,.jpg,.jpeg,.png" required>
                                        <div id="cvError" class="text-danger mt-2" style="display: none;"></div>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Full Address *</label>
                                    <textarea name="address" id="address" class="form-control" rows="2"
                                        required></textarea>
                                </div>

                                <!-- Message -->
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Why Should We Hire You? (Optional)</label>
                                    <textarea name="message" id="message" class="form-control" rows="2"></textarea>
                                </div>

                                <!-- Agreement -->
                                <div class="form-check-area mt-4 mb-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="agreeCorrectData" required>
                                        <label class="form-check-label" for="agreeCorrectData">
                                            I confirm that all details provided are accurate and complete.
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </form>



                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="courses__details-sidebar">

                        <div class="courses__information-wrap">
                            <h5 class="title">Requirements:</h5>
                            <ul class="list-wrap">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                    Minimum Experience:
                                    <span>1 Year</span>
                                </li>
                                <li>
                                    <img width="20" height="20" src="https://img.icons8.com/ios-filled/education.png"
                                        alt="education" />
                                    Education:
                                    <span>Bachelor’s Degree</span>
                                </li>
                                <li>
                                    <img width="20" height="20" src="https://img.icons8.com/ios/language.png"
                                        alt="language" />
                                    Language:
                                    <span>Fluent in English</span>
                                </li>
                                <li>
                                    <i class="fa-regular fa-comments"></i>
                                    Communication Skills:
                                    <span>Strong</span>
                                </li>
                                <li>
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    Lesson Planning:
                                    <span>Ability to Plan</span>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Success Popup -->
<div id="successPopup" style="
    display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%);
    background:white; padding:40px 30px; border-radius:16px; box-shadow:0 5px 25px rgba(0,0,0,0.15);
    z-index:9999; text-align:center; width: 90%; max-width: 400px;">

    <!-- Close Button -->
    <button onclick="document.getElementById('successPopup').style.display='none'"
        style="position:absolute; top:10px; right:15px; background:none; border:none; font-size:22px; color:#999; cursor:pointer;">
        &times;
    </button>

    <!-- Check Icon -->
    <i class="fas fa-check-circle" style="font-size: 60px; color: #28a745; margin-bottom: 15px;"></i>


    <!-- Headline -->
    <h3 style="margin-bottom: 8px; font-weight:600;">Application Submitted Successfully!</h3>

    <p style="font-size: 14px; color:#666;">
        Thank you for applying to become a teacher with Think Champ. Our team will review your application and contact
        you shortly.
    </p>


    <!-- Close Button -->
    <button onclick="document.getElementById('successPopup').style.display='none'" style="
        margin-top:20px; padding:10px 20px; border:none; border-radius:25px;
        background:linear-gradient(45deg, #ff4d6d, #5f27cd); color:white; font-weight:500;
        cursor:pointer;">
        Close
    </button>
</div>


<!-- ----------------======-------------------- -->

<!-- ------------------------------------------ -->
<script>
$('#become_teacher_form').on('submit', function(e) {
    e.preventDefault();

    const form = $('#become_teacher_form')[0];
    const formData = new FormData(form);

    $.ajax({
        url: 'teacher_insert.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(res) {
            if (res.trim() === 'success') {
                $('#become_teacher_form')[0].reset();
                $('#successPopup').fadeIn();
                setTimeout(() => {
                    $('#successPopup').fadeOut();
                }, 20000);
            } else {
                alert(res);
            }
        }
    });
});
</script>


<?php include ('footer.php');?>