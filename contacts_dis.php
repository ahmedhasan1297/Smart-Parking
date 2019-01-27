<?php
    //$group_name=$_POST['gname'];
	$data1=array();
	$conn = new mysqli('localhost', 'root', '', 'smart-parking'); 
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "DB Connection Successful";
	$sql = "SELECT name,emp_id,vehicle_no,phoneno FROM registration";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{    
    while($row = $result->fetch_assoc()) 
    	{
	       array_push($data1,array('name'=>$row['name'],'emp_id'=>$row['emp_id'],'vehicle_no'=>$row['vehicle_no'],'phoneno'=>$row['phoneno']));
	    }
	}
	else 
	{
	    echo "0";
	}
	echo json_encode($data1);
?>