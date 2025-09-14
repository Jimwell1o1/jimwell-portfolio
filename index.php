<?php 
  session_start();

  $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

	// generate a token
	$_SESSION['csrf'] = bin2hex(random_bytes(35));
	
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jimwell | My Portfolio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Jimwell build and develop websites to make people's lives easier.">
  <meta name="keywords" content="Portfolio, Skills, Experience, Contact">
  <meta name="author" content="Jimwell Rabino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About Me</span></a></li> 
        <li><a href="#tech-skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
        <li><a href="#myprojects" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Hi, I'm Jim 👋</h1>
      <small>Creative thinking. Smart development. Real results.</small>
      <p>I'm a <span class="typed" data-typed-items="Developer, Designer, Programmer"></span></p>
      <div>
        <a class="get-started scrollto" href="#about">Learn more</a>
      </div>
      <div class="social-links">
        <a href="https://www.linkedin.com/in/jimwell-rabino" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rjohnjimwell@gmail.com&su=Your%20Subject%20Here&body=Your%20message%20body%20here." target="_blank" class="envelope"><i class="bx bxs-envelope"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      
    <div class="aboutme">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Learn more about me</p>
        </div>

        <div class="row pt-4">
          <div class="col-lg-4 px-5" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/profile-img.jpg" class="img-fluid rounded-circle" style="border-radius: 8%;" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-delay="500">
            <h3>Hello there!</h3>
            <div class="col-lg-10">
            <?php
              $start_year = 2022;
              $current_year = date('Y');

              $total_exp = $current_year - $start_year;
            ?>
            <p class="pb-4">
              
              I'm Jim Rabino, a Full Stack Web Developer with over <?= $total_exp ?> years of experience. I'm from the Philippines. 
              I code and design website for incredible people. I enjoy collaborating with other people because it motivates 
              me and helps me reach my goals.
            
            </p>
          </div>
            <div class="row">
              <div class="col-lg-10 pb-3">
                <p class="pt-1">
                A results-driven web developer with experience in both frontend and backend development. Skilled in building responsive, user-focused web applications, integrating APIs, and solving performance challenges. I enjoy creating efficient, scalable solutions and collaborating on projects that deliver real value. Driven by the challenge of solving complex problems with practical, efficient solutions
                </p>
              </div>
            </div>

            <div class="text-left pt-4" data-aos="fade-in">
              <a class="button" href="#contact">
                Contact Me
              </a>
            </div>
            
          </div>
        </div>

      </div>
    </div>


    <!-- ======= Knowmore Section ======= -->
    <div id="knowmore" class="knowmore pt-5 pb-5 mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Facts</h2>
          <p>Know more about me</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-run"></i></div>
              <h4 class="title"><a>Passionate</a></h4>
              <p class="description">I am very passionate about learning new things, whether they are related to web development or to general knowledge.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-bulb"></i></div>
              <h4 class="title"><a>Self learner</a></h4>
              <p class="description">I tend to pursue my goals with the unwavering belief that I will succeed as long as I work hard to learn it.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a>Innovative</a></h4>
              <p class="description">I can come up with innovative solutions to my client's problems and challenges.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-time-five"></i></div>
              <h4 class="title"><a>Time Management</a></h4>
              <p class="description">I plan and control the time I'll spend on specific tasks to complete it in a shorter period of time which leads to career success.</p>
            </div>
          </div>

        </div>

      </div>
      </div>

    <!-- ======= Resume Section ======= -->
    <div id="resume" class="resume pt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>More about myself</h2>
          <p>My Background</p>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>College / University</h4>
              <h5>2018 - 2022</h5>
              <p><em>Pamantasan ng Lungsod ng Pasig</em></p>
              <ul class="customized">
                <li><i class="bi bi-chevron-right"></i> 
                <b>Course:</b> Bachelor of Science in Computer Science</li>
              </ul>
              <p>I had no doubts that taking the computer science course would help me hone my skills and broaden my knowledge.</p>
            </div>
            <div class="resume-item">
              <h4>Senior High School</h4>
              <h5>2016 - 2018</h5>
              <p><em>Pasig City Science High School</em></p>
              <ul class="customized">
                <li><i class="bi bi-chevron-right"></i><b>Track:</b> Science, Technology, Engineering, and Mathematics</li>
              </ul>
              <p>Science sparked my interest in computers, and it played a significant role in why I now enjoy programming. I believe that having a STEM background aided me in pursuing a career in computer and technology.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experiences</h3>
            <div id="experiences"></div>
          </div>
        </div>

      </div>
    </div>
    </section><!-- End About Section -->

    
    <!-- ======= Why Us Section ======= -->
    <section id="tech-skills" class="why-us pt-5 mt-5">
      <div class="container pb-5" data-aos="fade-up">

        <div class="section-title">
          <h2>About Me</h2>
          <p>Technical Skills</p>
        </div>

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Skills and Experience</h3>
              <p>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Since beginning my journey as a freelance developer 1 year ago, I’ve done remote work for agencies, consulted for startups, and collaborated with talented people to create web products for both business and consumer use.
              I've been freelancing as a web developer for a year now, and I'm still working to improve my skills.
              
              <!-- I always tell the client that I am open to revisions. If someone makes a 
              suggestion that may reduce optimization or responsiveness, I tell them that while their concept is fantastic, it may have a
               negative impact. When people are aware of the negative consequences, they are usually fine with the design. I will create
                the modification if they still want it. -->
              </p>
              <div class="text-center">
                <a href="#contact" class="more-btn scrollto">Let's Work Together</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Proficient</h4>
                    <p>I have experience working with websites, specifically with Laravel framework, which is my primary programming language.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Organized</h4>
                    <p>I organized things while working on my projects because I also work as a computer technician. I also repair computers and laptops.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Good Listener</h4>
                    <p>When working with clients, I pay attention to what they want to see and the outcome they want. Listening is essential if you want to collaborate on good people.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    


      <!-- ======= Features Section ======= -->
      <div id="features" class="features pt-5">
        <div class="container" data-aos="fade-up">

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="ri-html5-line" style="color: #e54c21;"></i>
                <h3><a>HTML</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="ri-css3-fill" style="color: #5578ff;"></i>
                <h3><a>CSS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa-brands fa-php" style="color: #767bb3;"></i>
                <h3><a>PHP</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="icon-box">
                <i class="fa-brands fa-js-square" style="color: #f7df1e;"></i>
                <h3><a>Javascript / JQuery</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-database-2-line" style="color: #47aeff;"></i>
                <h3><a>MySQL</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fab fa-laravel" style="color: #f42d30;"></i>
                <h3><a>Laravel</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="icon ri-git-branch-line" style="color: #ff5828;"></i>
                <h3><a>Git</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-github-fill" style="color: #000000;"></i>
                <h3><a>Github</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-linux" style="color: #37423b;"></i>
                <h3><a>Linux</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="bi bi-bootstrap" style="color: #6610f2;"></i>
                <h3><a>Bootstrap</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-vuejs" style="color: #3fb984;"></i>
                <h3><a>VueJS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-react" style="color: #00dcff;"></i>
                <h3><a>ReactJS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-vuejs" style="color: #79e4a9ff;"></i>
                <h3><a>NuxtJS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-figma" style="color: #e47979ff;"></i>
                <h3><a>Figma</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-microsoft" style="color: #4d9bcfff;"></i>
                <h3><a>Microsoft D365</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-microsoft" style="color: #c04dcfff;"></i>
                <h3><a>Power Apps / Automate</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-database-2-line" style="color: #e254bfff;"></i>
                <h3><a>GraphQL</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-css3" style="color: #35d0dbff;"></i>
                <h3><a>Tailwind CSS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-wordpress" style="color: #3538dbff;"></i>
                <h3><a>Wordpress</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="fa-brands fa-wordpress" style="color: #db35d3ff;"></i>
                <h3><a>WooCommerce</a></h3>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Skills Section -->

    
    <!-- ======= Popular Courses Section ======= -->
    <section id="myprojects" class="courses pt-5 mt-5">
      <div class="container pb-5" data-aos="fade-up">

        <div class="section-title">
          <h2>ABOUT ME</h2>
          <p>My Projects</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100" id="projects"></div>

      </div>
  </section><!-- End Popular Courses Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact py-5 my-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Let's work together!</p>
          <small>Say Hi! and let's talk.</small>
        </div>

        <div class="row mt-4">
          <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center">
                <i class="bi bi-person fs-1 text-danger"></i>
                <h4 class="card-title mt-2">Contact</h4>
                <p class="card-text text-muted">+63 938 373 2638</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center">
                <i class="bi bi-envelope fs-1 text-danger"></i>
                <h4 class="card-title mt-2">Email</h4>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rjohnjimwell@gmail.com&su=Your%20Subject%20Here&body=Your%20message%20body%20here." target="_blank" class="envelope">rjohnjimwell@gmail.com</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center">
                <i class="bi bi-linkedin fs-1 text-primary"></i>
                <h4 class="card-title mt-2">LinkedIn</h4>
                <a href="https://www.linkedin.com/in/jimwell-rabino/" target="_blank">linkedin.com/in/jimwell-rabino/</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Jim Rabino</h3>
      <p>Creative thinking. Smart development. Real results.</p>     
      <div class="copyright">
       <strong> &copy; <span>2022</span></strong>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/experiences.js"></script>
  <script src="assets/js/projects.js"></script>


</body>
</html>