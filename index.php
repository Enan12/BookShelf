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
<title>BookShelf</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/camera.css">
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
<script src="js/camera.js"></script>
<script src="js/owl.carousel.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->



<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  

  $('#camera_wrap').camera({
    loader: false,
    pagination: false ,
    minHeight: '400',
    thumbnails: false,
    height: '38.07291666666667%',
    caption: false,
    navigation: true,
    fx: 'mosaic'
  });

  $("#owl").owlCarousel({
    items : 3, //10 items above 1000px browser width
    itemsDesktop : [995,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [767, 1], // betweem 900px and 601px
    itemsTablet: [700, 1], //2 items between 600 and 0
    itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
    navigation : true,
    pagination :  false
  }); 
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

<body class="page1" id="top">
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
		echo '<a class="button guest" href="register.html" style="text-align: right">Sign up</a>
      <a class="button guest" href="login.php" style="text-align: right">Login</a>';
	}
      ?>	

      <h1 class="logo">
        <a href="index.php">
          BookShelf
          <span></span>
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
<section class="slider_wrapper">
  <div id="camera_wrap" class="">
    <div data-src="images/home/1.jpg"></div>
    <div data-src="images/home/2.jpg"></div>
    <div data-src="images/home/3.jpg"></div>
  </div>  
</section> 
<!--=====================
          Content
======================-->
<section id="content">
  <div class="container_12">
    <div class="grid_3">
      <div class="banner">
        <a href="#" class="banner_title">Get The <br>
APP</a>
        <div class="maxheight"><img src="images/icon1.png" alt=""></div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner">
        <a href="#" class="banner_title login_check">Read <br>
Now</a>
        <div class="maxheight"><img src="images/icon2.png" alt=""></div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner">
        <a href="request.php" class="banner_title login_check">Book <br>
Request</a>
        <div class="maxheight"><img src="images/icon3.png" alt=""></div>
      </div>
    </div>
      <div class="grid_3">
          <div class="banner">
              <a href="upload.php" class="banner_title login_check">Contribute <br>
                  with Books</a>
              <div class="maxheight"><img src="images/icon2.png" alt=""></div>
          </div>
      </div>
      <div class="clear"></div>
    <div class="clear"></div>
  </div>

  <article class="block-1">
    <div class="container_12">
      <div class="grid_12">
        <h2>Meet The Legends of Literature</h2>
      </div>
      <div class="grid_4">
        <img src="images/writers/shake.jpg" alt="">
        <div class="extra_wrapper">
          <div class="block-1_title"><a href="https://en.wikipedia.org/wiki/William_Shakespeare">William Shakespeare (1564-1616):</a></div>
          William Shakespeare was an English poet, playwright, and actor, widely regarded as the greatest writer in the English language and the world's pre-eminent dramatist. He is often called England's national poet, and the "Bard of Avon"
        </div>
      </div>
      <div class="grid_4">
        <img src="images/writers/leo.jpg" alt="">
        <div class="extra_wrapper">
          <div class="block-1_title"><a href="https://en.wikipedia.org/wiki/Leo_Tolstoy">Leo tolstoy (1828-1910):</a></div>
          Count Lev Nikolayevich Tolstoy, usually referred to in English as Leo Tolstoy, was a Russian writer who is regarded as one of the greatest authors of all time.
        </div>

      </div>
      <div class="grid_4">
        <img src="images/writers/rabi.jpg" alt="">
        <div class="extra_wrapper">
          <div class="block-1_title"><a href="https://en.wikipedia.org/wiki/Rabindranath_Tagore">Rabindranath Tagore (1861-1941)</a></div>
          Rabindranath Tagore was a Bengali polymath who reshaped Bengali literature and music, as well as Indian art with Contextual Modernism in the late 19th and early 20th centuries.
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </article>
  
  <div class="container_12">
    <div class="grid_6">
      <div class="block-2">
        <img src="images/b_icon1.png" alt="">
        <div class="text1"><a href="register.html">I’m New Here</a></div>
			 Welcome!Is it first time of yours in this site? Wanna explore some knowledges and recreate yourself e little bit?Then sign up,be a member and enjoy.
		</div>
    </div>
    <div class="grid_6">
      <div class="block-2">
        <img src="images/b_icon2.png" alt="">
        <div class="text1"><a href="#">My Wishlist</a></div>
        Wanna remember how many books you have read? Or what do you want to read? Click on the notepad,write and save your wishes! 
      </div>
    </div>
    <div class="grid_6" style="align-content:Centre">
      <div class="block-2">
        <img src="images/b_icon4.png" alt="">
        <div class="text1"><a href="feedback.php">Feedback</a></div>
        please give your valuable comment so we can update this site for your benefits  
      </div>
    </div>
    <div class="clear"></div>
  </div>
  
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
      <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a></div>
    </div>
    <div class="clear"></div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>

<?php
    if(!$loggedin)
        echo
        "<script>
            $('.login_check').on(\"click\", function(e) {
                alert('You Must Login First');
                e.preventDefault();
            });
        </script>";
?>

</body>
</html>

