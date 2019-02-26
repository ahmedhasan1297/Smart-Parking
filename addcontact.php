<?php
	$name=$_POST['cname'];
	$empid=$_POST['c_emp_id'];
	$email=$_POST['c_email'];
	$password=$_POST['c_password'];
	$gender=$_POST['c_gender'];
	$vehicle_no=$_POST['c_vehicle_no'];
	$phoneno=$_POST['c_phone_no'];
	//creating a connection to database
	$conn=new mysqli("localhost","root","","smartparking");
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->error);
	}
	$sql="INSERT INTO registration (name, emp_id, mail_id, password, gender, vehicle_no, phoneno) VALUES ( '$name', '$empid', '$email', '$password', '$gender', '$vehicle_no', '$phoneno')";
	//$query=mysqli_query($conn,$sql);
	//executing and checking if the query executed 
	if ($conn->query($sql))
	{
		echo "Successful";
	}
	else
	{
		echo "Error:" .$sql. "<br>" . $conn->error;
	}
	mysqli_close($conn);
?>