<?php include 'includes/header.php'; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
    <div class="container position-relative">
      <h1>Get a Quote</h1>

      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Get A Quote</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Get A Quote Section -->
  <section id="get-a-quote" class="get-a-quote section">

    <div class="container">

      <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
          <form action="send_email.php" method="post" class="php-email-form">
            <h3>Get a quote</h3>


            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="departure" class="form-control" placeholder="City of Departure" required="">
              </div>

              <div class="col-md-6">
                <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required="">
              </div>

              <div class="col-md-6">
                <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required="">
              </div>

              <div class="col-md-6">
                <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required="">
              </div>

              <div class="col-lg-12">
                <h4>Your Personal Details</h4>
              </div>

              <div class="col-12">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>

              <div class="col-12 ">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>

              <div class="col-12">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
              </div>

              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                <button type="submit">Get a quote</button>
              </div>

            </div>
          </form>
        </div><!-- End Quote Form -->

      </div>

    </div>

  </section><!-- /Get A Quote Section -->

</main>

<?php include 'includes/footer.php'; ?>