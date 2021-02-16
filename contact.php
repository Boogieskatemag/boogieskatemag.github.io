<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta meta name="description" content="Boogie Skate Mag">
		<title>About Boogie</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<a href="index.html"><img src="images/Logo_White.png" alt="Boogie Logo" height="100px"/></a><br>
			The Bronx Skate Magazine
			<nav class="topnav">
				<!-- Centered link -->
				<div class="topnav-centered">
					<a href="index.html" class="active">Home</a>
				</div>

				<!-- Left-aligned links (default) -->
				<a href="videos.html">Videos</a>
				<a href="photos.html">Photos</a>

				<!-- Right-aligned links -->
				<div class="topnav-right">
					<a href="articles.html">Articles</a>
					<a href="about.html">About</a>
				</div>
				
			</nav>
		</header>
		<main>
		<?php 
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$email = $_POST['email'];
			$message = $_POST['subject'];
			$formcontent="From: $fname $lname \n Message: $subject";
			$recipient = "boogieskatemag@gmail.com";
			$subject = "Contact Form";
			$mailheader = "From: $email \r\n";
			mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
			echo "Thank You!";
		?>
		</main>
		<footer>
			<hr>
			<p>Made in America.<br>Est. 2020<br>Until Infinity</p>
		</footer>
	</body>

</html>