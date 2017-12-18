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
            <li><a href="book.php">Book |</a></li>
            <li><a href="about.php">About |</a></li>
            <li><a href="register.php">Register |</a></li>
            <li><a href="Login.php">Login</a></li>





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






    <div class="search">
        
        <p><span class="error">* required field.</span></p>

        <form method="post" action="postprocess.php" enctype='multipart/form-data'>
            
            <label>Check In
	<input type="text" name="checkin" required><span class="error">*</span><br>
</label>
            <br>
            <label>Check Out
	<input type="email" name="checkout" required><span class="error">*</span><br>
</label>
            <br>
            <label>Adult Per Room
	<input type="text" name="adult" required><span class="error">*</span><br>
</label>
            <br>
            <label>Child Per Room
                <input type="text" name="child" required><span class="error">*</span><br></label><br>

            <label>Room
                <input type="text" name="room" required><span class="error">*</span><br></label>

            <br>
            <br>
            
            <input type="submit" name="submit" value="Search">
        </form>
        <br>
        




    </div>

</body>




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>