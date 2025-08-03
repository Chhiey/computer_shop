<?php $__env->startSection('title', 'Services'); ?>
<?php $__env->startSection('content'); ?>
<style>
    /* Service Section */
    .service {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease, background-color 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background: #fff;
        margin-bottom: 30px;
    }

    /* Hover effect for service card */
    .service:hover {
        transform: scale(1.05);
        background-color: #f7f7f7;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Service Image */
    .service-img img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    /* Zoom effect on hover */
    .service-img:hover img {
        transform: scale(1.1);
        opacity: 0.85;
    }

    /* Service body section */
    .service-body {
        padding: 20px;
        text-align: center;
        background-color: #fafafa;
    }

    /* Service Title */
    .service-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    /* Service Description */
    .service-description {
        font-size: 16px;
        color: #777;
        margin-bottom: 15px;
    }

    /* Service Price */
    .service-price {
        font-size: 18px;
        color: #ff5722;
        font-weight: bold;
        margin: 10px 0;
    }

    /* Contact Button */
    .contact-btn {
        padding: 12px 25px;
        background: #ff5722;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .contact-btn:hover {
        background: #e64a19;
        transform: scale(1.05);
    }

    /* About Section */
    .about-section {
        padding: 40px 20px;
        background-color: #f4f4f4;
        text-align: center;
    }

    .about-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .about-description {
        font-size: 18px;
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Testimonials Section */
    .testimonials-section {
        padding: 40px 20px;
        background-color: #fff;
        text-align: center;
    }

    .testimonial {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
        font-style: italic;
    }

    .testimonial-author {
        font-size: 18px;
        font-weight: bold;
        color: #ff5722;
    }

    /* Mobile responsiveness */
    @media (max-width: 767px) {
        .service {
            margin-bottom: 20px;
        }
        .service-body {
            padding: 15px;
        }
    }
</style>

<!-- Service Listings -->
<div class="row">
    <!-- Service 1 -->
    <div class="col-md-4 col-xs-6">
        <div class="service">
            <div class="service-img">
                <img src="<?php echo e(asset('frontend/img/access/IMG_4364.jpg')); ?>" alt="Computer Repair">
            </div>
            <div class="service-body">
                <h3 class="service-title">Computer Repair</h3>
                <p class="service-description">Our expert technicians offer fast and reliable computer repair services for all models and brands. Whether it’s hardware or software issues, we’ve got you covered.</p>
                <h4 class="service-price">$50.00</h4>
                <button class="contact-btn">Contact Us</button>
            </div>
        </div>
    </div>

    <!-- Service 2 -->
    <div class="col-md-4 col-xs-6">
        <div class="service">
            <div class="service-img">
                <img src="<?php echo e(asset('frontend/img/access/IMG_43312.jpg')); ?>" alt="PC Building">
            </div>
            <div class="service-body">
                <h3 class="service-title">Custom PC Building</h3>
                <p class="service-description">Let us help you build the perfect custom PC tailored to your needs, whether for gaming, work, or other applications. Choose your components and we’ll assemble it for you!</p>
                <h4 class="service-price">$200.00</h4>
                <button class="contact-btn">Contact Us</button>
            </div>
        </div>
    </div>

    <!-- Service 3 -->
    <div class="col-md-4 col-xs-6">
        <div class="service">
            <div class="service-img">
                <img src="<?php echo e(asset('frontend/img/access/1.webp')); ?>" alt="Software Installation">
            </div>
            <div class="service-body">
                <h3 class="service-title">Software Installation</h3>
                <p class="service-description">Need help installing or updating software? We offer professional software installation services, from operating systems to applications, ensuring everything runs smoothly.</p>
                <h4 class="service-price">$30.00</h4>
                <button class="contact-btn">Contact Us</button>
            </div>
        </div>
    </div>
</div>

<!-- About Us Section -->
<div class="about-section">
    <h2 class="about-title">About KMENGTOCH STORE</h2>
    <p class="about-description">KMENGTOCH STORE is your trusted partner for all computer services. Whether you're looking for computer repairs, custom PC builds, or software installations, our team of experienced technicians is here to assist you. We pride ourselves on delivering high-quality service with attention to detail and customer satisfaction. Our shop is equipped with the latest tools and technology to ensure the best results for your needs. We're dedicated to making your tech experience seamless and hassle-free.</p>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section">
    <h2 class="about-title">What Our Customers Say</h2>
    <p class="testimonial">"KMENGTOCH STORE provided excellent service when I needed my computer repaired. The technicians were quick, efficient, and very knowledgeable. Highly recommended!"</p>
    <p class="testimonial-author">- Xiao Sa, Satisfied Customer</p>

    <p class="testimonial">"I had them build a custom gaming PC for me, and the result was fantastic. The performance is amazing, and the whole process was smooth and easy!"</p>
    <p class="testimonial-author">- Lai Mengly, Gamer</p>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/service/index.blade.php ENDPATH**/ ?>