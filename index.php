<!DOCTYPE html>
<html>

<head>
    <title>Sheraton</title>
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






    <div class="search">
        <form method="get" action="results.php">
            <div class="form-group">
                <label>Location:</label>
                <select id="inputState" class="form-control" name="location">
                    <option selected>Choose...</option>
                            <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>

                    </select>
            </div>
            <div class="form-group">
                <label>Check In:</label>
                <input class="form-control" id="date" type="date" name="checkin">
            </div>
            <div class="form-group">
                <label>Check Out:</label>
                <input class="form-control" id="date" type="date" name="checkout">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Adult</label>
                <select class="form-control" id="exampleFormControlSelect1" name="adult">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Room</label>
                <select class="form-control" id="exampleFormControlSelect1" name="room">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                </select>
            </div>
            <button class="btn" type="submit" name="submit" value="Search">Search</button>
        </form>
        <br>





    </div>

    <br>
    <br>
    <footer>© 2017 Sheraton, Inc., All rights reserved.</footer>

</body>




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>
