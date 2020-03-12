<?php
if(isset($_POST['submit'])){
$servername = "shareddb-r.hosting.stackcp.net";
$username = "skyeagle-db-3132335c83";
$password = "}a+s~wylw[5i";
$dbname = "skyeagle-db-3132335c83";

$conn = new mysqli("shareddb-r.hosting.stackcp.net", "skyeagle-db-3132335c83", "}a+s~wylw[5i", "skyeagle-db-3132335c83");
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
}
?>