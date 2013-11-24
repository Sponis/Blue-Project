<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blue Project</title>
    <meta name="description" content="Complete Site">
    <meta name="author" content="Vassilis Sponis">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Trykker|Share+Tech' rel='stylesheet' type='text/css'>
</head>
<body>
    <!--<div id="wrapper">-->
    <header>
        <div id="tophead">
            <div class="wrapper">
                <span id="sub">Subscribe to:</span>
                <ul id="sub_list">
                    <li><a title="Posts" href="#">Posts</a></li>
                    <li><a title="Comments" href="#">Comments</a></li>
                    <li><a class="noborder" title="Email" href="#">Email</a></li>
                </ul>
                <div id="searchform">
                    <form name="search" action ="" method="">
                        <input type="text" name="searchvalue" placeholder="  Search Keywords">
                        <input class="magnglass" type="Submit" value="">
                    </form>
                </div>
                <div id="social">
                    <ul class="social_icons">
                        <li><a class="rss" title="RSS" href="#"></a></li>
                        <li><a class="fb" title="Facebook" href="#"></a></li>
                        <li><a class="tw" title="Twitter" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="bothead">
            <div class="wrapper">
                <h1 id="logo">
                    <span class="main">Blue Masters</span>
                    <span class="sub">COMPLETELY UNIQUE WORDPRESS THEME</span>
                </h1>
                <nav>
                    <ul>
                        <li class="nav01"><a class="navi" title="Home" href="/index.html">Home</a></li>
                        <li class="nav02"><a class="navi" title="About" href="#">About</a></li>
                        <li class="nav03"><a class="navi" title="Portfolio" href="#">Portfolio</a></li>
                        <li class="nav04"><a class="navi" title="Blog" href="#">Blog</a></li>
                        <li class="nav05"><a class="navi active" title="Contact" href="/contactpage.php">Contact</a></li>
                    </ul>
                </nav>
            </div>  
        </div>  
    </header>
    <!--- END OF HEADER-->
    <div id="contactpage">
        <div class="wrapper2">
            <div class="contactform">
                <h3 class="formheader">Contact Us</h3>
                <p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nullam at auctor nulla. Vivamus ultrices quam vitae quam ultrices, sed mollis massa malesuada.
                    In sapien arcu, viverra ut felis a, interdum varius velit. 
                    Ut consectetur lorem ipsum, at semper leo lobortis non. 
                    Vestibulum dictum augue et risus tempor, vel ullamcorper risus luctus.
                    Curabitur vitae massa nec lorem sodales malesuada.</p>
                    <form class="contactus" name="ContactUs" method="POST" action="contactpage.php">
                        <ul id="form-list">
                            <li>
                                <label for="your_name">* Your Name</label>
                                <input id="your_name" type="text" name="your_name" value="<?php echo $your_name; ?>" maxlength="50" tabindex="1">
                            </li>
                            <li>
                                <label for="email">* Email Address</label>
                                <input id="email" type="text" name="email" value="<?php echo $email; ?>" maxlength="80" tabindex="2">
                            </li>
                            <li>
                                <label for="subject">* Subject</label>
                                <input id="subject" type="text" name="subject" value="<?php echo $subject; ?>" maxlength="80" tabindex="3">
                            </li>
                            <li>
                                <label for="message">* Your Message</label>
                                <textarea id="message" name="message" value="<?php echo $message; ?>" maxlength="1000" tabindex="4"></textarea>
                            </li>
                        </ul>
                        <span class="req-fields">* These are required fields</span>
                        <input id="submitbutton" type="submit" value="Send Message">
                    </form>
                </div>
                <div class="contactpage-right-column">
                    <ul class="right-column-list">
                        <li class="get-in-touch">
                            <div class="InTouchBox">
                                <div class="boxhead2">
                                    <h3 class="InTouchHead">Get In Touch</h3>
                                </div>
                                <div class="rcol-boxA">
                                    <p class="rcol-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at auctor nulla.</p>
                                    <ul class="rcol-listA">
                                        <li>
                                            <h4 class="phoneico">
                                                <span class="rcol-info">
                                                    <span class="subhead2 phonehead">Phone</span>
                                                    <span class="textbox phonetext">1+ (123)456.789</span>                        
                                                </span>
                                            </h4>
                                        </li>
                                        <li>
                                            <h4 class="emailico">
                                                <span class="phoneinfo">
                                                    <span class="subhead2 phonehead">Email address</span>
                                                    <span class="textbox phonetext">email@yourdomain.com</span>
                                                </span>      
                                            </h4>
                                        </li>
                                        <li>
                                            <h4 class="skypeico">
                                                <span class="phoneinfo">
                                                    <span class="subhead2 phonehead">Skype</span>
                                                    <span class="textbox phonetext">yourskypename</span>      
                                                </span>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="site-navi">
                            <div class="site-navi-box">
                                <div class="boxhead2">
                                    <h3 class="site-navi-head">Site Navigation</h3>
                                </div>
                                <div class="rcol-boxB">
                                    <ul class="site-navi-list">
                                        <li><a class="navi2" title="Home" href="/index.html">Welcome Home</a></li>
                                        <li><a class="navi2" title="About" href="#">About Us</a></li>
                                        <li><a class="navi2" title="Portfolio" href="#">Our Portfolio</a></li>
                                        <li><a class="navi2" title="Blog" href="#">Blog News</a></li>
                                        <li><a class="navi2" title="Contact" href="/contactpage.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="net-connect">
                            <div class="net-connect-box">
                                <div class="boxhead2">
                                    <h3 class="net-connect-head">Network Connect</h3>
                                </div>
                                <div class="rcol-boxC">
                                    <ul class="net-connect-list">
                                        <li>
                                            <a class ="twitter_icon" title="twitter" href="#"></a>
                                        </li>
                                        <li>
                                            <a class ="facebook_icon" title="facebook" href="#"></a>
                                        </li>
                                        <li>
                                            <a class ="flickr_icon" title="flickr" href="#"></a>
                                        </li>
                                        <li>
                                            <a class ="linkedin_icon" title="linkedin" href="#"></a>
                                        </li>
                                        <li>
                                            <a class ="tumblr_icon" title="tumblr" href="#"></a>
                                        </li>
                                        <li>
                                            <a class ="youtube_icon" title="youtube" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="info">
            <div class="wrapper">
                <div id="about">
                    <h4 class="head">About Us</h4>
                    <br>
                    <ul>
                        <li><a class="listlinks" href="#">Our Company</a></li>
                        <li><a class="listlinks" href="#">Our Blog</a></li>
                        <li><a class="listlinks" href="#">Submit A Site</a></li>
                        <li><a class="listlinks" href="#">Contact Us</a></li>
                        <li><a class="listlinks" href="#">Help & Terms</a></li>
                        <li><a class="listlinks" href="#">Read Our FAQ</a></li>
                    </ul>
                </div>
                <div id="Categories">
                    <h4 class="head">Categories</h4>
                    <br>
                    <ul>
                        <li><a class="listlinks" href="#">Trends & Technology</a></li>
                        <li><a class="listlinks" href="#">Desigh Companies</a></li>
                        <li><a class="listlinks" href="#">Design Freelancers</a></li>
                        <li><a class="listlinks" href="#">Web Portfolios</a></li>
                        <li><a class="listlinks" href="#">Web Development</a></li>
                        <li><a class="listlinks" href="#">General Icons</a></li>
                    </ul>
                </div>
                <div id="Gallery">
                    <h4 class="head">From The Gallery</h4>
                    <br>
                    <table id="photos">
                        <tr>
                            <td><a href="/img/gall01.jpg" data-lightbox="gallery" title="Image 01"><img src="img/gall01.jpg" alt="img01"></a></td>
                            <td><a href="/img/gall02.jpg" data-lightbox="gallery" title="Image 02"><img src="img/gall02.jpg" alt="img02"></a></td>
                            <td><a href="/img/gall03.jpg" data-lightbox="gallery" title="Image 03"><img src="img/gall03.jpg" alt="img03"></a></td>
                            <td><a href="/img/gall04.jpg" data-lightbox="gallery" title="Image 04"><img src="img/gall04.jpg" alt="img04"></a></td>
                        </tr>
                        <tr>
                            <td><a href="/img/gall05.jpg" data-lightbox="gallery" title="Image 05"><img src="img/gall05.jpg" alt="img05"></a></td>
                            <td><a href="/img/gall06.jpg" data-lightbox="gallery" title="Image 06"><img src="img/gall06.jpg" alt="img06"></a></td>
                            <td><a href="/img/gall07.jpg" data-lightbox="gallery" title="Image 07"><img src="img/gall07.jpg" alt="img07"></a></td>
                            <td><a href="/img/gall08.jpg" data-lightbox="gallery" title="Image 08"><img src="img/gall08.jpg" alt="img08"></a></td>
                        </tr>
                    </table>
                </div>
                <div id="twupdates">
                    <h4 class="head">Twitter Updates</h4>
                    <div id="example1"></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="wrapper">
                <p id="copyright">© 2010 Copyright iPadMasters Theme. All Rights Reserved.</p>
                <div id="links">
                    <ul>
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a class="noborder" href="#">Back to Top</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/vendor/lightbox-2.6.min.js"></script>
        <script src="js/vendor/twitterFetcher_v10_min.js"></script>
        <script src="js/vendor/jquery.cycle.all.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>
