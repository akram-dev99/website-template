<?php
 require_once("config.php");
require_once("contact-mail.php");
htmlspecialchars($_SERVER['PHP_SELF']);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$firstName = test_input($_POST["fname"]);
	$lastName = test_input($_POST["lname"]);
	$email = test_input($_POST["email"]);
	$country = test_input($_POST["country"]);
	$phone = test_input($_POST["phone"]);
	$message = test_input($_POST["message"]);
}


function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//send query to data base

$sql = "INSERT INTO skyEagle (first_name, last_name, email, country, phone_number, message) VALUES ('$firstName' , '$lastName' , '$email' , '$country' , '$phone' , '$message')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}

mysqli_close($conn);
	
?>