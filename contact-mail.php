<?php 
if(isset($_POST['submit'])){
    $to = "akram.dev99@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $subject = "Form submission";
    
    $message = $firstName . " " . $lastName . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // sends a copy of the message to the sender
    header('Location:thank-you.html'); 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>