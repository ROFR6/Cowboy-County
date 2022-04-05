<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost","ross","Irish18!Roster9!","cc_tokens");

// get the post records
$id = $_POST['id'];
$owner = $_POST['owner'];
$isStaked = $_POST['isStaked'];
$timeStaked = $_POST['timeStaked'];

// database insert SQL code
$sql = "INSERT INTO `tokens` (`id`, `owner`, `isStaked`, `timeStaked`) VALUES ('$id', '$owner', '$isStaked', '$timeStaked')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>