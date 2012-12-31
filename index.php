<?php 

$page = "home";

include ('includes/top.php') 

?>

	<div id="container">
	
		<header>
			<a class="header_logo_link" href="index.php"><h1 id="logo">Golden Health & Fitness</h1></a>
			<p class="subtitle">Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis.</p>
	
			<?php include('includes/nav.php') ?>
			
		</header>
		
		<section class="main_content">
			<div id="slider" class="nivoSlider">
			    <img src="images/temp/slide_1.jpg" alt="" title="#slide_1_caption" />
			    <img src="images/temp/slide_1.jpg" alt="" title="#slide_2_caption" />
			    <img src="images/temp/slide_1.jpg" alt="" title="#slide_1_caption" />
			    <img src="images/temp/slide_1.jpg" alt="" title="#slide_2_caption" />
			</div>
			
			<div id="slide_1_caption" class="nivo-html-caption">
			    <h2>Pellentesque eu est a nulla.</h2>
			    <p>
			    Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis 
			    sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo.
			    </p>
			    <a class="slider_button" href="#">Learn More</a>
			    <a class="slider_button primary" href="#">Get Started <span class="slider_button_2_highlight"></span></a>
			</div><!-- end #slide_1_caption -->

			<div id="slide_2_caption" class="nivo-html-caption">
			    <h2>Pellentesque eu est a nulla lorem donec justo.</h2>
			    <p>
			    Phasellus quis est sed turpis 
			    sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo.
			    </p>
			    <a class="slider_button" href="#">Learn More</a>
			    <a class="slider_button primary" href="#">Get Started <span class="slider_button_2_highlight"></span></a>
			</div><!-- end #slide_1_caption -->
			
			<section class="home_col">
				<h3>Latest Tips</h3>
				<div class="home_tip">
					<h4>Eros interdum pellentesque faucibus vestibulum.</h4>
					<p class="date">10/30/11</p>
					<p class="description">Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis.</p>
					<a href="#" class="button_1">See More &raquo;</a>
				</div>
				<div class="home_tip">
					<h4>Phasellus quis est sed</h4>
					<p class="date">11/6/11</p>
					<p class="description">Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere...</p>
					<a href="#" class="button_1">See More &raquo;</a>
				</div>
				<div class="home_tip">
					<h4>Praesent id metus massa</h4>
					<p class="date">11/10/11</p>
					<p class="description">In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor faucibus...</p>
					<a href="#" class="button_1">See More &raquo;</a>
				</div>
				<!--[if lt IE 8]>    
					<div class="home_tip">
						<h4>Eros interdum pellentesque faucibus vestibulum.</h4>
						<p class="date">10/30/11</p>
						<p class="description">Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis.</p>
						<a href="#" class="button_1">See More &raquo;</a>
					</div>
					<div class="home_tip last">
						<h4>Phasellus quis est sed</h4>
						<p class="date">11/6/11</p>
						<p class="description">Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere...</p>
						<a href="#" class="button_1">See More &raquo;</a>
					</div>
				<![endif]-->
			</section>
			
			<section class="home_col">
				<h3>Recent Videos</h3>
				<div class="home_recent_video_preview group">
					<img src="images/temp/recent_videos_small_thumb_1.jpg" class="home_recent_video_preview_thumb" alt="Video Preview Thumbnail" />
					<h4>Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum.</h4>
					<p class="date">11/3/11</p>
				</div>
				<div class="home_recent_video_preview group">
					<img src="images/temp/recent_videos_small_thumb_2.jpg" class="home_recent_video_preview_thumb" alt="Video Preview Thumbnail" />
					<h4>Lorem ipsum dolor sit amet, u consectetur...</h4>
					<p class="date">11/23/11</p>
				</div>
				<div class="home_recent_video_preview group">
					<img src="images/temp/recent_videos_small_thumb_1.jpg" class="home_recent_video_preview_thumb" alt="Video Preview Thumbnail" />
					<h4>Sed auctor neque eu tellus rhoncus nulla...</h4>
					<p class="date">11/29/11</p>
				</div>
				<div class="home_recent_video_preview group">
					<img src="images/temp/recent_videos_small_thumb_3.jpg" class="home_recent_video_preview_thumb" alt="Video Preview Thumbnail" />
					<h4>Sed auctor neque eu tellus rhoncus nulla...</h4>
					<p class="date">11/29/11</p>
				</div>
				
				<a href="#" class="button_1">View All &raquo;</a>
			</section>
			
			<section class="home_col last">
				<h3>Twitter Updates</h3>
				<div class="tweet group">
					<p class="tweet_content">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia clear, Proin vel ante a <span class="hash_tag">#orci</span>.</p>
					<p class="time_stamp">23 minutes ago</p>
				</div>
				<hr class="tweet_sep" />
				<div class="tweet group">
					<p class="tweet_content">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. MIG Jones in pellentesque faucibus vestibulum.</p>
					<p class="time_stamp">2 hours ago</p>
				</div>
				<hr class="tweet_sep" />
				<div class="tweet group">
					<p class="tweet_content">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum AndyBogers.</p>
					<p class="time_stamp">2 hours ago</p>
				</div>
				<a href="#" class="button_1">View All &raquo;</a>
			</section>
			
			<hr class="home_hr" />
			
			<div class="home_content_slider_container weekly_recipes_slider">
				<h2>Weekly Recipes</h2>
				<a href="#" class="view_all">View All &raquo;</a>
				<img class="prev" src="images/prev_slide_arrow.jpg" alt="Prev" />
				<div class="home_content_slider">
					<div class="home_content_slide">
						<div class="home_content_slide_sec">
							<a href="#" class="slide_link">
							<img class="slide_thumb" src="images/temp/weekly_recipe_photo_1.jpg" alt=""/>
							<h5 class="slide_title">Frozen Cranberry Salad &aacute; la mode</h5>
							</a>
							<p class="slide_caption"><strong>Breakfast/200 Cal.</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p>
							
							<a href="#" class="button_1">See More &raquo;</a>
						</div><!-- end .slide_sec -->
						<div class="home_content_slide_sec">
							<a href="#" class="slide_link">
							<img class="slide_thumb" src="images/temp/weekly_recipe_photo_2.jpg" alt=""/>
							<h5 class="slide_title">Pineapple-Kiwi Salad</h5>
							</a>
							<p class="slide_caption"><strong>Lunch/175 Cal.</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p>
							<a href="#" class="button_1">See More &raquo;</a>
						</div><!-- end .slide_sec -->
						<div class="home_content_slide_sec last">
							<a href="#" class="slide_link">
							<img class="slide_thumb" src="images/temp/weekly_recipe_photo_3.jpg" alt=""/>
							<h5 class="slide_title">Roasted Peanuts &amp; Honey</h5>
							</a>
							<p class="slide_caption"><strong>Snack/530 Cal.</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p>
							<a href="#" class="button_1">See More &raquo;</a>
						</div><!-- end .slide_sec -->
					</div><!-- end .home_content_slide -->
				</div><!-- end #home_content_slider -->
				<img class="next" src="images/next_slide_arrow.jpg" alt="Next" />
			</div><!-- end #home_content_slider_container -->
			
		</section><!-- end .main_content -->
	</div><!-- end #container div -->
	
<?php include ('includes/bottom.php') ?>