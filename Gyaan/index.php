<?php  
  $con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
  session_start();
  if (!isset($_SESSION['username'])) {

  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  // if (isset($_POST['logout'])) {
  	
  // 	unset($_SESSION['username']);
  //   session_destroy();
  // 	header("location: Home.php");
  // }
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Oswald|Baloo+Chettan|Germania+One|Patua+One|Russo+One' rel='stylesheet'>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
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
        <!-- courses-start -->
        <?php if(@$_GET['q']==0){
         }?>
        <!-- courses-end -->
        <!--home start-->
        <?php if(@$_GET['q']==1) {
          $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
          echo'
          <div class="container white black-text">
          <span class="title1" style="margin-left:40%;font-size:30px;"><b>Contest Details</b></span><br /><br />
          <table class="table">
          <thead/>
          <tr style="text-transform:uppercase;">
            <td><b>Sr no.</b></td>
            <td><b>Subject</b></td>
            <td><b>Total questions</b></td>
            <td><b>Marks</b></td>
            <td><b>Time limit</b></td>
            <td></td>
          </tr>
          </thead>
          </div>';
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
        <tr class ="red" style="text-transform:uppercase;">
          <td>'.$c++.'</td>
          <td>'.$title.'</td>
          <td>'.$total.'</td>
          <td>'.$rightans*$total.'</td>
          <td>'.$time.'&nbsp;min</td>
          <td><b><a href="index.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn green black-text"><i class="material-icons left">start</i>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
        </tr>';
        }
        else
        {
        echo 
        '<tr class="green" style="text-transform:uppercase;">
          <td>'.$c++.'</td>
          <td>'.$title.'</td>
          <td>'.$total.'</td>
          <td>'.$rightans*$total.'</td>
          <td>'.$time.'</td>
          <td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="btn red black-text"><i class="material-icons left">repeat</i>&nbsp;Restart</a></b></td>
        </tr>';
        }
      }
      $c=0;
      echo '</table></div></div>';
      }?>
      <!--quiz start-->
    <?php
    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
      $eid=@$_GET['eid'];
      $sn=@$_GET['n'];
      $total=@$_GET['t'];
      $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
      echo '<div class="container  white black-text"">';
      while($row=mysqli_fetch_array($q) )
      {
      $qns=$row['qns'];
      $qid=$row['qid'];
      echo '<center><b class="amber-text text-darken-4" style="text-transform : uppercase;">Question &nbsp;<br><br>'.$sn.' ) &nbsp;'.$qns.'</b></center><br /><br />';
      }
      $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
      echo '<div class="container"><form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST" class="form-horizontal container">
      <br /> ';
      $c=0;
      while($row=mysqli_fetch_array($q) )
      { 
        
        $option=$row['option'];
        $optionid=$row['optionid'];
         echo'<p class="col s6 offset-s3">
          <label>
            <input name="ans" type="radio" value="'.$optionid.'" />
            <span>'.$option.'</span>
          </label>
        </p>';
      }
echo'<br><br><button type="submit" class="btn waves-effect waves-light indigo darken-4 black-text">Submit<i class="material-icons left">send</i></button><br><br><br>
      </form></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
  $eid=@$_GET['eid'];
  $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid'" )or die('Error157');
  echo  '<div class="container white">
  <center><h1 class="title balck-text">Result</h1><center><br />
  <table class="table table-striped" style="font-size:20px;font-weight:1000;">';
  $row=mysqli_fetch_array($q);
    $s=$row['score'];
    $w=$row['wrong'];
    $rightans=$row['rightans'];
    $qa=$row['level'];
    echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
          <tr style="color:#99cc32"><td>Right Answers</td><td>'.$rightans.'</td></tr> 
        <tr style="color:red"><td>Wrong Answers</td><td>'.$w.'</td></tr>
        <tr style="color:#66CCFF"><td>Score</td><td>'.$s.'</td></tr>';
    $q=mysqli_query($con,"SELECT * FROM rank WHERE  eid='$eid'")or die('Error157');
  while($row=mysqli_fetch_array($q) )
  {
  $s=$row['score'];
  echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
  }
  echo '</table></div>';
}
?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' ORDER BY date DESC " )or die('Error197');
echo  '<div class="container  white black-text"">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$rightans=$row['rightans'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$rightans.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
  if(@$_GET['q']== 3) 
  {
    $q=mysqli_query($con,"SELECT rank.* ,users.* FROM rank,users WHERE rank.email=users.email ORDER BY score DESC " )or die('Error223');
    echo  
    '<div class="container white black-text">
    <table class="table table-striped container">
    <thead>
    <tr style="color:red">
      <td><b>Rank</b></td>
      <td><b>Name</b></td>
      <td><b>Gender</b></td>
      <td><b>College</b></td>
      <td><b>Score</b></td>
    </tr>
    </thead>';
  $c=0;
  while($row=mysqli_fetch_array($q) )
  {
    $e=$row['email'];
    $s=$row['score'];
    $name=$row['firstname'];
    $gender=$row['gender'];
    $college=$row['college'];
  }
  $c++;
  echo 
  '<tbody >
  <tr style="text-transform:uppercase;">
    <td><b>'.$c.'</b></td>
    <td>'.$name.'</td>
    <td>'.$gender.'</td>
    <td>'.$college.'</td>
    <td style="color:red">'.$s.'</td><td>
    </tbody>';
    echo '</table></div></div>';}?>
              <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>