<!-- <?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?> -->
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br>
<br>
<br>
<br>
<br>
<br>
    <br>
  <!-- welcome page -->

  <style>
body {
  background-image: url('img/w.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<br>
<br>
<br>
<br>

<!-- </head> -->
<!-- <body> -->
  
  <div class="rectangle1">
  <br>
<br>  
  
  <div class="rectangle2"><center>
  <br>
<br> 
<h6>WELCOME TO ONLINE ATTENDANCE MANAGEMENT SYSTEM</h6>
  <!-- <input type="button" value="SIGNUP NOW" > -->

  <a href="index.php"><input type="button" value="SIGNUP NOW" ></a>

  <!-- <a class="" href="login.php">Login</a> -->
<!-- <input type="reset" value="Reset">
<input type="submit" value="Submit"> -->
  <!-- <h1><tr><td><input type=button name=b1 value="SIGNUP NOW" onClick=box(this.form)></h1></td></tr></center>
   </div> -->
</div>
</div>




<!-- <?php include 'reg.php';?> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- FOOTER -->

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>

      <footer style="background:; height:120%;">
        <p class="pull-right"><a href="#"></a></p>
        <p>&copy;      project, Inc. &middot;  developed by  <a href="https://groupe">Group E </a><a href="http://GROUPE.in">Privacy</a> &middot; <a href="http://projectworlds.in">Terms</a></p>
      </footer>

</div><!-- /.container -->

 </body>
</html>
