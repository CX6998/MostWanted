<?php
  echo $_GET['msg']=='1'?'this is abc/index':'this is not page';
?>

		<article class="accordion">
			<ul>
				<li>
					<h2 class="top-tab"><a class="selected top-tab" href="#about">About</a></h2>
					<section class="about active">
						<div class="about-menu">
							<nav>
								<a>Mission & Values</a>
								<a>Founders</a>
							</nav>
							<div class="content">
								<p>Our mission is to help people prepare and build a better tomorrow through providing information for users to find direction and explore their future.</p>
								<br>
								<blockquote>“The only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle.”<br><br>
								-Steve Jobs</blockquote>

							</div>
							<div class="content">
								<p>Hello there! <br><br>The reason we built mW is because I believe in the cycle of individual improvement leading to communal improvement, and communal improvement means society improves; the exact same goes for happiness. <br><br>I sincerely hope MW can help you achieve the best outcomes in your life, and improve our global society.</p>
							</div>
						</div>
					</section>
				</li>
				<li>
					<h2 id="signup" class="sep-top"><a href="#register">Register</a></h2>
					<section class="signup-form" id="signup">
					<div style="width: 100%; text-align: center;">
						<h3 class="intro" style="font-size: 18px;">It's free <b>and always will be</b></h3>
					</div>
					<div class="form-wrapper" style="padding-top: 0;">
						<form role="form" id="register">
							<table class="user_name">
								<tbody>
									<tr>
										<td>
											<input class="f_n" placeholder="First name" name="fn" type="text" id="fn" value="<?php echo escape(Input::get('f_n')); ?>" required></input>
											<div class="error-container" id="fnerror"></div>
										</td>
										<td style="width: 220px;">
											<input class="surname" placeholder="Last name" name="ln" type="text" id="ln" value="<?php echo escape(Input::get('last_name')); ?>" required></input>
											<div class="error-container" id="lnerror"></div>
										</td>
									</tr>
								</tbody>
							</table>
							<input placeholder="Email" class="email" type="email" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>" required></input>
							<div class="error-container" id="eerror"></div>
							<input placeholder="Password" id="pw" class="pw" type="password" name="pw" value="<?php echo escape(Input::get('pw')); ?>" required></input>
							<div class="error-container" id="pwerror"></div>
							<input placeholder="Confirm password" class="r_pw" type="password" name="c_psw" id="c_psw" value="<?php echo escape(Input::get('c_psw')); ?>" required></input>
							<div class="error-container" id="repassword"></div>
							<p class="user-agreement">When you create an account, you will agree to our <a>Terms</a> and that you have read our <a>Data Policy</a>, including our <a>Cookie Use</a>.</p>
							<div style="height: 85px;"></div>
							<input type="hidden" value="<?php echo Token::generate(); ?>"></input>
							<input type="submit" value="Create an account" class="btn btn-auth"></input>
						</form>
					</div>
					<div class="social-login">
						<p>Or sign up with:</p>
						<div>
							<table>
								<tbody>
									<tr>
										<td><img id="facebook" src="images/social-icons/icon-fb.png"></td> 
										<td><img id="twitter" src="images/social-icons/icon-twitter.png"></td>
										<td><img id="linkedin" src="images/social-icons/icon-linkedin.png"></td>
										<td><img id="google-plus" src="images/social-icons/icon-google+.png"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					</section>
				</li>
				<li>
				<h2 class="sep-top"><a href="#login">Login</a></h2>
				<section class="login-form">
					<div class="form-wrapper">
						<form role="form" method="post" action="login.php">
							<input placeholder="Email" type="email"></input>
							<input placeholder="Password" type="password" name="password" id="password"></input>
							<input type="submit" value="Login" class="btn btn-auth"></input>
						</form>
						<table class="account-recovery">
							<tbody>
								<tr>
									<td style="padding-right: 10px;"></td>
									<td style="padding-left: 10px;"><a href="">Forgot your password?</a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="social-login">
						<p>Login with:</p>
						<div>
							<table>
								<tbody>
									<tr>
										<td><img id="facebook" src="images/social-icons/icon-fb.png"></td> 
										<td><img id="twitter" src="images/social-icons/icon-twitter.png"></td>
										<td><img id="linkedin" src="images/social-icons/icon-linkedin.png"></td>
										<td><img id="google-plus" src="images/social-icons/icon-google+.png"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
				</li>
				<li class="sep-top">
					<table class="accordion-footer">
						<tbody>
							<tr>
								<td>User agreement</td>
								<td>Privacy policy</td>
								<td>&#9400;mostWanted 2016</td>
								<td>Cookie policy</td>
								<td>Language</td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>
		</article>

		<!-- Tabs
.top-tab
{
	border-top-left-radius: 16px;
	border-top-right-radius: 16px;
}
.about-menu 
{
	position: relative;
	background: transparent;
	box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.2);
	width: 100%;
}

.about-menu nav 
{
	display: flex;
	flex-wrap: wrap;
	align-items: stretch;
	color: black;
	text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.2);
	width: 150px;
	height: 250px;
}

.about-menu nav a 
{
	padding: 53px 0px;
	text-align: center;
	width: 100%;
	cursor: pointer;
	box-shadow: inset -5px 0px 18px -6px rgba(0,0,0,0.21);
	-webkit-box-shadow: inset -5px 0px 18px -6px rgba(0,0,0,0.21);
	-moz-box-shadow: inset -5px 0px 18px -6px rgba(0,0,0,0.21);
}

.about-menu nav a:hover
{
	background-color: black;
	color: white;
}

.about-menu nav a.selected 
{
	background: white;
	color: black;
	text-shadow: 1px 1px 1px rgba(255, 255, 255, 255);
	-webkit-box-shadow: 0px 4px 17px 0px rgba(0,0,0,.3);
	-moz-box-shadow: 0px 4px 17px 0px rgba(0,0,0,.3);
	box-shadow: 0px 4px 17px 0px rgba(0,0,0,.3);
}

.about-menu .content 
{
	padding: 20px 0px;
	position: absolute;
	top: 0px;
	left: 150px;
	color: black;
	width: 0px;
	height: 100%;
	overflow: hidden;
	opacity: 0;
	transition: opacity 0.1s linear 0s;
}

.about-menu .content.visible 
{
	padding: 12px;
	width: 550px;
	overflow: hidden;
	opacity: 1;
	background-color: white;
}

.about-menu .content p 
{
	padding-bottom: 2px;
}

.about-menu .content p:last-of-type
{
	padding-bottom: 0px;
	font-size: 18px;
	text-align: left;
}
**/


/* Register + Login forms */
/*.width: 50%-form, .login-form, .contact-form
{
	width: 100%; 
	max-width: 100%; 
	margin: 0 auto;
	font-family: "Lucida Sans Typewriter", "Lucida Console", Monaco, "Bitstream Vera Sans Mono", monospace;
	font-weight: normal;
}

.form-wrapper
{
	width: 100%; 
	color: #999; 
	padding-top: 20px;
	margin: 0 auto;
	font-size: 20px;
}

.signup-form input, .login-form input, .contact-form input
{
	max-width: 450px;
	width: 100%;
	margin-bottom: 15px;
	padding: 6px 12px;
	border-radius: 2px;
	border: 1px solid #ccc;
	display: block;
	color: #555;
	font-size: 14px;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	font-family: "Lucida Sans Typewriter", "Lucida Console", Monaco, "Bitstream Vera Sans Mono", monospace;
	box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

.user_name
{
	width: 450px;
	border-spacing: 0 !important;
}

.f_n
{
	width: 220px !important;
	float: left !important;
}

.surname
{
	width: 220px !important;
	float: right !important;}

.error-container
{
	font-size: 11px;
	color: #da0707;
}

.valid-container
{
	font-size: 11px;
	color: rgb(22, 134, 14);
}

.user-agreement
{
	font-size: 12px !important;
	text-align: left !important;
	color: black !important; 
	padding: 3px 0 !important;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.user-agreement a
{
	color: #005fe4;
}

.user-agreement a:hover
{
	font-weight: 500;
	text-decoration: underline;
}

.signup-form input[type="submit"]:focus
{
	outline: none;
}

.signup-form form, .login-form form, .contact-form form
{
	width: 450px;
	margin: 0 auto;
}

.social-login 
{
	width: 450px; 
	margin: 0 auto;
}

.social-login p
{
	text-align: center;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.social-login div
{
	display: inline;
}

.social-login div>table
{
	margin: 0 auto;
}

.social-login div>table img
{
	width: 34px;
}

.social-login div>table img#facebook, .social-login div>table img#linkedin, .social-login div>table img#google-plus
{
	border-radius: 4px;
}

.login-form input[type="text"]:focus
{
	border-color: #66afe9;
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);	
}

.login-form input[type="submit"]:focus
{
	outline: none;
}

.account-recovery
{
	margin: 0 auto;
}

.account-recovery td a
{
	font-size: 16px;
}

.account-recovery td a:hover
{
	text-decoration: underline;
	font-weight: 500;
}

.sep-top
{
	border-top: 1px solid rgba(0,0,0,0.1);
} -->