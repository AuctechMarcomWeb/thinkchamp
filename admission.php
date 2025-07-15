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
<link href="https://cdnjs.cloudflare.
<main class=" main-area fix">

<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Admission</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Admission</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
        <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- courses-details-area -->
<section class="courses__details-area section-py-120">
    <div class="container">
        <div class="row" style="flex-wrap: wrap-reverse;">
            <div class="col-xl-9 col-lg-8 course-det">
                <div class="contact-form-wrap">
                    <h4 class="title">Admission Form</h4>
                    <p>Fill this quick form and open doors to quality learning, expert mentors, and exciting growth.
                    </p>
                    <form id="admission_form" method="POST" class="p-3">
                        <div class="row g-3 mb-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Student Name *</label>
                                <input name="name" type="text" id="name" class="form-control" required>
                            </div>

                            <!-- Age -->
                            <div class="col-md-6 col-xl-3">
                                <label for="age" class="form-label">Student Age (8-16) *</label>
                                <input name="age" type="number" id="age" class="form-control" min="8" max="16" required>
                            </div>

                            <!-- Class/Grade -->
                            <div class="col-md-6 col-xl-3">
                                <label for="grade" class="form-label">Class / Grade *</label>
                                <input name="class" type="text" id="grade" class="form-control"
                                    placeholder="Enter Class or Grade" required>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-6">
                                <label for="Phone-field" class="form-label">Mobile Number *</label>
                                <input type="tel" id="Phone-field" class="form-control" pattern="^\+?[0-9\s\-]{7,20}$"
                                    title="Enter a valid phone number with 7 to 20 digits" required>
                                <input type="hidden" name="phone" id="FullPhoneNo" maxlength="30">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" id="email" class="form-control"
                                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                    title="Enter a valid email like name@example.com" name="email" required>
                            </div>

                            <!-- Guardian Name -->
                            <div class="col-md-6">
                                <label for="guardian_name" class="form-label">Guardian Full Name *</label>
                                <input name="guardian_name" type="text" id="guardian_name" class="form-control"
                                    required>
                            </div>

                            <!-- Guardian Mobile -->
                            <div class="col-md-6">
                                <label for="guardian_mobile" class="form-label">
                                    Guardian Mobile Number *
                                    <div class="form-check" style="display: inline-block; margin-left: 10px;">
                                        <input class="form-check-input" type="checkbox" id="sameAsMobile">
                                        <label class="form-check-label" for="sameAsMobile"
                                            style="font-weight: normal; font-size: 14px;">
                                            Same as Mobile Number
                                        </label>
                                    </div>
                                </label>
                                <input name="guardian_mobile" type="tel" id="guardian_mobile" class="form-control"
                                    pattern="^\+?[0-9\s\-]{7,20}$" title="Enter a valid guardian phone number" required>
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <label for="address" class="form-label">Your Full Address *</label>
                                <textarea name="address" id="address" class="form-control" rows="2" required></textarea>
                            </div>

                            <!-- Optional Message -->
                            <div class="col-md-12">
                                <label for="message" class="form-label">Message (Optional)</label>
                                <textarea name="message" id="message" class="form-control" rows="2"></textarea>
                            </div>


                            <div class="form-check-area mt-4 mb-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="agreeCorrectData" checked
                                        required>
                                    <label class="form-check-label" for="agreeCorrectData">
                                        I confirm all the details provided are correct.
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="acceptTerms" checked required>
                                    <label class="form-check-label" for="acceptTerms">
                                        I accept the <a href="#">Privacy & Policy</a> & <a href="#">Terms &
                                            Conditions</a>.
                                    </label>
                                </div>
                                <div class="form-note bg-light p-3 rounded shadow-sm">
                                    <strong>Note:</strong> After submitting the form, our team will contact you
                                    shortly via phone or email to guide you through the next steps of enrollment.
                                </div>
                            </div>



                        </div>
                        <button type="submit" class="btn btn-two arrow-btn ">Submit Now <img
                                src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                    </form>


                    <p class="ajax-response mb-0"></p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="courses__details-sidebar">
                    <!-- <div class="courses__details-video">
                            <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                            <a href="https://www.youtube.com/watch?v=YwrHGratByU" class="popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div> -->
                    <div class="courses__cost-wrap">
                        <span>Course Fee:</span>
                        <h2 class="title">$100.00 <del>$320.00</del></h2>
                    </div>
                    <div class="courses__information-wrap">
                        <h5 class="title">Package Info:</h5>
                        <ul class="list-wrap">
                            <li>
                                <img src="assets/img/icons/course_icon01.svg" alt="img" class="injectable">
                                Age Group
                                <span> 8–16 years</span>
                            </li>
                            <li>
                                <img src="assets/img/icons/course_icon02.svg" alt="img" class="injectable">
                                Course Duration
                                <span>3 Months</span>
                            </li>
                            <li>
                                <img src="assets/img/icons/course_icon03.svg" alt="img" class="injectable">
                                Total Subjects
                                <span>5</span>
                            </li>
                            <li>
                                <img src="assets/img/icons/course_icon04.svg" alt="img" class="injectable">
                                Language
                                <span>Easy English</span>
                            </li>
                            <li>
                                <img src="assets/img/icons/course_icon05.svg" alt="img" class="injectable">
                                Certifications
                                <span>Yes</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- courses-details-area-end -->

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
    <h3 style="margin-bottom: 8px; font-weight:600;">Enrollment Form Submitted Successfully!</h3>

    <!-- Subtext -->
    <p style="font-size: 14px; color:#666;">
        Thank you for your interest in Think Champ. Our team will review your details and get in touch with you soon.
    </p>

    <!-- Close Button -->
    <button onclick="document.getElementById('successPopup').style.display='none'" style="
        margin-top:20px; padding:10px 20px; border:none; border-radius:25px;
        background:linear-gradient(45deg, #ff4d6d, #5f27cd); color:white; font-weight:500;
        cursor:pointer;">
        Close
    </button>
</div>


<!-- JavaScript for intl-tel-input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
var input = document.querySelector("#Phone-field");
var hiddenInput = document.querySelector("#FullPhoneNo");

var iti = window.intlTelInput(input, {
    initialCountry: "us",
    separateDialCode: true,
    preferredCountries: ["us", "ca", "gb", "in", "pk"]
});

function updateFullPhoneNumber() {
    var fullNumber = "+" + iti.getSelectedCountryData().dialCode + input.value.replace(/\D/g, '');
    hiddenInput.value = fullNumber;
}

input.addEventListener("input", updateFullPhoneNumber);
input.addEventListener("countrychange", updateFullPhoneNumber);
// ------------------------------------------------------------------------>
document.getElementById('sameAsMobile').addEventListener('change', function() {
    const studentPhone = document.getElementById('Phone-field').value;
    const guardianPhoneField = document.getElementById('guardian_mobile');

    if (this.checked) {
        guardianPhoneField.value = studentPhone;
        guardianPhoneField.readOnly = true;
    } else {
        guardianPhoneField.value = '';
        guardianPhoneField.readOnly = false;
    }
});

document.getElementById('Phone-field').addEventListener('input', function() {
    const checkbox = document.getElementById('sameAsMobile');
    if (checkbox.checked) {
        document.getElementById('guardian_mobile').value = this.value;
    }
});
</script>
<!-- ----------------======-------------------- -->
<script>
$('#admission_form').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'admission_insert.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(res) {
            if (res == 'success') {
                $('#admission_form')[0].reset();
                $('#successPopup').fadeIn();
                setTimeout(() => {
                    $('#successPopup').fadeOut();
                }, 10000);
            } else {
                alert(res);
            }
        }
    });
});
</script>

<?php include ('footer.php');?>