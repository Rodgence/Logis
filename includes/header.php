<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gian Logistic Limited</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favcon.png" rel="icon">
  <link href="assets/img/favcon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Hero Section Styles */
    .hero {
      position: relative;
      min-height: 100vh;
      padding: 0;
      overflow: hidden;
    }
    
    .hero-slider-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }
    
    .hero-slider, .hero-slider .swiper-wrapper, .hero-slider .swiper-slide {
      width: 100%;
      height: 100%;
    }
    
    .hero-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.5);
    }
    
    .hero .container {
      position: relative;
      z-index: 10;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    
    .hero #hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: white;
      text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    .hero #hero-title .highlight {
      color: #ffffff;
    }
    
    .hero #hero-title small {
      font-size: 1.4rem;
      display: block;
      margin-top: 0.5rem;
      font-weight: 400;
    }
    
    .hero-cta {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }
    
    .hero-cta .btn-primary, .hero-cta .btn-secondary {
      padding: 12px 24px;
      border-radius: 50px;
      font-weight: 600;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    
    .hero-cta .btn-primary {
      background-color: var(--accent-color);
      color: white;
    }
    
    .hero-cta .btn-secondary {
      background-color: transparent;
      color: white;
      border: 2px solid white;
    }
    
    .hero-cta .btn-primary:hover {
      background-color: color-mix(in srgb, var(--accent-color), white 20%);
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }
    
    .hero-cta .btn-secondary:hover {
      background-color: white;
      color: var(--accent-color);
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }
    
    .hero-slider-pagination {
      position: absolute;
      bottom: 30px;
      width: 100%;
      z-index: 20;
      text-align: center;
    }
    
    .hero-slider-controls {
      position: absolute;
      top: 50%;
      width: 100%;
      z-index: 20;
      display: flex;
      justify-content: space-between;
      padding: 0 30px;
      transform: translateY(-50%);
    }
    
    .hero-slider-prev, .hero-slider-next {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(5px);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .hero-slider-prev:hover, .hero-slider-next:hover {
      background: rgba(255,255,255,0.3);
    }
    
    .slide-content {
      position: absolute;
      bottom: 80px;
      right: 80px;
      width: 50%;
      max-width: 600px;
      text-align: right;
      color: white;
      z-index: 5;
      background: rgba(0,25,115,0.7);
      backdrop-filter: blur(5px);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 30px rgba(0,0,0,0.2);
    }
    
    .slide-content h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      color: white;
    }
    
    .slide-content p {
      font-size: 1.2rem;
      margin: 0;
    }
    
    /* Featured Services Styles */
    .featured-services {
      padding: 80px 0;
      background-color: var(--background-color);
    }
    
    .section-header {
      margin-bottom: 50px;
    }
    
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--heading-color);
      text-align: center;
      margin-bottom: 1rem;
    }
    
    .section-header p {
      color: var(--default-color);
      opacity: 0.8;
      max-width: 700px;
      margin: 0 auto;
      text-align: center;
    }
    
    .service-card {
      background-color: var(--surface-color);
      border-radius: 12px;
      padding: 30px;
      height: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 5px 30px rgba(0,0,0,0.05);
      display: flex;
      flex-direction: column;
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .service-card .icon-box {
      width: 70px;
      height: 70px;
      background: rgba(13, 66, 255, 0.1);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }
    
    .service-card:hover .icon-box {
      background: var(--accent-color);
    }
    
    .service-card .icon-box i {
      font-size: 2rem;
      color: var(--accent-color);
      transition: all 0.3s ease;
    }
    
    .service-card:hover .icon-box i {
      color: white;
    }
    
    .service-card .title {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--heading-color);
    }
    
    .service-card .description {
      color: var(--default-color);
      opacity: 0.8;
      margin-bottom: 25px;
      flex-grow: 1;
    }
    
    .service-card .service-link {
      color: var(--accent-color);
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      transition: all 0.3s ease;
      text-decoration: none;
      margin-top: auto;
    }
    
    .service-card .service-link i {
      margin-left: 5px;
      transition: all 0.3s ease;
    }
    
    .service-card .service-link:hover {
      color: color-mix(in srgb, var(--accent-color), black 20%);
    }
    
    .service-card .service-link:hover i {
      transform: translateX(5px);
    }
    
    /* Responsive Styles */
    @media (max-width: 991px) {
      .hero #hero-title {
        font-size: 3rem;
      }
      
      .hero #hero-title small {
        font-size: 1.2rem;
      }
      
      .slide-content h2 {
        font-size: 2rem;
      }
      
      .slide-content p {
        font-size: 1rem;
      }
    }
    
    @media (max-width: 767px) {
      .hero #hero-title {
        font-size: 2.5rem;
        text-align: center;
      }
      
      .hero-cta {
        justify-content: center;
      }
      
      .slide-content {
        padding: 0 10%;
      }
      
      .slide-content h2 {
        font-size: 1.8rem;
      }
      
      .hero-slider-controls {
        display: none;
      }
    }
    
    @media (max-width: 576px) {
      .hero #hero-title {
        font-size: 2rem;
      }
      
      .hero #hero-title small {
        font-size: 1rem;
      }
      
      .slide-content h2 {
        font-size: 1.5rem;
      }
      
      .slide-content p {
        font-size: 0.9rem;
      }
      
      .service-card {
        padding: 20px;
      }
    }
    
    /* Company overlay - fixed position */
    .company-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      z-index: 10;
      background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
    }
    
    .company-details {
      max-width: 600px;
      padding: 2rem;
    }
    
    .company-name {
      font-size: 4rem;
      font-weight: 700;
      color: white;
      margin-bottom: 0.5rem;
      text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    .company-name .highlight {
      color: #FFD700;
    }
    
    .company-slogan {
      font-size: 1.5rem;
      color: white;
      margin-bottom: 2rem;
      font-style: italic;
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* Hero content responsive adjustments */
    @media (max-width: 1199px) {
      .company-name {
        font-size: 3.5rem;
      }
      
      .company-slogan {
        font-size: 1.3rem;
      }
    }
    
    @media (max-width: 991px) {
      .company-overlay {
        background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 70%, rgba(0,0,0,0) 100%);
        align-items: flex-start;
        padding-top: 150px;
      }
      
      .company-details {
        text-align: center;
        margin: 0 auto;
      }
    }
    
    @media (max-width: 767px) {
      .company-name {
        font-size: 2.8rem;
      }
      
      .company-slogan {
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
      }
    }
    
    @media (max-width: 576px) {
      .company-overlay {
        padding-top: 120px;
      }
      
      .company-name {
        font-size: 2.2rem;
      }
      
      .company-slogan {
        font-size: 1rem;
      }
    }

    .hero-bg{
      width: 20px;
      height: auto;
    }
    
    .logo img {
      max-width: 350px;
      height: auto;
      display: block;
    }
  </style>

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top py-4">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
    
      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/gian.png" alt="Gian Logistics Logo" class="img">
      </a>
    
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="mission&vission.php">Mission And Vission</a></li>
          <li class="dropdown">
            <a href="#"><span>Our Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="clear&forwading.php">Clearing and Forwarding</a></li>
              <li><a href="cargo.php">Cargo Consolidation and Deconsolidation</a></li>
              <li><a href="Freight &Transport.php">Freight & Transport Services</a></li>
              <li><a href="Import&Export.php">Import and Export Services</a></li>
              <li><a href="door-to-door.php">Door-to-Door Services</a></li>
              <li><a href="pharmaceuticalShipments.php">Pharmaceutical Shipments</a></li>
            </ul>
          </li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    
      <a class="btn-getstarted" href="GIAN COMPANY PROFILE.pdf" download="GIAN COMPANY PROFILE.pdf">View Company Profile</a>
    </div>
  </header>
  
  
  
