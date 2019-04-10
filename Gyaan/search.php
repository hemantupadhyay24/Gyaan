<?php
session_start();
$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
    define("MAX_RESULTS", 15);
    
     if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];
               
        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter the keyword."
                );
        } 
    }
         
?>
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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Oswald|Baloo+Chettan|Germania+One|Patua+One|Russo+One' rel='stylesheet'>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
      <!-- Compiled and minified CSS -->
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
           /* .input-field {
                width: 100%;
                border-radius: 2px;
                padding: 10px;
                border: #e0dfdf 1px solid;
            }*/
            .videos-data-container {
                background: #F0F0F0;
                border: #e0dfdf 1px solid;
                padding: 20px;
                border-radius: 2px;
            }
            
            .response {
                padding: 10px;
                margin-top: 10px;
                border-radius: 2px;
            }

            .error {
                 background: #fdcdcd;
                 border: #ecc0c1 1px solid;
            }

           .success {
                background: #c5f3c3;
                border: #bbe6ba 1px solid;
            }
            .result-heading {
                margin: 20px 0px;
                padding: 20px 10px 5px 0px;
                border-bottom: #e0dfdf 1px solid;
            }
            iframe {
                border: 0px;
            }
            .video-tile {
                display: inline-block;
                margin: 10px 10px 20px 10px;
            }
            
            .videoDiv {
                width: 250px;
                height: 150px;
                display: inline-block;
            }
            .videoTitle {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
            
            .videoDesc {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
            .videoInfo {
                width: 250px;
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
            <li><a style="color:#ff6f00;">Hello, <?php echo $_SESSION['username'];?></a></li>
            <li><a style="color:#ff6f00;" href="Home.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="search.php"><i class="material-icons left">people</i>Courses</a></li>
            <li><a style="color:#ff6f00;" href="index.php?q=1"><i class="material-icons left">map</i>Contest</a></li>
            <li><a style="color:#ff6f00;" href="index.php?q=3"><i class="material-icons left">history</i>Ranking</a></li>
             <li><a style="color:#ff6f00;" href="logout.php"><i class="material-icons left">power_settings_new</i>Logout</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a style="color:#ff6f00;">Hello, <?php echo $_SESSION['username'];?></a></li>
           <li><a style="color:#ff6f00;" href="Home.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="index.php?q=0"><i class="material-icons left">people</i>Courses</a></li>
            <li><a style="color:#ff6f00;" href="index.php?q=1"><i class="material-icons left">map</i>Contest</a></li>
            <li><a style="color:#ff6f00;" href="index.php?q=3"><i class="material-icons left">map</i>Ranking</a></li>
             <li><a style="color:#ff6f00;" href="logout.php"><i class="material-icons left">power_settings_new</i>Logout</a></li>
      </ul>
        </div>
        </nav>
      </div>
      <div class="row">
        <div class="col s4 offset-s1">
          <div class="card">
            <div class="card-image">
              <img src="https://www.geeksforgeeks.org/wp-content/uploads/thumb-min.png">
            </div>
            <div class="card-content">
              <p>This course is especially designed for the Java apprentices who want to hone their skills in Java for Coding Interviews and Competitive Programming. </p>
            </div>
            <div class="card-action">
              <a href="coursequiz.php?cid=1">REGISTER</a>
            </div>
          </div>
        </div>

         <div class="col s4 offset-s1">
          <div class="card">
            <div class="card-image">
              <img src="https://www.geeksforgeeks.org/wp-content/uploads/thumb1-min.png">
            </div>
            <div class="card-content">
              <p>This course is especially designed for the CPP apprentices who want to hone their skills in CPP for Coding Interviews and Competitive Programming. </p>
            </div>
            <div class="card-action">
              <a href="coursequiz.php?cid=2">REGISTER<span class="new badge red" data-badge-caption="TRIAL">FREE</span></a>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col s4 offset-s1">
          <div class="card">
            <div class="card-image">
              <img src="https://cdnpractice.geeksforgeeks.org/images/courses/DSA_Online_Thumbnail.png">
            </div>
            <div class="card-content">
              <p>An online course specializing in Data Structures & Algorithms with a mix of theory and practice. You will learn algorithmic techniques for solving various computational problems.</p>
            </div>
            <div class="card-action">
              <a href="coursequiz.php?cid=3">REGISTER</a>
            </div>
          </div>
        </div>
         <div class="col s4 offset-s1">
          <div class="card">
            <div class="card-image">
              <img src="https://www.geeksforgeeks.org/wp-content/uploads/Sudo-Gate-Outer-min.png">
            </div>
            <div class="card-content">
              <p>An extensive Online Test Series for GATE-19 to boost the preparation for GATE-19 aspirants designed considering the pattern of previous years GATE papers & ensures to resemble with the standard of GATE.</p>
            </div>
            <div class="card-action">
              <a href="coursequiz.php?cid=4">REGISTER<span class="new badge red" data-badge-caption="TRIAL">FREE</span></a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <nav class="container transparent">
            <div class="nav-wrapper container">
                <form id="keywordForm" method="post" action="">
                    <div class="input-field amber darken-4">
                      <input id="keyword" name="keyword" type="search" placeholder="Enter the keywords to search videos.."required>
                      <label class="label-icon" for="keyword"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                    <button class="btn red black-text " type="submit" name="submit"><strong>Submit</strong>
                    </button>
                </form>
            </div>    
        </nav>
        </div>   
        <?php if(!empty($response)) { ?>
                <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
        <?php }?>
        <?php
            if (isset($_POST['submit']) )
            {
                                         
              if (!empty($keyword))
              {
                $apikey = 'AIzaSyBxea8cxaQJ6oqO30wCMLRRcPADwFQXnkk'; 
                $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . MAX_RESULTS . '&key=' . $apikey;

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);

                curl_close($ch);
                $data = json_decode($response);
                $value = json_decode(json_encode($data), true);
            ?>

            <div class="result-heading white-text" >About <?php echo MAX_RESULTS; ?> Results</div>
            <div class="videos-data-container transparent" id="SearchResultsDiv">

            <?php
                for ($i = 0; $i < MAX_RESULTS; $i++) {
                    $vid = $value['items'][$i]['id']['videoId'];
                    $title = $value['items'][$i]['snippet']['title'];
                    $description = $value['items'][$i]['snippet']['description'];
                    ?> 
    
                        <div class="video-tile">
                        <div  class="videoDiv">
                            <iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $vid; ?>" 
                                    data-autoplay-src="//www.youtube.com/embed/<?php echo '$vid'; ?>?autoplay=1"></iframe>                     
                        </div>
                        <div class="videoInfo">
                        <div class="videoTitle"><b><?php echo $title; ?></b></div>
                        <div class="videoDesc"><?php echo $description; ?></div>
                        </div>
                        </div>
           <?php 
                    }
                } 
           
            }
            ?> 
            
        </div>
        <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>