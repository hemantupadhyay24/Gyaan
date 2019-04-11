<?php 
session_start();

$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
 ?>
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
      <script type="text/javascript" src="https://cdnjs.com/libraries/Chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/Chart.min.js"></script>
      <script src="path/to/chartjs/dist/Chart.js"></script>
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
        #chart-container {
        width: 100%;
        height: auto;
        background-color: red;
      }
      </style>
      <script>
         $(document).ready(function(){
          $('.modal').modal();
          $('select').material_select();
          //showGraph();
        });
      </script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div id="modalquiz" class="modal row">
              <div class="modal-content container">
                <a class=".waves-effect.waves-brown .waves-ripple btn black white-text" style="color:#ff6f00;" href="admin.php?q=4">Add Quiz</a>
                <a class=".waves-effect.waves-brown .waves-ripple btn black white-text" style="color:#ff6f00;" href="admin.php?q=5">Remove Quiz</a>
              </div>
          </div>
      <div class="row">
        <nav class="navbar-fixed transparent z-depth 1"> 
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo" style=""><img src="https://thegyaan.com/img/the_gyaan_logo.png" style="width:130px;"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down ">
            <li><a style="color:#ff6f00;">Hello, <?php echo $_SESSION['username'];?></a></li>
            <li><a style="color:#ff6f00;" href="Home.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=1"><i class="material-icons left">people</i>Users</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=2"><i class="material-icons left">move_to_inbox</i>Ranking</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=3"><i class="material-icons left">computer</i>Feedback</a></li>
            <li><a style="color:#ff6f00;" href="#modalquiz" class="modal-trigger"><i class="material-icons left">collections_bookmark</i>Quiz<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a style="color:#ff6f00;" href="logout.php"><i class="material-icons left">power_settings_new</i>Logout</a></li>
          </ul>
          
          <ul class="side-nav" id="mobile-demo">
          <li><a style="color:#ff6f00;">Hello, <?php echo $_SESSION['username'];?></a></li>
            <li><a style="color:#ff6f00;" href="Home.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=1"><i class="material-icons left">people</i>Users</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=2"><i class="material-icons left">move_to_inbox</i>Ranking</a></li>
            <li><a style="color:#ff6f00;" href="admin.php?q=3"><i class="material-icons left">computer</i>Feedback</a></li>
            <li><a style="color:#ff6f00;" href="#modalquiz"><i class="material-icons left">collections_bookmark</i>Quiz<i class="material-icons right" class="modal-trigger">arrow_drop_down</i></a></li>
            <li><a style="color:#ff6f00;" href="logout.php" class="modal-trigger"><i class="material-icons left">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </nav>
      </div>
        
      <!-- user started -->
        <?php if(@$_GET['q']==1) {
        $result = mysqli_query($con,"SELECT * FROM users") or die('Error');
        echo  '
        <div class="container">
        <h5 class="red-text darken-3" style="font-family: monospace;
        };">List of active users :</h5><br></div>
        <div class="white container amber-text text-darken-4">
            <table class="table-striped">
            <thead class="indigo-text" style="font-weight: 500;text-transform: uppercase;color:">
            <tr>
                <th>Sr no.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>College</th>
                <th>Email</th>
                <th>Mobile</th>
                <th></th>
            </tr>
            </thead>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
          $name = $row['firstname'];
          $mob = $row['mobile'];
          $gender = $row['gender'];
            $email = $row['email'];
          $college = $row['college'];
          echo '
            <tbody>
            <tr>
              <td>'.$c++.'</td>
              <td>'.$name.'</td>
              <td>'.$gender.'</td>
              <td>'.$college.'</td>
              <td>'.$email.'</td>
              <td>'.$mob.'</td>
              <td><a title="Delete User" href="update.php?demail='.$email.'"><i class="material-icons left">history</i></a></td></tr></tbody>';
        }
          $c=0;
          echo '</table></div>';
        }?>
    <!--user end-->
    <!-- ranking start -->
<?php 
  if(@$_GET['q']== 2) 
  {
  $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
  echo  '<div class="white container black-text text-darken-4">
        <table>
        <thead style="font-weight: 500;text-transform: uppercase;color:red;">
          <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Gender</th>
            <th>College</th>
            <th>Score</th>
          </tr>
        </thead>';
  $c=1;
  while($row=mysqli_fetch_array($q) )
  {
    $score=$row['score'];
    $email=$row['email'];
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' " )or die('Error231');
    while($row=mysqli_fetch_array($query) ){
      $name=$row['firstname'];
      $gender=$row['gender'];
      $college=$row['college'];
      echo '
        <tbody>
          <tr>
            <td style="color:green;">'.$c++.'</td>
            <td>'.$name.'</td>
            <td>'.$gender.'</td>
            <td>'.$college.'</td>
            <td>'.$score.'</td>
          </tr>
        </tbody>';
    }
  }
  echo '</table></div>';}
?>
    <!-- ranking-ended -->
    <!--feedback start-->
    <?php if(@$_GET['q']==3) {
      $p = mysqli_query($con,"CREATE OR REPLACE VIEW feedview AS SELECT * FROM feedback ORDER BY `feedback`.`date` DESC;") or die('Error');
      $result=mysqli_query($con,"SELECT * FROM feedview;");
    echo  '<div class="white container black-text text-darken-4">
            <table>
            <thead>
              <tr>
                <td>Sr no.</td>
                <td>Subject</td>
                <td>Email</td>
                <td>Date</td>
                <td>Time</td>
                <td>Submitted by</td>
                <td>Feedback</td>
                <td></td>
              </tr>
            </thead>';
    $c=1;
    while($row = mysqli_fetch_array($result)) {
      $date = $row['date'];
      $date= date("d-m-Y",strtotime($date));
      $time = $row['time'];
      $subject = $row['subject'];
      $name = $row['name'];
      $email = $row['email'];
      $id = $row['id'];
      $feedback = $row['feedback'];
      echo '
       <tbody>
          <tr>
            <td style="color:green;">'.$c++.'</td>
            <td>'.$subject.'</td>
            <td>'.$email.'</td>
            <td>'.$date.'</td>
            <td>'.$time.'</td>
            <td>'.$name.'</td>
            <td>'.$feedback.'</td>
            <td><a title="Delete User" href="update.php?fdid='.$id.'"><i class="material-icons left">history</i></a></td></tr></tbody>';
    }
    echo '</table></div></div>';
    }
?>
<!--feedback closed-->
<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
  <span class="red-text" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
<div class="container col-md-6 black-text">
  <div class=" container col-md-6 white black-text">   
  <form name="form" action="update.php?q=addquiz"  method="POST">
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="name" name="name" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="name">Enter Quiz title</label>
  </div>
</div>
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="total" name="total" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="total">Enter total number of questions</label>
  </div>
</div>
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="right" name="right" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="right">Enter marks on right answer</label>
  </div>
</div>
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="wrong" name="wrong" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="wrong">Enter minus marks on wrong answer without sign</label>
  </div>
</div>
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="time" name="time" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="time">Enter time limit for test in minute</label>
  </div>
</div>
<!-- Text input-->
<div class="row">
  <div class="input field col s6 offset-s3">
    <input id="desc" name="desc" class="form-control input-md" type="text">
    <label class="col-md-12 control-label" for="wrong">Description</label>
  </div>
</div>
<div class="row">
  <div class="input field col s6 offset-s3">
    <input  type="submit" style="margin-left:45%" class="btn black white-text" value="Submit" />
  </div>
</div>
</div>
</form></div></div>';
}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
  echo ' 
  <div class="container white black-text">
  <span class="title1" style="margin-left:30%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
  <div class="container white black-text">
  <form name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">';
  for($i=1;$i<=@$_GET['n'];$i++)
  {
    echo "<br>";
    echo nl2br("\n\tQuestion number ").$i."\n";
    echo'<!-- Text input-->
    <div class="row">
      <div class="input field col s6 offset-s1">
         <textarea rows="3" cols="5" name="qns'.$i.'"></textarea> 
        <label class="col-md-12 control-label" for="qns'.$i.' ">Write question number '.$i.' here..."</label>
      </div>
    </div>

    <!-- Text input-->
    <div class="row">
      <div class="input field col s6 offset-s1">
        <input id="'.$i.'1" name="'.$i.'1" type="text">
        <label class="col-md-12 control-label" for="'.$i.'1">Enter option a</label>
      </div>
    </div>
    <!-- Text input-->
    <div class="row">
      <div class="input field col s6 offset-s1">
        <input id="'.$i.'2" name="'.$i.'2" type="text">
        <label class="col-md-12 control-label" for="'.$i.'2">Enter option b</label>
      </div>
    </div>
    <!-- Text input-->
    <div class="row">
      <div class="input field col s6 offset-s1">
        <input id="'.$i.'3" name="'.$i.'3" type="text">
        <label class="col-md-12 control-label" for="'.$i.'3">Enter option c</label>
      </div>
    </div>
    
    <br />
    <div class="input field col s6 offset-s1"><b>Correct answer</b>:<br />
    <select id="ans'.$i.'" name="ans'.$i.'">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
      <label>Choose correct answer </label> 
    </select></div><br /><br />'; 
     }
        
    echo '<div class="form-group">
      <label class="col-md-12 control-label" for=""></label>
      <div class="col-md-12"> 
        <input  type="submit" style="margin-left:45%" class="btn black" value="Submit"/>
      </div>
    </div>
    </form></div>';
}
?><!--add quiz step 2 end-->
<!--remove quiz-->
<?php if(@$_GET['q']==5) {

  $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
  echo  '<div class="container white black-text">
        <table>
        <thead class="red">
        <tr>
          <td>Sr no.</td>
          <td>Topic</td>
          <td>Total question</td>
          <td>Marks</td>
          <td>Time limit</td>
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
  echo '
    <tbody>
    <tr>
      <td>'.$c++.'</td>
      <td>'.$title.'</td>
      <td>'.$total.'</td>
      <td>'.$rightans*$total.'</td>
      <td>'.$time.'&nbsp;min</td>
      <td><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red">&nbsp;<i class="material-icons left">history</i>DELETE</a>
      </td>
    </tr>
  </tbody>';
}
$c=0;
echo '</table></div></div>';

}
?>
    </body>
</html>