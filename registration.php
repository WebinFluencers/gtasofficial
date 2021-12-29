<?php

session_start();

$con = mysqli_connect('localhost','root','1234');

mysqli_select_db($con, 'website');

$name = $_POST['user'];
$pass = $_POST['Password'];


$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "username already taken";
}else{
	$reg= "insert into usertable(name , Password) value ('$name' , '$pass')";
	mysqli_query($con , $reg);
	echo"Registration Sucessful";
}

?>


