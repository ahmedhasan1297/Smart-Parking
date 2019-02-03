<?php
	$name=$_POST['c_name'];
	$empid=$_POST['c_emp_id'];
	$email=$_POST['c_email'];
	$vehicle_no=$_POST['c_vehicle_no'];
	$phoneno=$_POST['c_phno'];
//    c_name,c_emp_id,c_email,c_vehicle_no,c_phno
 //   $//$group_name=$_POST['gname'];
	$data1=array();
	$conn = new mysqli('localhost', 'root', '', 'smartparking'); 
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "DB Connection Successful";
	$sql = "UPDATE registration set name='$name', phoneno='$phoneno' where emp_id='$empid'";

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

	
