<?php
$pageTitle = 'Account settings';
$dir = '../intelfeed/index.php';
require_once('../classes/DB.php');
include '../classes/Login.php';
if(Login::isLoggedIn())
{
	include '../loggedin/overall/header.php';
}

?>
<div class="wrapper" style="margin: 0 auto; padding-top: 32px;">
	<div style="max-width: 1200px; margin: 0 auto;">
		<div style="width: 100%; text-align: center; padding-top: 105px;">
			<div class="settings-grid">
				<div class="settings-nav">
				</div>
				<div class="settings">
				</div>
			</div>
		</div>
	</div>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Log out</h2>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to log out?</p>
      <form action="../logout.php" class="logout">
      	<input type="checkbox" name="alldevices" value="alldevices">Log out of all devices?</input>
      	<br>
      	<input type="submit" name="confirm" value="Confirm"></input>
      </form>
    </div>
    <div class="modal-footer">
    	<div style="margin: 10px 0;">&nbsp;</div>
    </div>
  </div>
</div>

<?php include '../loggedin/overall/footer.php'; ?>