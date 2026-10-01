<!-- Footer -->
<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= BASE_URL ?>assets/logo/gestev-logo.png" alt="Gestev Logo" class="mb-4 bg-white p-2" style="max-height: 50px; border-radius: 4px;">
                <p class="text-white mb-2 fw-bold mt-3">Working Hours:</p>
                <p class="mb-1 small">Monday - Friday: 08:00 AM - 05:00 PM</p>
                <p class="small">Saturday - Sunday: Closed</p>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h5 class="mb-4">Contact Information</h5>
                <p class="small mb-2">Fortis Suites 3rd Floor Room 310<br>Nairobi, Kenya<br>P.O. Box 50329 - 00100</p>
                <p class="text-white mt-4 fw-bold mb-2">Follow On Socials:</p>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-dark btn-sm text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-dark btn-sm text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-dark btn-sm text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h5 class="mb-4">Get In Touch</h5>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-phone-alt me-3 text-white"></i>
                    <span class="small">Phone: +254 712 192 134 / +254 722 578 276</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-envelope me-3 text-white"></i>
                    <span class="small">Email: info@gestevklimited.co.ke<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gestevltd@gmail.com</span>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <h5 class="mb-4">Newsletter Subscription</h5>
                <p class="small mb-3">Stay updated on our latest projects, tips, and offers.</p>
                <form id="subscribeForm" action="process_subscribe.php" method="POST" class="footer-newsletter d-flex">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                    <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom mt-5">
            <div class="footer-links">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="terms.php">Terms</a>
                <a href="privacy.php">Privacy</a>
            </div>
            <div>
                Copyright &copy; <?= date('Y') ?> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- SweetAlert2 --><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><!-- Custom JS -->
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
