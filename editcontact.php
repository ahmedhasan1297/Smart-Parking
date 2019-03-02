<?php
	$empid=$_POST['c_emp_id'];
    //$group_name=$_POST['gname'];
	$data1=array();
	$conn = new mysqli('localhost', 'root', 'root', 'smartparking'); 
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "DB Connection Successful";
	$sql = "SELECT * FROM registration where emp_id='$empid'";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{    
    while($row = $result->fetch_assoc()) 
    	{
	       array_push($data1,array('name'=>$row['name'],'emp_id'=>$row['emp_id'],'email'=>$row['mail_id'],'vehicle_no'=>$row['vehicle_no'],'phoneno'=>$row['phoneno']));
	    }
	}
	else 
	{
	    echo "0";
	}
	echo json_encode($data1);
?>