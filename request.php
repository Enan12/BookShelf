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
    <title>Book Request</title>
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
            <h3 style="color:black; text-align: center"><a  href="index.html">BookShelf</a> Book Request</h3>
        </div>
        <div style="margin-left: 30%; margin-right: 30%; border-radius: 5px; background-color: #f2f2f2; padding: 40px; padding-left: 7%;" id="regform">
            <form action="requestprocess.php" method="post">
                <fieldset class="reg">
                    <div class="form-bottom">
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Book Name :</label>
                            <input type="text" name="name" placeholder="Name..." class="form-last-name form-control" id="form-last-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-author">Author : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="author" placeholder="Author..." class="form-last-name form-control" id="form-last-author">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-pub">Publisher :&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="pub" placeholder="Publisher" class="form-last-name form-control" id="form-last-pub">
                        </div>
                        <div class="form-group">
                            <p style="text-align: right;clear: both;float:left;margin-right:15px;">Category :&nbsp;&nbsp;&nbsp;</p>
                                <select id="cat" name="cat">
                                    <option value="selectone">(Select one)</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="thriller">Thriller</option>
                                    <option value="romance">Romance<option>
                                    <option value="scifi">Sci-fi</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="poetry">Poetry</option>
                                    <option value="biography">Biography</option>
                                    <option value="travel">Travel</option><option>
                                    <option value="translated">Translated</option>
                                    <option value="others">Others</option>
                                </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit!</button>
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

<script>
    $('.btn-submit').on("click", function(e) {
        var parent_fieldset = $(this).parents('fieldset');
        var next = true;
        parent_fieldset.find('input[type="text"]').each(function () {
            if ($(this).val() == "" || $('#cat').val()=='selectone') {
                $(this).addClass('input-error');
                next = false;
                e.preventDefault();
            }
            else {
                $(this).removeClass('input-error');
            }
        });
        if(!next) alert("Please complete all the input fields");

    });
</script>
</body>
</html>

