<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
       
        <!-- ===================== icon titre ==================== -->
        <link rel="icon" href="assets/img/logo jf-Récupéré-Récupéré.png">
       
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Mon Portfolio</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav_logo"> F_Junior</a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list grid">
                        <li class="nav_item">
                            <a href="#home" class="nav_link active-link">
                                <i class="uil uil-estate nav_icon"></i> Acceuil
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#about" class="nav_link">
                                <i class="uil uil-user nav_icon"></i> About 
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#skills" class="nav_link">
                                <i class="uil uil-file-alt nav_icon nav_icon"></i> Competences
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#services" class="nav_link">
                                <i class="uil uil-briefcase-alt nav_icon"></i> Services
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#portfolio" class="nav_link">
                                <i class="uil uil-scenery nav_icon"></i> Portfolio 
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#contact" class="nav_link">
                                <i class="uil uil-message nav_icon"></i> Contacter Moi
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav_close" id="nav-close"></i>
                </div>

                <div class="nav_btns">
                    <!-- theme mode nuit -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav_toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home_container cantainer grid">
                    <div class="home_content grid">
                        <div class="home_social">
                            <a href="https://cm.linkedin.com/in/foko-tadjuige-beno%C3%AEt-junior-62b987266" target="_blank" class="home_social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>

                            <a href="https://wa.me/+237690713130" target="_blank" class="home_social-icon">
                                <i class="uil uil-whatsapp"></i>
                            </a>

                            <a href="https://github.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                            <a href="https://m.facebook.com/?locale=fr_FR" target="_blank" class="home_social-icon">
                                <i class="uil uil-facebook-f"></i>
                            </a>
                            <a href="https://facebook-messenger.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-facebook-messenger-alt"></i>
                            </a>
                            <a href="https://snapchat.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-snapchat-alt"></i>
                            </a>
                            <a href="https://skype.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-skype-alt"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-twitter-alt"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-instagram"></i>
                            </a>
                            <a href="https://telegram.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-telegram-alt"></i>
                            </a>
                        </div>
                        <div class="home_img">
                            <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                                    <image class="home_blob-img" x="12" y="18" xlink:href="assets/img/project1.png"/>
                                </g>
                            </svg>                            
                        </div>
                        <div class="home_data">
                            <h1 class="home_title"><?php include('./assets/config/date.php');?>, J&#146;suis  Foko_Junior <span>I</span> </h1>
                            <h3 class="home_subtitle">Developpeur Fullstack</h3>
                            <p class="home_description">Je suis presentement etudiant en 2&eacute;me Ann&eacute;e en Genie logiciel &Agrave;  JFN - HUI &#133; </p>
                            <a href="#contact" class="button button--flex">
                               Contacter Moi <i class="uil uil-message button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home_scroll">
                        <a href="#about" class="home_scroll-button button--flex">
                            <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                            <span class="home_scroll-name"> Faites défiler</span>
                            <i class="uil uil-arrow-down home_scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section_title">About Me</h2>
                <span class="section_subtitle">Mon introduction</span>
            
                <div class="about_container container grid">
                    <img src="assets/img/img1.jpg" alt="" class="about_img">

                    <div class="about_data">
                        <p class="about_description">Je developpe des applications web et des sites webs statiques et dynamiques pour des entreprises&#133; </p>
                        
                         <div class="about_info">
                            <div>
                                <span class="about_info-title">02+</span>
                                <span class="about_info-name">Ans<br>d experience</span>
                            </div>
                            <div>
                                <span class="about_info-title">04+</span>
                                <span class="about_info-name">Projets<br>complets</span>
                            </div>
                            <div>
                                <span class="about_info-title">01+</span>
                                <span class="about_info-name">Companies<br>worked</span>
                            </div>
                         </div>
                    

                    <div class="about_buttons">
                        <a download="" href="assets/pdf/Curriculum Vitae.pdf" class="button button--flex">
                           Download Cv <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
                
            </section>

            <!--==================== competences ====================-->
            <section class="skills section" id="skills">
                <h2 class="section_title">Competences</h2>
                <span class="section_subtitle">Mon niveau technique</span>
                <div>

                <div class="skills_container container grid">
                   <div>
                        <!-- ===============================Competences 1 ========================= -->
                        <div class="skills_content skills_open">
                            <div class="skills_header">
                                <i class="uil uil-brackets-curly skills_icon"></i>

                                <div>
                                    <h1 class="skills_title">Developpeur Frontend</h1>
                                    <span class="skills_subtitle">Plus de 2 ans</span>
                                </div>

                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">HTML</h3>
                                        <span class="skills_number">95%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_html"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">CSS</h3>
                                        <span class="skills_number">90%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_css"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">JavaScrip</h3>
                                        <span class="skills_number">60%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_js"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- ===============================Competences 2 ========================= -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-desktop-cloud-alt skills_icon"></i>

                                <div>
                                    <h1 class="skills_title">App Developper</h1>
                                    <span class="skills_subtitle">Plus de 1 an</span>
                                </div>

                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">C</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_c"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">C++</h3>
                                        <span class="skills_number">25%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_cc"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Python</h3>
                                        <span class="skills_number">58%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_python"></span>
                                    </div>
                                </div>
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Java</h3>
                                        <span class="skills_number">60%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_java"></span>
                                    </div>
                                </div>

                        </div>
                        </div>
                    </div>

                    <div>
                        <!-- ===============================Competences 3 ========================= -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-server-network skills_icon"></i>

                                <div>
                                    <h1 class="skills_title">Developpeur Backend</h1>
                                    <span class="skills_subtitle">Plus de 1 an</span>
                                </div>

                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Python</h3>
                                        <span class="skills_number">20%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_python2"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Firebase</h3>
                                        <span class="skills_number">20%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_firebase"></span>
                                    </div>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">PHP</h3>
                                        <span class="skills_number">70%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_php"></span>
                                    </div>
                                </div>
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Java</h3>
                                        <span class="skills_number">30%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_javab"></span>
                                    </div>
                                </div>
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">SQL</h3>
                                        <span class="skills_number">50%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage skills_sql"></span>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section_title">Qualification</h2>
                <span class="section_subtitle">Mon travail personnel</span>

                <div class="qualification_container container">
                    <div class="qualification_tabs">
                        <div class="qualification_button button--flex qualification_active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification_icon"></i>
                            Education
                        </div>

                        <div class="qualification_button button--flex" data-target="#work">
                            <i class="uil uil-briefcase-alt qualification_icon"></i>
                            Certification
                        </div>
                        </div>

                        <div class="qualification_sections">
                             <!--==================== QUALIFICATION CONTENT 1====================-->
                             <div class="qualification_content qualification_active" data-content id="education">
                                <!--==================== QUALIFICATION 1 ====================-->
                                <div class="qualification_data">
                                    <div>
                                        <h3 class="qualification_title">Probatoire TI</h3>
                                        <span class="qualification_subtitle">Lyclaf - Foumban</span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2020 - 2021
                                        </div>
                                    </div>

                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <span class="qualification_line"></span>
                                    </div>
                                </div>

                                <!--==================== QUALIFICATION 2 ====================-->
                                <div class="qualification_data">
                                    <div></div>

                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <span class="qualification_line"></span>
                                    </div> 

                                    <div>
                                        <h3 class="qualification_title">Certification HTML CSS</h3>
                                        <span class="qualification_subtitle">Alison</span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2022 - 2023
                                        </div>
                                    </div>
                                </div>

                                <!--==================== QUALIFICATION 3 ====================-->
                                <div class="qualification_data">
                                    <div>
                                        <h3 class="qualification_title">Baccalaureat TI</h3>
                                        <span class="qualification_subtitle">Lyclaf - Foumban</span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2021 - 2022
                                        </div>
                                    </div>

                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <span class="qualification_line"></span>
                                    </div>
                                </div>
                                <!--==================== QUALIFICATION 3 ====================-->
                                <div class="qualification_data">
                                    <div></div>
                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <!-- <span class="qualification_line"></span> -->
                                    </div>
                                    <div>
                                        <h3 class="qualification_title">Certification Cisco</h3>
                                        <span class="qualification_subtitle">Cisco </span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2023 - 202_
                                        </div>
                                    </div>

                                    
                                </div>
                             </div>
                             </div>
                             <!--==================== QUALIFICATION CONTENT 2 ====================-->
                             <div class="qualification_content " data-content id="work">
                                <!--==================== QUALIFICATION 1 ====================-->
                                <div class="qualification_data">
                                    <div>
                                        <h3 class="qualification_title">Dipl Univ Tech</h3>
                                        <!-- <span class="qualification_subtitle2">Genie Informatique</span> -->
                                        <span class="qualification_subtitle">JFN-HUI - Douala</span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2022 - 202_
                                        </div>
                                    </div>

                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <span class="qualification_line"></span>
                                    </div>
                                </div>

                                <!--==================== QUALIFICATION 2 ====================-->
                                <div class="qualification_data">
                                    <div></div>

                                    <div>
                                        <span class="qualification_rounder"></span>
                                        <!-- <span class="qualification_line"></span> -->
                                    </div> 

                                    <div>
                                        <h3 class="qualification_title">Certification Python (Basic)</h3>
                                        <span class="qualification_subtitle">HackerRank</span>
                                        <div class="qualification_calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2023
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                </div>
            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section_title">Services</h2>
                <span class="section_subtitle">Ce que j’offre</span>

                <div class="services_container container grid">
                    <!--==================== SERVICES 1====================-->
                    <div class="services_content">
                        <div>
                            <i class="uil uil-web-grid servies_icon"></i>
                            <h3 class="services_title">Web <br> Designer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services_button">
                            Voir Plus 
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="services_modal">
                            <div class="services_modal-content">
                                <h4 class="services_modal-title">Web <br> Designer</h4>
                                <i class="uil uil-times services_modal-close"></i>

                                <ul class="services_modal-services grid">
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je développe l’interface utilisateur.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Développement de pages Web.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je cree les Designs des page web</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je positionne les logo pour votre entreprise.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--==================== SERVICES 2====================-->
                    <div class="services_content">
                        <div>
                            <i class="uil uil-arrow servies_icon"></i>
                            <h3 class="services_title">Developper <br> Frontend</h3>
                        </div>

                        <span class="button button--flex button--small button--link services_button">
                            Voir Plus 
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="services_modal">
                            <div class="services_modal-content">
                                <h4 class="services_modal-title">Developper <br> Frontend</h4>
                                <i class="uil uil-times services_modal-close"></i>

                                <ul class="services_modal-services grid">
                                    <li class="service_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je développe l’interface utilisateur.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Développement de pages Web.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je cree les Designs des page web</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je positionne des logos pour votre entreprise.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--==================== SERVICES 3====================-->
                    <div class="services_content">
                        <div>
                            <i class="uil uil-pen servies_icon"></i>
                            <h3 class="services_title">Logo <br> Designer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services_button">
                            Voir Plus
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="services_modal">
                            <div class="services_modal-content">
                                <h4 class="services_modal-title">Logo <br> Designer</h4>
                                <i class="uil uil-times services_modal-close"></i>

                                <ul class="services_modal-services grid">
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je développe l’interface utilisateur.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Développement de pages Web.</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je cree les Designs des page web</p>
                                    </li>
                                    <li class="services_modal-service">
                                        <i class="uil uil-check-circle services_modal-icon"></i>
                                        <p>Je positionne les logos pour votre entreprise.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section_title">Portfolio</h2>
                <span class="section_subtitle">Mes Travaux Recent</span>

                <div class="portfolio_container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== PORTFOLIO 1====================-->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/portfolio4.jpg" alt="" class="portfolio_img">

                            <div class="portfolio_data">
                                <h3 class="portfolio_title">Site Web Modern</h3>
                                <p class="portfolio_description">Site Web adaptable à tous les appareils, 
                                    avec des composants d’interface utilisateur et des interactions animées.</p>
                                <a href="#" class="button button--flex button--small portfolio_button">
                                    Demo
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div> 
                        
                        <!--==================== PORTFOLIO 2====================-->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/logo-design-1.jpg" alt="" class="portfolio_img">

                            <div class="portfolio_data">
                                <h3 class="portfolio_title">Logo Design</h3>
                                <p class="portfolio_description">Site Web adaptable à tous les appareils, 
                                    avec des composants d’interface utilisateur et des interactions animées.</p>
                                <a href="#" class="button button--flex button--small portfolio_button">
                                    Demo
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div> 

                        <!--==================== PORTFOLIO 3====================-->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/bt1.png" alt="" class="portfolio_img">

                            <div class="portfolio_data">
                                <h3 class="portfolio_title">Boutique en ligne</h3>
                                <p class="portfolio_description">Site Web adaptable à tous les appareils, 
                                    avec des composants d’interface utilisateur et des interactions animées.</p>
                                <a href="#" class="button button--flex button--small portfolio_button">
                                    Demo
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div> 
                    </div>
                        <!-- ajout des bouton defiler -->
                        <div class="swiper-button-next">
                            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                        </div>

                        <!-- ajout pagination -->
                        <div class="swiper-pagination">
                            
                        </div>
                </div>
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                <div class="project_bg">
                    <div class="project_container container grid">
                        <div class="project_data">
                            <h2 class="project_title">Vous avez un nouveau project</h2>
                            <p class="project_description">Contactez-moi dès maintenant et obtenez un rabais 
                                de 20% sur votre nouveau projet.</p>
                            <a href="#contact" class="button button--flex button--white">
                                Contacter-Moi 
                                <i class="uil uil-message project_icon button_icon"></i>
                            </a>
                            </div>

                            <img src="assets/img/offre1.png" alt="lmz" class="project_img">
                    </div>
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section_title">Temoignage</h2>
                <span class="section_subtitle">Ce que disent mes clients</span>

                <div class="testimonial_container container swiper-container">
                    <div class="swiper-wrapper">
                      <!--==================== TESTIMONIAL 1====================-->
                      <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/dorcas.png" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Dorcas Tech</h3>
                                    <span class="testimonial_cilent">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial_description">J’ai une bonne impression, je réalise 
                            mon projet avec toute la qualité et l’attention et le soutien
                            possibles 24 heures sur 24.
                        </p>
                        
                      </div>

                      <!--==================== TESTIMONIAL 2====================-->
                      <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/zeus.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Lacmago Zidane</h3>
                                    <span class="testimonial_cilent">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial_description">J’ai une bonne impression, je réalise 
                            mon projet avec toute la qualité et l’attention et le soutien
                            possibles 24 heures sur 24.
                        </p>
                        
                      </div>

                      <!--==================== TESTIMONIAL 3====================-->
                      <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/yann.png" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Yann Wante</h3>
                                    <span class="testimonial_cilent">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial_description">J’ai une bonne impression, je réalise 
                            mon projet avec toute la qualité et l’attention et le soutien
                            possibles 24 heures sur 24.
                        </p>
                        
                      </div>
                    </div>
                    <!-- ajout pagination -->
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section_title">Contactez - Moi</h2>
                <span class="section_subtitle">Contacter - Nous</span>

                <div class="contact_container container grid">

                    <div>
                        <div class="contact_information">
                            <i class="uil uil-phone contact_icon"></i>

                            <div>
                                <h3 class="contact_title">Appelez - Moi</h3>
                                <span class="contact_subtitle">+237 690-713-130</span>
                            </div>
                        </div>

                        <div class="contact_information">
                            <i class="uil uil-envelope contact_icon"></i>

                            <div>
                                <h3 class="contact_title">E-mail</h3>
                                <span class="contact_subtitle">benitojunior2022@gmail.com</span>
                            </div>
                        </div>

                        <div class="contact_information">
                            <i class="uil uil-map-marker contact_icon"></i>

                            <div>
                                <h3 class="contact_title">Location</h3>
                                <span class="contact_subtitle">Douala - Logpom</span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="contact_form grid">
                    <?php include('assets/config/contact.php');?>
                        <div class="contact_inputs grid">
                            <div class="contact_content">
                                <label for="" class="contact_label">Nom</label>
                                <input type="text" name="nom" class="contact_input" >
                            </div>
                            <div class="contact_content">
                                
                                <label for="" class="contact_label">E-mail</label>
                                <input type="email"  name="email" class="contact_input">
                            </div>
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Project</label>
                            <input type="text"  name="project" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Message</label>
                            <textarea name="message" id="" cols="0" rows="7" class="contact_input" ></textarea>
                        </div>
                        <div>
                            <button   class="button button--flex" type="submit" name="submit">
                               Envoyer un Message
                                <i class="uil uil-message button_icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer_bg">
                <div class="footer_container container grid">
                    <div>
                        <h1 class="footer_title"><img src="assets/img/logo jf-Récupéré-Récupéré.png" alt="" srcset=""></h1>
                        <span class="footer_subtitle">Developper Frontend</span>
                    </div>

                    <ul class="footer_links">
                        <li>
                            <a href="#services" class="footer_link">Services</a>
                        </li>
                        <li> 
                            <a href="#portfolio" class="footer_link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer_link">Contacter Moi</a>
                        </li>
                    </ul>

                    <div class="footer_socials">
                        <a href="https://www.facebook.com/" target="_blank" class="footer_social">
                            <i class="uil uil-facebook-f"></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                            <i class="uil uil-instagram"></i>
                        </a>

                        <a href="https://wa.me/690713130/" target="_blank" class="footer_social">
                            <i class="uil uil-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <p class="footer_copy">&#169; Foko_Junior. Tous les droits sont reserves</p>
            </div>
        </footer>
         
        <!--==================== SCROLL TOP ====================-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup_icon"></i>
            </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
