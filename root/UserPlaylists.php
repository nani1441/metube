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
echo "<a id=\"create\" href=\"CreatePlaylist.php\">Create Playlist</a><br/>";
echo "</li>";
echo "<li>";
echo "<a id=\"view\" href=\"ViewPlaylist.php\">View Playlists</a><br/>";
echo "</li>";
echo "</div>";

?>