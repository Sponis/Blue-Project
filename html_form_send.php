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
							<li class="nav05"><a class="navi active" title="Contact" href="/contactform.html">Contact</a></li>
						</ul>
					</nav>
				</div>  
			</div>  
		</header>
		<!--- END OF HEADER-->
		<div id="contactform"> 
			<div class="wrapper">
				<?php
				if (isset($_POST['email'])) {


					$email_to = "sponis@gmail.com";

					$email_subject = "Contact Us Form Submission";

					function died($error) {
						// your error code can go here
						echo "We are very sorry, but there were error(s) found with the form you submitted. ";
						echo "These errors appear below.<br /><br />";
						echo $error . "<br /><br />";
						echo "Please go back and fix these errors.<br /><br />";
					}
					
					$fields_errors = array();
					$has_errors = false;
					
					// validation expected data exists
					if (!isset($_POST['first_name'])) {
						$fields_errors[] = ['first_name' => 'We are sorry, but First Name expected'];
						$has_errors = true;
					}
					if (!isset($_POST['last_name'])) {
						$fields_errors[] = ['last_name' => 'We are sorry, but Last Name expected'];
						$has_errors = true;
					}
					if (!isset($_POST['email'])) {
						$fields_errors = ['email' => 'We are sorry, but Email Address expected'];
						$has_errors = true;
					}
					if (!isset($_POST['telephone'])) {
						$fields_errors[] = ['telephone' => 'We are sorry, but Telephone Number expected'];
						$has_errors = true;
					}
					if (!isset($_POST['DoB'])) {
						$fields_errors[] = ['DoB' => 'We are sorry, but Date of Birth expected'];
						$has_errors = true;
					}
					if (!isset($_POST['address'])) {
						$fields_errors[] = ['address' => 'We are sorry, but Home Address expected'];
						$has_errors = true;
					}
					if (!isset($_POST['country'])) {
						$fields_errors[] = ['country' => 'We are sorry, but Country expected'];
						$has_errors = true;
					}
					if (!isset($_POST['comments'])) {
						$fields_errors[] = ['comments' => 'We are sorry, but Comments expected'];
						$has_errors = true;
					}
					if (!isset($_POST['terms'])) {
						$fields_errors[] = ['terms' => 'We are sorry, but Terms and Conditions expected'];
						$has_errors = true;
					}
					
					var_dump($fields_errors);

					$first_name = $_POST['first_name']; // required
					$last_name = $_POST['last_name']; // required
					$email_from = $_POST['email']; // required
					$telephone = $_POST['telephone']; // required
					$DoB = $_POST['DoB']; // required
					$address = $_POST['address']; // not required
					$country = $_POST['country']; // required
					$comments = $_POST['comments']; // not required
					$terms = $_POST['terms']; // required


					$error_message = array();
					$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
					if (!preg_match($email_exp, $email_from)) {
						$error_message[] = ['email' => 'The Email Address you entered does not appear to be valid.'];
						$has_errors = true;
					}
					$string_exp = "/^[A-Za-z .'-]+$/";
					if (!preg_match($string_exp, $first_name)) {
						$error_message[] = ['first_name' => 'The First Name you entered does not appear to be valid.'];
						$has_errors = true;
					}
					if (!preg_match($string_exp, $last_name)) {
						$error_message[] = ['last_name' => 'The Last Name you entered does not appear to be valid.'];
						$has_errors = true;
					}
					$num_exp = "/^[0-9- ]$/";
					if (!preg_match($num_exp, $telephone)) {
						$error_message[] = ['telephone' => 'The Telephone Number you entered does not appear to be valid'];
						$has_errors = true;
					}



					//$date_exp = "/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/";
					//if(!preg_match($date_exp,$DoB)) {
					//$error_message .= 'The Date of Birth you entered does not appear to be valid.<br />';
					//}  
					
					$email_message = "Form details below.\n\n";

					function clean_string($string) {
						$bad = array("content-type", "bcc:", "to:", "cc:", "href");
						return str_replace($bad, "", $string);
					}

					$email_message .= "First Name: " . clean_string($first_name) . "\n";
					$email_message .= "Last Name: " . clean_string($last_name) . "\n";
					$email_message .= "Email: " . clean_string($email_from) . "\n";
					$email_message .= "Telephone: " . clean_string($telephone) . "\n";
					$email_message .= "Date of Birht: " . clean_string($DoB) . "\n";
					$email_message .= "Home Address: " . clean_string($address) . "\n";
					$email_message .= "Country: " . clean_string($country) . "\n";
					$email_message .= "Comments: " . clean_string($comments) . "\n";
					$email_message .= "terms: " . clean_string($terms) . "\n";


					echo "Send to: $email_to \n";
					echo "Subject: $email_subject \n";
					echo $email_message;
				}
				?>
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
