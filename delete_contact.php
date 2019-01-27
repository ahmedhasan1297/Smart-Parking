<?php
	$empid=$_POST['c_emp_id'];
	//creating a connection to database
	$conn=new mysqli("localhost","root","","smartparking");
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->error);
	}
	$sql="DELETE FROM registration where emp_id='$empid'";
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