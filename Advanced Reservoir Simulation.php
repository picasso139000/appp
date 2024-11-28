<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body class="portfolio-details-page">


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container">
        <h1>Advanced Reservoir Simulation Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Advanced Reservoir Simulation</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper init-swiper">



              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/training/Advanced Reservoir Simulation.jpg" class="animate__animated  animate__pulse animate__infinite animate__slow" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>information</h3>
              <ul>
                <li><strong>Course Description</strong>: This course provides an overview of various reservoir simulation techniques, examining their strengths and limitations. Key applications of reservoir simulation will be illustrated through recent case studies, either conducted by the instructor or published in current literature.</li>
                <li><strong>Audience</strong>: This course is intended for experienced reservoir engineers. Participants should have a foundational understanding of reservoir engineering and reservoir simulation, along with practical experience using commercial reservoir simulators.</li>
                <li><strong>Prerequisites</strong>: Basic knowledge of reservoir engineering and reservoir simulation is required, as well as familiarity with the use of commercial simulators.</li>
              </ul>
            </div>

          </div>

        </div>

        <!-- Faq Section -->
        <section id="faq" class="faq section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Course Content</span>
            <h2>Course Content</h2>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-8">

                <div class="faq-container">

                  <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Introduction to Reservoir Simulation </h3>
                    <div class="faq-content">
                      <p>• The need for reservoir simulation.</p>
                      <p>• Conservation equations and the concept of dividing the reservoir into grid blocks.</p>
                      <p>• Setting up and solving conservation equations using linear systems.</p>
                      <p>• Reservoir simulation vs. simpler analytical methods.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Analytical Solutions to Transport Equations</h3>
                    <div class="faq-content">
                      <p>• Buckley-Leverett Analysis.</p>
                      <p>• Waterflooding in a one-dimensional system.</p>
                      <p>• Solutions to flow equations and their implications for waterflood analysis.</p>
                      <p>• Recovery plots and analysis.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Grid-Based Simulation</h3>
                    <div class="faq-content">
                      <p>• Advantages of grid-based methods.</p>
                      <p>• Numerical dispersion and grid orientation effects.</p>
                      <p>• Model size considerations.</p>
                      <p>• Upscaling techniques.</p>
                      <p>• Example applications.</p>
                    </div>

                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Streamline-Based Simulation</h3>
                    <div class="faq-content">
                      <p>• The rationale for using streamlines.</p>
                      <p>• Basic methodology: Tracing streamlines and accounting for gravity effects.</p>
                      <p>• Examples of streamline applications.</p>
                      <p>• Advantages and limitations of streamline-based simulation.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Advanced Methods in Reservoir Simulation</h3>
                    <div class="faq-content">
                      <p>• Dual porosity modeling for fractured reservoirs at the field scale.</p>
                      <p>• History matching techniques.</p>
                      <p>• Well placement strategies.</p>
                      <p>• Gas injection and enhanced oil recovery methods.</p>
                      <p>• Coupling of reservoir simulation with facility model.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
                </div>

              </div>

            </div>

          </div>

        </section><!-- /Faq Section -->

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>


  <?php include 'footer.php'; ?>