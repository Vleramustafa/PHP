<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Website</title>
    
    <link rel="stylesheet" href="style.css"> 
</head>



<?php
    include('header.php');  // Include header
?>

<div class="hero">
    <div class="hero-text">
        <h1>Welcome to My Professional Website</h1>
        <p>Your success starts here.</p>
        <a href="#services" class="cta-button">Learn More</a>
    </div>
</div>

<div class="content">
    <section id="services">
        <h2>Our Services</h2>
        <p>We offer a range of high-quality services to meet your needs.</p>
        <div class="service-cards">
            <div class="service-card">
                <h3>Web Design</h3>
                <p>Professional and creative web design services for your business.</p>
            </div>
            <div class="service-card">
                <h3>SEO Optimization</h3>
                <p>Boost your website's ranking with our expert SEO strategies.</p>
            </div>
            <div class="service-card">
                <h3>Consulting</h3>
                <p>Get expert consulting to take your business to the next level.</p>
            </div>
        </div>
    </section>
</div>

<?php
    include('footer.php');  // Include footer
?>
