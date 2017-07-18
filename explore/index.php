<?php
$pageTitle = 'Explore mostWanted';
$dir = '../intelfeed/index.php';
require_once('../classes/DB.php');
include '../classes/Login.php';
if(Login::isLoggedIn())
{
	include '../loggedin/overall/header.php';
}

else
{
	include '../includes/overall/header.php';
}

?>
<div class="wrapper" style="margin: 0 auto; padding-top: 32px;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <div style="width: 100%; text-align: center; padding-top: 65px;">
      <div class="feed">
        <div class="user-post">
          <div class="post-wrapper" style="max-width: 650px;">
            <div class="user-link">
              <a style="position: relative;" href="../profile/index.php" style="padding: 12px; margin-right: 10px;">
                <div class="pull-left" style="margin-right: 10px">
                  <img class="media-object" style="width: 50px; height: 50px;">
                </div>
              </a>
              <div style="overflow: hidden; margin-top: 10px; text-align: left;"><a href="../profile/index.php" target="_blank">User</a></div>
            </div>
              <p style="clear: both; padding: 0 20px 10px; word-wrap: break-word; text-align: left;">LALALALALALA Body</p>
            <div class="post-tags">
              <span>
              <!-- foreach here -->
                <div class="tag post-category">
                  <a href="#">Piano</a>
                </div>
              <!-- endforeach -->
              </span>
              <span>
                <div class="tag post-topic">
                  <a href="#">Violin</a>
                </div>
              </span>
              <span>
                <div class="tag post-topic">
                  <a href="#">...</a>
                </div>
              </span>
            </div>
            <div class="interaction-wrapper">
              <div class="post-reactions" style="float: left;">
                <span>X Approved</span> 
                <span>X Void</span>
              </div>
              <div class="post-engagement" style="text-align: right; overflow: hidden;">
               <span>X Comments</span> 
               <span>X Shares</span>
              </div>
              <div class="user-interaction">
                <ul>
                  <li>Approve</li> 
                  <li>Void</li>
                  <li>Comment</li> 
                  <li>Share</li>
                </ul>
              </div> 
              </div>
            </div>
          </div>
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