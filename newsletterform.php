<?php 
  //creating connection to database
$conn=mysqli_connect("127.0.0.1:3307","root","","newsletter") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $conn->real_escape_string($_POST['name']);
$Email = $conn->real_escape_string($_POST['email']);


  //query to insert the variable data into the database
$sql="INSERT INTO subscribers (name, email) VALUES ('".$Name."','".$Email."')";

  //Execute the query and returning a message
if(!$result = $conn->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   include ("success.php");
}

?>