<?php include 'includes/header.php'; ?>

<!-- Page Banner -->
<section class="page-banner bg-dark text-white text-center" style="background-image: url('assets/images/Corporate client service representative wearing a headset in a modern office setup.jpg');">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-2">
        <h1 class="display-4 fw-bold mb-3" data-aos="fade-up">Contact Us</h1>
        <div class="eyebrow justify-content-center text-white" data-aos="fade-up" data-aos-delay="100">Home / Contact</div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="section-padding">
    <div class="container">
        
        <div class="row mb-5 text-center justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="eyebrow mb-2">LETâ€™S WORK TOGETHER</div>
                <h2 class="display-5 mb-4">Get in touch.</h2>
                <p class="lead text-muted">Tell us what you need. We will take it from there.</p>
                <div class="alert alert-info mt-4 text-start">
                    <i class="fas fa-info-circle me-2"></i> <strong>Note:</strong> Our physical clinic for patient appointment, patient assessment, measuring, fitting, and follow ups on prosthetics and orthotics is at <strong>FORTIS SUITES 3RD FLOOR ROOM 310, HOSPITAL ROAD IN UPPER HILL, NAIROBI KENYA</strong>.
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-light-gray p-5 rounded text-center h-100">
                    <div class="icon-square bg-primary text-white mx-auto mb-4" style="width: 70px; height: 70px; font-size: 25px;"><i class="fas fa-map-marker-alt"></i></div>
                    <h5>Visit Us</h5>
                    <p class="text-muted small mb-0">Fortis Suites 3rd Floor Room 310<br>Hospital Road, Upper Hill<br>Nairobi, Kenya</p>
                    <hr class="my-3 border-secondary">
                    <p class="text-muted small mb-0"><strong>Write to us:</strong><br>P.O. Box 50329 - 00100, Nairobi, Kenya</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-dark p-5 rounded text-center h-100 text-white">
                    <div class="icon-square bg-white text-dark mx-auto mb-4" style="width: 70px; height: 70px; font-size: 25px;"><i class="fas fa-phone-alt"></i></div>
                    <h5 class="text-white">Call Us</h5>
                    <p class="text-white-50 small mb-0">+254 712 192 134<br>+254 722 578 276</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-light-gray p-5 rounded text-center h-100">
                    <div class="icon-square bg-primary text-white mx-auto mb-4" style="width: 70px; height: 70px; font-size: 25px;"><i class="fas fa-envelope"></i></div>
                    <h5>Email Us</h5>
                    <p class="text-muted small mb-0"><a href="mailto:info@gestevklimited.co.ke" class="text-decoration-none text-muted">info@gestevklimited.co.ke</a><br><a href="mailto:gestevltd@gmail.com" class="text-decoration-none text-muted">gestevltd@gmail.com</a></p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row g-5 align-items-center mt-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 mb-4">Send us a message and let's get started.</h2>
                <p class="text-muted mb-4">Whether you are looking for general merchandise, IT equipment, or clinical supplies, our team is ready to assist you.</p>
                <img src="assets/images/Professional handshake between enterprise clients across a clean desk with tablets and documentation.jpg" class="img-fluid rounded" alt="Contact Us">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-light-gray p-5 rounded shadow-sm">
                    <form id="contactForm" action="process_contact.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control bg-white border-0 py-3" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Email Address</label>
                                <input type="email" class="form-control bg-white border-0 py-3" name="email" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control bg-white border-0 py-3" name="phone">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Message</label>
                                <textarea class="form-control bg-white border-0 py-3" name="message" rows="5" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 justify-content-center py-3">
                                    Send Message
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Google Map -->
        <div class="row mt-5 pt-5" data-aos="fade-up">
            <div class="col-12">
                <div class="rounded overflow-hidden shadow-sm" style="height: 450px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.793950415389!2d36.80613517496567!3d-1.2983708986892974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1185ebe5173f%3A0x48d8b5367310016c!2sFortis%20Suites%20UpperHill!5e0!3m2!1sen!2ske!4v1790868849867!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
