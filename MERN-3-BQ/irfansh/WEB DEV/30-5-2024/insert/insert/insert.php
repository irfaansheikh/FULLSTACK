<?php
$conn= mysqli_connect("localhost","root","","db");
if($conn->connect_error){
	echo "connection failed";
}

$n=$_GET["n"];
$p=$_GET["pass"];
$em=$_GET["email"];
$d=$_GET["dob"];
$no=$_GET["num"];
$color=$_GET["color"];
$gender=$_GET["gender"];
$pro=$_GET["pro"];
$skill=$_GET["chk"];
$s=implode(",",$skill);

$q="INSERT INTO form(name,password,email,dob,color,luckyno,gender,province,skill) VALUES('$n','$p','$em','$d','$color','$no','$gender','$pro','$s')";

if($conn->query("$q")==TRUE){
	echo "data entered sucesfull";
}
else
{
	echo "data entered unsucesfull";
}


?>