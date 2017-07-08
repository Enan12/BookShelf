<?php
session_start();
$user = 'guest';
$loggedin = false;
if(isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$loggedin = true;
}
?>

<html lang="en">
<head>
<title>Categories</title>
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
<section id="content">
      <article class="block-1 offset__1">
            <div class="container_12">
                  <div class="grid_12">
                    <h3>Genres</h3>
                  </div>
                  <ul class="list-1 lst__1">
                        <li class="grid_2">
                            <div class="count"><a>Romance</a></div>
                        </li>
                        <li class="grid_2">
                            <div class="count"><a>Poetry</a></div>
                        </li>
                        <li class="grid_2">
                            <div class="count"><a>Adventure</a></div>
                        </li>
                        <li class="grid_2">
                            <div class="count"><a>Comedy</a></div>
                        </li>
                        <li class="grid_2">
                            <div class="count"><a>Biography</a></div>
                        </li>
                        <li class="grid_2">
                            <div class="count"><a>Thriller</a></div>
                        </li>
                         <li class="grid_2">
                            <div class="count"><a>Travel</a></div>
                        </li>
                         <li class="grid_2">
                            <div class="count"><a>Translations</a></div>
                        </li>
                         <li class="grid_2">
                            <div class="count"><a>Novels</a></div>
                        </li>
                          <li class="grid_2">
                            <div class="count"><a>Educational</a></div>
                         </li>
                        <li class="grid_2">
                            <div class="count"><a>Sci&nbsp;Fi</a></div>
                        </li>
                         <li class="grid_2">
                            <div class="count"><a>Others</a></div>
                        </li>
                      <li class="grid_2">
                          <div class="count"><a>Top&nbsp;Rated</a></div>
                      </li>
                      <li class="grid_2">
                          <div class="count"><a>Most&nbsp;Recent</a></div>
                      </li>
                      <li class="grid_2">
                          <div class="count"><a>All</a></div>
                      </li>
                        <li class="clear"></li>
                  </ul>
            </div>
      </article>
    <article class="dynamic">
        <div class="container_12">
            <div>
                <h3 id="category_title">All</h3>
            </div>
            <div id="feed"></div>
        </div>
        <button type="button" class="btn loader" id="loader">Load More</button>
    </article>
<!--  <div class="container_12">
    <div class="grid_12">
      <h3>Top Picks</h3>
    </div>
    <div class="grid_4 feed">
        <img src="images/adventure.jpg" alt="" class="img_inner offset__1">
        <p style="text-align: center">asdasdasd <br>By asdasdasdas<br> Publisher: adasdsadasd</p>
    </div>
    <div class="grid_4">
      <img src="images/romance.jpg" alt="" class="img_inner offset__1">
     
    </div>
    <div class="grid_4">
      <img src="images/scifi.gif" alt="" class="img_inner offset__1">
     
    </div>
    <div class="clear"></div>
  </div>-->
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container_12">
    <div class="grid_12"> 
      <h1 class="logo">
        <a href="index.php">
          BOOKSHELF
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

<script>
    var showbook = 6;
    var cat = "all";
    load();

    $('.loader').on("click", function() {
    	
        showbook+=3;
        load();
    });

    $('.read').on('click', function(e) {
        var book = $(this).attr('href');e.preventDefault();
        $.post('readtracker.php', {'catReq': cat, 'book':book}, function($data, $status) {
           //alert($data);
        });
    });

    $('.count').click(function () {
        cat = $(this).text();
        $('#category_title').html(cat);
        showbook = 6;
        load();
    });
    
    function load() {
       
        $.post('bookstore.php', {'catReq': cat, 'load':showbook}, function($data, $status) {
            $('.feed').remove();
            stuff = $data;
            $('#feed').html($data);
        });
    }
</script>

</body>
</html>

