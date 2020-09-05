<?php
// $servername = "cloudmysql.gotdns.ch";
// cloudmysql.duckdns.org

// $dbusername = "asef";
// $dbpassword = "qZ{jDZSxycn+&y56";
// $dbname = "polapain";
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "testfb";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>