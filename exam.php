<style>
    .rightmenu ul li a{
        text-decoration: none;
        color:white;
    }
</style>
<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $email_id = $_SESSION['email'];
    $user = $_SESSION['user'];
    if(isset($_POST['submit'])){

        for($i=1;$i<10;$i++) {
        if(isset($_POST['q'.$i])){
            $user_ans[] = $_POST['q'.$i];
        }
        
            }
        
        
            $correct_ans = array('1', '3', '3', '3', '3','2','4','4','3','3');
            //$user_ans = array('1', '2', '5', '3', '4','5','1','5','3','4');
        
            $match_items = array_intersect_assoc($correct_ans, $user_ans);
            $marks = count($match_items);
        
            if ($marks >= 8) {
                $status = 'pass';
            } else {
                $status = 'fail';
            }
        
            $sql="select * from marks where user_id='$user_id'";
            $check=mysqli_query($connection,$sql);
            if(isset($check)){
        
            if(mysqli_num_rows($check)==1){
        
                $query = "update marks set marks = '$marks', status ='$status' where user_id='$user_id'";
        
        
                $result = mysqli_query($connection, $query);
                if(isset($result)) {
                    echo '<script>alert("marks added")</script>'; 
                }
        
            }else{
        
                $query = "INSERT INTO marks (user_id,marks,status) VALUES('$user_id','$marks','$status')";
        
                $result = mysqli_query($connection, $query);
                if(isset($result)) {
                    
                    echo '<script>alert("marks added")</script>'; 
        
                }
        
            }
            }
        
        
        }
}else{
   
    
    echo "<script type='text/javascript'>alert('PLEASE LOGIN');
    window.location='front1.php';
    </script>";

    
    
}


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="exam.css">
    <link href='https://fonts.googleapis.com/css?family=Montsrract:400,700%7CPT+Serif:400,700,400italic'>
    <link href="https://fonts.googleapis.com/css?family=Montsrract|Open+Sans" rel="stylesheet">

    </head>
    <body>
    <div class="bgimage">
        <div class="manu">
        <div class="leftmenu">
        <h4>SELF EVALUATION</h4>
    </div>
    <div class="rightmenu">
        <ul>
        <li id="addcolor"><a href="front1.php">Home</a></li>
            <li><a href="topics.html">Topics</a></li>
            <li><a href="exam.php">Exams</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="aboutus.html">About us|Contact</a></li>

    </ul>
    </div>

    </div><!--manu-->
    <div class="text">
        <div class="diamond">
        <h2 id="test_status"></h2>
        <div id="test">
            <form method="post" action="#">
            <p>Q1 . Lunar eclipses can occur only during a _________.</p><br>
            <input type="radio" value="1" name="q1"> A. full moon  moon<br>
            <input type="radio" value="2" name="q1"> B. irst quarter<br>
            <input type="radio" value="3" name="q1"> C. third quarter moon<br>
            <input type="radio" value="4" name="q1"> D. new moon<br><br>

            <p>Q2 .  Which of the following is NOT a general diference between a planet and a star?.</p><br>
            <input type="radio" value="1" name="q2"> A. Planets are smaller than stars<br>
            <input type="radio" value="2" name="q2"> B. Planets are dimmer than stars.<br>
            <input type="radio" value="3" name="q2"> C. All planets are made of rock and all stars are made of gas<br>
            <input type="radio" value="4" name="q2"> D. Planets orbit stars, while stars orbit the center of the galaxy.<br><br>

            <p>Q3 . Lunar eclipses can occur only during a _________.</p><br>
            <input type="radio" value="1" name="q3"> A. full moon  moon<br>
            <input type="radio" value="2" name="q3"> B. irst quarter<br>
            <input type="radio" value="3" name="q3"> C. third quarter moon<br>
            <input type="radio" value="4" name="q3"> D. new moon<br><br>

            <p>Q4 .  An astronomical unit (AU) is _________..</p><br>
            <input type="radio" value="1" name="q4"> A. the average distance between any two planet<br>
            <input type="radio" value="2" name="q4"> B. the average distance between the Sun and Earth<br>
            <input type="radio" value="3" name="q4"> C. any very large unit, such as a light-year<br>
            <input type="radio" value="4" name="q4"> D. the average distance between the Sun and Pluto<br><br>

            <p>Q5 .  The number of stars in the Milky Way Galaxy is approximately _________</p><br>
            <input type="radio" value="1" name="q5"> A. a few hundred thousand<br>
            <input type="radio" value="2" name="q5"> B. a few hundred million<br>
            <input type="radio" value="3" name="q5"> C. a few hundred billion<br>
            <input type="radio" value="4" name="q5"> D. a few hundred<br><br>

            <p>Q6 . What is the eclipic plane?</p><br>
            <input type="radio" value="1" name="q6"> A. The plane of the Sun's equato<br>
            <input type="radio" value="2" name="q6"> B. The plane of the Earth's orbit around the Sun<br>
            <input type="radio" value="3" name="q6"> C. The plane of the Milky Way Galaxy <br>
            <input type="radio" value="4" name="q6"> D. The plane of the Earth's equato<br><br>

            <p>Q7 . What is the celesial sphere?</p><br>
            <input type="radio" value="1" name="q7"> A. It represents a belief in an Earth-centered universe, and hence is no longer considered tohave any use.<br>
            <input type="radio" value="2" name="q7"> B. It is a model of how the stars are arranged in the sky relaive to our Sun, which is in themiddle of the sphere<br>
            <input type="radio" value="3" name="q7"> C. The celesial sphere is a model that shows the true locaions of the Sun and a few thousandof the nearest stars. <br>
            <input type="radio" value="4" name="q7"> D. The celesial sphere is a representaion of how the sky looks as seen from Earth.  <br><br>

            <p>Q8 .  Stars that are visible in the sky on any clear night of the year, at any ime of the night, arecalled _________.</p><br>
            <input type="radio" value="1" name="q8"> A. seasonal<br>
            <input type="radio" value="2" name="q8"> B. bright<br>
            <input type="radio" value="3" name="q8"> C. celesial<br>
            <input type="radio" value="4" name="q8"> D. circumpolar<br><br>

            <p>Q9 . Which of the following correctly describes the meridian in your sky?</p><br>
            <input type="radio" value="1" name="q9"> A.  A half-circle extending from your horizon due east, through your zenith, to your horizon duewest <br>
            <input type="radio" value="2" name="q9"> B. A half-circle extending from your horizon due north, through your zenith, to your horizondue south<br>
            <input type="radio" value="3" name="q9"> C. The point directly over your hea<br>
            <input type="radio" value="4" name="q9"> D. A half-circle extending from your horizon due east, through the north celesial pole, to yourhorizon due west<br><br>

            <p>Q10 . The point directly over your head is called _________.</p><br>
            <input type="radio" value="1" name="q10"> A. the North Star<br>
            <input type="radio" value="2" name="q10"> B. the meridian<br>
            <input type="radio" value="3" name="q10"> C. the zenith<br>
            <input type="radio" value="4" name="q10"> D. the celesial pole<br><br>


            <input type="Submit" name="submit"  value="Submit Answers" >
            </form>
        </div>


        </div>
        </div><!--text-->
        </div><!--bgimage-->
        </body>
        </html>
