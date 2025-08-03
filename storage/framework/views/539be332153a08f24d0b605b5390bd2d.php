<?php $__env->startSection('title', 'contactus'); ?>
<?php $__env->startSection('content'); ?>

<section class="contact-us">
    <div class="container">
        <h2 class="section-title">Get in Touch</h2>
        <p class="section-subtitle">We'd love to hear from you! Reach out for any inquiries or assistance.</p>

        <div class="contact-info">
            <div class="info-box">
                <i class="fa fa-map-marker"></i>
                <h4>Our Location</h4>
                <p>123 Tech Street, Phnom Penh, Cambodia</p>
            </div>
            <div class="info-box">
                <i class="fa fa-phone"></i>
                <h4>Call Us</h4>
                <p>+855 123 456 789</p>
            </div>
            <div class="info-box">
                <i class="fa fa-envelope"></i>
                <h4>Email Us</h4>
                <p>support@kmengtochstore.com</p>
            </div>
        </div>

        <div class="contact-form">
            <h3>Send Us a Message</h3>
            <p>Have any questions? Let us know, and we'll get back to you soon.</p>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>
</section>

<style>
    .contact-us {
        padding: 50px 20px;
        text-align: center;
        background: #f9f9f9;
    }
    .section-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
    }
    .section-subtitle {
        font-size: 16px;
        color: #777;
        margin-bottom: 30px;
    }
    .contact-info {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 40px;
    }
    .info-box {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 250px;
    }
    .info-box i {
        font-size: 30px;
        color: #007bff;
        margin-bottom: 10px;
    }
    .contact-form {
        max-width: 500px;
        margin: 0 auto;
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group input, .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .btn-submit {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    .btn-submit:hover {
        background: #0056b3;
    }
</style>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <p>Have questions? Feel free to reach out to us!</p>
            
            <div class="contact-info">
                <p><i class="fa fa-map-marker"></i> Address: 123 Tech Street, Phnom Penh, Cambodia</p>
                <p><i class="fa fa-phone"></i> Phone: +855 123 456 789</p>
                <p><i class="fa fa-envelope"></i> Email: support@kmengtochstore.com</p>
            </div>
            
            <div class="social-links">
                <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                <a href="#" class="social-btn"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="col-md-6">
            <h3>Our Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093705!2d144.95373631550414!3d-37.816279779751824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1f8f3b5%3A0x2a2e5123ef26e10!2sTech%20Store!5e0!3m2!1sen!2skh!4v1645897329645!5m2!1sen!2skh" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<style>
    .container {
        margin-top: 50px;
    }
    .contact-info p {
        font-size: 18px;
        margin: 10px 0;
    }
    .social-links {
        margin-top: 20px;
    }
    .social-btn {
        font-size: 24px;
        margin-right: 15px;
        color: #333;
        transition: 0.3s;
    }
    .social-btn:hover {
        color: #007bff;
    }
</style> -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/contactus/index.blade.php ENDPATH**/ ?>