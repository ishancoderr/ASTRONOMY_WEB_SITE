<style>
    .leftmenu span {

        font-weight: bold;
        color: white;
        font-size: 14px;
        font-family: 'Montserrat',sans-serif;
    }

</style>
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="front1style.css">
 	<link href='https://fonts.googleapis.com/css?family=Montsrract:400,700%7CPT+Serif:400,700,400italic'>
	<link href="https://fonts.googleapis.com/css?family=Montsrract|Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="bgimage">
		<div class="manu" style="text-align: right;">

		<div class="leftmenu">
            <h4>ASTROMANIA</h4>
            <span style="color:white"><?php if(isset($_SESSION['message'])){ echo $_SESSION['message'];} ?></span>
            <span style="color:white;text-transform: uppercase"><?php if(isset($_SESSION['user'])){ echo $_SESSION['user'];} ?></span>
            <span class="float:right" style="color:white">&nbsp;&nbsp;User ID:<?php if(isset($_SESSION['id'])){echo   $_SESSION['id']  ;} ?></span>
		</div>
		<div class="rightmenu">

			<ul>

				<li id="addcolor">Home</li>
				<li><a href="topics.html">Topics</a></li>
				<li><a href="exam.php">Exams</a></li>
				<li><a href="result.php">Result</a></li>
				<li><a href="aboutus.html">About Us|Contact</a></li>
				
			</ul>

		</div>
		
		</div><!--manu-->
			<div class="text">
				<h4> .CLEAR EXPLANATION .MOCK EXAMS .SELF EVALUATION</h4>
				<h1>ASTROMANIA</h1>
				<h3>A-Z About astronomy basics</h3>
				<button onclick="window.location.href = 'register.php';"id="buttonone" >Create account</button>
				<button onclick="window.location.href = 'login.php';"id="buttontwo" >Sign in</button>
				<button onclick="window.location.href = 'logout.php';"id="buttontwo" >Log out</button>
			</div><!--text-->
<iframe src="http://free.timeanddate.com/clock/i74zx1jo/n389/fn6/fs16/tct/pct/ftb/tt0/tw1/th1/ta1/tb4" frameborder="0" width="199" height="42" allowTransparency="true"></iframe>



	</div><!--bgimage-->
</body>
</html>