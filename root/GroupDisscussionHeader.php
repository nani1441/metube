<?php
	session_start();
if(!$_SESSION["username"]){
$url = $_SERVER['REQUEST_URI'];
echo "<meta http-equiv=\"refresh\" content=\"0;url=Login.php?url=$url\">";
}
include('connect.php');
require('Header.php');

$username=$_SESSION['username'];
$uid=$_SESSION['id'];

echo "<div id='messaging'>";
echo "<li>";
echo "<a id=\"viewFDiss\" href=\"ViewFDisscussions.php\" target=\"_self\">View Disscussions</a>";
echo "</li>";
echo "<li>";
echo "<a id=\"start\" href=\"StartDiscussion.php\" target=\"_self\">Start Disccussion</a>";
echo "</li>";
echo "<li>";
echo "<a id=\"viewDiss\" href=\"ViewDisscussions.php\" target=\"_self\">My Disscussions</a>";
echo "</li>";
echo "</div>";

?>