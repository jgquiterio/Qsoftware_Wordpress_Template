<?php
/**
 * Homepage template.
 *
 * @package Qsoftware_Template
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="hero-section">
        <div class="hero-container">

            <div class="hero-content">
                <span class="hero-label">QSOFTWARE DIGITAL SOLUTIONS</span>

                <h1>
                    Build Your Digital Future With
                    <span>Qsoftware</span>
                </h1>

                <p>
                    We create modern, scalable and high-performance
                    digital solutions to help businesses grow.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="button button-primary">
                        Our Services
                    </a>

                    <a href="#contact" class="button button-secondary">
                        Get in Touch
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-card">
                    <span>Q</span>
                    <h2>Digital Innovation</h2>
                    <p>Technology that moves your business forward.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="services-section">
    <div class="services-container">

        <div class="section-heading">
            <span>WHAT WE DO</span>
            <h2>Our Services</h2>
            <p>Technology solutions designed to help your business grow.</p>
        </div>

        <div class="services-grid">

            <article class="service-card">
                <h3>Web Development</h3>
                <p>Modern and responsive websites tailored to your business needs.</p>
            </article>

            <article class="service-card">
                <h3>Custom Software</h3>
                <p>Scalable software solutions built to improve your operations.</p>
            </article>

            <article class="service-card">
                <h3>API Integration</h3>
                <p>Reliable integrations connecting your systems and services.</p>
            </article>

        </div>

    </div>
</section>

<section id="portfolio" class="portfolio-section">
    <div class="portfolio-container">

        <div class="section-heading">
            <span>OUR WORK</span>
            <h2>Featured Projects</h2>
            <p>Explore some of our digital solutions and projects.</p>
        </div>

        <div class="portfolio-grid">

            <article class="portfolio-card">
                <div class="portfolio-image">
                    <span>Project 01</span>
                </div>
                <div class="portfolio-content">
                    <h3>Business Website</h3>
                    <p>Modern corporate website focused on performance and user experience.</p>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-image">
                    <span>Project 02</span>
                </div>
                <div class="portfolio-content">
                    <h3>Custom Web Application</h3>
                    <p>Custom application designed to simplify business operations.</p>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-image">
                    <span>Project 03</span>
                </div>
                <div class="portfolio-content">
                    <h3>E-commerce Platform</h3>
                    <p>Online store built to deliver a seamless shopping experience.</p>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="testimonials-section">
    <div class="testimonials-container">

        <div class="section-heading">
            <span>CLIENT FEEDBACK</span>
            <h2>What Our Clients Say</h2>
            <p>Building lasting partnerships through technology and trust.</p>
        </div>

        <div class="testimonials-grid">

            <article class="testimonial-card">
                <p>
                    "Qsoftware delivered a professional solution
                    that exceeded our expectations."
                </p>
                <h3>Business Client</h3>
                <span>Website Development</span>
            </article>

            <article class="testimonial-card">
                <p>
                    "The project was delivered with great attention
                    to detail and performance."
                </p>
                <h3>Business Client</h3>
                <span>Custom Software</span>
            </article>

            <article class="testimonial-card">
                <p>
                    "Excellent technical quality and a smooth
                    development experience."
                </p>
                <h3>Business Client</h3>
                <span>API Integration</span>
            </article>

        </div>

    </div>
</section>

<section id="contact" class="cta-section">
    <div class="cta-container">

        <span>LET'S WORK TOGETHER</span>

        <h2>Ready to Build Something Great?</h2>

        <p>
            Let's discuss your project and find the right
            technology solution for your business.
        </p>

        <a href="mailto:contact@qsoftware.com.br" class="button button-primary">
            Contact Our Team
        </a>

    </div>
</section>

</main>

<?php
get_footer();