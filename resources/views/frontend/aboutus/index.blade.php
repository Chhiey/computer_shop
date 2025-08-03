@extends('frontend.layout.master')
@section('title', 'About Us')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #fdfdfd;
    }

    .about-us,
    .mission-vision,
    .team-section,
    .contact-section {
        padding: 60px 20px;
        text-align: center;
    }

    .section-title {
        font-size: 36px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
    }

    .about-us .content,
    .mission-vision p,
    .team-member p {
        font-size: 18px;
        color: #555;
        max-width: 900px;
        margin: 0 auto 20px;
        line-height: 1.7;
    }

    /* Mission & Vision */
    .mission-vision {
        background-color: #f4f6f8;
    }

    .mission-vision .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .mission-vision .col {
        flex: 1 1 300px;
        max-width: 500px;
    }

    .mission-vision h3 {
        font-size: 26px;
        color: #34495e;
        margin-bottom: 15px;
    }

    /* Team Section */
    .team-section {
        background-color: #fff;
    }

    .team-section .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .team-member {
        background: #fafafa;
        padding: 20px;
        border-radius: 10px;
        transition: 0.3s ease-in-out;
        width: 250px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .team-member img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 4px solid #eee;
    }

    .team-member h4 {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
    }

    .team-member p {
        font-size: 16px;
        color: #7f8c8d;
        margin: 0;
    }

    /* Contact Section */
    .contact-section {
        background: #2c3e50;
        color: #ecf0f1;
    }

    .contact-section h3 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .contact-section p {
        font-size: 18px;
        margin: 8px 0;
    }

    .contact-section a {
        color: #f1c40f;
        font-weight: 600;
        text-decoration: none;
    }

    .contact-section a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .team-member {
            width: 100%;
        }
    }
</style>

<div class="container">

    <!-- About Us -->
    <div class="about-us">
        <h1 class="section-title">Who We Are</h1>
        <p class="content">
            Welcome to <strong>KMENGTOCH STORE</strong> — your trusted destination for cutting-edge tech at unbeatable prices. 
            Our passion lies in delivering top-tier gadgets with exceptional customer service to ensure a seamless experience for every shopper.
        </p>
    </div>

    <!-- Mission & Vision -->
    <div class="mission-vision">
        <h2 class="section-title">Our Core Beliefs</h2>
        <div class="row">
            <div class="col">
                <h3>🚀 Mission</h3>
                <p>To deliver the latest tech with outstanding service, making innovation accessible to all.</p>
            </div>
            <div class="col">
                <h3>🌟 Vision</h3>
                <p>To become a global leader in technology retail, driven by trust, value, and innovation.</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="row">
            <div class="team-member">
                <img src="{{ asset('frontend/img/changér.jpg') }}" alt="Korng Chheiy">
                <h4>Korng Chheiy</h4>
                <p>Co-Founder & CTO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('frontend/img/kimsreng.jpg') }}" alt="Lim Kimsreng">
                <h4>Lim Kimsreng</h4>
                <p>Head of Operations</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('frontend/img/bory.jpg') }}" alt="Kem Bory">
                <h4>Kem Bory</h4>
                <p>Marketing Manager</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('frontend/img/mengly.jpg') }}" alt="Lai Mengly">
                <h4>Lai Mengly</h4>
                <p>Finance Manager</p>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact-section">
        <h3>📩 Get in Touch</h3>
        <p>Email: <a href="mailto:info@kmengtochstore.com">info@kmengtochstore.com</a></p>
        <p>Phone: +855 123 456 789</p>
        <p>Follow us on social media for updates!</p>
    </div>
</div>
@endsection
