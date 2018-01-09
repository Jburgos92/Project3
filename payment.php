<?php session_start();// Starting Session ?>
<!DOCTYPE html>
<html>

<head>
    <title>Sheraton</title>
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



    <form>
        <div class="sign">
            <p><span class="error">* required field.</span></p>
            <div class="form-row">
                <h1>Payment Form</h1>
                <div class="form-group col-md-6">
                    <label for="inputname4">Full Name:</label>
                    <span class="error">*</span><br>
                    <input type="name" class="form-control" id="inputname4" placeholder="Full Name">

                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email:</label>
                    <span class="error">*</span><br>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">

                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password:</label>
                    <span class="error">*</span><br>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">

                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address:</label>
                <span class="error">*</span><br>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">

            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2:</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City:</label>
                    <span class="error">*</span><br>
                    <input type="text" class="form-control" id="inputCity">

                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State:</label>
                    <span class="error">*</span><br>
                    <select id="inputState" class="form-control">
<option selected>Choose...</option>
        <option>Alabama</option>
        <option>Alaska</option>
        <option>Arizona</option>
        <option>Arkansas</option>
        <option>California</option>
        <option>Colorado</option>
        <option>Connecticut</option>
        <option>Delaware</option>
        <option>Florida</option>
        <option>Georgia</option>
        <option>Hawaii</option>
        <option>Idaho</option>
        <option>Illinois</option>
        <option>Indiana</option>
        <option>Iowa</option>
        <option>Kansas</option>
        <option>Kentucky</option>
        <option>Louisiana</option>
        <option>Maine</option>
        <option>Maryland</option>
        <option>Massachusetts</option>
        <option>Michigan</option>
        <option>Minnesota</option>
        <option>Mississippi</option>
        <option>Missouri</option>
        <option>Montana</option>
        <option>Nebraska</option>
        <option>Nevada</option>
        <option>New Hampshire</option>
        <option>New Jersey</option>
        <option>New Mexico</option>
        <option>New York</option>
        <option>North Carolina</option>
        <option>North Dakota</option>
        <option>Ohio</option>
        <option>Oklahoma</option>
        <option>Oregon</option>
        <option>Pennsylvania</option>
        <option>Rhode Island</option>
        <option>South Carolina</option>
        <option>South Dakota</option>
        <option>Tennessee</option>
        <option>Texas</option>
        <option>Utah</option>
        <option>Vermont</option>
        <option>Virginia</option>
        <option>Washington</option>
        <option>West Virginia</option>
        <option>Wisconsin</option>
        <option>Wyoming</option>


      </select>

                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip:</label>
                    <span class="error">*</span><br>
                    <input type="text" class="form-control" id="inputZip">

                </div>
                <br>
                <h4>Credit Card Information</h4>

                <div class="form-group col-md-6">
                    <label for="inputname4">Card Number</label>
                    <span class="error">*</span><br>
                    <input type="name" class="form-control" id="inputname4">

                </div>
                <br>
                <h4>Credit Card</h4>
                <div class="dropdown">
                    <span class="error">*</span><br>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select
                     </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">American Express</a>
                        <a class="dropdown-item" href="#">Mastercard</a>
                        <a class="dropdown-item" href="#">Visa</a>
                    </div>
                </div>


                <br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>






    <br>
    <br>
    <footer>© 2017 Sheraton, Inc., All rights reserved.</footer>

</body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</html>
