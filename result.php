
<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $email_id = $_SESSION['email'];
    $user = $_SESSION['user'];
    $sql="select username,email,marks.status,marks.marks,user_id from marks inner join register on register.id=marks.user_id where user_id='$user_id'";

$result=mysqli_query($connection,$sql);
$res=mysqli_fetch_array($result);
}
else{
    echo "<script type='text/javascript'>alert('PLEASE LOGIN');
    window.location='front1.php';
    </script>";
}
?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .rightmenu ul li a{
        text-decoration: none;
        color:white;
    }
</style>

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
        <h4>Results</h4>
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

    </div>
    <div class="text">
        <div class="diamond">
            <h2 id="test_status"></h2>
            <div id="test">

                <table>
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Marks</th>
                    <th>Status</th>
                    </thead>
                    <tr>
                        <td><?php echo $res['user_id'] ?></td>
                        <td><?php echo $res['username'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['marks'] ?></td>
                        <td><?php echo $res['status'] ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    </div>
    </body>
</html>
