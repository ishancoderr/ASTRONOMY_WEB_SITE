<?php
 require_once('connection.php');

  ?> 
<?php 
if(isset($_POST['submit'])){
if(isset($_POST['submit'])&&strlen(($_POST['password']))>1&&strlen(($_POST['repassword']))>1&&strlen(($_POST['username']))>1) {
if(isset($_POST['submit'])&&($_POST['password'])==$_POST['repassword']){
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $repassword=$_POST['repassword'];
 
 $query ="INSERT INTO register (username,email,password,repassword) VALUES('$username','$email','$password','$repassword')";
 $result=mysqli_query($connection,$query);
 if($result){
	echo "<script type='text/javascript'>alert('USER ADD SUCCESSFULLY');
    window.location='front1.php';
    </script>";
}

}
else{
      echo '<script>alert("password and repassword not match refill the form")</script>'; 
	
}
}
else{
      echo '<script>alert("please correctly fill the form ")</script>'; 
	
}
}	 
?>
<script>  
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}



 
</script>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href='https://fonts.googleapis.com/css?family=Montsrract:400,700%7CPT+Serif:400,700,400italic'>	
	<link href="https://fonts.googleapis.com/css?family=Montsrract|Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="bgimage">
            <div class="manu">
            <div class="leftmenu">
                  <h4>ASTROMANIA</h4>
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
                  <form id="registerform" method="post" action="register.php" >
            	<h1>Create an account</h1>
            	<p>User name</p>
            	<input type="text" name="username" placeholder="Enter Username" >
                  <p>E-mail</p>
                  <input type="email" name="email"   placeholder="Enter your valid email"onsubmit="return validateemail();">
            	<p>Password</p>
            	<input type="Password" name="password" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                  <p>Confirm Password</p>
                  <input type="Password" name="repassword" placeholder="Confirm your Password"   >
            	<input type="Submit" name="submit" value="Register">
                  </form>
			</div><!--loginbox-->
	</div><!--bgimage-->
</body>
</html>
            


<?php mysqli_close($connection);   ?>