﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>PHP Contact Form - kocakmhmt</title>
		<meta name="description" content="SMTP PHP Contact Form / kodofisi.org">
		<meta name="author" content="Mehmet Koçak">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>

</head>

<body>

		<center><img src="images/logo.png" alt="kocakmhmt logo"></center>



		<!-- Form -->

		<div class="linkler">
	<center><a class="active" href="#">Contact Form</a>  <a href="about.html">What is this?</a> <a  href="how.html">How to Use?</a> <b><a target="_blank" href="https://github.com/kocakmhmt/SMTP-PHP-Contact-Form">Download!</a></b> <a target="_blank" href="https://www.paypal.me/kocakmhmt"><img height="40" width="130" src="http://www.kocakmhmt.com/phpmailer/images/paypal.png"></a></center>
	</div>

		<div id="container">
			<h2>Contact Form</h2>
	<form class="form" id="contact_form" name="contact_form" method="post" action="inc/send.php">
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Your Name*"  required/>
			<label for="name">Name Surname<font color="red">*</font></label>
		</p>
		<p class="email">
			<input type="text" name="email" id="email" placeholder="mail@example.com*" required />
			<label for="email">Email<font color="red">*</font></label>
		</p>
		<p class="phone">
			<input type="text" name="phone" id="phone" placeholder="+00123456789*"  required/>
			<label for="phone">Phone<font color="red">*</font></label>
		</p>
		<p class="company">
			<input type="text" name="company" id="company" placeholder="Your company name" />
			<label for="web">Company</label>
		</p>
		<p class="sec">
		<select  name="subject">
		  <option value="General">General</option>
		  <option value="Product">Product Support</option>
		  <option value="New Business">New Business</option>
		  <option value="Other">Other</option>
		</select>
		<label>Subject</label>
		</p>

		<p class="text">
			<textarea name="message" id="message" placeholder="Your Message*"  required/></textarea>
			<label for="message">Message<font color="red">*</font></label>
		</p>

		<p class="submit">
			<input type="submit" value="Send" />
			<input type="reset" value="Reset" />
		</p>
	</form>

	</div>

	<div style="margin-top: 80px" id="send"></div>



	<!-- Form -->
<center><script type="text/javascript" src="http://app.winwords.adhood.com/92964,670,90"></script></center>


	<div class="footer">
	<p>Mehmet Koçak © 2015
<a href="http://twitter.com/kocakmhmt"><img src="images/twitter.png" /></a>
<a href="mailto:mkocak@kodofisi.org"><img src="images/mail.png" /></a></p>


	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47181399-2', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
