<?php
  require_once('connection.php');
  session_start();

//$connection = mysqli_connect("127.0.0.1", "root", "", "astro");
if (isset($_POST['submit'])) {
      $errors=array();
      if(!isset($_POST['username'])||strlen(trim($_POST['username']))<1){
            $errors[]='usermname is invalid/missing';
      }//username
      if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
            $errors[]='password is invalid/missing';
      }//password
      if(empty($errors)){
            $username=mysqli_real_escape_string($connection,$_POST['username']);
            $password=mysqli_real_escape_string($connection,$_POST['password']);


            $query="SELECT * FROM register WHERE username='$username' AND password='$password' LIMIT 1";
            $result=mysqli_query($connection,$query);
            if($result){

                  if(mysqli_num_rows($result)==1){
                      $res=mysqli_fetch_array($result);

                        $_SESSION['message']="YOU ARE NOW LOGIN AS :";
                        $_SESSION['user']=$username;
                        $_SESSION['email']=$res['email'];
                        $_SESSION['id']=$res['id'];

                        header('location:front1.php');

                  }else{
                      $error='usermname and password are invalid/missing';
                  }
                 // else{
                     //   $errors[]='database query faild';
                  //
            }
      }
}
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<link href='https://fonts.googleapis.com/css?family=Montsrract:400,700%7CPT+Serif:400,700,400italic'>	
	<link href="https://fonts.googleapis.com/css?family=Montsrract|Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="bgimage">
            <div class="manu">
            <div class="leftmenu">
                  <h4>ASTROMANIA</h4>
                  <?php
                 // if(errors)
                  ?>
            </div>
            <div class="rightmenu">
                  <ul>
            <li id="addcolor"><a href="front1.php">Home</a></li>
            <li><a href="topics.html">Topics</a></li>
            <li><a href="exam.php">Exams</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="aboutus.html">About us|Contact</a></li>
                  </ul>
            </div><!--manu-->
            <div class="loginbox">
            <form method="post" action="login.php">
            	<h1>Login Here</h1>
                <span style="color:red"><?php if(isset($error)){echo $error; }?></span>
            	<p>User name</p>

            	<input type="text" name="username" placeholder="Enter Username">
            	<p>Password</p>
            	<input type="Password" name="password" placeholder="Enter Password">
            	<input type="Submit" name="submit" value="Login">
            	<a href="#">Lost your password?</a><br>
            	<a href="register.php">Don't have an account?</a><br>
            </form>
			</div><!--loginbox-->
	</div><!--bgimage-->
</body>
</html>