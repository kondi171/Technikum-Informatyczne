<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>ThrustMaster</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<div id="logo">
		<font color="maroon">Thrust </font>Master
		</div>
		
		<div id="menu">
			<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
		</form>
			<div class="optionL"><a href="index.php">Strona główna</a></div>
			<div class="optionL"><a href="rejestracja.php">Rejestracja</a></div>
			<div class="optionL"><a href="#">Zasady</a></div>
		</div>
		
		<div id="content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere lacinia ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

		<p>In consectetur id eros eget luctus. Nam 
		porttitor odio quam, a ornare ante posuere at. 
		Nunc justo tellus, laoreet ac pretium in, aliquet 
		at leo. Lorem ipsum dolor sit amet, consectetur
		adipiscing elit. Curabitur at luctus magna. Ut sit 
		amet orci mauris. Duis in augue ullamcorper,
		elementum purus vel, iaculis felis. Aliquam at 
		purus erat.</p>
		<p>Aenean ut dignissim ex. Nulla congue augue quis facilisis 
		tincidunt. Maecenas malesuada purus a tempor sodales. Donec
		iaculis erat vitae massa congue tempus. In a erat fringilla, 
		vulputate nunc a, fermentum sem. Cras ultrices lacus eget turpis
		viverra sodales. Suspendisse ultricies ipsum et venenatis auctor.
		In sed elit augue.</p>

		
		</div>
	
		<div class="socials">
				<div class="socialdivs">
				<center>
				<div class="yt">
					<a href="http://www.youtube.com" target="_blank" class="tilelink" />
					<i class="icon-youtube"></a></i>
				</div>
					<div class="fb">
						<a href="http://www.facebook.com" target="_blank" class="tilelink" />
						<i class="icon-facebook"></a></i>
					</div>
					<div class="gplus">
					<a href="http://www.googleplus.com" target="_blank" class="tilelink" />
					<i class="icon-googleplus-rect"></a></i>
				</div>
					<div class="tw">
					<a href="http://www.twitter.com" target="_blank" class="tilelink" />
					<i class="icon-twitter"></a></i>
				</div>
				</center>
				<div style="clear:both;"></div>
			
				</div>
				</div>
				
		<div id="footer"> Wszelkie prawa zastrżeżone &copy Najlepsze na rynku konsole! </div>

	</div>

	
</body>
</html>
