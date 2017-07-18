<header>
	<div class="container">
		<div class="header-brand">
			<a href="<?php echo $dir; ?>" title="Home"><img src="../images/mW_black.png"></a>
		</div>
		<div class="searchbox-wrapper">
			<div class="searchbox">
				<form>
					<input type="text" placeholder="Investigate mostWanted"></input>
					<button type="submit">Search</button>
				</form>
			</div>
		</div>
		<nav class="navbar">
		<ul class="header-nav">
			<a href="../intelfeed/index.php" title="Newsfeed"><li class="navbar-menu">My Intel</li></a>
			<a href="../explore/index.php" title="Explore"><li class="navbar-menu">Explore</li></a>
			<li class="navbar-menu">Notifications</li>
			<li class="dropdown navbar-menu">Profile
				<ul class="dropdown-content" style="z-index: 18; background: white;">
					<a href="../profile/index.php" style="cursor: default;"><li>Profile</li></a>
					<a href="../settings/index.php" title="Account settings"><li>Settings</li></a>
					<a title="Log out"><li id="logout" style="border-bottom: 1px solid black;">Log out</li></a>
				</ul>
			</li>
		</ul>
		</nav>
	</div>
</header>