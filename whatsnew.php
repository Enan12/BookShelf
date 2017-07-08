<?php
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
<title>What's New?</title>
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
              headerK
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
        BOOKSHELF
         
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
          <div class="navigation ">
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
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September22, 2014!</div>
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ta__center">What's New?</h2>
    </div>
    <div class="grid_3">
      <div class="banner-1">
        <div class="maxheight">
          <img src="images/page4_img1.jpg" alt="">
          <div class="banner-1_bot">
            <div class="text1 tx__1">Tom James</div>
            Lorem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis neque facilisis 
          </div>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner-1">
        <div class="maxheight">
          <img src="images/page4_img2.jpg" alt="">
          <div class="banner-1_bot">
            <div class="text1 tx__1">Alan Smith</div>
            Dorem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis neque facilisisr 
          </div>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner-1">
        <div class="maxheight">
          <img src="images/page4_img3.jpg" alt="">
          <div class="banner-1_bot">
            <div class="text1 tx__1">Edna Barton</div>
            Korem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis neque facilisisas
          </div>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner-1">
        <div class="maxheight">
          <img src="images/page4_img4.jpg" alt="">
          <div class="banner-1_bot">
            <div class="text1 tx__1">Patrick Pool</div>
            Norem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis nequewert 
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <article class="block-1 white">
    <div class="container_12">
      <div class="grid_8">
        <h3>Our Activities</h3>
        <img src="images/page4_img5.jpg"  alt="" class="img_inner fleft offset__2">
        <div class="extra_wrapper">
          <p class="color1"><a href="#">Amus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum a, commodo luctus libero.</a></p>
          <p> Praesent faucibus malesuada faucibus. Donec laoreet metus id laoreetoreto esuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur </p>
          Bulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. 
        </div>
        <div class="clear sep-2"></div>
        Amus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum a, commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet metus id laoreetoreto esuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur 
        <ul class="list-2 color1">
          <li><a href="#">Amus at magna non nunc tristique rhoncus</a></li>
          <li><a href="#">Praesent onec laoreet metus id laoreetoreto </a></li>
          <li><a href="#">Tsuadaipsum dolor sit amet, consectetur </a></li>
        </ul>
      </div>
      <div class="grid_4">
        <div class="banner-2"><img src="images/page4_img6.jpg" alt="">
          <div class="banner-2_bot">
            <div class="banner-2_title">
              Join Us!
            </div>
            Lorem ipsum dolor sit tetur dipiscing elit. In mollis erat 
          </div>
        </div>
      </div>
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
        BOOKSHELF
        </a>
      </h1>
      <div class="socials">
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google-plus"></a>
        <a href="#" class="fa fa-pinterest"></a>
      </div>
      <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
    </div>
    <div class="clear"></div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>

