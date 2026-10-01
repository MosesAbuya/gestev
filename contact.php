<?php 
include 'includes/header.php'; 

// Fetch products grouped by category for the dropdown
$stmt = $conn->query("SELECT id, name, category FROM products ORDER BY category, name ASC");
$allProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
$groupedProducts = [];
foreach ($allProducts as $p) {
    $groupedProducts[$p['category']][] = $p;
}
?>

<!-- Page Banner -->
<section class="page-banner bg-dark text-white text-center" style="background-image: url('<?= BASE_URL ?>assets/images/Corporate client service representative wearing a headset in a modern office setup.jpg');">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-2">
        <h1 class="display-4 fw-bold mb-3" data-aos="fade-up">Contact Us</h1>
        <div class="eyebrow justify-content-center text-white" data-aos="fade-up" data-aos-delay="100">Home / Contact</div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="section-padding bg-light">
    <div class="container">
        
        <div class="row mb-5 text-center justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="eyebrow mb-2">LET'S WORK TOGETHER</div>
                <h2 class="display-5 mb-4">Get in touch.</h2>
                <p class="lead text-muted">Tell us what you need. We will take it from there.</p>
                <div class="alert alert-info mt-4 text-start shadow-sm border-0 border-start border-4 border-info">
                    <i class="fas fa-info-circle me-2 text-info fs-5 align-middle"></i> 
                    <strong>Note:</strong> Our physical clinic for patient appointment, patient assessment, measuring, fitting, and follow ups on prosthetics and orthotics is at <strong>FORTIS SUITES 3RD FLOOR ROOM 310, HOSPITAL ROAD IN UPPER HILL, NAIROBI KENYA</strong>.
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-5 rounded text-center h-100 shadow-sm border border-light transition-hover">
                    <div class="icon-square bg-primary-subtle text-primary mx-auto mb-4 rounded-circle" style="width: 80px; height: 80px; font-size: 30px;"><i class="fas fa-map-marker-alt"></i></div>
                    <h5 class="fw-bold">Visit Us</h5>
                    <p class="text-muted small mb-0">Fortis Suites 3rd Floor Room 310<br>Hospital Road, Upper Hill<br>Nairobi, Kenya</p>
                    <hr class="my-4 border-secondary opacity-25">
                    <p class="text-muted small mb-0"><strong>Write to us:</strong><br>P.O. Box 50329 - 00100, Nairobi, Kenya</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-primary p-5 rounded text-center h-100 text-white shadow-lg transform-up">
                    <div class="icon-square bg-white text-primary mx-auto mb-4 rounded-circle" style="width: 80px; height: 80px; font-size: 30px;"><i class="fas fa-phone-alt"></i></div>
                    <h5 class="text-white fw-bold">Call Us</h5>
                    <p class="text-white-75 small mb-0 fs-6 mt-3">+254 712 192 134<br><br>+254 722 578 276</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-5 rounded text-center h-100 shadow-sm border border-light transition-hover">
                    <div class="icon-square bg-primary-subtle text-primary mx-auto mb-4 rounded-circle" style="width: 80px; height: 80px; font-size: 30px;"><i class="fas fa-envelope"></i></div>
                    <h5 class="fw-bold">Email Us</h5>
                    <p class="text-muted small mb-0 mt-3">
                        <a href="mailto:info@gestevklimited.co.ke" class="text-decoration-none text-muted fw-semibold">info@gestevklimited.co.ke</a><br><br>
                        <a href="mailto:gestevltd@gmail.com" class="text-decoration-none text-muted fw-semibold">gestevltd@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row g-5 align-items-center mt-5">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="display-5 mb-4 fw-bold">Send us a message and let's get started.</h2>
                <p class="text-muted mb-4 lead">Whether you are looking for general merchandise, IT equipment, or clinical supplies, our team is ready to assist you. Choose a product if you have a specific inquiry!</p>
                <img src="<?= BASE_URL ?>assets/images/Professional handshake between enterprise clients across a clean desk with tablets and documentation.jpg" class="img-fluid rounded-4 shadow-lg" alt="Contact Us">
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg border border-light">
                    <form id="contactForm" action="process_contact.php" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="nameInput" name="name" placeholder="John Doe" required>
                                    <label for="nameInput">First Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="emailInput" name="email" placeholder="name@example.com" required>
                                    <label for="emailInput">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="phoneInput" name="phone" placeholder="+254...">
                                    <label for="phoneInput">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="subjectInput" name="subject" placeholder="Subject">
                                    <label for="subjectInput">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select bg-light border-0" id="productSelect" name="product_id" aria-label="Select Product">
                                        <option value="" selected>General Inquiry (No specific product)</option>
                                        <?php foreach($groupedProducts as $cat => $prods): ?>
                                            <optgroup label="<?= htmlspecialchars(ucwords(str_replace('-', ' ', $cat))) ?>">
                                                <?php foreach($prods as $p): ?>
                                                    <option value="<?= $p['id'] ?>"><?= htmlspecialchars($p['name']) ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="productSelect">Inquiring about a specific product?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" id="messageInput" name="message" placeholder="Leave a message here" style="height: 150px" required></textarea>
                                    <label for="messageInput">Your Message <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-3 shadow-sm d-flex align-items-center justify-content-center">
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
                <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white" style="height: 450px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.793950415389!2d36.80613517496567!3d-1.2983708986892974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1185ebe5173f%3A0x48d8b5367310016c!2sFortis%20Suites%20UpperHill!5e0!3m2!1sen!2ske!4v1790868849867!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
