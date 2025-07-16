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
</style>
<!-- main-area -->
<!-- CSS for intl-tel-input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Contact With Us</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Contact</span>
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

    <!-- contact-area -->
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-wrap">
                        <ul class="list-wrap">
                            <li>
                                <div class="icon">
                                    <img src="assets/img/icons/map.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">Address</h4>
                                    <p>USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="assets/img/icons/contact_phone.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <a href="tel:0123456789">+1 (800) 123 456 789</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="assets/img/icons/emial.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">E-mail Address</h4>
                                    <a href="mailto:info@gmail.com">info@thinkchamp.us</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-wrap">
                        <h4 class="title">Send Us Message</h4>
                        <p>Have questions or need help? Get in touch with us now!</p>
                        <form id="contact_form" method="POST">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input name="name" type="text" placeholder="Full Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input class="form-control" type="tel" id="Phone-field"
                                            placeholder="Your Mobile Number" pattern="^\+?[0-9\s\-]{7,20}$"
                                            title="Enter a valid phone number with 7 to 20 digits. Select your country code, then enter your mobile number (without country code)."
                                            required>
                                        <!-- Hidden input to store processed phone number (if needed via JS) -->
                                        <input type="hidden" name="phone" id="FullPhoneNo" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter your Email"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                            title="Enter a valid email address like name@example.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <textarea name="message" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Submit Now <img
                                    src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
            </div>
            <!-- contact-map -->
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->
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

    <!-- Envelope Icon -->
    <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Message sent" width="60"
        style="margin-bottom: 15px;" />

    <!-- Headline -->
    <h3 style="margin-bottom: 8px; font-weight:600;">Thanks for Contacting Think Champ!</h3>

    <!-- Subtext -->
    <p style="font-size: 14px; color:#666;"> We’ve received your request and will contact you shortly.</p>

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
</script>

<!-- ----------------======-------------------- -->
<script>
$('#contact_form').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'contact_insert.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(res) {
            if (res == 'success') {
                $('#contact_form')[0].reset();
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