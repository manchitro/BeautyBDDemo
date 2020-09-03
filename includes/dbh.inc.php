<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "testfb";
// $servername = "localhost";
// $dbusername = "id14767558_fblivedemouser";
// $dbpassword = "y4RV7d5J20wN";
// $dbname = "id14767558_fblivedemodb";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>