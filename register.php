<?php
	$name=$_POST['fname'];
	$empid=$_POST['empid'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$vehicle_no=$_POST['vehicle_no'];
	$phoneno=$_POST['phnno'];
	//creating a connection to database
	$conn=new mysqli("localhost","root","root","smartparking");
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
		header('Location: login.html');
	}
	else
	{
		echo "Error:" .$sql. "<br>" . $conn->error;
		header('Location: regis.html');
	}
	mysqli_close($conn);
?>