<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 4/25/16
 * Time: 1:32 AM
 */

session_start();
$user = 'guest';
$loggedin = false;
if(isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$loggedin = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contact-form.css">
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
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>


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
      <?php 
	if($loggedin) {
		echo "<p>Logged in as: $user </p>";
		echo '<a class="button guest" href="logout.php" style="text-align: right">Logout</a>';
	}
	else  {
		echo '<a class="button guest" href="register.html" style="text-align: right; background-color: #e7e7e7; color: black;">Sign up</a>
      <a class="button guest" href="login.php" style="text-align: right">Login</a>';
	}
      ?>
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
</header>
<!--=====================
          Content
======================-->
<section id="content">
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ta__center">
        Contact Us
      </h2>
      <div class="map" style="text-align:center">
       <ol>
		<li>1. Mehreen Hoque</li>
		<li>2. Juthika Bhattacharjee</li>
		<li>3. S. M. Faisal Rahman</li>
	   </ol>
	   <br>
        Phone: +88 0167 6097 793 <br>
        Phone: +88 01629561508 <br>
        E-mail: <a href="#">mail@bookshelf.com</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <article class="block-1 contacts ">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="white ta__center">Contact Form</h3>
      </div>
      <div class="clear"></div>
        <form id="contact-form">
          <div class="contact-form-loader"></div>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>
           
            <label class="email">
              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
           </div>
           <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <div class="ta__right">
          <a href="#" class="link-1 white" data-type="reset">Clear</a>
          <a href="#" class="link-1 white" data-type="submit">Send</a></div>
            </div>
          </div> 

          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>      
              </div>
            </div>
          </div>
          <div class="clear"></div>
      </form>   
      <div class="clear"></div>
    </div>
  </article>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container_12">
    <div class="grid_12"> 
      <h1 class="logo">
        <a href="index.html">
          BookShelf
        </a>
      </h1>
      <div class="socials">
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google-plus"></a>
        <a href="#" class="fa fa-pinterest"></a>
      </div>
      <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a> <br></div>
    </div>
    <div class="clear"></div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>

