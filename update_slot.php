<?php
	$empid=$_POST['empid'];
	$slot=$_POST['slot'];
	$status=$_POST['status'];
	$data1=array();
	$conn = new mysqli('localhost', 'root', 'root', 'smartparking'); 
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "DB Connection Successful";
	$sql1="SELECT * from slot_status where emp_id='$empid'	";
    $result=$conn->query($sql1);
    $rows=mysqli_num_rows($result);
    if($rows==0)
	$sql = "INSERT INTO slot_status(emp_id, slot_no, status) values ('$empid','$slot','$status'
)";
	else
	$sql = "UPDATE slot_status set status='$status' , slot_no='$slot' where emp_id='$empid'";

	if ($conn->query($sql))
	{
		echo "Successful";
	}
	else
	{
		echo "Error:" .$sql. "<br>" . $conn->error;
	}
/*	mysqli_close($conn);
	$result = $conn->query($sql);

	//$sql="SELECT * FROM registration where emp_id='$empid'";

	//$result = $conn->query($sql);


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
?>*/
?>

	
