<?php
  include "./nedmin/connect.php";
  $fetch_skill = $db -> prepare("SELECT * FROM skills_page WHERE skills_id=1");
  $fetch_skill -> execute();
  $fetch_s = $fetch_skill -> fetch(PDO::FETCH_ASSOC);

  $fetch_about = $db -> prepare("SELECT * FROM about_page WHERE about_id=1");
  $fetch_about -> execute();
  $fetch_sm = $fetch_about -> fetch(PDO::FETCH_ASSOC);

  $fetch_info = $db -> prepare("SELECT * FROM personal_info WHERE personal_id=1");
  $fetch_info -> execute();
  $fetch_inf = $fetch_info -> fetch(PDO::FETCH_ASSOC);

  $fetch_contact = $db -> prepare("SELECT * FROM contact_info WHERE contact_id=1");
  $fetch_contact -> execute();
  $fetch_comi = $fetch_contact -> fetch(PDO::FETCH_ASSOC);

  $fetch_setting = $db -> prepare("SELECT * FROM settings_page WHERE settings_id=1");
  $fetch_setting -> execute();
  $fetch_se = $fetch_setting -> fetch(PDO::FETCH_ASSOC);
  
?>

<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>MU Material : Home</title>

       <!-- CSS  -->      
      <link href="./assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="./assets/css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="./assets/css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="./assets/css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="./assets/css/themes/default-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>
      <!-- BEGAIN PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a href="index.html" class="brand-logo">MU Material</a>

                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="#about"><?php echo $fetch_se['first_menutitle'];?></a></li>
                  <li><a href="#resume"><?php echo $fetch_se['second_menutitle'];?></a></li>
                
                  <li><a href="#footer"><?php echo $fetch_se['third_menutitle'];?></a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="#about"><?php echo $fetch_se['first_menutitle'];?></a></li>
                  <li><a href="#resume"><?php echo $fetch_se['second_menutitle'];?></a></li>
                  
                  <li><a href="#footer"><?php echo $fetch_se['third_menutitle'];?></a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">
          <!-- START HOME SECTION -->
          <section id="home">
            <div class="overlay-section">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="home-inner">
                      <h1 class="home-title"><?php echo $fetch_se['title'];?></h1>
                      <p>.. <?php echo $fetch_se['subtitle'];?> ..</p>
                      <ul class="home-socialicon">
                        
                        <a href="https://instagram.com/<?php echo $fetch_sm['instagram']?>">
                          <img src="./assets/img/socialicon/011-instagram.png"alt="" /></a>
                        <a href="https://twitter.com/<?php echo $fetch_sm['twitter']?>">
                          <img src="./assets/img/socialicon/015-twitter.png"alt="" /></a>
                          <a href="https://open.spotify.com/user/<?php echo $fetch_sm['spotify']?>">
                          <img src="./assets/img/socialicon/spotify.png"alt="" /></a>
                      
                      </ul>
                    </div>
                  </div>
                </div>
                      
                      <!-- Call to About Button -->
                      <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>

          <!-- START ABOUT SECTION -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <div class="col s12 m4 l3">
                        <div class="about-inner-left">
                          <img class="profile-img" src="./assets/img/nilimage.jpeg" alt="Profile Image" style="width:300px;height:470px;">
                        </div>
                      </div>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <h3><?php echo $fetch_sm['about_title']?></h3>
                          <p><?php echo $fetch_sm['content'];?></p>
                          <div class="personal-information col s12 m12 l6">
                            <h3><?php echo $fetch_inf['personal_title'] ?></h3>
                            <ul>
                              <li><span>İsim-Soyisim : </span><?php echo $fetch_inf['personal_name']; echo " ";  echo $fetch_inf['personal_surname']; ?> </li>
                              <li><span>Yaş : </span><?php echo $fetch_inf['age'] ?> </li>
                              <li><span>Telefon : </span><?php echo $fetch_comi['gsm'] ?></li>
                              <li><span>Eposta : </span><?php echo $fetch_comi['email'] ?></li>
                              <li><span>Adres : </span><?php echo $fetch_comi['province']?></li>
                            </ul>
                          </div>
                          <div class="resume-download col s12 m12 l6">
                            <a href="#" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> CV İNDİR</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Resume -->
          <section id="resume">
            <!-- Start Skill -->
            <section id="skill">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title"><?php echo $fetch_s['skills_title']; ?> </h2>
                  
                  <!-- Start skills progress bar -->
                  

                  <div class="skill-progress-bar">
                    <span><?php echo $fetch_s['first_skill']; ?></span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="<?php echo $fetch_s['first_counter']; ?>"></div>
                    </div>
                    <span><?php echo $fetch_s['second_skill']; ?> </span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="<?php echo $fetch_s['second_counter']; ?>" data-pro-bar-delay="100"></div>
                    </div>
                    <span><?php echo $fetch_s['third_skill'] ?></span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="<?php echo $fetch_s['third_counter']; ?>" data-pro-bar-delay="200"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </section>
            
          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title"><?php echo $fetch_comi['contact_title'];?></h2>
                      
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <div class="contact-form">
                              <form>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactName" id="contact-name">
                                  <label class="input-label" for="contact-name">İsim-Soyisim</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="contactEmail" id="email">
                                  <label class="input-label" for="email">Eposta</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactSubject" id="subject">
                                  <label class="input-label" for="subject">Konu</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Mesaj</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">Gönder</button>
                              </form>
                            </div>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                     <p class="design-info">Designed By <a href="http://www.markups.io/">MarkUps.io</a></p>
                     <br>Copyright &copy; Company 2018</br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </main>
      </div>
      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="./assets/js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="./assets/js/appear.min.js" type="text/javascript"></script>
      <script src="./assets/js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="./assets/js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="./assets/js/waypoints.min.js"></script>
      <script src="./assets/js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="./assets/js/custom.js"></script>      
    </body>
  </html>