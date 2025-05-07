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
        <a href="https://www.youtube.com/channel/UCr6HSG_cH7iyiyXFSmPHUgw" target="_blank" class="linkedin"><i class="bx bxl-youtube"></i></a>
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
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Jim Rabino</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong> <span>Metro Manila, Philippines</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Course:</strong> <span>BS Computer Science</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>Filipino</span></li>
                </ul>
              </div>

              <div class="col-lg-10 pb-3">
                <p class="pt-1">
                A results-driven web developer with experience in both frontend and backend development. Skilled in building responsive, user-focused web applications, integrating APIs, and solving performance challenges. I enjoy creating efficient, scalable solutions and collaborating on projects that deliver real value. Driven by the challenge of solving complex problems with practical, efficient solutions
                </p>
              </div>
            </div>

            <div class="text-left pt-2" data-aos="fade-in">
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
              <p>Science sparked my interest in computers, and it played a significant role in why I now enjoy programming. I believe that having a STEM background aided me in pursuing a career in computer and technology.
</p>
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
    
    
    <!-- ======= Skills Section ======= -->
    <div id="skills" class="skills section-bg pt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">ReactJS <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div><!-- End Skills Section -->

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
              <h3><a>Javascript</a></h3>
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
        </div>

      </div>
      </div>
    </section><!-- End Skills Section -->

    
    <!-- ======= Popular Courses Section ======= -->
    <section id="myprojects" class="courses pt-5 mt-5">
      <div class="container pb-5" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>My Projects</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>E-commerce Website</h4>
                </div>

                <h3><a href="https://easysellph.com/" target="_blank">EasySellPH</a></h3>
                <p>EasySellPH is a dropshipping company that makes people achieve their goals by offering them a minimal inventory opportunity.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span><a href="https://easysellph.com/" target="_blank">Visit Website</a></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-laptop"></i>&nbsp;
                    <i class="bx bx-mobile-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>CRMS</h4>
                </div>

                <h3><a href="course-details.html">MCY Dental Clinic</a></h3>
                <p>MCY Dental Clinic provides a wide range of dental services, as well as online appointments to make it easier for people to contact them.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span><a href="http://mcydentalclinic.epizy.com/" target="_blank">Visit Website</a></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-laptop"></i>&nbsp;
                    <i class="bx bx-mobile-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Blog Website</h4>
                </div>

                <h3><a href="course-details.html">E-sports News and Info</a></h3>
                <p>E-sports News is a personal project that includes a variety of information with which users may interact, such as news, blogs, and information about what esport is.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span><a href="https://github.com/Jimwell1o1/Laravel-Esport-News-and-Info" target="_blank">Visit Website</a></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-laptop"></i>&nbsp;
                    <i class="bx bx-mobile-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

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

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Metro Manila, PH</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rjohnjimwell@gmail.com</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="includes/contact.php" method="POST" role="form" class="php-email-form">
              <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf']; ?>">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <script src="https://www.google.com/recaptcha/api.js" async defer></script>
              <div class="text-center">
              <div class="g-recaptcha d-flex justify-content-center pb-4" data-sitekey="6LdYJvAfAAAAAArlFOvRAHjaIdQ7z5u62epWbv2C"></div>
                <button type="submit" id="click">Send Message</button>
              </div>
            </form>

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


</body>
</html>