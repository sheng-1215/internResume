<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Resume</title>
        <style>

            .section-header {
                text-align: center;
                margin-bottom: 40px;
            }
            
            .section-header h2 {
                font-size: 32px;
                color: #333;
                font-weight: 700;
            }
            
            .project-wrap {
                background-color: #fff;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
                margin-bottom: 30px;
                transition: transform 0.3s ease;
            }
            
            .project-wrap:hover {
                transform: translateY(-10px);
            }
            
            .project-wrap figure {
                position: relative;
                overflow: hidden;
            }
            
            .project-wrap img {
                width: 100%;
                height: auto;
                transition: transform 0.5s ease;
            }
            
            .project-wrap:hover img {
                transform: scale(1.1);
            }
            
            .link-preview, .link-details {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0, 0, 0, 0.6);
                padding: 10px 15px;
                border-radius: 50%;
                color: #fff;
                font-size: 18px;
                visibility: hidden;
                opacity: 0;
                transition: all 0.3s ease;
            }
            
            .link-preview {
                left: 35%;
            }
            
            .link-details {
                left: 65%;
            }
            
            .project-wrap:hover .link-preview, 
            .project-wrap:hover .link-details {
                visibility: visible;
                opacity: 1;
            }
            
            .project-title {
                display: block;
                text-align: center;
                padding: 20px;
                font-size: 18px;
                font-weight: 600;
                color: #333;
                background-color: #f8f9fa;
                transition: color 0.3s ease;
            }
            
            .project-title:hover {
                color: #ff6600;
            }
</style>            
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                {{-- <div class="sidebar-header">
                    <img src="img/profile.jpg" alt="Image">
                </div> --}}
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#education">Education<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Portfolio<i class="fa fa-laptop"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Qualifications<i class="fa fa-envelope-open-text"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#review">References<i class="fa fa-comments"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="https://wa.me/60168813607"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/ngweisheng1215/?hl=en"><i class="fab fa-instagram"></i></a>
                    <a href="https://web.facebook.com/profile.php?id=100023555172048"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="img/profile.jpg" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <h1><b>NG WEI SHENG</b></h1>
                                <p>
                                    I am a programming student currently gaining practical experience through an internship.I have skills in IT software and enjoy building user-friendly web applications. I am always working to improve my abilities. My internship will start in February 2025 and continue until May 2025.
                                </p>
                                <a class="btn" href="resume/Resume-internShip.pdf">View Resume</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>HTML & Front-End Design</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>PHP & Laravel</p><p>65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>MySQL & Database Management</p><p>70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Ajax &nbsp; API</p><p>35%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>CSS & Bootstrap Design</p><p>80%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Web Hosting & File Manager</p><p>60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>JaveScript & Jquery</p><p>45%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Ecommerce System</p><p>75%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <div>
                                <div class="edu-col">
                                    <h4>Diploma in System Module Development</h4>
                                    <span><i>Kolej Synergy</i> | 2023 - 2025</span>
                                    <p>Software Development and system design, this program prepares students to create and manage software solutions with practical, hands-on learning.</p>
                                </div>
                            </div>
                            <div>
                                <div class="edu-col">
                                    <h4>SPM</h4>
                                    <span><i>SMK Berapit</i> | 2016 - 2022</span>
                                    <p>Completed secondary education with a focus on core academic subjects, preparing for further studies and career development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                            <div>
                                <div class="exp-col">
                                    <h2>Ong Poey See</h2>
                                    <span><i>Chef Assistant</i> | Lunas,Kedah | 2016 - Present</span>
                                    <p>Provided high quality customer , talking orders
                                        and processing payments.
                                         Independently managed all aspects of the shop, including inventory, customer relations, and
                                        daily operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Start -->
                
                <!-- Service Start -->
                <div class="service" id="service">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Portfolio</h2>
                        </div>
                <div class="project-container row">
                            <!-- Student Management System -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/student_management.png" class="img-fluid" alt="Student Management System">
                                        <a href="img/student_management.png" data-lightbox="gallery" data-title="Student Management" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/student_management/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/student_management/" target="_blank">Student Management System</a>
                                    </figure>
                                </div>
                            </div>
                
                            <!-- Vegetable Shop -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/vegetable.png" class="img-fluid" alt="Vegetable Shop">
                                        <a href="img/vegetable.png" data-lightbox="gallery" data-title="Vegetable Shop" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/market/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/market/" target="_blank">Vegetable Shop <span>Ecommerce System</span></a>
                                    </figure>
                                </div>
                            </div>
                
                            <!-- Pokédex List -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/pokemon.png" class="img-fluid" alt="Pokédex List">
                                        <a href="img/pokemon.png" data-lightbox="gallery" data-title="Pokédex List" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/pokedex.php/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/pokedex.php/" target="_blank">Pokédex List <span>Fetch API</span></a>
                                    </figure>
                                </div>
                            </div>
                
                            <!-- Calculator -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/cal.png" class="img-fluid" alt="Calculator">
                                        <a href="img/calculate.png" data-lightbox="gallery" data-title="Calculator" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/calculator/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/calculator/" target="_blank">Calculator</a>
                                    </figure>
                                </div>
                            </div>
                
                            <!-- Card Attendance -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/attendance.png" class="img-fluid" alt="Card Attendance">
                                        <a href="img/attendance.png" data-lightbox="gallery" data-title="Card Attendance" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/attendance/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/attendance/" target="_blank">Card Attendance</a>
                                    </figure>
                                </div>
                            </div>
                
                            <!-- To-Do List -->
                            <div class="col-lg-4 col-md-6 project-item">
                                <div class="project-wrap">
                                    <figure>
                                        <img src="img/list1.png" class="img-fluid" alt="To-Do List">
                                        <a href="img/todolist2024.png" data-lightbox="gallery" data-title="To-Do List" class="link-preview" title="Preview">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="https://ws.jom-jom.com/project/To-do%20List/" class="link-details" title="More Details" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="project-title" href="https://ws.jom-jom.com/project/To-do%20List/" target="_blank">To-Do List</a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Service Start -->
                
                <!-- Portfolio Start -->
                <div class="portfolio" id="portfolio">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Qualifications</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".web-des">Great Learning</li>
                                    <li data-filter=".web-dev">HRD corp</li>
                                    <li data-filter=".dig-mar">Simplilearn</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/HTML.png" class="img-fluid" alt="">
                                        <a href="img/HTML.png" data-lightbox="portfolio" data-title="HTML Tutorials" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/HTML Tutorials.pdf" class="link-details" title="More Details" target="_blank"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="qualification/HTML Tutorials.pdf" target="_blank">HTML Tutorials <span>Great Learning</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/php.png" class="img-fluid" alt="">
                                        <a href="img/php.png" class="link-preview" data-lightbox="portfolio" data-title="PHP of Beginner" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/PHP of Beginner.pdf" class="link-details" title="More Details"><i class="fa fa-link" target="_blank"></i></a>
                                        <a class="portfolio-title" href="qualification/PHP of Beginner.pdf" target="_blank">PHP of Beginner <span>Great Learning</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/mysql.png" class="img-fluid" alt="">
                                        <a href="img/mysql.png" class="link-preview" data-lightbox="portfolio" data-title="MySQL Tutorials" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/MySQL Tutorials.pdf" class="link-details" title="More Details" target="_blank"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="qualification/MySQL Tutorials.pdf" target="_blank">MySQL Tutorials <span>Great Learning</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/css.png" class="img-fluid" alt="">
                                        <a href="img/css.png" class="link-preview" data-lightbox="portfolio" data-title="Introduction To CSS Container Queries" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/CSS.pdf" class="link-details" title="More Details" target="_blank"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="qualification/CSS.pdf" target="_blank">Introduction To CSS Container Queries <span>HRD corp</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/js.png" class="img-fluid" alt="">
                                        <a href="img/js.png" class="link-preview" data-lightbox="portfolio" data-title="Introduction To JavaScript" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/JavaScript.pdf" class="link-details" title="More Details" target="_blank"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="qualification/JavaScript.pdf" target="_blank">Introduction To JavaScript <span>HRD corp</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item dig-mar">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/simple.png" class="img-fluid" alt="">
                                        <a href="img/simplilearnphp.png" class="link-preview" data-lightbox="portfolio" data-title="Introduction To PHP" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="qualification/Introduction PHP.pdf" class="link-details" title="More Details" target="_blank"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="qualification/Introduction PHP.pdf" target="_blank">Introduction To PHP <span>Simplilearn</span></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Start -->
                
                <!-- Review Start -->
                <div class="review" id="review">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>References</h2>
                        </div>
                        <div class="row align-items-center review-slider">
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-img">
                                        <img src="img/teacher.png" alt="Image" class="img-fluid">
                                        <div class="review-name mt-4">
                                            <h3><b>Name :</b> Mr Ng Chuen Chuen</h3><br>
                                            <h3><b>Position :</b> Head of IT Department</h3><br>
                                            <h3><b>Company :</b> Kolej Synergy</h3><br>
                                            <h3><b>Phone :</b> +6012 - 434 - 6832</h3><br>
                                            <h3><b>Email :</b> c2@synergy-college.com</h3><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Review End -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p><i class="fa fa-user"></i>Ng Wei Sheng</p>
                                    <p><i class="fa fa-tag"></i>Web Developer & Designer</p>
                                    <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">weiseng12345678@gmail.com</a></p>
                                    <p><i class="fa fa-phone"></i><a href="tel:+1234567890">+6016 - 881 - 3607</a></p>
                                    <p><i class="fa fa-map-marker"></i>361 Lorong Makmur 1/1 , Taman Makmur , 09600 Lunas , Kedah</p>
                                    <div class="social">
                                        <a href="https://wa.me/60168813607"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://www.instagram.com/ngweisheng1215/?hl=en"><i class="fab fa-instagram"></i></a>
                                        <a href="https://web.facebook.com/profile.php?id=100023555172048"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <form method="POST" action="{{ route('send.email') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company" placeholder="Company Name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        
                                        <!-- Hidden field with your email address -->
                                        <input type="hidden" name="my_email" value="weiseng12345678@gmail.com">
                                    
                                        <div><button class="btn" type="submit">Send Message</button></div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                
                <!-- Footer Start -->
                <div class="footer">
                    <div class="content-inner">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p>&copy; Copyright <a href="https://ws.jom-jom.com/">Ng Wei Sheng</a>. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6">
                                <p>Powered by <a href="https://ws.jom-jom.com/">Ng Wei Sheng</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
