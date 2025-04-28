<?php include 'includes/header.php'; ?>

<main class="main">

    <!-- Hero Section with Parallax -->
    <div class="page-title position-relative overflow-hidden" data-aos="fade" style="height: 60vh;">
        <!-- Animated background with particles -->
        <div class="position-absolute w-100 h-100" style="background: linear-gradient(135deg, #0f4667 0%, #2a6973 100%); z-index: -1;">
            <div id="particles-js" class="position-absolute w-100 h-100"></div>
        </div>

        <div class="container h-100 d-flex flex-column justify-content-center position-relative text-white">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="display-4 fw-bold mb-4">Global Freight & Transport Solutions</h1>
                    <p class="lead mb-5">Our intelligent logistics network connects your business to opportunities worldwide,
                        with tailored solutions that optimize your supply chain and enhance operational efficiency.</p>
                    <a href="#services" class="btn btn-lg btn-outline-light px-4 rounded-pill">
                        Explore Our Services <i class="bi bi-arrow-down-circle ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Creative wave divider -->
        <svg class="position-absolute bottom-0 w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,138.7C672,139,768,181,864,186.7C960,192,1056,160,1152,133.3C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Services Section with Creative Cards -->
    <section id="services" class="services section py-5">
        <!-- Section Title with animated underline -->
        <div class="container section-title mb-5 text-center position-relative" data-aos="fade-up">
            <span class="text-uppercase text-primary fw-bold letter-spacing-3">Premium Solutions</span>
            <h2 class="mt-2 mb-4 position-relative d-inline-block">Freight & Transport Services
                <span class="position-absolute" style="height: 4px; width: 60%; background: linear-gradient(90deg, #0f4667, transparent); bottom: -10px; left: 20%;"></span>
            </h2>
            <p class="text-muted col-lg-8 mx-auto">Select the perfect transportation mode for your business needs, leveraging our global network and industry expertise.</p>
        </div>

        <div class="container my-5">
            <!-- Service Cards Grid -->
            <div class="row g-4">
                <!-- Air Freight Card -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100 border-0 rounded-4 shadow-lg overflow-hidden service-card">
                        <div class="row g-0 h-100">
                            <div class="col-md-6 position-relative overflow-hidden">
                                <img src="ph.jpg" class="img-cover h-100 w-100" alt="Air Freight Services"
                                    style="object-fit: cover; transition: transform 0.8s ease;">
                                <div class="service-overlay d-flex align-items-center justify-content-center">
                                    <i class="bi bi-airplane fs-1 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body d-flex flex-column h-100 p-4">
                                    <div class="service-icon rounded-circle bg-primary bg-opacity-10 p-3 mb-3 align-self-start">
                                        <i class="bi bi-airplane fs-4 text-primary"></i>
                                    </div>
                                    <h3 class="card-title fs-4 fw-bold mb-3">Air Freight</h3>
                                    <p class="card-text">Time-critical deliveries across global routes with exceptional speed and reliability. We handle everything from documentation to customs clearance.</p>
                                    <div class="mt-auto">
                                        <div class="d-flex flex-wrap mt-3">
                                            <span class="badge bg-light text-dark me-2 mb-2">Express Delivery</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Global Network</span>
                                            <span class="badge bg-light text-dark mb-2">Time-Sensitive</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mt-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#airFreightModal">
                                            Learn More <i class="bi bi-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sea Freight Card -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100 border-0 rounded-4 shadow-lg overflow-hidden service-card">
                        <div class="row g-0 h-100">
                            <div class="col-md-6 order-md-2 position-relative overflow-hidden">
                                <img src="shipment1.jpg" class="img-cover h-100 w-100" alt="Sea Freight Services"
                                    style="object-fit: cover; transition: transform 0.8s ease;">
                                <div class="service-overlay d-flex align-items-center justify-content-center">
                                    <i class="bi bi-water fs-1 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="card-body d-flex flex-column h-100 p-4">
                                    <div class="service-icon rounded-circle bg-info bg-opacity-10 p-3 mb-3 align-self-start">
                                        <i class="bi bi-water fs-4 text-info"></i>
                                    </div>
                                    <h3 class="card-title fs-4 fw-bold mb-3">Sea Freight</h3>
                                    <p class="card-text">Cost-effective solutions for large-volume shipments worldwide. Expert management of containerization (FCL & LCL) and port handling.</p>
                                    <div class="mt-auto">
                                        <div class="d-flex flex-wrap mt-3">
                                            <span class="badge bg-light text-dark me-2 mb-2">Large Volume</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">FCL & LCL</span>
                                            <span class="badge bg-light text-dark mb-2">Cost-Effective</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-info mt-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#seaFreightModal">
                                            Learn More <i class="bi bi-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Road Freight Card -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card h-100 border-0 rounded-4 shadow-lg overflow-hidden service-card">
                        <div class="row g-0 h-100">
                            <div class="col-md-6 position-relative overflow-hidden">
                                <img src="road.jpg" class="img-cover h-100 w-100" alt="Road Freight Services"
                                    style="object-fit: cover; transition: transform 0.8s ease;">
                                <div class="service-overlay d-flex align-items-center justify-content-center">
                                    <i class="bi bi-truck fs-1 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body d-flex flex-column h-100 p-4">
                                    <div class="service-icon rounded-circle bg-warning bg-opacity-10 p-3 mb-3 align-self-start">
                                        <i class="bi bi-truck fs-4 text-warning"></i>
                                    </div>
                                    <h3 class="card-title fs-4 fw-bold mb-3">Road Freight</h3>
                                    <p class="card-text">Flexible domestic and cross-border transportation with real-time tracking and optimized routes for timely deliveries.</p>
                                    <div class="mt-auto">
                                        <div class="d-flex flex-wrap mt-3">
                                            <span class="badge bg-light text-dark me-2 mb-2">Flexible Delivery</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Real-Time Tracking</span>
                                            <span class="badge bg-light text-dark mb-2">Last Mile</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-warning mt-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#roadFreightModal">
                                            Learn More <i class="bi bi-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rail Freight Card -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card h-100 border-0 rounded-4 shadow-lg overflow-hidden service-card">
                        <div class="row g-0 h-100">
                            <div class="col-md-6 order-md-2 position-relative overflow-hidden">
                                <img src="RAIL TRANSPORT.jpg" class="img-cover h-100 w-100" alt="Rail Freight Services"
                                    style="object-fit: cover; transition: transform 0.8s ease;">
                                <div class="service-overlay d-flex align-items-center justify-content-center">
                                    <i class="bi bi-train-front fs-1 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="card-body d-flex flex-column h-100 p-4">
                                    <div class="service-icon rounded-circle bg-success bg-opacity-10 p-3 mb-3 align-self-start">
                                        <i class="bi bi-train-front fs-4 text-success"></i>
                                    </div>
                                    <h3 class="card-title fs-4 fw-bold mb-3">Rail Freight</h3>
                                    <p class="card-text">Eco-friendly and cost-efficient solution for bulk shipments with reliable schedules and reduced carbon footprint.</p>
                                    <div class="mt-auto">
                                        <div class="d-flex flex-wrap mt-3">
                                            <span class="badge bg-light text-dark me-2 mb-2">Eco-Friendly</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Bulk Transport</span>
                                            <span class="badge bg-light text-dark mb-2">Cost Efficient</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-success mt-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#railFreightModal">
                                            Learn More <i class="bi bi-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Animated Statistics Section -->
        <div class="container-fluid bg-light py-5 mt-5">
            <div class="container">
                <div class="row text-center justify-content-center" data-aos="fade-up">
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="stats-item">
                            <div class="fs-1 fw-bold text-primary mb-2"><span class="counter" data-target="150">0</span>+</div>
                            <p class="text-muted mb-0">Countries Served</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="stats-item">
                            <div class="fs-1 fw-bold text-primary mb-2"><span class="counter" data-target="25000">0</span>+</div>
                            <p class="text-muted mb-0">Successful Deliveries Monthly</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <div class="stats-item">
                            <div class="fs-1 fw-bold text-primary mb-2"><span class="counter" data-target="98">0</span>%</div>
                            <p class="text-muted mb-0">On-Time Delivery Rate</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <div class="fs-1 fw-bold text-primary mb-2"><span class="counter" data-target="15">0</span> Years</div>
                            <p class="text-muted mb-0">Industry Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="container my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 rounded-4 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md-6 bg-primary text-white p-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                                    <h3 class="mb-4">Ready to optimize your logistics?</h3>
                                    <p class="mb-4">Get in touch with our expert team for a custom solution tailored to your business needs.</p>
                                    <a href="contact.php" class="btn btn-outline-light rounded-pill">Contact Us Today</a>
                                </div>
                                <div class="col-md-6 p-5 d-flex flex-column justify-content-center bg-light" data-aos="fade-left">
                                    <h4 class="mb-3">Request a Quote</h4>
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select">
                                                <option selected>Select Service</option>
                                                <option value="air">Air Freight</option>
                                                <option value="sea">Sea Freight</option>
                                                <option value="road">Road Freight</option>
                                                <option value="rail">Rail Freight</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-pill">Get Quote</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Modals -->
    <div class="modal fade" id="airFreightModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 overflow-hidden">
                <div class="modal-header border-0" style="background: linear-gradient(90deg, #0f4667, #2a6973);">
                    <h5 class="modal-title text-white">Air Freight Services</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="ph.jpg" class="img-fluid rounded-3" alt="Air Freight">
                        </div>
                        <div class="col-md-6">
                            <h4>Express Global Shipping</h4>
                            <p>Our air freight services provide expedited shipping solutions for time-sensitive cargo. We ensure your shipments arrive on schedule, anywhere in the world.</p>
                            <h5 class="mt-4">Key Features</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Door-to-door delivery service</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Express and economy options</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time shipment tracking</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Customs clearance assistance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Specialized handling for sensitive goods</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for animations and styling -->
    <style>
        .service-card:hover .img-cover {
            transform: scale(1.05);
        }

        .service-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 70, 103, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover .service-overlay {
            opacity: 1;
        }

        .letter-spacing-3 {
            letter-spacing: 3px;
        }

        .img-cover {
            object-fit: cover;
            height: 100%;
        }

        .counter {
            display: inline-block;
        }
    </style>

    <!-- Custom JavaScript for counter animation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const animateCounter = () => {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;

                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(animateCounter, 30);
                    } else {
                        counter.innerText = target;
                    }
                });
            };

            // Initialize counter animation when elements are in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            const statsSection = document.querySelector('.stats-item');
            if (statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>
</main>
<?php include 'includes/footer.php'; ?>