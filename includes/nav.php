<nav>
				<ul id="main_nav">
					<li class="first <?php if($page == "home") echo "active"; ?>"><a href="index.php">Home</a></li>
					<li <?php if($page == "about") echo 'class="active"'; ?>><a href="about.php">About</a></li>
					<li <?php if($page == "blog") echo 'class="active"'; ?>><a href="blog.php">Blog</a></li>
					<li <?php if($page == "pro_tips") echo 'class="active"'; ?>><a href="index.php?pro_tips=1" class="pro_tips_link">Pro Tips</a></li>
					<li class="last <?php if($page == "contact") echo "active"; ?>"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>