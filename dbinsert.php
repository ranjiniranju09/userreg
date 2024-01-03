<?php
include("connection.php");
if(isset($_POST["Submit"]))
{

	$Fullname=$_POST["fname"];
	$Email=$_POST["email"];
	$Mobile_no=$_POST["mobno"];
	$Password=$_POST["pwd"];
	$confirmPassword=$_POST["cnfmpwd"];
	//mysql_query("INSERT INTO login VALUES (null, '$Email', '$Password', 'user')");
	//$login_id = mysql_insert_id();
	//$qry=mysql_query("INSERT INTO userdetails VALUES (null, '$login_id', '$Fullname', '$Email', '$Mobile_no')");
	$sql1= "INSERT INTO login values ('null','$Email','$Password','user')";
	$sql = "INSERT INTO userdetails VALUES ('null','001','$Fullname','$Email','$Mobile_no')";
	if (($conn->query($sql) === TRUE) && ($conn->query($sql1) ==TRUE)) {
    echo "New record created successfully";
} else {
    echo $conn->error() ;
}
	

}

?> 