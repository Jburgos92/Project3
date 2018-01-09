<?php session_start();// Starting Session ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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

//    echo $l;
//    echo "<br>";
//    echo $c;
//    echo "<br>";
//    echo $o;
//    echo "<br>";
//    echo $a;
//    echo "<br>";
//    echo $r;
//    echo "<br>";
    echo ' <b><h1 class="results"> Search Results For '.$l.':</h1></b>';
    	$j = file_get_contents('results.json');
		$d = json_decode($j, true);
//		print_r($d);
		foreach($d as $k => $v){
            if($l == $v['location']){
                echo '<div class="hotel" id="'.$k.'">
                <img src="img/'.$v['img'].'" style="float: left;">
            <p class="info">'.$v['address'].'</p>
            <p>'.$v['city'].'</p>
            <p><span>Adult:</span>' .$v['adult'].'</p>
            <p><span>Room:</span>' .$v['room'].'</p>
            <p><span>Price:</span>' .$v['price'].'</p>
            <p><span><a href="payment.php" class="btn">Book</a></span></p></div>';
            }
			
		};


?>
 </div>
    <footer>© 2017 Sheraton, Inc., All rights reserved.</footer>
    
</body>



<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>