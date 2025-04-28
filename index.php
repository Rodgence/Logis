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
              <div class="slide-content">
                <h2>CLEARING AND FORWARDING</h2>
                <p>Expert customs clearance and freight forwarding services</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME - CARGO CONSOLIDATION  SLIDE.jpg" alt="Cargo Consolidation" class="hero-bg">
              <div class="slide-content">
                <h2>CARGO CONSOLIDATION AND DECONSOLIDATION</h2>
                <p>Efficient cargo handling solutions for your logistics needs</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME SLIDE- FREIGHT AND TRANSPORTATION.jpg" alt="Freight and Transportation" class="hero-bg">
              <div class="slide-content">
                <h2>FREIGHT AND TRANSPORTATION</h2>
                <p>Reliable and cost-effective freight transport solutions</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/HOME PAGE SLIDE -DOR TO DOOR SERVICES.jpg" alt="Door to Door Services" class="hero-bg">
              <div class="slide-content">
                <h2>DOOR TO DOOR SERVICES</h2>
                <p>Seamless delivery from origin to destination</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/PHARMATETICUAL  HOME PAGE SLIDE.jpg" alt="Pharmaceutical Shipments" class="hero-bg">
              <div class="slide-content">
                <h2>PHARMACEUTICAL SHIPMENTS</h2>
                <p>Specialized handling for sensitive pharmaceutical cargo</p>
              </div>
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
              <a href="get-a-quote.html" class="btn-primary">Get a Quote</a>
              <a href="about.html" class="btn-secondary">Learn More</a>
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
        Gian Logistics Limited is private company formed in 2024, based in Tanzania, specializing in
        comprehensive solutions for logistics, offering the following services, clearing and forwarding,
        and cargo consolidation and deconsolidation freight services, import and export services, door to door
        services,
        transportation services, Based in Africa and beyond boarder, we specialize in providing innovative,
        reliable,
        and efficient logistics solutions that cater to the complex needs of businesses in today's interconnected
        world.
      </p>
      <a href="about.php" class="btn btn-primary">Learn More</a>
    </div>

  </div>

</div>

</section><!-- /About Section -->
   

    <!-- Service Coverage Map Section -->
    <section id="service-coverage" class="section light-background">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="service-coverage-content">
              <h2>Extensive Regional Network</h2>
              <p class="lead">Serving the vital trade corridors of East and Central Africa with comprehensive logistics solutions.</p>
              
              <div class="countries-served mt-4">
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/tz.png" alt="Tanzania" class="country-flag">
                  <span>Tanzania</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/zm.png" alt="Zambia" class="country-flag">
                  <span>Zambia</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/cd.png" alt="DRC" class="country-flag">
                  <span>DRC</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/rw.png" alt="Rwanda" class="country-flag">
                  <span>Rwanda</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/bi.png" alt="Burundi" class="country-flag">
                  <span>Burundi</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/ug.png" alt="Uganda" class="country-flag">
                  <span>Uganda</span>
                </div>
                <div class="country-badge">
                  <img src="https://flagcdn.com/w40/mw.png" alt="Malawi" class="country-flag">
                  <span>Malawi</span>
                </div>
              </div>
              
              <div class="key-routes mt-5">
                <h4>Key Trade Routes</h4>
                <ul class="route-list">
                  <li>
                    <span class="route-name">Central Corridor</span>
                    <span class="route-description">Dar es Salaam - Dodoma - Tabora - Kigoma - DRC/Rwanda</span>
                  </li>
                  <li>
                    <span class="route-name">Dar - Zambia Corridor</span>
                    <span class="route-description">Dar es Salaam - Iringa - Mbeya - Zambia</span>
                  </li>
                  <li>
                    <span class="route-name">Tanga Corridor</span>
                    <span class="route-description">Tanga - Arusha - Kenya/Uganda</span>
                  </li>
                  <li>
                    <span class="route-name">Mtwara Corridor</span>
                    <span class="route-description">Mtwara - Ruvuma - Malawi</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="infrastructure-stats">
              <h3>Infrastructure Investment</h3>
              <p>Tanzania is rapidly upgrading its logistics infrastructure to enhance regional connectivity.</p>
              
              <div class="row g-4 mt-2">
                <div class="col-md-6">
                  <div class="stats-card">
                    <div class="stats-icon">
                      <i class="fa-solid fa-train"></i>
                    </div>
                    <h4>Standard Gauge Railway</h4>
                    <p>1,219 km of new modern railway connecting Dar es Salaam to landlocked neighbors</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="stats-card">
                    <div class="stats-icon">
                      <i class="fa-solid fa-anchor"></i>
                    </div>
                    <h4>Port Expansion</h4>
                    <p>Dar es Salaam Port upgrade increasing capacity to 28 million tons annually</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="stats-card">
                    <div class="stats-icon">
                      <i class="fa-solid fa-road"></i>
                    </div>
                    <h4>Road Network</h4>
                    <p>Expanding paved road network for improved all-weather connectivity</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="stats-card">
                    <div class="stats-icon">
                      <i class="fa-solid fa-plane"></i>
                    </div>
                    <h4>Air Cargo</h4>
                    <p>Modern cargo terminals at Julius Nyerere and Kilimanjaro airports</p>
                  </div>
                </div>
              </div>
              
              <div class="cta-container mt-4">
                <a href="get-a-quote.html" class="btn btn-primary">Request Transport Quote</a>
                <a href="contact.html" class="btn btn-outline">Discuss Your Logistics Needs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Service Coverage Map Section -->

    <style>
      /* Tanzania Logistics Advantages Styles */
      #tanzania-logistics {
        padding: 80px 0;
      }
      
      .tanzania-map-container {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      }
      
      .map-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      
      .map-point {
        position: absolute;
        transform: translate(-50%, -50%);
      }
      
      .map-point .point {
        display: block;
        width: 16px;
        height: 16px;
        background-color: var(--accent-color);
        border-radius: 50%;
        position: relative;
        animation: pulse 2s infinite;
      }
      
      .map-point .label {
        position: absolute;
        white-space: nowrap;
        background-color: rgba(0,0,0,0.7);
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        bottom: calc(100% + 5px);
        left: 50%;
        transform: translateX(-50%);
      }
      
      @keyframes pulse {
        0% {
          box-shadow: 0 0 0 0 rgba(13, 66, 255, 0.7);
        }
        70% {
          box-shadow: 0 0 0 10px rgba(13, 66, 255, 0);
        }
        100% {
          box-shadow: 0 0 0 0 rgba(13, 66, 255, 0);
        }
      }
      
      .strategic-advantages {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      
      .strategic-advantages h3 {
        margin-bottom: 1rem;
        color: var(--heading-color);
        font-weight: 700;
      }
      
      .advantages-stats {
        margin-top: 2rem;
      }
      
      .advantage-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
      }
      
      .advantage-item i {
        font-size: 2rem;
        color: var(--accent-color);
        margin-right: 1rem;
      }
      
      .advantage-item h4 {
        font-size: 1.2rem;
        margin-bottom: 0.2rem;
        color: var(--heading-color);
      }
      
      .advantage-item p {
        margin: 0;
        opacity: 0.8;
      }
      
      /* Logistics Solutions */
      .logistics-solutions {
        margin-top: 2rem;
      }
      
      .solution-card {
        background-color: var(--surface-color);
        border-radius: 12px;
        padding: 25px;
        height: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
      }
      
      .solution-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      }
      
      .solution-icon {
        width: 70px;
        height: 70px;
        border-radius: 12px;
        background-color: rgba(13, 66, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: all 0.3s ease;
      }
      
      .solution-card:hover .solution-icon {
        background-color: var(--accent-color);
      }
      
      .solution-icon i {
        font-size: 2rem;
        color: var(--accent-color);
        transition: all 0.3s ease;
      }
      
      .solution-card:hover .solution-icon i {
        color: white;
      }
      
      .solution-card h4 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--heading-color);
      }
      
      .solution-card p {
        color: var(--default-color);
        opacity: 0.8;
        margin-bottom: 15px;
      }
      
      .solution-features {
        padding: 0;
        list-style: none;
        margin-top: auto;
      }
      
      .solution-features li {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
      }
      
      .solution-features li i {
        color: var(--accent-color);
        margin-right: 8px;
        font-size: 14px;
      }
      
      /* Service Coverage Styles */
      #service-coverage {
        padding: 80px 0;
      }
      
      .countries-served {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }
      
      .country-badge {
        display: flex;
        align-items: center;
        background-color: white;
        padding: 8px 12px;
        border-radius: 50px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      }
      
      .country-flag {
        width: 24px;
        height: auto;
        margin-right: 8px;
      }
      
      .route-list {
        list-style: none;
        padding: 0;
      }
      
      .route-list li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(0,0,0,0.1);
      }
      
      .route-name {
        font-weight: 600;
        color: var(--heading-color);
        display: block;
      }
      
      .route-description {
        font-size: 0.9rem;
        opacity: 0.8;
      }
      
      .stats-card {
        background-color: white;
        border-radius: 12px;
        padding: 20px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
      }
      
      .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }
      
      .stats-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: rgba(13, 66, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
      }
      
      .stats-icon i {
        font-size: 1.8rem;
        color: var(--accent-color);
      }
      
      .stats-card h4 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--heading-color);
      }
      
      .stats-card p {
        margin: 0;
        font-size: 0.9rem;
        opacity: 0.8;
      }
      
      .cta-container {
        display: flex;
        gap: 15px;
      }
      
      .btn-outline {
        background-color: transparent;
        border: 2px solid var(--accent-color);
        color: var(--accent-color);
        border-radius: 50px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
      }
      
      .btn-outline:hover {
        background-color: var(--accent-color);
        color: white;
      }
      
      @media (max-width: 991px) {
        .cta-container {
          flex-direction: column;
        }
        
        .service-coverage-content {
          margin-bottom: 2rem;
        }
      }
      
      @media (max-width: 767px) {
        .countries-served {
          justify-content: center;
        }
        
        .key-routes {
          text-align: center;
        }
      }
    </style>

   


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Ready to Streamline Your Tanzania Logistics?</h3>
              <p>Whether you're moving cargo from Dar es Salaam port to landlocked countries, transporting agricultural products from rural areas, or need specialized pharmaceutical logistics solutions, Gian Logistics Limited has the local expertise and regional network to deliver success. Contact us today for a customized solution tailored to your East African logistics needs.</p>
              <div class="cta-buttons">
                <a class="cta-btn primary" href="get-a-quote.html">Request a Quote</a>
                <a class="cta-btn secondary" href="contact.html">Schedule Consultation</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

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
        background-color: #0033cc;
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