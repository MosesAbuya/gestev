<?php include 'includes/header.php'; ?>

<!-- Hero Section with Carousel Background -->
<section class="hero-section position-relative">

    <!-- Carousel (background) -->
    <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Modern commercial logistics warehouse with forklift operations, or a distribution hub loading bay.jpg" class="d-block w-100 hero-bg-img" alt="Warehouse">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg" class="d-block w-100 hero-bg-img" alt="Business Team">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Multi-function adjustable hospital bed with collapsible aluminum side rails, crank handles, and mattress.jpg" class="d-block w-100 hero-bg-img" alt="Patient Care">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Professional handshake between enterprise clients across a clean desk with tablets and documentation.jpg" class="d-block w-100 hero-bg-img" alt="Professional">
            </div>
        </div>
    </div>

    <!-- Dark Overlay -->
    <div class="hero-overlay"></div>

    <!-- Hero Content -->
    <div class="container hero-content mt-5 pt-4">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="fw-bold mb-3 text-white" style="font-size: 4rem; line-height: 1.1;" data-aos="fade-right" data-aos-delay="100">Quality Supplies. Reliable Delivery.</h1>
                <p class="mb-4 text-light" data-aos="fade-up" data-aos-delay="200">Serving private & government sectors with general merchandise, IT, orthopaedics & clinical supplies.</p>
                <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?= BASE_URL ?>contact" class="btn btn-primary">
                        Get Free Estimate
                        <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
                    </a>
                    <a href="<?= BASE_URL ?>about" class="play-btn">
                        <i class="fas fa-info-circle"></i> Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block position-relative" data-aos="zoom-in" data-aos-delay="400">
                <div class="experience-badge" style="top: 50%; right: 10%; bottom: auto;">
                    <i class="fas fa-truck-loading fs-2 mb-1"></i>
                    <span style="font-size:12px;">Fast Delivery</span>
                </div>
            </div>
        </div>

        <!-- Carousel Controls (dots) -->
        <div class="carousel-indicators hero-indicators" style="position: relative; margin-top: 40px; justify-content: flex-start; margin-bottom: 0;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div>
    </div>
</section>


<!-- Hero Overlap Section -->
<section class="overlap-wrapper container">
    <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="overlap-card d-flex flex-column h-100">
                <h5 class="mb-3">IT & Office Supplies</h5>
                <p class="text-muted small mb-4 flex-grow-1">Equipping modern workplaces with cutting-edge tech.</p>
                <img src="assets/images/Sleek corporate ultrabook open on a clean desk.jpg" alt="IT Supplies">
                <a href="<?= BASE_URL ?>it-office-supplies" class="text-dark fw-bold mt-3 text-decoration-none d-flex align-items-center justify-content-between">
                    Learn More <i class="fas fa-arrow-right text-primary"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="overlap-card p-0 overflow-hidden h-100">
                <img src="assets/images/Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg" alt="Team" style="height: 100%; border-radius: var(--border-radius);">
            </div>
        </div>
        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <div class="overlap-card dark d-flex flex-column justify-content-center h-100 p-5">
                <div class="mb-4">
                    <span class="bg-primary text-white p-3 rounded d-inline-block mb-4"><i class="fas fa-handshake fs-3"></i></span>
                </div>
                <h6 class="text-white-50 mb-2">Happy Satisfied Customers</h6>
                <h2 class="text-white display-4 fw-bold mb-0">500+</h2>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 position-relative" data-aos="fade-right">
                <img src="assets/images/Dual-monitor desktop computer setup with slim CPU casing and wireless peripherals.jpg" class="img-fluid rounded" alt="About Us" style="height: 600px; object-fit: cover; width: 100%;">
                <div class="experience-badge bg-primary">
                    <h3 class="mb-0 text-white">5+</h3>
                    <span class="small">Years Exp.</span>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
                <div class="eyebrow">About Us</div>
                <h2 class="display-5 mb-4">Redefining procurement through quality and reliability</h2>
                <p class="text-muted mb-5">We pool together the efforts of young minds with great interpersonal skills to provide effective merchandise and supplies to private and government sectors. Our mission is to exceed customer expectations consistently.</p>
                
                <div class="row g-4 mb-5">
                    <div class="col-sm-6">
                        <div class="bg-light-gray p-4 rounded h-100">
                            <h5 class="mb-2">Commitment to Quality</h5>
                            <p class="small text-muted mb-0">Every supply we deliver reflects our unwavering dedication.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-light-gray p-4 rounded h-100">
                            <h5 class="mb-2">Innovation at Every Step</h5>
                            <p class="small text-muted mb-0">From sourcing to delivery, we use cutting-edge logistics.</p>
                        </div>
                    </div>
                </div>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> We respect deadlines and ensure every delivery.</li>
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> We offer high-quality clinical and IT products.</li>
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Every service reflects our passion for excellence.</li>
                </ul>
                
                <a href="<?= BASE_URL ?>about" class="btn btn-primary">
                    More About Us
                    <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row mb-5 text-center justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="eyebrow justify-content-center">Our Departments</div>
                <h2 class="display-5">Explore our comprehensive supply solutions</h2>
            </div>
        </div>
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card position-relative bg-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>it-office-supplies" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">IT & Office</h5>
                        <span class="text-muted fw-bold small">01.</span>
                    </div>
                    <p class="small text-muted mb-4 flex-grow-1">Laptops, workstations, and enterprise furniture.</p>
                    <div class="overflow-hidden rounded mb-4" style="height: 180px;">
                        <img src="assets/images/Modern curved wooden corporate reception desk and modular 4-pod office cubicles.jpg" alt="Office" class="img-fluid w-100 h-100" style="object-fit: cover; ">
                    </div>
                    <div class="d-flex align-items-center text-primary fw-bold mt-auto">
                        Explore Department <i class="fas fa-arrow-right ms-2 btn btn-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card position-relative bg-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>medical-equipment" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Medical Equipment</h5>
                        <span class="text-muted fw-bold small">02.</span>
                    </div>
                    <p class="small text-muted mb-4 flex-grow-1">Advanced diagnostic and surgical instruments.</p>
                    <div class="overflow-hidden rounded mb-4" style="height: 180px;">
                        <img src="assets/images/Oxygen Concentrators & Cylinders.jpg" alt="Medical Equipment" class="img-fluid w-100 h-100" style="object-fit: cover; ">
                    </div>
                    <div class="d-flex align-items-center text-primary fw-bold mt-auto">
                        Explore Department <i class="fas fa-arrow-right ms-2 btn btn-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card position-relative bg-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>patient-care" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Patient Care</h5>
                        <span class="text-muted fw-bold small">03.</span>
                    </div>
                    <p class="small text-muted mb-4 flex-grow-1">Hospital beds, commodes, and clinical safety gear.</p>
                    <div class="overflow-hidden rounded mb-4" style="height: 180px;">
                        <img src="assets/images/Multi-function adjustable hospital bed with collapsible aluminum side rails, crank handles, and mattress.jpg" alt="Patient Care" class="img-fluid w-100 h-100" style="object-fit: cover; ">
                    </div>
                    <div class="d-flex align-items-center text-primary fw-bold mt-auto">
                        Explore Department <i class="fas fa-arrow-right ms-2 btn btn-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card position-relative bg-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>orthopaedics-mobility" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Orthopaedics</h5>
                        <span class="text-muted fw-bold small">04.</span>
                    </div>
                    <p class="small text-muted mb-4 flex-grow-1">Braces, prosthetics, and advanced mobility aids.</p>
                    <div class="overflow-hidden rounded mb-4" style="height: 180px;">
                        <img src="assets/images/Transtibial below-knee modular prosthesis showing socket, pylon pipe, and foot .jpg" alt="Orthopaedics" class="img-fluid w-100 h-100" style="object-fit: cover; ">
                    </div>
                    <div class="d-flex align-items-center text-primary fw-bold mt-auto">
                        Explore Department <i class="fas fa-arrow-right ms-2 btn btn-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card position-relative bg-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>about" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">General Logistics</h5>
                        <span class="text-muted fw-bold small">05.</span>
                    </div>
                    <p class="small text-muted mb-4 flex-grow-1">Fast and secure delivery of general merchandise.</p>
                    <div class="overflow-hidden rounded mb-4" style="height: 180px;">
                        <img src="assets/images/Commercial delivery van or medium cargo truck being loaded with boxed supplies.jpg" alt="Logistics" class="img-fluid w-100 h-100" style="object-fit: cover; ">
                    </div>
                    <div class="d-flex align-items-center text-primary fw-bold mt-auto">
                        Learn More <i class="fas fa-arrow-right ms-2 btn btn-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card position-relative bg-primary text-white rounded p-4 h-100 d-flex flex-column shadow-sm transition-hover">
                    <a href="<?= BASE_URL ?>contact" class="stretched-link"></a>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-white">Custom Requests</h5>
                        <span class="text-white opacity-75 fw-bold small">06.</span>
                    </div>
                    <p class="small text-white opacity-75 mb-4 flex-grow-1">Don't see what you need? We can source specialized medical and IT equipment globally just for you.</p>
                    <div class="overflow-hidden rounded mb-4 d-flex align-items-center justify-content-center bg-white bg-opacity-10" style="height: 180px;">
                        <i class="fas fa-headset fa-4x text-white opacity-50"></i>
                    </div>
                    <div class="d-flex align-items-center text-white fw-bold mt-auto">
                        Contact Us <i class="fas fa-arrow-right ms-2 btn btn-light text-primary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"></i>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</section>

<!-- What We Do Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="eyebrow">What We Do</div>
                <h2 class="display-5 mb-4">Blending precision, quality, and speed to meet your needs</h2>
                <p class="text-muted mb-5">Our multidisciplinary team specializes in procurement, interior office setup, and clinical supply chains. We bring together technical expertise to craft solutions that inspire.</p>
                
                <div class="row g-4 mb-5">
                    <div class="col-sm-6">
                        <div class="bg-light-gray p-4 rounded h-100">
                            <div class="icon-square bg-primary text-white mb-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5 class="mb-3">Supply Excellence</h5>
                            <p class="small text-muted border-bottom pb-3 mb-3">Our procurement approach focuses on precision and sustainability.</p>
                            <p class="small text-muted mb-0"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Ensures durability</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-light-gray p-4 rounded h-100">
                            <div class="icon-square bg-primary text-white mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="mb-3">Innovative Sourcing</h5>
                            <p class="small text-muted border-bottom pb-3 mb-3">We push the boundaries to provide modern clinical solutions.</p>
                            <p class="small text-muted mb-0"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Blends creativity</p>
                        </div>
                    </div>
                </div>
                
                <a href="<?= BASE_URL ?>contact" class="btn btn-primary">
                    Contact Us Today
                    <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="assets/images/Professional handshake between enterprise clients across a clean desk with tablets and documentation.jpg" class="img-fluid rounded" alt="Professional Handshake" style="border-radius: 20px 20px 0 20px; box-shadow: -20px -20px 0 var(--light-bg);">
            </div>
        </div>
    </div>
</section>

<!-- Clinic CTA Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row g-0 rounded-4 overflow-hidden shadow-lg" data-aos="fade-up">
            <div class="col-lg-6 position-relative">
                <img src="assets/images/clinic_consultation.jpg" alt="Clinic Consultation" class="w-100 h-100" style="object-fit: cover; min-height: 400px;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.2), transparent);"></div>
            </div>
            <div class="col-lg-6 bg-primary text-white d-flex flex-column justify-content-center p-5 p-lg-5">
                <div class="eyebrow text-white opacity-75 mb-3"><i class="fas fa-stethoscope me-2"></i> Visit Our Physical Clinic</div>
                <h2 class="display-6 fw-bold mb-4">Patient Appointments & Assessments</h2>
                <p class="lead mb-4 opacity-75" style="font-size: 1.1rem;">
                    For comprehensive patient assessments, precise measurement fittings, and dedicated follow-ups on prosthetics and orthotics, our specialist team is ready to assist you.
                </p>
                
                <div class="d-flex align-items-start gap-3 mb-5">
                    <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 45px; height: 45px;">
                        <i class="fas fa-map-marker-alt fs-5"></i>
                    </div>
                    <div>
                        <h6 class="mb-1 fw-bold text-white">Our Location</h6>
                        <p class="mb-0 opacity-75 small">FORTIS SUITES, 3RD FLOOR, ROOM 310<br>HOSPITAL ROAD, UPPER HILL<br>NAIROBI, KENYA</p>
                    </div>
                </div>

                <div>
                    <a href="<?= BASE_URL ?>contact" class="btn btn-light text-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">
                        Book an Appointment <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Parallax Video Section -->
<section class="section-padding bg-dark text-white text-center position-relative" style="background-image: url('assets/images/aerial-view-of-vibrant-skyline-with-modern-skyscrapers-in-central-business-district-nairobi-kenya-AAEF41924.jpg'); background-size: cover; background-attachment: fixed; min-height: 500px; display: flex; align-items: center;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.7);"></div>
    <div class="container position-relative z-2">
        <div class="eyebrow justify-content-center text-white mb-4">Watch Our Story</div>
        <h2 class="display-4 text-white mb-5">Tailored procurement and supply solutions for every budget</h2>
        <a href="#" class="play-btn mx-auto d-flex flex-column align-items-center">
            <i class="fas fa-play fs-3 p-4" style="width: 80px; height: 80px;"></i>
        </a>
    </div>
</section>

<!-- Procurement Options Section -->
<section class="section-padding bg-dark" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'#333333\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
    <div class="container">
        <div class="row text-center mb-5 justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="eyebrow justify-content-center text-white">Procurement Options</div>
                <h2 class="display-5 text-white">Tailored supply frameworks for every organization</h2>
            </div>
        </div>
        
        <div class="row g-4 align-items-center">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-darker-bg p-5 rounded border border-secondary" style="border-color: #333 !important;">
                    <div class="icon-square bg-primary text-white mb-4"><i class="fas fa-box"></i></div>
                    <p class="text-white-50 mb-1">Standard Supply</p>
                    <h3 class="text-white mb-4">Direct Orders</h3>
                    <h6 class="text-white mb-4 pb-3 border-bottom border-secondary" style="border-color: #333 !important;">What's Included:</h6>
                    <ul class="list-unstyled mb-5 text-white-50 small">
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> One-time bulk purchasing</li>
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Standard delivery timelines</li>
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Invoice-based transactions</li>
                    </ul>
                    <a href="<?= BASE_URL ?>contact" class="btn btn-outline-light w-100 justify-content-between rounded-0 py-3">Request a Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-primary p-5 rounded position-relative">
                    <span class="badge bg-dark position-absolute top-0 end-0 m-4 py-2 px-3">Most Popular</span>
                    <div class="icon-square bg-dark text-white mb-4"><i class="fas fa-file-contract"></i></div>
                    <p class="text-white-50 mb-1">Contract Supply</p>
                    <h3 class="text-white mb-4">Annual Tenders</h3>
                    <h6 class="text-white mb-4 pb-3 border-bottom border-light" style="border-color: rgba(255,255,255,0.2) !important;">What's Included:</h6>
                    <ul class="list-unstyled mb-5 text-white small">
                        <li class="mb-3"><i class="fas fa-square text-dark me-2" style="font-size: 8px;"></i> Scheduled recurring deliveries</li>
                        <li class="mb-3"><i class="fas fa-square text-dark me-2" style="font-size: 8px;"></i> Priority sourcing & inventory lock</li>
                        <li class="mb-3"><i class="fas fa-square text-dark me-2" style="font-size: 8px;"></i> Discounted volume pricing</li>
                    </ul>
                    <a href="<?= BASE_URL ?>contact" class="btn btn-dark text-white w-100 justify-content-between rounded-0 py-3">Partner With Us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-darker-bg p-5 rounded border border-secondary" style="border-color: #333 !important;">
                    <div class="icon-square bg-primary text-white mb-4"><i class="fas fa-building"></i></div>
                    <p class="text-white-50 mb-1">Enterprise Plan</p>
                    <h3 class="text-white mb-4">Government LPO</h3>
                    <h6 class="text-white mb-4 pb-3 border-bottom border-secondary" style="border-color: #333 !important;">What's Included:</h6>
                    <ul class="list-unstyled mb-5 text-white-50 small">
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Full LPO financing compliance</li>
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Dedicated Project Manager</li>
                        <li class="mb-3"><i class="fas fa-square text-primary me-2" style="font-size: 8px;"></i> Complex logistics & staging</li>
                    </ul>
                    <a href="<?= BASE_URL ?>contact" class="btn btn-outline-light w-100 justify-content-between rounded-0 py-3">Contact Procurement <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8" data-aos="fade-right">
                <div class="eyebrow">Our Projects</div>
                <h2 class="display-5">A showcase of supply solutions that inspire and endure</h2>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                <a href="#" class="btn btn-primary">
                    View All Projects
                    <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
                </a>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 rounded overflow-hidden position-relative h-100" style="min-height: 400px;">
                    <img src="assets/images/Transtibial below-knee modular prosthesis showing socket, pylon pipe, and foot .jpg" class="position-absolute w-100 h-100" style="object-fit: cover;" alt="Orthopaedics">
                    <div class="position-absolute bottom-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                        <h5 class="text-white mb-1">Orthopaedics Supply</h5>
                        <p class="text-primary small mb-0 fw-bold">Medical Mobility</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 rounded overflow-hidden position-relative h-100" style="min-height: 400px;">
                    <img src="assets/images/Pediatric cerebral palsy  tilt-in-space wheelchair with lateral trunk supports and headrest.jpg" class="position-absolute w-100 h-100" style="object-fit: cover;" alt="Wheelchair">
                    <div class="position-absolute bottom-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                        <h5 class="text-white mb-1">Patient Care Center</h5>
                        <p class="text-primary small mb-0 fw-bold">Rehabilitation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 rounded overflow-hidden position-relative h-100" style="min-height: 400px;">
                    <img src="assets/images/Large floor-standing enterprise multi-function office printing and scanning station.jpg" class="position-absolute w-100 h-100" style="object-fit: cover;" alt="Printing">
                    <div class="position-absolute bottom-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                        <h5 class="text-white mb-1">Enterprise IT Setup</h5>
                        <p class="text-primary small mb-0 fw-bold">Corporate Office</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="eyebrow">Our Testimonials</div>
                <h2 class="display-5 mb-4">Real feedback from those who trust our services</h2>
                <p class="text-muted mb-5">Our commitment to excellence has earned us the trust of hospitals, clinics, and government sectors alike.</p>
                <a href="#" class="btn btn-primary">
                    View All Testimonials
                    <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
                </a>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="bg-white p-5 rounded shadow-sm h-100">
                            <p class="text-muted mb-4 font-italic">"The team turned our procurement needs into a reality from initial planning to final delivery. Everything was managed with professionalism and precision."</p>
                            <h6 class="mb-0">Wade Warren</h6>
                            <span class="small text-primary">Procurement Officer</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-white p-5 rounded shadow-sm h-100">
                            <p class="text-muted mb-4 font-italic">"Gestev provided exceptional clinical supplies right on time. Their dedication to quality and patient care products is truly unmatched in the industry."</p>
                            <h6 class="mb-0">Darlene Robertson</h6>
                            <span class="small text-primary">Hospital Administrator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marquee Banner -->
<div class="bg-primary py-3 overflow-hidden marquee-text">
    <div class="d-flex whitespace-nowrap" style="animation: scroll 20s linear infinite;">
        <h4 class="mb-0 mx-4 text-white"><i class="fas fa-star me-2 fs-6"></i> Commercial Projects</h4>
        <h4 class="mb-0 mx-4 text-white"><i class="fas fa-star me-2 fs-6"></i> Clinical Care & Design</h4>
        <h4 class="mb-0 mx-4 text-white"><i class="fas fa-star me-2 fs-6"></i> Office Setup</h4>
        <h4 class="mb-0 mx-4 text-white"><i class="fas fa-star me-2 fs-6"></i> General Logistics</h4>
        <h4 class="mb-0 mx-4 text-white"><i class="fas fa-star me-2 fs-6"></i> Enterprise Supplies</h4>
    </div>
    <style>
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .whitespace-nowrap { white-space: nowrap; }
    </style>
</div>


<?php include 'includes/footer.php'; ?>
