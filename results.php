<?php session_start();// Starting Session ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">



</head>

<body>

    <nav class="navi">
        <div class="photo"><img src="img/logo.png"></div>
        <ul>
            <li><a href="index.php">Book |</a></li>
            <li><a href="about.php">About |</a></li>
            <li><a href="register.php">Register |</a></li>
            <li><a href="login.php">Login</a></li>





            <?php
			//Display the following two links only if the session variable ID exists
			if(isset($_SESSION['uid'])){
				echo '<li><a href="profile.php">PROFILE</a></li>';
				echo '<li><a href="admin.php">ADMIN</a></li>';
				echo '<li><a href="logout.php">LOGOUT</a></li>';
			}
		?>
        </ul>
    </nav>
<div>
   <?php 
$l = $_GET['location'];
$c = $_GET['checkin'];
$o = $_GET['checkout'];
$a = $_GET['adult'];
$r = $_GET['room'];

    echo $l;
    echo "<br>";
    echo $c;
    echo "<br>";
    echo $o;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $r;
    echo "<br>";
    
    	$j = file_get_contents('results.json');
		$d = json_decode($j, true);
//		print_r($d);
		foreach($d as $k => $v){
			echo '<div class="hotel" id="'.$k.'">
            <p class="info">'.$v['address'].'</p>
            <p>'.$v['city'].'</p>
            <p><span>Adult:</span>' .$v['adult'].'</p>
            <p><span>Room:</span>' .$v['room'].'</p>
            <p><span>Price:</span>' .$v['price'].'</p></div>';
		}

?>
 </div>
    <footer>© 2017 Sheraton, Inc., All rights reserved.</footer>
    
</body>




<script src="js/jquery.min.js"></script>
    <script></script>
<script src="js/bootstrap.min.js"></script>

</html>