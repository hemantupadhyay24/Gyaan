<?php 
  $con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
session_start(); ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Oswald|Baloo+Chettan|Germania+One|Patua+One|Russo+One' rel='stylesheet'>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500" rel="stylesheet">
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
          font-family:'Roboto Mono', monospace;
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

      <?php
        $name=$_SESSION['username'];
            if(@$_GET['cid']==1){
                echo'
        <div class= style="background-image:url("https://www.geeksforgeeks.org/wp-content/uploads/webbannerAVA-min.png");"
        <div class="row">
        <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Overview</div>
            <div class="card-content">
              <p>This course is especially designed for the Java apprentices who want to hone their skills in Java for Coding Interviews and Competitive Programming. </p>
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
        </div>';
                $coursename='JAVA';
                $errors="";
                $cour=mysqli_query($con,"SELECT `course` FROM `courses` where `sub_name`=$name;");
                $user = mysqli_fetch_assoc($cour);
                 if ($user) { // if user exists
                    if ($user['course'] == $coursename) {
                      array_push($errors, "Already registered.");
                    }
                  }
                  if($errors==0){
                    $sql=mysqli_query($con,"INSERT INTO `courses`(`sub_name`, `course`, `timestamp`)VALUES('$name','$coursename',NOW());");
                     }
                     $result = mysqli_query($con,"SELECT * FROM quiz WHERE `title`='$coursename'") or die('Error');
                    echo 
                    '<div class="container white black-text">
                    <table class="table">
                      <thead>
                      <tr style="text-transform:uppercase;">
                        <td><b>Sr no.</b></td>
                        <td><b>Subject</b></td>
                        <td><b>Total questions</b></td>
                        <td><b>Marks</b></td>
                        <td><b>Time limit</b></td>
                        <td></td>
                      </tr>
                      </thead>';
                      $c=1;
                    while($row = mysqli_fetch_array($result)) {
                    $title = $row['title'];
                    $total = $row['total'];
                    $rightans = $row['rightans'];
                    $time = $row['time'];
                    $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);  
                    if($rowcount == 0){
                    echo '
                    <tr style="text-transform:uppercase;">
                      <td>'.$c++.'</td>
                      <td>'.$title.'</td>
                      <td>'.$total.'</td>
                      <td>'.$rightans*$total.'</td>
                      <td>'.$time.'&nbsp;min</td>
                      <td><b><a href="index.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn green black-text"><i class="material-icons left">start</i>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
                    </tr>';
                  }
                }echo'</table></div></div>';
              } 
            if(@$_GET['cid']==2){
                echo '
        <div class="row">
          <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Overview</div>
            <div class="card-content">
              <p>This course is especially designed for the CPP apprentices who want to hone their skills in CPP for Coding Interviews and Competitive Programming. No matter if you are a school student or college student, if you have the zeal of programming, this is the right time to start. </p>
            </div>
          </div>
        </div>
        <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Feature</div>
            <div class="card-content">
              <br>-Periodic Contests
              <br>-Comprehensive Learning Resources
              <br>-Free of Cost
              <br>-Certification and goodies to top 10 contestants on contests leaderboard.              
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col s9 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Content</div>
            <div class="card-content">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Basics of CPP</div>
                  <div class="collapsible-body"><span>
                      <br>-Syntax
                      <br>-Variables & constants
                      <br>-Comments
                      <br>-Data types
                      <br>-I/O
                      <br>-Operators: logical and Mathematical and Boolean
                      <br>-Storage classes
                      <br>-Typedef & MACROS
                  </span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Strings & Arrays</div>
                  <div class="collapsible-body"><span>
                  1.Arrays<br>-1-D array: Creation, Updation, Deletion<br>-2-D array: Creation, Updation, Deletion
                  <br>2.Bitwise and Logical Operators<br>-AND, OR, XOR<br>-Subsets<br>-Duplicate xor problems
                  <br>3.Strings<br>-Java String Manipulations(StringBuffer, StringBuilder)<br>-String methods</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>STL</div>
                  <div class="collapsible-body"><span>Set
                   <br>- Map
                    <br>-Multiset
                    <br>-Multimap</span></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>';
                $coursename='CPP';
                $errors="";
                $cour=mysqli_query($con,"SELECT `course` FROM `courses` where `sub_name`=$name;");
                $user = mysqli_fetch_assoc($cour);
                 if ($user) { // if user exists
                    if ($user['course'] == $coursename) {
                      array_push($errors, "Already registered.");
                    }
                  }
                  if($errors==0){
                    $sql=mysqli_query($con,"INSERT INTO `courses`(`sub_name`, `course`, `timestamp`)VALUES('$name','$coursename',NOW());");
                     }
                     $result = mysqli_query($con,"SELECT * FROM quiz WHERE `title`='$coursename'") or die('Error');
                    echo 
                    '<div class="container white black-text">
                    <table class="table">
                      <thead>
                      <tr style="text-transform:uppercase;">
                        <td><b>Sr no.</b></td>
                        <td><b>Subject</b></td>
                        <td><b>Total questions</b></td>
                        <td><b>Marks</b></td>
                        <td><b>Time limit</b></td>
                        <td></td>
                      </tr>
                      </thead>';
                      $c=1;
                    while($row = mysqli_fetch_array($result)) {
                    $title = $row['title'];
                    $total = $row['total'];
                    $rightans = $row['rightans'];
                    $time = $row['time'];
                    $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);  
                    if($rowcount == 0){
                    echo '
                    <tr style="text-transform:uppercase;">
                      <td>'.$c++.'</td>
                      <td>'.$title.'</td>
                      <td>'.$total.'</td>
                      <td>'.$rightans*$total.'</td>
                      <td>'.$time.'&nbsp;min</td>
                      <td><b><a href="index.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn green black-text"><i class="material-icons left">start</i>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
                    </tr>';
                  }
                }echo'</table></div>';
                echo'<div>
                </div>';
              } 
            if (@$_GET['cid']==3){
                echo '
        <div class="row">
          <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Overview</div>
            <div class="card-content">
              <p>An online course specializing in Data Structures & Algorithms with a mix of theory and practice. You will learn algorithmic techniques for solving various computational problems and will implement more than 100 algorithmic coding problems in a programming language of your choice. This course offers you a wealth of programming challenges that you may face at your next job interview. The course focuses mainly on Data Structure & Algorithms: the key to selection in top product based companies. <br><br>Recommended for:
                <br>-Pre-Final/Final year students preparing for the Placement drives
                <br>-Employees looking for a job change </p>
            </div>
          </div>
        </div>
        <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Feature</div>
            <div class="card-content">
              <br>-Dedicated doubt solving team to assist you
              <br>-Weekly Assessment Tests & Practice Tracks
              <br>-Certificate upon Course completion
              <br>-Internship Opportunities at GeeksforGeeks              
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col s9 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Content</div>
            <div class="card-content">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Basics of Java</div>
                  <div class="collapsible-body"><span>
                    <br>-1.Mathematics
                    <br><br>2.Basic Recursion
                    <br>3.Arrays: <br>-Searching <br>-Sorting <br>-Deleting <br>-Shift Rotation<br>-Prefix Sum...<br>
                    2.Syntax: Hello World<br>
                    </span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Strings & Arrays</div>
                  <div class="collapsible-body"><span>
                  1.Arrays<br>-1-D array: Creation, Updation, Deletion<br>-2-D array: Creation, Updation, Deletion
                  <br>2.Bitwise and Logical Operators<br>-AND, OR, XOR<br>-Subsets<br>-Duplicate xor problems
                  <br>3.Strings<br>-Java String Manipulations(StringBuffer, StringBuilder)<br>-String methods</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Assignments</div>
                  <div class="collapsible-body"><span>Misc Topics<br>-Dictionary Class<br>-Calendar Class</span></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>';
                $coursename='DSA';
                $errors="";
                $cour=mysqli_query($con,"SELECT `course` FROM `courses` where `sub_name`=$name;");
                $user = mysqli_fetch_assoc($cour);
                echo 
                    '<div class="container white black-text">
                    <table class="table">
                      <thead>
                      <tr style="text-transform:uppercase;">
                        <td><b>Sr no.</b></td>
                        <td><b>Subject</b></td>
                        <td><b>Total questions</b></td>
                        <td><b>Marks</b></td>
                        <td><b>Time limit</b></td>
                        <td></td>
                      </tr>
                      </thead>';
                 if ($user) { // if user exists
                    if ($user['course'] == $coursename) {
                      array_push($errors, "Already registered.");
                    }
                  }
                  if($errors==0){
                    $sql=mysqli_query($con,"INSERT INTO `courses`(`sub_name`, `course`, `timestamp`)VALUES('$name','$coursename',NOW());");
                     }
                     $result = mysqli_query($con,"SELECT * FROM quiz WHERE `title`='$coursename'") or die('Error');
                    
                      $c=1;
                    while($row = mysqli_fetch_array($result)) {
                    $title = $row['title'];
                    $total = $row['total'];
                    $rightans = $row['rightans'];
                    $time = $row['time'];
                    $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);  
                    if($rowcount == 0){
                    echo '
                    <tr style="text-transform:uppercase;">
                      <td>'.$c++.'</td>
                      <td>'.$title.'</td>
                      <td>'.$total.'</td>
                      <td>'.$rightans*$total.'</td>
                      <td>'.$time.'&nbsp;min</td>
                      <td><b><a href="index.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn green black-text"><i class="material-icons left">start</i>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
                    </tr>';
                  }
                }echo'</table></div>';
              } 
            if(@$_GET['cid']==4){
              echo '
        <div class="row">
          <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Overview</div>
            <div class="card-content">
              <p>This course is especially designed for the Java apprentices who want to hone their skills in Java for Coding Interviews and Competitive Programming. </p>
            </div>
          </div>
        </div>
        <div class="col s4 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Overview</div>
            <div class="card-content">
              <p>This course is especially designed for the Java apprentices who want to hone their skills in Java for Coding Interviews and Competitive Programming. </p>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col s9 offset-s1 white black-text">
          <div class="card">
            <div class="card-title">Course Content</div>
            <div class="card-content">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Basics of Java</div>
                  <div class="collapsible-body"><span>
                    1.Background (JVM, JDK and JRE)<br>
                    2.Syntax: Hello World<br>
                    3.Variables and Final variables<br>
                    4.Comments<br>
                      5.Input/ Output<br>
                      6.Operators: logical, mathematical, boolean and new operator<br>
                      7.Wrapper Classes<br>
                      8.Java packages<br>
                      9.Control Structure<br>
                      10.If,If else,Nested if-else<br>
                      11.Switch case<br>
                      12.Loops<br>
                      13.For<br>
                      14.For-each<br>
                      15.While<br>
                      16.Do while<br>
                      17.ontinue, Break and Jump<br>
                      18.Type conversion</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Strings & Arrays</div>
                  <div class="collapsible-body"><span>
                  1.Arrays<br>-1-D array: Creation, Updation, Deletion<br>-2-D array: Creation, Updation, Deletion
                  <br>2.Bitwise and Logical Operators<br>-AND, OR, XOR<br>-Subsets<br>-Duplicate xor problems
                  <br>3.Strings<br>-Java String Manipulations(StringBuffer, StringBuilder)<br>-String methods</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">add</i>Assignments</div>
                  <div class="collapsible-body"><span>Misc Topics<br>-Dictionary Class<br>-Calendar Class</span></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>';
                $coursename='Linux :vi Editor';
                $errors="";
                $cour=mysqli_query($con,"SELECT `course` FROM `courses` where `sub_name`=$name;");
                $user = mysqli_fetch_assoc($cour);
                echo 
                    '<div class="container white black-text">
                    <table class="table">
                      <thead>
                      <tr style="text-transform:uppercase;">
                        <td><b>Sr no.</b></td>
                        <td><b>Subject</b></td>
                        <td><b>Total questions</b></td>
                        <td><b>Marks</b></td>
                        <td><b>Time limit</b></td>
                        <td></td>
                      </tr>
                      </thead>';
                 if ($user) { // if user exists
                    if ($user['course'] == $coursename) {
                      array_push($errors, "Already registered.");
                    }
                  }
                  if($errors==0){
                    $sql=mysqli_query($con,"INSERT INTO `courses`(`sub_name`, `course`, `timestamp`)VALUES('$name','$coursename',NOW());");
                     }
                     $result = mysqli_query($con,"SELECT * FROM quiz WHERE `title`='$coursename'") or die('Error');
                    
                      $c=1;
                    while($row = mysqli_fetch_array($result)) {
                    $title = $row['title'];
                    $total = $row['total'];
                    $rightans = $row['rightans'];
                    $time = $row['time'];
                    $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);  
                    if($rowcount == 0){
                    echo '
                    <tr style="text-transform:uppercase;">
                      <td>'.$c++.'</td>
                      <td>'.$title.'</td>
                      <td>'.$total.'</td>
                      <td>'.$rightans*$total.'</td>
                      <td>'.$time.'&nbsp;min</td>
                      <td><b><a href="index.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn green black-text"><i class="material-icons left">start</i>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
                    </tr>';
                  }
                }echo'</table></div>';
              } 
                     // $sql=mysqli_query($con,"CREATE OR REPLACE TRIGGER `course_gate` AFTER INSERT ON `courses` BEGIN UPDATE `users` SET `courses`=(`sub_name`, `courses`, `timestamp`)VALUES('$name','SUDOGATE',NOW());END;");
                

        ?>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.collapsible').collapsible();
        });
      </script>
    </body>
    </html>