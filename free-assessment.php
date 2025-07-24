<?php include ('header.php');?>
<!-- CSS for intl-tel-input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* ---Calender CSS---- */
.calendar-container {
    margin: 10px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 8px;
    margin-bottom: 8px;
}

.day-name,
.calendar-day {
    text-align: center;
    padding: 5px 0;
    border-radius: 10px;
}

.day-name {
    background-color: #f1f3f5;
    font-weight: bold;
    color: #333;
    font-size: 12px;
}


.calendar-day {
    background-color: #e9ecef;
    cursor: pointer;
    transition: 0.2s;
}

.calendar-day:hover {
    background-color: #0d6efd;
    color: #fff;
}

.calendar-day.disabled {
    background-color: #f8f9fa;
    color: #ccc;
    cursor: not-allowed;
}

.calendar-day.active {
    background-color: #0d6efd;
    color: #fff;
    font-weight: bold;
}

input[readonly] {
    background-color: #e9ecef !important;
    cursor: not-allowed;
}


/* ----SLOT */

.slot-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

.slot-box {
    border-radius: 16px;
    padding: 20px;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    transition: 0.3s ease;
}

.slot-time {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.slot-available {
    background-color: #e8fce8;
    color: #0b8f1c;
    border: 2px solid #a4e1a4;
}

.slot-booked {
    background-color: #ffe6e6;
    color: #d00000;
    border: 2px solid #f3bcbc;
}




.slot-status {
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1rem;
}

/* Grid Layout */
.slot-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
    gap: 10px;
    margin-top: 15px;
}

/* Slot Box Styling */
.slot-box {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    font-size: 14px;
}

/* Booked Slot */
.slot-booked {
    background-color: #f8d7da;
    color: #721c24;
}

/* Available Slot */
.slot-available {
    background-color: #e9fbe9;
    color: #155724;
}

/* Time Text */
.slot-time {
    font-weight: 600;
    margin-bottom: 6px;
    font-size: 13px;
}

/* Custom Book Button */
.slot-box .btn {
    font-size: 12px;
    padding: 4px 8px;
    box-shadow: none;
}

/* ----------------- */



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

label {
    font-size: 14px;
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

@media (min-width: 768px) {
    .modal-xl {
        max-width: 62%;
    }
}

@media (max-width: 767px) {
    .modal-xl {
        width: 100%;
        margin: 10px;
    }
}

@media (max-width: 576px) {
    .slot-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>


<main class=" main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb-bg2.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Free Assessment</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Free Assessment</span>
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




    <!-- courses-details-area -->
    <section class="courses__details-area mt-5 mb-5">
        <div class="container">
            <div class="row" >
                <div class="col-xl-9 col-lg-8 course-det">
                    <div class="contact-form-wrap">
                        <h4 class="title">Book Your Free Learning Assessment Today</h4>
                        <p style="text-align:justify">Get started with a free 1-on-1 assessment to understand your
                            child’s current skill level and
                            identify areas for improvement in core subjects like Maths, English, and Logical Reasoning,
                            Personality Development, and Creative Thinking.
                            This session helps parents and students get a clear path to smarter learning with
                            ThinkChamp’s expertly designed curriculum.
                        </p>
                        <form method="POST" action="#">
                            <div class="calendar-container">
                                <div
                                    class="calendar-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <select id="monthSelect" class="form-select w-auto"></select>
                                        <select id="yearSelect" class="form-select w-auto"></select>
                                    </div>

                                    <div class="input-group mb-3" style="width: auto;">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="text" class="form-control text-center selectedDate"
                                            name="selected_date" id="selectedDate" readonly placeholder="Select a date">
                                           
                                    </div>
                                </div>
                                <div class="calendar-grid">
                                    <div class="day-name">Sun</div>
                                    <div class="day-name">Mon</div>
                                    <div class="day-name">Tue</div>
                                    <div class="day-name">Wed</div>
                                    <div class="day-name">Thu</div>
                                    <div class="day-name">Fri</div>
                                    <div class="day-name">Sat</div>
                                </div>

                                <div class="calendar-grid" id="calendarDays"></div>

                                <!-- <div class="d-flex justify-content-center"> <button type="button" onclick="showSlots()"
                                        class="btn btn-primary w-50 mt-2">Show Slot</button>
                                </div> -->
                            </div>
                        </form>

                        <div id="slotSection" style="display: none;" class="mt-5">
                            <h2 class="text-center">Select Your Time Slot</h2>
                            <div
                                class="calendar-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <div class="d-flex gap-2 flex-wrap">

                                </div>

                                <div class="input-group mb-3" style="width: auto;">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="text" class="form-control text-center selectedDate"
                                        name="selected_date" readonly placeholder="Select a date">
                                </div>
                            </div>
                            <div class="slot-grid" id="slotGrid">   </div>
                        </div>


                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="courses__details-sidebar">

                        <div class="courses__information-wrap">
                            <h4 class=" border-bottom text-center pb-2 mb-3">Package Info:</h4>
                            <ul class="list-wrap">
                                <li>
                                    <img src="assets/img/icons/course_icon01.svg" alt="img" class="injectable">
                                    Age Group
                                    <span> 7–16 years</span>
                                </li>
                                <li>
                                    <img src="assets/img/icons/course_icon02.svg" alt="img" class="injectable">
                                    Course Duration
                                    <span style="font-size:15px">1-3 Months</span>
                                </li>
                                <li>
                                    <img src="assets/img/icons/course_icon03.svg" alt="img" class="injectable">
                                    Total Subjects
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="assets/img/icons/course_icon04.svg" alt="img" class="injectable">
                                    Language
                                    <span>English</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses-details-area-end -->


    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-warning text-white py-3 px-4">
                    <h5 class="modal-title" id="bookingModalLabel"><i class="bi bi-calendar-plus me-2"></i>Book Your
                        Appointment</h5>
                    <button type="button" class="btn-close btn-close-dark fw-bold" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <!-- 🔽 Your Form Goes Here -->
                    <div class=" text-muted">
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
                                    <input name="age" type="number" id="age" class="form-control" min="8" max="16"
                                        required>
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
                                    <input type="tel" id="Phone-field" class="form-control"
                                        pattern="^\+?[0-9\s\-]{7,20}$"
                                        title="Enter a valid phone number with 7 to 20 digits" required>
                                    <input type="hidden" name="phone" id="FullPhoneNo" maxlength="30">
                                </div>
                                 <input type="hidden" class="form-control" name="time_slot" id="modalSlot">
                                <input type="hidden" class="form-control" name="booking_date" id="modalDate">
                               

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
                                        pattern="^\+?[0-9\s\-]{7,20}$" title="Enter a valid guardian phone number"
                                        required>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Your Full Address *</label>
                                    <textarea name="address" id="address" class="form-control" rows="2"
                                        required></textarea>
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
                                        <input class="form-check-input" type="checkbox" id="acceptTerms" checked
                                            required>
                                        <label class="form-check-label" for="acceptTerms">

                                            I agree to the collection and use of my personal data for the purpose of
                                            this form, as explained in the <a href="#" class="open-gdpr fw-bold">Privacy
                                                &
                                                Policy <img width="14" height="14"
                                                    src="https://img.icons8.com/external-anggara-basic-outline-anggara-putra/external-share-ui-anggara-basic-outline-anggara-putra.png"
                                                    alt="" /></a>
                                            .
                                        </label>

                                    </div>
                                    <div class="form-note bg-light p-3 rounded shadow-sm">
                                        <strong>Note:</strong> After submitting the form, our team will contact you
                                        shortly via phone or email to guide you through the next steps of enrollment.
                                    </div>
                                </div>



                            </div>
                            <button type="submit" class="btn btn-two arrow-btn ">Submit Now <svg width="16" height="14"
                                    viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<!-- GDPR Privacy Policy Modal POPUP -->
<div class="modal fade" id="gdprPolicyModal" tabindex="-1" aria-labelledby="gdprPolicyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gdprPolicyLabel">Privacy & GDPR Policy - Think Champ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 15px; line-height: 1.6;">


                <p>
                    At <strong>Think Champ</strong>, your privacy is important to us. This Privacy Policy explains how
                    we collect, use, protect, and handle your personal information when you interact with our website,
                    forms, and services.
                </p>

                <h6>1. Information We Collect</h6>
                <ul>
                    <li>Personal data such as name, email, phone number (via forms)</li>
                    <li>Browser and device information (for analytics and security)</li>
                </ul>

                <h6>2. Why We Collect Your Data</h6>
                <ul>
                    <li>To respond to your inquiries or service requests</li>
                    <li>To improve our website and services</li>
                    <li>To send you updates only with your permission</li>
                </ul>

                <h6>3. How We Store and Protect Your Data</h6>
                <p>
                    We store your data securely using encrypted servers and never share it with third parties without
                    your consent. Access is limited to authorized team members only.
                </p>

                <h6>4. Your GDPR Rights</h6>
                <ul>
                    <li>You have the right to access, update, or delete your data.</li>
                    <li>You can withdraw your consent at any time.</li>
                    <li>You can request a copy of your stored personal information.</li>
                </ul>

                <h6>5. Cookies & Tracking</h6>
                <p>
                    We may use cookies to improve your browsing experience. You can disable cookies in your browser
                    settings at any time.
                </p>

                <h6>6. Third-Party Services</h6>
                <p>
                    We do not sell or share your data with third-party marketers. However, we may use trusted services
                    like Google Analytics to understand website performance.
                </p>

                <h6>7. Contact Us</h6>
                <p>
                    If you have any questions regarding your data or this policy, feel free to contact us at: <br>
                    <strong>Email:</strong> info@thinkchamp.com <br>
                    <strong>Mobile:</strong> +123 88 9900 456
                </p>

                <p class="mt-3 text-muted">By using our site, you agree to this Privacy Policy.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ================================= -->




<!-- JavaScript for intl-tel-input -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
$(document).ready(function() {
    $('#admission_form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'admission_insert.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(res) {
                if (res.trim() === 'success') { 
                    $('#admission_form')[0].reset();
                    $('#successPopup').fadeIn();
                    $('#bookingModal').modal('hide');
                    showSlots();

                    setTimeout(() => {
                        $('#successPopup').fadeOut();
                    }, 2000); 
                } else {
                    alert("Error: " + res); 
                }
            },
            error: function(xhr, status, error) {
                alert("AJAX Error: " + error);
            }
        });
    });
});
</script>
<!--  ---------------------->
<script>
document.querySelectorAll('.open-gdpr').forEach(el => {
    el.addEventListener('click', function(e) {
        e.preventDefault();
        const gdprModal = new bootstrap.Modal(document.getElementById('gdprPolicyModal'), {
            backdrop: true,
            keyboard: true
        });
        gdprModal.show();
    });
});
</script>
<!-- --------------------- -->

<!-- ===
 =====CALENDER JS BY ZAID ===== -->
 <script>
$(function () {
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    const $monthSelect = $('#monthSelect');
    const $yearSelect = $('#yearSelect');
    const $calendarDays = $('#calendarDays');
    const $selectedInputs = $('.selectedDate');

    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    $.each(months, (i, month) => {
        $monthSelect.append(
            `<option value="${i}" ${i === today.getMonth() ? 'selected' : ''}>${month}</option>`);
    });

    for (let y = today.getFullYear(); y <= 2040; y++) {
        $yearSelect.append(`<option value="${y}" ${y === today.getFullYear() ? 'selected' : ''}>${y}</option>`);
    }

    function formatDate(date) {
        const d = String(date.getDate()).padStart(2, '0');
        const m = String(date.getMonth() + 1).padStart(2, '0');
        const y = date.getFullYear();
        return `${d}-${m}-${y}`;
    }

    function renderCalendar(year, month) {
        $calendarDays.empty();
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const todayStr = formatDate(today).split("-").reverse().join("-");

        for (let i = 0; i < firstDay; i++) {
            $calendarDays.append('<div></div>');
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const date = new Date(year, month, day);
            const dateStr = formatDate(date);
            const compStr = dateStr.split("-").reverse().join("-");

            const $dayDiv = $('<div>').addClass('calendar-day').text(day);

            if (compStr < todayStr) {
                $dayDiv.addClass('disabled');
            } else {
                $dayDiv.data('date', dateStr);

                if (compStr === todayStr) {
                    $dayDiv.addClass('active');
                    $selectedInputs.val(dateStr);
                    showSlots(dateStr); // Call showSlots on initial render for today
                }

                $dayDiv.on('click', function () {
                    $('.calendar-day').removeClass('active');
                    $(this).addClass('active');
                    const selectedDate = $(this).data('date');
                    $selectedInputs.val(selectedDate);
                    showSlots(selectedDate); // Call showSlots on day click
                });
            }

            $calendarDays.append($dayDiv);
        }
    }

    $monthSelect.add($yearSelect).on('change', function () {
        renderCalendar(parseInt($yearSelect.val()), parseInt($monthSelect.val()));
    });

    renderCalendar(today.getFullYear(), today.getMonth());
});
</script>
<!-- ======= -->

<script>
function showSlots() {
    const date = document.getElementById("selectedDate").value;
    if (!date) {
        alert("Please select a date first.");
        return;
    }

    fetch("get_slots.php?date=" + date)
        .then(response => response.text())
        .then(html => {
            document.getElementById("slotGrid").innerHTML = html;
            document.getElementById("slotSection").style.display = "block";
        });
}
</script>
<script>
function fillSlot(date, slotKey, timeLabel) {
    document.getElementById("modalDate").value = date;
    document.getElementById("modalSlot").value = slotKey;
    // Optional: show selected time in modal
    document.getElementById("modalTimeLabel").innerText = timeLabel;
}
</script>

<!--  -->
<?php include ('footer.php');?>