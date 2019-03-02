<?php
    //$group_name=$_POST['gname'];
	$data1=array();
	$conn = new mysqli('localhost', 'root', 'root', 'smartparking'); 
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "DB Connection Successful";
	$sql = "SELECT * FROM slot_status where status=1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{    
    while($row = $result->fetch_assoc()) 
    	{
	       array_push($data1,array('emp_id'=>$row['emp_id'],'slot_no'=>$row['slot_no'],'status'=>$row['status']));
	    }
	} 
	else 
	{
	    echo "0";
	}
	echo json_encode($data1);
?>