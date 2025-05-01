<?php
include 'includes/header.php';
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>FAQ</h1>
        
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Faq</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Gian Logistics Limited for Pharmaceutical Shipments?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Industry Expertise:</strong> Extensive experience in pharmaceutical logistics makes us a trusted healthcare partner.<br>
                    <strong>Commitment to Excellence:</strong> We deliver pharmaceutical products with uncompromising quality, safety, and compliance standards.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Gian Logistics Limited?</h3>
                <div class="faq-content">
                  <p>
                    We're a success-driven partner offering:<br>
                    <strong>Innovative Solutions:</strong> Cutting-edge technology and best practices to streamline operations and reduce costs.<br>
                    <strong>Reliability & Efficiency:</strong> Proven track record of meeting deadlines with meticulous cargo handling.<br>
                    <strong>Cost-Effectiveness:</strong> Budget-friendly solutions that maximize supply chain value.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Our Clearing and Forwarding Services?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Expertise:</strong> Precision handling of customs and logistics requirements.<br>
                    <strong>Efficiency:</strong> Minimized delays for timely deliveries.<br>
                    <strong>Compliance:</strong> Full adherence to international trade regulations.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Our Cargo Consolidation and Deconsolidation Services?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Expert Management:</strong> Meticulous handling of combined/dispersed shipments.<br>
                    <strong>Optimized Costs:</strong> Reduced transportation expenses through smart consolidation.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Our Freight Services?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Customer Focus:</strong> Solutions designed to enhance your logistics operations and business outcomes.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="450">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose Our Import and Export Services?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Reliability:</strong> On-time delivery without complications.<br>
                    <strong>Personalized Support:</strong> Custom guidance for your trade needs.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Why Choose DDP or DDU Services?</h3>
                <div class="faq-content">
                  <p>
                    <strong>Expert Management:</strong> End-to-end oversight of duty arrangements.<br>
                    <strong>Global Reach:</strong> International network for seamless deliveries.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            
            </div>
            
            <style>
            .faq-content {
              display: none;
              padding: 10px 0 0 30px;
              transition: all 0.3s ease;
            }
            .faq-item.faq-active .faq-content {
              display: block;
            }
            .faq-toggle {
              transition: transform 0.3s ease;
            }
            .faq-item.faq-active .faq-toggle {
              transform: rotate(90deg);
            }
            .logo img {
  width: 350px; /* Adjust the size of the logo */
  height: auto;
}
            </style>
            
            <script>
            document.addEventListener('DOMContentLoaded', function() {
              const faqItems = document.querySelectorAll('.faq-item');
              let activeItem = null;
            
              // Activate first item by default
              if (faqItems.length > 0) {
                activateItem(faqItems[0]);
                activeItem = faqItems[0];
              }
            
              faqItems.forEach(item => {
                const toggle = item.querySelector('.faq-toggle');
                const header = item.querySelector('h3');
                
                // Click handler for toggle icon and header
                [toggle, header].forEach(element => {
                  element.addEventListener('click', (e) => {
                    e.stopPropagation();
                    
                    // If clicking the already active item, do nothing
                    if (item === activeItem) return;
                    
                    // Deactivate current active item if exists
                    if (activeItem) {
                      deactivateItem(activeItem);
                    }
                    
                    // Activate clicked item
                    activateItem(item);
                    activeItem = item;
                  });
                });
              });
            
              function activateItem(item) {
                item.classList.add('faq-active');
                item.querySelector('.faq-content').style.display = 'block';
                item.querySelector('.faq-toggle').classList.remove('bi-chevron-right');
                item.querySelector('.faq-toggle').classList.add('bi-chevron-down');
              }
            
              function deactivateItem(item) {
                item.classList.remove('faq-active');
                item.querySelector('.faq-content').style.display = 'none';
                item.querySelector('.faq-toggle').classList.remove('bi-chevron-down');
                item.querySelector('.faq-toggle').classList.add('bi-chevron-right');
              }
            });
            </script>

          </div>

        </div>

      </div>

    </section><!-- /Faq Section -->

  </main>
 <?php
 include 'includes/footer.php';
 ?>