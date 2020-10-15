<?php
$server = "localhost"; //Host name 
$user = "root";		//Database user name 
$pass = "password";	//Database Password
$dbname = "ashfaqul"; //Database Name
 
//Creating connection for mysqli....
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection....
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
 
$sql = "INSERT INTO information (name, email, subject, message) VALUES ('$name', '$email', '$subject', 'message')"; 	//information= Table name
 
if($conn->query($sql) === TRUE){
 echo "Message Sent Sucessfully ...";
}
else
{
 echo "Error...." . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>