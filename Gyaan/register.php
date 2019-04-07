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
        .reg_btn:hover {
          background-color: #3f51b5;
        }
        .reg_btn{
          display: inline-block;
          color: #aaa;
          font-weight: 800;
          text-transform: uppercase;
        }
        .sli h3,h5{
          font-family: 'Oswald', sans-serif;
          font-weight: 900;
        }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <div class="row">
        <div class="col s6 offset-s3">
          <div class="card black darken-1 z-depth 6">
            <div class="card-content orange-text">
              <div class="row deep-orange-text center-align card-title" style="font-weight: 800;text-transform: uppercase;"><img src="https://thegyaan.com/img/the_gyaan_logo.png" style="width:100px;"><center>Sign in to Gyaan.</center></div>
              <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">account_circle</i>
                    <label>Firstname</label>
                    <input type="text" name="firstname">
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">account_circle</i>
                    <label>Lastname</label>
                    <input type="text" name="lastname">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">call</i>
                    <label>Mobile no.</label>
                    <input type="number" name="mobile">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <i class="material-icons prefix white-text">mail_outline</i>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">lock</i>
                    <label>Password</label>
                    <input type="password" name="password_1">
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">lock</i>
                    <label>Confirm password</label>
                    <input type="password" name="password_2">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">date_range</i>
                    <label>Date of birth</label>
                    <input type="date" class="datepicker indigo-text darken-4" name="dob">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix white-text">school</i>
                    <label>College name</label>
                    <input type="text" class="indigo-text darken-4" name="college">
                  </div>
                </div>
                <div class="row">
                    <i class="material-icons prefix white-text">people</i>
                    <input name="gender" type="radio" id="male" value="male">
                    <label class="deep-orange-text" for="male">Male</label>
                    <input name="gender" type="radio" id="female" value="female">
                    <label class="deep-orange-text" for="female">Female</label>
                </div>
                <div class="row">
                  <div class="col s6"><button type="submit" class="waves-effect waves-light light-blue darken-4 btn white-text text-darken-4" name="reg_user">Register</button></div>
                  <a href="login.php" class="waves-effect waves-light light-blue darken-4 btn white-text text-darken-4">Already a member?</button></a>
                </div>
              </form>
            </div>
          </div>
        <!-- </div> -->
      </div>

              <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
         // $('.carousel.carousel-slider').carousel({
         //    fullWidth: true,
         //    indicators: true
         //  });
         $(document).ready(function(){
           $('.button-collapse').sideNav(); 
           $('.datepicker').pickadate({
              selectMonths: true, 
              selectYears: 15,
              //format: 'yyyy/mmm/dd'
            });
            });
      </script>
</body>
</html>