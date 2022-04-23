<?php
	
	session_start();
	
		if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Cerca Trova</title>
	<meta name="description" content="Jesteś fanem Cerca Trova? wejdź i kup nasz produkt. Specjalnie dla fanów" />
	<meta name="keywords" content="Sklep, Koszulki, Kubki, Cerca Trova" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="style/style2.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="timer.js"></script>
	<script src="jquery.scrollTomin.js"></script>
	<script>
		jQuery(function($)
		{
			$.scrollto(0);
			
				$('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
		}
		);
		
		$(window).scroll(function()
		{
			if($(this).scrollTop()>300) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();		
		}
		);
	
	
	</script>
</head>

<body onload="odliczanie();" >

	<div class="container">
		<a href="#" class="order"></a>
		<div id="logo">
		<font color="gold">Cerca</font>Trova
		</div>
		
		<div id="Media">
			<div class="insta">
				<a href="https://www.instagram.com/" target="_blank" class="tilelink" title="Nasz Instagram" /><i class="icon-instagram"></i>
			</div>
			<div class="snap">
				<a href="https://www.snapchat.com/" target="_blank" class="tilelink" title="Nasz Snapchat"/><i class="icon-snapchat-ghost"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" title="Nasz Facebook"/><i class="icon-facebook"></a></i>
			</div>
		</div>
		</div>
		<div id="headstoper">
					<ol>
						<li><a href="home.php" title="Strona Główna serwisu Cerca Trova">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank" title="Tutaj się zarejestrujesz!">Rejestracja</a></li>	
						<li><a href="Regulamin.html" target="_blank" title="Przeczytaj regulamin aby móc korzystaćz naszych usług!">Regulamin</a></li>
						<li><a href="Sklep.php" title="Zamów nasze produkty!">Sklep</a></li>
						<li><a href="opinie.php" title="Opinie naszych użytkowników">Opinie</a></li>
						<li><a href="reklamacje.php" title="Możliwość zwrotu towaru w 14 dni!">Reklamacje</a></li>
						<li><a href="poczta.php" title="Skontaktuj się z innymi użytkownikami">Poczta</a></li>
						<li><a href="pomoc.php" title="Potrzebujesz pomocy?">Pomoc</a></li>
						<li><a href="Portfolio/linkowanie.html" target="_blank" title="Zapoznaj sie z moimi kwalifikacjami">O Autorze</a></li>
						
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
		</div>
		<div class="container">
		<?php
			echo "<b>Witaj ".$_SESSION['user']."!</b>";
		?>
		<div id="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est.<b><font color="gold"> Duis</b></font> id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere<b><font color="gold"> lacinia</b></font> ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

		<p>In consectetur id eros eget luctus. Nam 
		porttitor odio quam, a ornare ante posuere at. 
		Nunc justo tellus, laoreet ac pretium in, aliquet 
		at leo. Lorem ipsum dolor sit amet, consectetur
		adipiscing elit. <b><font color="gold">Curabitur at luctus magna.</b></font> Ut sit
		amet orci mauris. Duis in augue ullamcorper,
		elementum purus vel, iaculis felis. Aliquam at 
		purus erat.</p>
		</div>
			<a href="#" class="scrollup"></a>
			<div id="animacja">
				<img src="img/CT.png">
			</div>
		<div class="content">
		<p>In eros purus, vestibulum nec tempus a, sodales vel arcu.
		Fusce id tortor varius, pretium leo et, rutrum augue. Mauris sodales
		sem sem, et volutpat mi interdum nec. Nulla cursus efficitur leo et
		vehicula. <b><font color="gold" >Phasellus </b></font>feugiat mauris id massa rhoncus molestie.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra,
		per inceptos himenaeos. Aliquam interdum quam id lorem tincidunt,
		sit amet maximus sem fermentum. Sed id molestie leo. Integer placerat,
		lacus quis vehicula elementum, ante metus consequat metus, at vulputate
		nisl nisl a turpis. Donec urna lectus, <b><font color="gold">porttitor</b></font> ac dapibus ac, pellentesque
		ut elit.</p>

		<p>In consectetur id eros eget luctus. Nam 
		porttitor odio quam, a ornare ante posuere at. 
		Nunc justo tellus, laoreet ac pretium in, aliquet 
		at leo. <b><font color="gold">Lorem ipsum </b></font>dolor sit amet, consectetur
		adipiscing elit. Curabitur at luctus magna. Ut sit 
		amet orci mauris. Duis in augue ullamcorper,
		elementum purus vel, iaculis felis. Aliquam at 
		purus erat.</p>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem.<b><font color="gold"> Nunc</b></font> non massa 
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
		</div>
		
	</div>
	<div id="pause">
			<div id="img">
			<img src="pause2.png"/>
			</div>
			<div id="zegar">12:00:00</div>
	</div>
	<script src="jquery-3.2.1.min.js" ></script>
	
<script>

	$(document).ready(function() {
	var NavY = $('#headstoper').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('#headstoper').addClass('sticky');
	} else {
		$('#headstoper').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
</body>
</html>
