<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 4/4/16
 * Time: 1:57 PM
 */

require('dbconnect.php');

$name = test_input($_POST["name"]);
$mail = test_input($_POST["mail"]);
$pwd = test_input($_POST["pwd"]);
$dob = test_input($_POST["dob"]);
$gender = test_input($_POST["gender"]);

$msg = "User registration successfully submitted to database! Please check you email for confirmation email.";


$sql = "SELECT * FROM login WHERE email = '$mail'";
$res = $conn->query($sql);
if (!$res) {
    $msg = $conn->error;
}
else if($res->num_rows >0) {
	$msg = "User Already exists.";
}
else {
	$sql = "INSERT INTO login (email, password) VALUES('$mail', '$pwd')";
	if (!$conn->query($sql)) {
	    $msg = $conn->error;
	}

	$sql = "INSERT INTO user_table (email, gender, name, dob) VALUES('$mail', '$gender', '$name', str_to_date('$dob', '%d/%m/%Y'))";
	if (!$conn->query($sql)) {
	    $msg = $conn->error;
	}
	else{
	    $mailtxt =
		"Hi $name,
		You have been successfully registered as a BookShelf user. Your Login Credentials are as follows:
		Email: $mail
		Password: $pwd

		Enjoy,
		BookShelf team";


	    mail($mail, "BookShelf user registration", $mailtxt, "BookShelf Automated Mailer (No reply)");
	}
}
$conn->close();



//////////funstions///////////////
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/tmStickUp.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body class="" id="top">
<!--==============================
              header
=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1 class="logo">
                <a href="index.html">
                    BookShelf
                </a>
            </h1>
        </div>
        <div class="clear"></div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->
        <div class="container_12">
            <div class="grid_12">
                <div class="navigation">
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">What's New?</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
</header>
<!--=====================
          Content
======================-->
<section id="content">
    <div class="row">
        <div>
            <h3 style="color:black; text-align: center"><a  href="index.html">BookShelf</a> Registration</h3>
        </div>
        <div id="regform">
            <h4 style="text-align: center"><?php echo $msg; ?></h4>
	    <br><br>
            <h4 style="text-align: center; font-size: larger; color: rgb(175,58,58)"><a href='login.php'>Login >> </a></h4>
            <br><br>
	    <h4 style="text-align: center; font-size: large; color: blue"><a id="forgot">Forgot email or password?</a></h4>
	    <br>
	    <form action="forgot.php" method="post" hidden="true" id="forgotin" style="text-align: center;">
                <fieldset class="reg">
                    <div class="form-bottom">
                      
                        <div class="form-group">
                            <label class="sr-only" for="form-last-email">Email : &nbsp;</label>
                            <input type="text" name="mail" placeholder="Email..." class="form-last-name form-control" id="form-last-email">
			    <button type="submit" class="btn">Submit!</button>
                        </div>
                    </div>
                </fieldset>
            </form>
	    <br><br>
        </div>
    </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container_12">
        <div class="grid_12">
            <h1 class="logo">
                <a href="index.php">
                    BookShelf
                </a>
            </h1>
            <div class="socials">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
            <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a> </div>
        </div>
        <div class="clear"></div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>


