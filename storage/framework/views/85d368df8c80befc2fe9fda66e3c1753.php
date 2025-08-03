<?php $__env->startSection('title', 'aboutus'); ?>
<?php $__env->startSection('content'); ?>
<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
    }

    .about-us {
        padding: 80px 0;
        background: linear-gradient(to right, #f9f9f9, #ffffff);
        text-align: center;
    }

    .about-us .section-title {
        font-size: 38px;
        font-weight: bold;
        color: #222;
        margin-bottom: 20px;
    }

    .about-us .content {
        max-width: 850px;
        margin: auto;
        font-size: 18px;
        color: #444;
        line-height: 1.6;
    }

    /* Mission & Vision */
    .mission-vision {
        padding: 60px 0;
        background-color: #f3f3f3;
        text-align: center;
    }

    .mission-vision h3 {
        font-size: 28px;
        color: #333;
    }

    .mission-vision p {
        font-size: 18px;
        color: #555;
    }

    /* Team Section */
    .team-section {
        background-color: #ffffff;
        padding: 70px 0;
        text-align: center;
    }

    .team-section .section-title {
        margin-bottom: 40px;
    }

    .team-member {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
        border-radius: 10px;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .team-member img {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #ddd;
        transition: 0.3s;
    }

    .team-member:hover img {
        border-color: #f39c12;
    }

    .team-member h4 {
        font-size: 22px;
        color: #222;
        margin-top: 15px;
        font-weight: bold;
    }

    .team-member p {
        font-size: 16px;
        color: #666;
    }

    /* Contact Section */
    .contact-section {
        background: #222;
        color: #fff;
        padding: 50px 0;
        text-align: center;
    }

    .contact-section h3 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .contact-section a {
        color: #f39c12;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
    }

    .contact-section a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <!-- Hero Section -->
    <div class="about-us">
        <h1 class="section-title">Who We Are</h1>
        <p class="content">
            Welcome to <strong>KMENGTOCH STORE</strong>—where innovation meets affordability! We are passionate about bringing you the best tech gadgets, ensuring quality, and delivering top-notch customer service. 
            Our team is dedicated to making technology accessible, reliable, and affordable for everyone.
        </p>
    </div>

    <!-- Our Mission & Vision -->
    <div class="row mission-vision">
        <div class="col-md-6">
            <h3>🚀 Our Mission</h3>
            <p>To provide the latest tech products with unbeatable service and create a seamless shopping experience for our customers.</p>
        </div>
        <div class="col-md-6">
            <h3>🌟 Our Vision</h3>
            <p>To become a global leader in the tech industry, known for reliability, innovation, and customer satisfaction.</p>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <h2 class="section-title">Meet the Power Behind KMENGTOCH STORE</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/mengly.jpg')); ?>" alt="Lai Mengly">
                    <h4>Lai Mengly</h4>
                    <p>Founder & CEO</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/changér.jpg')); ?>" alt="Korng Chheiy">
                    <h4>Korng Chheiy</h4>
                    <p>Co-Founder & CTO</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/kimsreng.jpg')); ?>" alt="Lim Kimsreng">
                    <h4>Lim Kimsreng</h4>
                    <p>Head of Operations</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/bory.jpg')); ?>" alt="Kem Bory">
                    <h4>Kem Bory</h4>
                    <p>Marketing Manager</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/bot.jpg')); ?>" alt="Ung Vireakbot">
                    <h4>Ung Vireakbot</h4>
                    <p>Customer Support Lead</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="<?php echo e(asset('frontend/img/pisey.jpg')); ?>" alt="Chan Pisey">
                    <h4>Chan Pisey</h4>
                    <p>Finance Manager</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <h3>📩 Get in Touch</h3>
        <p>Email: <a href="mailto:info@kmengtochstore.com">info@kmengtochstore.com</a></p>
        <p>Phone: +855 123 456 789</p>
        <p>Follow us on social media for the latest updates!</p>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/cameras/index.blade.php ENDPATH**/ ?>