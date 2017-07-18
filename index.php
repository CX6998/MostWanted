<?php 
$pageTitle = 'mostWanted | A place to become mostWanted';
$dir = 'index.php';
require_once 'classes/DB.php';
include './includes/overall/header.php'; 
include './classes/Login.php';
?>

<div class="wrapper" style="margin: 0 auto; padding-top: 32px;">
	<div style="max-width: 800px; margin: 0 auto;">
		<div style="width: 100%; text-align: center; padding-top: 105px;">
			<h1 class="intro">Explore your mostWanted.</h1>
			<h1 class="intro">Be mostWanted.</h1>
			<div class="content_container">
				<div class="content">
					<div class="signup_login">
						<div class="sign_up">
							<div class="register">
								<ul class="social_login">
									<li><a><button class="facebook_login">Sign up with Facebook</button></a></li>
									<li><a><button class="twitter_login">Sign up with Twitter</button></a></li>
									<li><a><button class="linkedin_login">Sign up with LinkedIn</button></a></li>
									<li><a><button class="google_login">Sign up with Google</button></a></li>
									<li><a><button id="register" class="email_login">Sign up with Email</button></a></li>
								</ul>
							</div>
							<form id="hidden" action="register.php" method="post" style="display: none;">
								<input type="text" name="f_n" value="" placeholder="First Name"></input>
								<input type="text" name="l_n" value="" placeholder="Last Name"></input>
								<input type="email" name="email" value="" placeholder="Email"></input>
								<input type="password" name="password" value="" placeholder="Password"></input>
								<div class="midreg">
									<span class="xreg"><a href="#" id="regback">Back</a></span>
									<input id="submit" name="register" type="submit" value="Create account"></input>
								</div>
							</form> 
						</div>
						<div class="login">
							<h2>Login</h2>
							<div class="login_form">
								<form action="login.php" method="post">
									<input type="email" name="email" value="" placeholder="Email"></input>
									<input type="password" name="password" value="" placeholder="Password"></input>
									<div class="logging">
										<span class="fpw"><a>Forgot password?</a></span>
										<input id="submit" name="login" type="submit" value="Log in"></input>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="terms">
					<span>By creating an account you indicate that you have read and agree to the <a>Terms of Service</a> and <a>Privacy Policy</a>.</span>
				</div>
			</div>
			<div class="menu">
				<nav>
					<ul>
						<li><a href="about.php" title="About mostWanted">About</a></li>
						<li><a title="Terms of Service">Terms</a></li>
						<li><a title="Privacy Policy">Privacy</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php

include 'includes/overall/footer.php'; 

?>