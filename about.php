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
<title>About</title>
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
  <div class="container_12">
    <div class="grid_8">
      <h2 class="ta__center">About BookShelf</h2>
    </div>
    <br><br><br><br><br>
    <div class="container-fluid" style="padding-bottom: 5%">
      <p>In general, we understand by library is that a building, a room ,a organization that has a collection specially of books for people to read or borrow without paying a single penny.
        By the implementation of technology, the facilities  of libraries have come within the range Generally, it's a special library with a focused collection of digital objects that can include text, visual material, audio material, video material, stored as electronic media formats (as opposed to print, microform, or other media), along with means for organizing, storing, and retrieving the files and media contained in the library collection.
        The world’s first electronic library is opening in San Antonio, Texas. The library will have no printed editions, books will be available in a digital format only.
        In context of Bangladesh, there are various provisions of online libraries.
        In our application which is named as BOOKSHELF, we want to provide people online free books. Here, all the books will be given in pdf files. We will have search button from where we can easily find the book which we want to read. By mentioning the names of the books & the writers or either of them, we can find the required book.A login & sign up option willl be provided for our users. Different categories of books for kids, adults as well as books of academic career, science fiction, novel, refernce books will be provided in this app.</p>

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

