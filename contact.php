<?php 

$page = "contact";

include ('includes/top.php') 

?>

	<div id="container">
	
		<header>
			<a class="header_logo_link" href="index.php"><h1 id="logo">Golden Health &amp; Fitness</h1></a>
			<p class="subtitle">Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis.</p>
	
			<?php include('includes/nav.php') ?>

		</header>
		
		<section class="main_content">
			
			<div id="primary_col" class="cntct_primary">
				<h2 class="cntct_header">Contact Me</h2>	
				<h4 class="cntct_subheader">Interested in personal training?</h4>		
				<p class="cntct_description">Feel free to send me a message and let me know how we can help you. Whether it be directions, resources, 
				or a free pass to Crunch, I’m here for you.</p>	
				<hr class="cntct_hr" />

				<?php
				if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
				{

				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				$to = "danielgolden90@gmail.com";
				$subject = "Message From " . $name . " (Email: " . $email . ")";
				$headers = "From: contact@anitagolden.com";

				mail($to, $subject, $message, $headers);

				echo "<h3 class=\"cntct_form_success\"><strong>Thank you!</strong> Your message has been sent!</h3>";
				}

				elseif(isset($_POST['submit']))
				{
					if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
					{
					echo "<h3 class=\"cntct_form_error\">Please fill out all of the fields before sending your message.</h3>";
					}
				}
				?>

				<div id="cntct_form_container">
				<form action="contact.php" method="post">
					<span id="name_container">
						<label for="name_input">Name:</label>
						<input type="text" id="name_input" name="name" required />
					</span>
					<span id="email_container">
						<label for="email_input">Email:</label>
						<input type="email" id="email_input" name="email" required />
					</span>

					<label for="message_input" class="message_label">Message:</label>
					<textarea id="message_input" name="message"></textarea>

					<input type="submit" id="submit_button" name="submit" class="button_1" value="Send Message" />
				</form>
				</div>
			</div><!-- end #blg_primary -->

			<aside id="secondary_col" class="cntct_aside">
				<h3 class="aside_header">Contact Information</h3>
				<div class="aside_col_1">
					<h5 class="aside_address_name">Anita Golden</h5>
					<p class="aside_address">2905 North 7th Street,<br/>Harrisburg, PA<br/>(717) 233-1500</p>
					<a class="aside_email" href="emailto:nitag23@aol.com">nitag23@aol.com</a>
				</div><!-- end .aside_col_1 -->
				<div class="aside_col_2">
					<h5 class="address_name">Crunch Fitness</h5>
					<p class="aside_address">554 2nd Avenue<br/>New York, NY 10016<br/>(212) 545-9757</p>
					<a class="aside_email" href="emailto:anitagolden@crunchfitness.com">anitagolden@crunchfitness.com</a>
				</div><!-- end .aside_col_2 -->

				<hr class="cntct_hr" />

				<a href="http://newyork.citysearch.com/profile/photos/35816455#profileTab-maps">
					<img src="images/google_maps_crunch_thumb.jpg" alt="Map of Crunch Gym in Kips Bay" id="crunch_map" />
				</a>
			</aside>

		</section><!-- end .main_content -->
	</div><!-- end #container div -->
	
<?php include ('includes/bottom.php') ?>