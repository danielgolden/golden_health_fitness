<?php 

$page = "about";

include ('includes/top.php') 

?>

	<div id="container">
	
		<header>
			<a class="header_logo_link" href="index.php"><h1 id="logo">Golden Health & Fitness</h1></a>
			<p class="subtitle">Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis.</p>
	
			<?php include('includes/nav.php') ?>

		</header>
		
		<section class="main_content about">
			
			<h2 id="about_h2">Our Mission: Revolutionize your view on health, fitness, and lifestyle.</h2>

			<div class="about_col">
				<img src="images/health_icon.jpg" alt="" />
				<h4>Health Solutions</h4>
				<p>
				In today’s market, we are dealing with an ultra-informed consumer.  There’s lots of information out there that’s up for the taking.  However, one of the questions I get a lot has to deal with <a href="#">validity of info</a>.  Yes, there are tons of people voicing their opinions about health and fitness.
				</p>
			</div> <!-- end .about_col_1 -->
			<div class="about_col">
				<img src="images/long_life_icon.jpg" alt="" />
				<h4>Longevity of Life</h4>
				<p>
				Proin metus odio, aliquam eget molestie nec, gravida <a href="#">ut sapien</a>. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula <a href="#">egestas tincidunt</a>.
				</p>
			</div> <!-- end .about_col_2 -->
			<div class="about_col last">
				<img src="images/products_icon.jpg" alt="" />
				<h4>Our Products</h4>
				<p>
				Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien sto in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Morbi euismod magna ac lorem <a href="#">rutrum elementum</a>. Donec viverra auctor lobortis.
				</p>
			</div> <!-- end .about_col_3 -->

			<hr />

			<nav class="secondary_nav">
				<ul>
					<li id="current"><a href="#about_first_primary">Mission</a></li>
					<li><a href="#about_second_primary">Resources</a></li>
					<li><a href="#about_third_primary">Contact Us</a></li>
					<li><a href="#about_fourth_primary">Help</a></li>
				</ul>
			</nav>

			<div id="about_primary" class="group">
				<h4 id="about_first_primary">Mission &amp; Passion</h4>
				<p>
				Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula egestas tincidunt. Nullam risus. Pellentesque eu est a nulla placerat dignissim.
				</p>
				<p>
				Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat.
				</p>
				<p>
				Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. <a href="#">Etiam scelerisque</a>, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue.
				</p>

				<hr />

				<h4 id="about_second_primary">Resources</h4>
				<p>
				Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue.
				</p>

				<ul>
					<li>Lacina vel velit</li>
					<li>Morbi a enim in magna semper</li>
					<li>Lorem ipsum dolor</li> 
				</ul>

				<hr />

				<h4 id="about_third_primary">Contact</h4>
				<p>To contact us please see our information and contact form <a href="contact.php">here</a>.</p>

				<hr />

				<h4 id="about_fourth_primary">Help</h4>
				<p>
				Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula egestas tincidunt. Nullam risus. Pellentesque eu est a nulla <a href="#">placerat</a> dignissim.
				</p>

				<hr />
			</div> <!-- end #about_primary -->

		</section><!-- end .main_content -->
	</div><!-- end #container div -->
	
<?php include ('includes/bottom.php') ?>