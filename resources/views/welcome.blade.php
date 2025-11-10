<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JobConnect Portal</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <!-- Header Section -->
  <div class="header">
    <header class="header-content">
      <a href="#logo" class="logo">
        <img src="./images/jobconnect-logo.svg" alt="logo" class="logo-icon" />
        <span class="logo-text">JobConnect</span>
      </a>

      <nav class="nav">
        <a href="#home" class="nav-link">Home</a>
        <a href="#jobs" class="nav-link">Jobs</a>
        <a href="#companies" class="nav-link">Companies</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#contact" class="nav-link">Contact</a>
      </nav>

      <a href="{{'login'}}" class="contact-button">Login / Register</a>

      <button type="button" class="menu-button">
        <img src="./images/Hamburger.svg" alt="Menu Button" class="menu-icon" />
      </button>
    </header>
  </div>

  <!-- Hero Section -->
  <div class="content">
    <section class="main-section">
      <div class="content-left">
        <p class="section-label">Find Your Dream Job</p>

        <h1 class="section-title">Connect, Apply, and Get Hired</h1>

        <p class="section-description">
          Welcome to JobConnect — your trusted platform for exploring top job opportunities,
          connecting with leading companies, and building a successful career.
        </p>

        <div class="button-group">
          <a href="#jobs" class="start-button">Browse Jobs</a>
          <a href="#register" class="tour-button">Post a Job</a>
        </div>
      </div>

      <div class="content-right">
        <div class="image-container">
          <img src="./images/office-team.jpg" alt="Job Portal Hero" class="section-image" />
        </div>
      </div>
    </section>
  </div>

  <!-- Trusted Companies Section -->
  <div class="company-container">
    <h1>Trusted by Leading Companies</h1>

    <div class="company-grid">
      <div class="company-logo">
        <img src="./images/google.svg" class="svg-image" />
        <span class="logo-txt">Google</span>
      </div>
      <div class="company-logo">
        <img src="./images/microsoft.svg" class="svg-image" />
        <span class="logo-txt">Microsoft</span>
      </div>
      <div class="company-logo">
        <img src="./images/amazon.svg" class="svg-image" />
        <span class="logo-txt">Amazon</span>
      </div>
      <div class="company-logo">
        <img src="./images/linkedin.svg" class="svg-image" />
        <span class="logo-txt">LinkedIn</span>
      </div>
    </div>
  </div>

  <!-- Features / Advantages Section -->
  <div class="feature-content">
    <div class="main-info">
      <h2>
        Why Choose Our Job Portal
      </h2>
      <p>
        Discover why thousands of job seekers and employers trust our platform. We make job hunting and hiring simple, efficient, and effective.
      </p>
    </div>

    <div class="feature-grid">
      <!-- Card-1 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/easy_apply.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">Easy Application Process</div>
          <div class="feature-description">
            Apply to your dream jobs in just a few clicks with our streamlined application system.
          </div>
        </div>
      </div>

      <!-- Card-2 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/resume_builder.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">Smart Resume Builder</div>
          <div class="feature-description">
            Create a professional resume using our AI-powered builder and increase your chances of selection.
          </div>
        </div>
      </div>

      <!-- Card-3 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/job_alerts.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">Instant Job Alerts</div>
          <div class="feature-description">
            Stay updated with real-time job alerts tailored to your skills and interests.
          </div>
        </div>
      </div>

      <!-- Card-4 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/employer_dashboard.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">Employer Dashboard</div>
          <div class="feature-description">
            Manage job postings, track applicants, and shortlist top talent from an intuitive dashboard.
          </div>
        </div>
      </div>

      <!-- Card-5 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/secure_data.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">Secure & Reliable</div>
          <div class="feature-description">
            Your personal and professional data are fully protected with end-to-end encryption.
          </div>
        </div>
      </div>

      <!-- Card-6 -->
      <div class="feature-card">
        <div class="icon-container">
          <img src="./images/support.svg" class="feature-svg">
        </div>
        <div class="feature-info">
          <div class="feature-title">24/7 Support</div>
          <div class="feature-description">
            Our dedicated support team is always available to help you with any queries or issues.
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Testimonials Section -->
  <div class="testimonial-container">
    <div class="testimonial-content">
      <h2 class="testimonial-title">What Our Users Say</h2>

      <div class="testimonial-grid">
        <div class="testimonial-card">
          <p>"JobConnect helped me land my dream job in just two weeks! The process was smooth and stress-free."</p>
          <div class="testimonial-avatar">
                        <img src="./images/avatar1.png" class=""/>
                    </div>

                    <div class="textimonial-details">

                        <h3 class="testimonial-title">
                            Sarah Johnson
                        </h3>

                        <p class="testimonial-desc">
                            8th Grade English Teacher
                        </p>

            </div>
        </div>

        <div class="testimonial-card">
          <p>"As an employer, I found JobConnect incredibly useful for posting and managing job listings."</p>
          <div class="testimonial-avatar">
                        <img src="./images/avatar2.png" class=""/>
                    </div>

                    <div class="textimonial-details">

                        <h3 class="testimonial-title">
                            Mark Davis
                        </h3>

                        <p class="testimonial-desc">
                            Parent
                        </p>

                    </div>
        </div>

        <div class="testimonial-card">
          <p>"The resume builder and job alerts made my job search easy and effective."</p>
          <div class="testimonial-avatar">
                        <img src="./images/avatar3.png" class=""/>
                    </div>

                    <div class="textimonial-details">

                        <h3 class="testimonial-title">
                            Dr. James Carter
                        </h3>

                        <p class="testimonial-desc">
                            School Administrator
                        </p>

                    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="newsletter-container">
    <div class="newsletter-content">
      <div class="news-left">
        <img src="./images/job-newsletter.png" alt="Newsletter" />
      </div>

      <div class="news-right">
        <h2 class="news-title">Stay Updated with Latest Jobs</h2>
        <p class="news-desc">Subscribe to get instant job alerts in your inbox!</p>
        <form class="news-form">
          <input class="news-email" placeholder="Enter your email" />
          <button class="news-send-button">Subscribe</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer-container">
    <footer class="footer">
      <div class="footer-top">
        <a href="#" class="logo-link">
          <img src="./images/jobconnect-logo.svg" class="logo-svg" /> JobConnect
        </a>
        <p class="filler-text">Connecting Talent with Opportunity.</p>
      </div>

      <div class="footer-grid">
        <div class="footer-grid-column">
          <div class="footer-grid-heading">Explore</div>
          <ul class="footer-link-list">
            <li><a class="footer-link" href="#jobs">Find Jobs</a></li>
            <li><a class="footer-link" href="#companies">Companies</a></li>
            <li><a class="footer-link" href="#careers">Careers</a></li>
          </ul>
        </div>

        <div class="footer-grid-column">
          <div class="footer-grid-heading">Company</div>
          <ul class="footer-link-list">
            <li><a class="footer-link" href="#about">About Us</a></li>
            <li><a class="footer-link" href="#contact">Contact</a></li>
            <li><a class="footer-link" href="#blog">Blog</a></li>
          </ul>
        </div>

        <div class="footer-grid-column">
          <div class="footer-grid-heading">Support</div>
          <ul class="footer-link-list">
            <li><a class="footer-link" href="#faq">FAQ</a></li>
            <li><a class="footer-link" href="#help">Help Center</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <div class="footer-copyright">
      &copy; 2025 JobConnect. All Rights Reserved.
    </div>
  </div>
</body>
</html>
