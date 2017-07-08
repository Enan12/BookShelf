<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']=='failed') {
	$_SESSION['login'] = 'handled';
	echo '<script>alert("Incorrect email or password");</script>';
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
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
        <a href="index.php">
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
               <li class="current"><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="categories.php">Categories</a></li>
               <li><a href="whatsnew.php">What's New?</a></li>
               <li><a href="contacts.php">Contacts</a></li>
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
            <h3 style="color:black; text-align: center"><a  href="index.html">BookShelf</a> Login</h3>
        </div>
        <div style="margin-left: 30%; margin-right: 30%; border-radius: 5px; background-color: #f2f2f2; padding: 40px;" id="regform">
            <form action="checklogin.php" method="post">
                <fieldset class="reg">
                    <div class="form-bottom">
                        
                        <div class="form-group">
                            <label class="sr-only" for="form-last-email" style="padding-right: 20%;padding-left: 10%">Email : </label>
                            <input type="text" name="mail" placeholder="Email..." class="form-last-name form-control" id="form-last-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-pwd" style="padding-right: 10%;padding-left: 10%">Password : </label>
                            <input type="password" name="pwd" placeholder="Password" class="form-last-name form-control" id="form-last-pwd">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit" style="margin-left: 40%">Sign in!</button>
                </fieldset>
            </form>
	    <br>
	    <h4 style="text-align: center;  font-size: large; color: green">Don't have account?<a href="register.html" style="text-decoration: underline">Sign Up!</a></h4>
	    <br>
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
        </div>
        <br><br>
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

