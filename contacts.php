<?php
  if (isset($_POST['submit'])) {
    $sender = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $receiver = "yemi.owatemi@innobuzz.in";
    // Send message to email
    $headers = "From: {$sender} <".$email.">". "\r\n" .
          "Reply-To: yemi.owatemi@innobuzz.in" . "\r\n" .
          "X-Mailer: PHP/" . phpversion();
    if (!empty($message)||!empty($subject)||!empty($sender)||!empty($receiver)) {
      mail($receiver, $subject, $message, $headers);
      $msg = "Message successfully sent";
    }else{
      $msg = "Problem sending message";
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="author" content="Joseph Rex; Ostrich-Dev">
    <title>Innobuzz Training</title>
    <meta name="description" content="Innobuzz Nigeria Training Website" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
    <link href="assets/favicon.ico" rel="shortcut icon" />
    <!-- JS FILES -->
    <script type="text/javascript" src="assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="#" media="screen" id="style-schem" />  
    <link href="assets/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="assets/css/fullwidth.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div id="velcro-header">
          <div class="header-wrapper">
            <div class="pull-left" style="padding-left:5%"><a href="index.html"><span class="img-responsive logo" alt=""></span></a></div>
            <div class="pull-right menu" style="padding-right:5%">
            <!-- Navigation -->
              <nav id="responsive-menu">
                <ul class="super-menu" id="superfish">
                  <li>
                    <a href="./">Home</a>
                  </li>
                  <li>
                    <a class="arrow_menu" href="#">Company</a>
                    <ul>
                      <li><a href="about.html">Corporate Profile</a></li>
                      <li><a href="management.html">Management</a></li>
                    </ul>
                  </li>
                  <li>
                    <a class="arrow_menu" href="#">Training Programs</a>
                    <ul>
                      <li><a href="hacking.html">Ethical Hacking</a></li>
                      <li><a href="php.html">PHP/MySQL</a></li>
                      <li><a href="android.html">Android Development</a></li>
                      <li><a href="netsec.html">Network Security</a></li>
                    </ul>
                  </li>
                  <li><a class="active" href="contacts.php">Contact</a></li>
                </ul>
              </nav>
              <!-- End of Navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="page-in">
        <div class="page_in">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="pull-left"><span class="colored">Contact Us</span></h3>
                <div class="wel_mag pull-right">
                  <div class="bbread">
                    <a class="subpage_block" href="./">Home</a><div class="subpage_breadcrumbs_dv"></div><div class="subpage_block">Contacts</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="welcome">
              <div class="wel_cen marg50">
                <h2>Our Office Location</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="marg50">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Opebi+Bus+Stop,+Opebi+Road,+Ikeja,+Lagos,+Nigeria&amp;aq=3&amp;oq=OpebIkeja,+Lagos,+Nigeria&amp;sll=6.607913,3.360701&amp;sspn=0.046552,0.084543&amp;ie=UTF8&amp;hq=&amp;hnear=Opebi+Bus+Stop,+Opebi+Rd,+Ikeja,+Lagos,+Nigeria&amp;t=m&amp;z=14&amp;ll=6.59134,3.359327&amp;output=embed"></iframe>
      </div>
      <div class="container marg50">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <div class="welcome_page">
              <h3>Information</h3>
            </div>
            <p class="adress_cont">
              <i class="fa fa-home icon_foot"></i>  2B, Oyetola Street, Off Ajanaku Street, Off Salvation Road, (Junction Bus stop) Opebi Ikeja, Lagos<br />
              <i class="fa fa-phone icon_foot"></i> Phone: +234 (0) 8128130440<br />
              <i class="fa fa-envelope icon_foot"></i>  Email: <a href="#" target="_blank" class="colorend">nigeria@innobuzz.in</a><br />
              <i class="fa fa-globe icon_foot"></i> Website: <a href="http://innobuzznigeria.net" target="_blank" class="colorend">http://innobuzznigeria.net</a>
            </p>
            <div class="welcome_page">
              <h3>Business Hours</h3>
            </div>
            <p class="adress_cont">
              <i class="fa fa-unlock icon_foot"></i> Weekday: 9am to 6pm<br />
              <i class="fa fa-unlock icon_foot"></i> Saturday: 9am to 6pm<br />
              <i class="fa fa-lock icon_foot"></i> Sunday: Closed<br />
            </p>
            <div class="welcome_page">
              <h3>Social Network</h3>
            </div>
            <div class="soc_about">
              <ul>
                <li><a href="http://www.facebook.com/pages/Innobuzz/115207178533601" class="tooltip_s" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://twitter.com/innobuzzks" class="tooltip_s" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://www.linkedin.com/company/innobuzz-knowledge-solutions-private-limited" class="tooltip_s" data-placement="bottom" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="tooltip_s" data-placement="bottom" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="http://youtube.com/Innobuzz" class="tooltip_s" data-placement="bottom" data-original-title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 col-sm-8">
            <div class="welcome_page cont-marg">
              <h3 id="inquiry">Inquiry Form</h3>
            </div>
            <p class="text_cont">Tell us what you think here or make any enquiries and we will get back to you as soon as we can.</p>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" id="contactForm" />
              <span class="input">
                <p class="about_text input marg"><input type="text" name="name" placeholder="Your name" class="contact" size="40" /></p>
                <div class="alert alert-danger error" id="nameError"><i class="fa fa-times"></i> Oh snap! This field can't stay empty.</div>
              </span>
              <span class="input">
                <p class="about_text input"><input type="text" name="email" placeholder="Your e-mail" class="contact" size="40" /></p>
                <div class="alert alert-danger error" id="emailError"><i class="fa fa-times"></i> Oh snap! There was a mistake when writing a e-mail.</div>
              </span>
              <span class="input">
                <p class="about_text input"><input type="text" name="subject" placeholder="Subject" class="contact" size="40" /></p>
                <div class="alert alert-danger error" id="subjectError"><i class="fa fa-times"></i> Oh snap! This field can't stay empty.</div>
              </span>
              <span class="input">
                <p class="about_text input"><textarea name="message" placeholder="Your message" id="message" class="contact_width" cols="40" rows="10"></textarea></p>
                <div class="alert alert-danger error" id="messageError"><i class="fa fa-times"></i> Oh snap! This field can't stay empty.</div>
              </span>
              <?php if (isset($msg)) { 
              echo "<div class=\"alert alert-success\" id=\"success\"><i class=\"fa fa-check\"></i>". $msg."</div>"
              ; } ?>
              <p><input type="submit" name="submit" id="send" class="btn btn-default btn-small" value="Send message" /></p>
            </form>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="footer marg50">
        <div class="container">
          <div class="row">
            <!-- Footer column 1 -->
            <div class="col-lg-3 col-sm-3">
              <div class="welcome_footer"><h3>Get in Touch</h3></div>
              <div class="cont_footer">
                <div class="adress">
                  <i class="fa fa-home icon_foot"></i>  2B, Oyetola Street, Off Ajanaku Street, Off Salvation Road, (Junction Bus stop) Opebi Ikeja, Lagos<br />
                  <i class="fa fa-phone icon_foot"></i> Phone: +234 (0) 8128130440<br />
                  <i class="fa fa-envelope icon_foot"></i> Email: <a href="#" target="_blank">nigeria@innobuzz.in</a><br />
                  <i class="fa fa-unlock icon_foot"></i> Weekday: 9am to 6pm<br />
                  <i class="fa fa-unlock icon_foot"></i> Saturday: 9am to 6pm<br />
                  <i class="fa fa-lock icon_foot"></i> Sunday: Closed<br />
                </div>
                <div class="soc">
                  <ul>
                    <li><a href="http://www.facebook.com/pages/Innobuzz/115207178533601" class="tooltip_s" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/innobuzzks" class="tooltip_s" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.linkedin.com/company/innobuzz-knowledge-solutions-private-limited" class="tooltip_s" data-placement="bottom" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltip_s" data-placement="bottom" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://youtube.com/Innobuzz" class="tooltip_s" data-placement="bottom" data-original-title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End of column 1 -->
            <!-- Footer column 2 -->
            <div class="col-lg-3 col-sm-3">
              <div class="welcome_footer"><h3>Partners</h3></div>
              <div class="cont_footer">
                <img src="assets/images/microsoft.png" alt="Microsoft"><br>
                <img src="assets/images/ibm.png" alt="IBM"><br>
                <a href="humans.txt"><img src="assets/images/humans.png" alt="humans"></a>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col3-box">
              <div class="pull-left">Copyright 2014 <a href="#" target="_blank">Innobuzz KS Nigeria</a>. Design by <a href="http://ostrich-dev.com" target="_blank">Ostrich-Dev</a>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col3-box">
                <a class="pull-right scroll footer_move tooltip_s" data-original-title="Move Up" data-placement="top" href="#"><i class="fa fa-angle-up move"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript at bottom -->
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.inview.js"></script>
    <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/superfish.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="assets/js/switch.class.js"></script>
    <script type="text/javascript" src="assets/js/responsive-nav.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
