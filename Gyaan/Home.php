<?php include('server.php') ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Oswald|Baloo+Chettan|Germania+One|Patua+One|Russo+One' rel='stylesheet'>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
      <!-- Compiled and minified CSS -->
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <style type="text/css">
        body {
          height: 100%;
          background-image: url("https://thegyaan.com/img/cover.jpg");
          background-size: 100%;
        }
        nav ul li:hover {
          background-color: #3f51b5;
        }
        nav ul li a: hover{
          color: #000000;
        }
        nav ul li {
          display: inline-block;
        }
        nav ul li a {
          display: inline-block;
          color: #aaa;
          font-weight: 800;
          text-transform: uppercase;
        }
        .sli h3,h5{
          font-family: 'Oswald', sans-serif;
          font-weight: 900;
        }
        .waves-effect.waves-brown .waves-ripple {
          background-color: #3f51b5;
        }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <div class="row">
        <nav class="navbar-fixed transparent z-depth 1"> 
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"><img src="https://thegyaan.com/img/the_gyaan_logo.png" style="width:130px;"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down ">
            <li><a style="color:#ff6f00;" href="#home"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="#aboutus"><i class="material-icons left">people</i>About us</a></li>
            <li><a style="color:#ff6f00;" href="#contact"><i class="material-icons left">map</i>Contact us</a></li>
            <li><a style="color:#ff6f00;" href="register.php" class="modal-trigger"><i class="material-icons left">person_add</i>Login/Register</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
          <li><a style="color:#ff6f00;" href="#home"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="#aboutus"><i class="material-icons left">people</i>About us</a></li>
            <li><a style="color:#ff6f00;" href="#contact"><i class="material-icons left">map</i>Contact us</a></li>
            <li><a style="color:#ff6f00;" href="register.php"><i class="material-icons left">person_add</i>Login/Register</a></li>
      </ul>
        </div>
      </nav>
      </div>
      <div class="row slider sli" id="home" style="width: 60%;">
        <ul class="slides">
          <li>
            <img src="https://www.talentlms.com/blog/wp-content/uploads/2018/10/the-definitive-guide-elearning-simulations.jpg" height="100%" width="50%"> <!-- random image -->
            <div class="caption left-align">
              <h3 class="white-text">WELCOME TO GYAAN-LMS !</h3>
              <!-- <h5 class="light grey-text text-lighten-3">All You Need for Teaching and Learning in One Platform Gyaan-is a learning management system (LMS) that has all the tools your institution needs to create engaging content,design lessons,and assess student understanding.</h5> -->
            </div>
          </li>
          <li>
            <!-- <img src="https://www.learnupon.com/wp-content/uploads/eLearning-Tools720x300-1.png"> --> <!-- random image -->
            <img src="http://www.ccc-cambodia.org/backend/web/uploads/images/e-learning-bg.jpg" height="100%" width="50%">
            <div class="caption right-align">
              <h5 class="black-text">An LMS Students and Faculty Will Actually Use for Teaching and Learning in One Platform</h3>
            </div>
          </li>
          <li>
            <img src="https://www.labmanager.com/media/Print_Images/October2015/LS_TimeManagement_640x360.jpg"> <!-- random image -->
             <div class="caption left-align"><h5 class="black-text">The tools your institution needs<br>to createengaging content, <br>design lessons, <br>and assess student <br> understanding.</h5></div>
          </li>
          <li>
            <div class="row">
                <iframe width=100% height=500 src="https://www.youtube.com/embed/viHILXVY_eU" frameborder="0" allowfullscreen></iframe> 
            </div>
          </li>
        </ul>
      </div>
      <div class="row amber darken-4" style="font-family: 'Russo One', sans-serif;" id="aboutus">
        <div class="col s8 offset-s2">
           <br><br><h4 class="dark white-text center-align" style="font-family: 'Russo One', sans-serif;">It All Started in the Classroom</h4>
          <p class="dark"><br><br><br><br>Three college students<i> - Hemant Upadhyay, Atique Siddhiqui, and Shubham Phansekar</i><br> saw firsthand how education technology fell short of its promise to improve the learning experience for students and instructors.</h5><br><br><br>They decided to change that by building an LMS aligned with the needs and learning style of education in the real world.</p><br><br><br>
        </div>
      </div>
      <div class="row" style="background-image: url('https://www.schoology.com/sites/default/files/styles/slice_desktop/public/about-page-image-template.jpg');height: 50em;"><br><br><br>
          <div class="row" style="border-radius: 50%; width:50%;padding:200px 0;background-color: white; opacity: 0.8;text-align: center;">
            <h4 class="center-align" style="font-family: 'Russo One', sans-serif;">Much has Changed but<br> Our Mission's the Same</h4>
            <p class="center-align"><strong>Fast forward to today.</strong>
              Schoology is now in every corner of the world.<br>
              We’ve grown and so has our community, but our mission is just the same.<br> 
              We’ll continue to advance what's possible in education.</p>
          </div>
      </div>
      <div class="white row" style="height: 65em;">
        <h3 class="center-align indigo-text text-darken-4" style="font-family: 'Russo One', sans-serif;"><br><br>Our values</h3>
        
        <div class="section">
          <div class="container">
             <div class="col s7 push-s5">
              <h5><br><br>Passion is the Most Powerful Engine</h5>
              <p><strong>Our shared passion</strong> for helping instructors and students have the best education experience possible keeps us focused and drives us to work hard every day.</p>
            </div>
            <div class="col s5 pull-s7">                 
              <br><br><img src="https://www.schoology.com/sites/all/themes/schoology/assets/images/circle-values-passion.png" width="200">
            </div>
          </div>
        </div>

        <div class="section">
          <div class="container">
             <div class="col s7 push-s5">
              <h5><br><br>We Learn Every Day</h5>
              <p><strong>We strive to stay curious,</strong>listen to those who know, learn something each day, and always be open to new ideas. How could we not?</p>
            </div>
            <div class="col s5 pull-s7">                 
              <br><br><img src="https://www.schoology.com/sites/all/themes/schoology/assets/images/circle-values-learn.png" width="200">
            </div>
          </div>
        </div>
        
        <div class="section">
          <div class="container">
             <div class="col s7 push-s5">
              <h5><br><br>Innovation is in Our Blood</h5>
              <p><strong>After all,</strong> collaboration is the core of what Schoology is about. We believe that the instructors, the students, the parents, the administrators, and the Schoology team are all in this together.
            <br><br><br><br></div>
            <div class="col s5 pull-s7">  
              <br><br>               
              <img src="https://www.schoology.com/sites/all/themes/schoology/assets/images/circle-values-innovation.png" width="200">
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="contact" style="background-image: url('https://www.schoology.com/sites/default/files/styles/hero_desktop/public/hero-contact.jpg'); width:100%; height: 20em;">
            <div class="caption">
              <h3 class="white-text center-align" style="font-family: 'Baloo Chettan', cursive;"><br><br>Questions? Get in touch<br><br></h3>
            </div>
      <div class="white" id="contact">
        <div class="white row valign-wrapper" style="height: 20em;">
          <div class="section">
            <div class="container">
              <div class="col s6 center-align"><img src="https://thegyaan.com/img/the_gyaan_logo.png" style="width:130px;"><br><p style="font-family: 'Baloo Chettan', cursive;">Bhavans Campus, Old D N Nagar, Munshi Nagar, Andheri West, Mumbai, Maharashtra 400058</p></div>

              <div class="col s6 push-s6">   
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.645933603018!2d72.8339267145253!3d19.123182655457875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9d90e067ba9%3A0x16268e5d6bca2e6a!2sBharatiya+Vidya+Bhavan&#39;s+Sardar+Patel+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1553451966793" frameborder="0" width="300" style="border:0" allowfullscreen></iframe>              
              </div>
            </div>
          </div>
        </div>
         <footer class="indigo darken-3 page-footer">
          <div class="container">
            <div class="row">
              <blockquote class="white-text lighten-4" style="border-left: 5px solid #ffff;">If a man neglects education, he walks lame to the end of his life. <br><i>-Plato</i></blockquote>
            </div>
          </div>
          <div class="divider"></div>
            <div class = "footer-copyright">
              <div class = "container">
                <div class="col s5 push-s7">
                  <a class="btn-floating waves-effect waves-light pulse green"><i class="material-icons circle green">phone</i></a>
                  &nbsp;&nbsp;<a class="btn-floating waves-effect waves-light pulse blue" href="http://www.twitter.com"><i class="fa fa-twitter circle blue"></i></a>
                  &nbsp;&nbsp;<a href="http://www/facebook.com" class="btn-floating waves-effect waves-light pulse blue darken-4"><i class="fa fa-facebook circle blue darken-4"></i></a>
                  &nbsp;&nbsp;<a href="http://www.linkedin.com" class="btn-floating waves-effect waves-light pulse light-blue darken-4"><i class="fa fa-linkedin circle light-blue darken-4"></i></a>
                  &nbsp;&nbsp;<a href="http://www.youtube.com" class="btn-floating waves-effect waves-light pulse red accent-4"><i class="fa fa-youtube-play circle red accent-4"></i></a>
                </div>
                <div class="col s7 pull-s5"><p>© 2019 Rights Reserved by Gyaan.</p></div>
              </div>
            </div>
        </footer>
          </div>
      </div>
        <!-- Modal Trigger -->
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large amber darken-4 modal-trigger" href="#modalfeedback" class="modal-trigger">
      <i class="large material-icons">mode_edit</i>
    </a></div>

  <!-- Modal Structure -->
  <div id="modalfeedback" class="modal modal-fixed-footer" style="font-family: 'Oswald', sans-serif;">
    <div class="modal-content">
    <h4 align="center" font-weight: 900; color:#000066">FEEDBACK/REPORT A PROBLEM</h4>
    You can send us your feedback through e-mail on the following e-mail id:<br />
    <div class="row">
    <a href="mailto:upadhyayhemant16@gmail.com" style="color:#000000">upadhyayhemant16@gmail.com</a><br /><br />
    </div>
    <p>Or you can directly submit your feedback by filling the enteries below:-</p>
    <form role="form"  method="post" action="feed.php?q=Home.php">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix black-text">account_circle</i>
                    <label>Name</label>
                    <input type="text" name="name">
                  </div>
                </div>
                  <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix black-text">mail_outline</i>
                    <label>Email</label>
                    <input type="email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix black-text">assignment</i>
                    <label>Subject</label>
                    <input type="text" name="subject" id="subject">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <i class="material-icons prefix">mode_edit</i>
                    <label>Write feedback here...</label>
                    <textarea rows="5" cols="8" name="feedback"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6 center-align">
                    <input type="submit" name="submit" value="Submit" class="btn red black-text" />
                  </div>
                </div>
    </form>
  </div></div>
              <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
         // $('.carousel.carousel-slider').carousel({
         //    fullWidth: true,
         //    indicators: true
         //  });
         $(document).ready(function(){
           $('.slider').slider({
              height:500,
           });
           $('.dropdown-content').dropdown();
           $('.button-collapse').sideNav(); 
          // $('.fixed-action-btn').openFAB();
          $('.modal').modal();
          $('.modal-trigger').leanModal();
            });
         
      </script>
    </body>
  </html>