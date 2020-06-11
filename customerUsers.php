<?php
require_once "config.php";
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];


$sql = "INSERT INTO customerprofile (name, phone, email,address) VALUES ('$name','$phone','$email','$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>