<?php
include 'includes/header.php';
?>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <!-- Modern Image Slider Background -->
      <div class="hero-slider-container">
        <div class="swiper hero-slider init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "effect": "fade",
              "fadeEffect": {
                "crossFade": true
              },
              "pagination": {
                "el": ".hero-slider-pagination",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".hero-slider-next",
                "prevEl": ".hero-slider-prev"
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="HOME PAGE SLIDE PICTURE- CLEARING AND FORWARDING.jpg" alt="Clearing and Forwarding" class="hero-bg">
              <!-- <div class="slide-content">
                <h2>CLEARING AND FORWARDING</h2>
                <p>Expert customs clearance and freight forwarding services</p>
              </div> -->
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME - CARGO CONSOLIDATION  SLIDE.jpg" alt="Cargo Consolidation" class="hero-bg">
              <!-- <div class="slide-content">
                <h2>CARGO CONSOLIDATION AND DECONSOLIDATION</h2>
                <p>Efficient cargo handling solutions for your logistics needs</p>
              </div> -->
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME SLIDE- FREIGHT AND TRANSPORTATION.jpg" alt="Freight and Transportation" class="hero-bg">
              <!-- <div class="slide-content">
                <h2>FREIGHT AND TRANSPORTATION</h2>
                <p>Reliable and cost-effective freight transport solutions</p>
              </div> -->
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME PAGE SLIDE -DOR TO DOOR SERVICES.jpg" alt="Door to Door Services" class="hero-bg">
              <!-- <div class="slide-content">
                <h2>DOOR TO DOOR SERVICES</h2>
                <p>Seamless delivery from origin to destination</p>
              </div> -->
            </div>
            <div class="swiper-slide">
              <img src="assets/img/PHARMATETICUAL  HOME PAGE SLIDE.jpg" alt="Pharmaceutical Shipments" class="hero-bg">
              <!-- <div class="slide-content">
                <h2>PHARMACEUTICAL SHIPMENTS</h2>
                <p>Specialized handling for sensitive pharmaceutical cargo</p>
              </div> -->
            </div>
          </div>
          <div class="hero-slider-pagination swiper-pagination"></div>
          <div class="hero-slider-controls">
            <div class="hero-slider-prev"><i class="bi bi-chevron-left"></i></div>
            <div class="hero-slider-next"><i class="bi bi-chevron-right"></i></div>
          </div>
        </div>
      </div>

      <!-- Company info - this is now moved outside the slider -->
      <div class="company-overlay">
        <div class="container">
          <div class="company-details">
            <h1 class="company-name" data-aos="fade-up">
              Gian Logistics</span> Limited
            </h1>
            <p class="company-slogan" data-aos="fade-up" data-aos-delay="100">
              "Seamless Logistics Solutions"
            </p>
            <div class="hero-cta" data-aos="fade-up" data-aos-delay="200">
              <a href="get-a-quote.php" class="btn-primary">Get a Quote</a>
              <a href="about.php" class="btn-secondary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    


    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
      <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
          <h2>Our Services</h2>
          <p>Comprehensive logistics solutions tailored to your needs</p>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card">
              <div class="icon-box">
                <i class="fa-solid fa-cart-flatbed"></i>
              </div>
              <h4 class="title">Innovative Solutions</h4>
              <p class="description">We leverage the latest technology and industry best practices to provide
                cutting-edge logistics solutions. Our innovative approach helps streamline operations, reduce costs, and
                improve efficiency across your supply chain.</p>
              <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="icon-box">
                <i class="fa-solid fa-truck"></i>
              </div>
              <h4 class="title">Cost-Effective</h4>
              <p class="description">Our logistics solutions are designed to be cost-effective, helping you optimize
                your supply chain while controlling expenses. We work with you to find the best solutions that fit your
                budget and deliver maximum value.</p>
              <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="icon-box">
                <i class="fa-solid fa-truck-ramp-box"></i>
              </div>
              <h4 class="title">Reliability and Efficiency</h4>
              <p class="description">We are known for our reliability and commitment to meeting deadlines. Our
                streamlined processes and attention to detail ensure that cargo is handled efficiently, minimizing delays
                and maximizing performance.</p>
              <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Featured Services Section -->

    <!-- About Section -->
 <section id="about" class="about section">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
      data-aos-delay="200">
      <img src="aa5.jpg" class="img-fluid" alt=""  style="width: 500px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: 0.3s;">
      <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
    </div>

    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
      <h3>Welcome to Gian Logistics Company Limited</h3>
      <p>
      GIAN LOGISTICS LTD is a private company based in Tanzania, Africa and beyond boarder specializing in providing innovative, reliable, and efficient logistics solutions, offering the following services, clearing and forwarding, and cargo consolidation and deconsolidation freight services, import and export services, door to door services, transportation services that cater to the complex needs of businesses in today’s interconnected world. 
      </p>
      <a href="about.php" class="btn btn-primary">Read More</a>
    </div>

  </div>

</div>

</section><!-- /About Section -->
   

  

   


    <!-- Features Section -->
    <section id="features" class="features section">
    <div class="container">
        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/HOME - CORE VALUE -PICTURE.jpg" class="img-fluid" alt=""  
            style="width: 500px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: 0.3s;">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Core Values of Gian Logistics Limited.</h3>
            <ul class="list-unstyled">
              <!-- <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Customer-Centricity:</span>
                  <span>We prioritize our clients' needs and work relentlessly to provide
                    exceptional service that exceeds expectations, ensuring their success and satisfaction.</span>
                </div>
              </li> -->
              <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Innovation:</span>
                  <span>We embrace cutting-edge technology and creative solutions to
                    continuously improve our services and stay ahead in the logistics industry.</span>
                </div>
              </li>
              <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Reliability:</span>
                  <span>We are committed to delivering on our promises with integrity and
                    consistency, ensuring that every shipment is managed with the highest level of
                    professionalism.</span>
                </div>
              </li>
              <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Excellence:</span>
                  <span>We strive for excellence in every aspect of our operations, from
                    customer service to logistical execution, aiming to set the highest standards in the
                    industry.</span>
                </div>
              </li>
              <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Sustainability:</span>
                  <span>We are dedicated to promoting environmentally responsible practices and
                    fostering sustainable solutions that contribute positively to the communities we serve.</span>
                </div>
              </li>
              <!-- <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Collaboration:</span>
                  <span>We believe in the power of teamwork and partnership, both within our
                    organization and with our clients, to achieve common goals and drive mutual success.</span>
                </div>
              </li>
              <li class="d-flex mb-3">
                <i class="bi bi-check me-2"></i>
                <div>
                  <span class="fw-semibold">Transparency:</span>
                  <span>We uphold transparency in all our dealings, ensuring clear communication
                    and building trust with our clients, partners, and stakeholders.</span>
                </div>
              </li> -->
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

    <style>
      .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
      }
      
      .cta-btn.primary {
        background-color: var(--accent-color);
        color: white;
        padding: 12px 24px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
      }
      
      .cta-btn.secondary {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        padding: 12px 24px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
      }
      
      .cta-btn.primary:hover {
        background-color:rgba(255, 255, 255, 0);
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
      }
      
      .cta-btn.secondary:hover {
        background-color: rgba(255,255,255,0.2);
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
      }
      
      @media (max-width: 767px) {
        .cta-buttons {
          flex-direction: column;
          gap: 10px;
        }
      }
    </style>

   

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/HOME - CORE VALUE -PICTURE 1.png" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                <h3>Issa Mtuka</h3>
                <h4>Director &amp; General</h4>
                <h5>Kilimacharo Travel Tour Ltd</h5>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The level of customer service provided by Gian Logistics Limited is exceptional. Whenever we
                    have inquiries or issues, their team responds swiftly and efficiently. Their dedication to customer
                    satisfaction truly sets them apart from others in the industry.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                <h3>Joyce Mwacha</h3>
                <h4>Sales Manager</h4>
                <h5>Kilimange Travel & General services Ltd.</h5>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Working with Gian Logistics Limited has been a seamless experience. Their professionalism and
                    dedication to excellence have set a new standard in our industry collaborations. Their innovative
                    approach and reliability have greatly contributed to the success of our joint projects.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                    minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                <h3>Ally Moshi</h3>
                <h4> Supply Chain Manager</h4>
                <h5>Outset Investment Ltd</h5>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Gian Logistics Limited has been a game-changer for our supply chain management. Their attention
                    to detail and commitment to timely delivery have significantly improved our operational efficiency.
                    Their team is always proactive, providing solutions before issues even arise. We couldn't ask for a
                    better logistics partner.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
    <section id="sponsors" class="py-5">
  
    </section>
    
    <style>
      .sponsors-container {
        width: 100%;
        overflow-x: hidden;
        position: relative;
      }
      
      .sponsors-scroll {
        display: flex;
        gap: 15px;
        padding: 10px 0;
        transition: transform 0.5s ease;
      }
      
      .sponsor-card {
        flex: 0 0 auto;
        width: 180px; /* Adjust card width as needed */
      }
      
      .sponsor-card .card {
        height: 100%;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      .img-fluid:hover{
        transform: scale(1.05); /* Slight zoom effect on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
      }
      .logo img{
        image-rendering: webkit-optimize-contrast;
        image-rendering: crisp-edges;
      }
      .logo img {
        max-width: 100%;
        height: auto;
        width: 200px;
        display: block;
        object-fit: contain;
      }
      .hero-bg{
        width: 20px;
        height: auto;
      }
    </style>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const scrollContainer = document.querySelector('.sponsors-scroll');
        const prevBtn = document.querySelector('.sponsor-prev');
        const nextBtn = document.querySelector('.sponsor-next');
        const cardWidth = document.querySelector('.sponsor-card').offsetWidth + 15; // card width + gap
        
        nextBtn.addEventListener('click', () => {
          scrollContainer.scrollBy({
            left: cardWidth * 3, // scroll 3 cards at a time
            behavior: 'smooth'
          });
        });
        
        prevBtn.addEventListener('click', () => {
          scrollContainer.scrollBy({
            left: -cardWidth * 3, // scroll 3 cards at a time
            behavior: 'smooth'
          });
        });
      });
    </script>

  </main>

<?php
include 'includes/footer.php';
?>