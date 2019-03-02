<?php
$servername="localhost";
$user="root";
$pass="root";
$db="smartparking";
$conn=new mysqli($servername,$user,$pass,$db);
if($conn->connect_error)
{
  die("Connection failed:" .$conn->connect_error); 
}
   $username=$_POST['text'];
   $password=$_POST['password'];
  if (isset($_POST['text']) && isset($_POST['password']))
  {
   $sql="select * from registration where emp_id='$username' and password='$password'";
   $result=$conn->query($sql);
   $rows=mysqli_num_rows($query);
   if($result->num_rows==1)
   {
/*    if (isset($_POST['rememberme']))
    {*/
    //echo "<script>alert('setting cookie');</script>";
      /// setcookie("test","x", time() + (86400 * 365), "/");
       //setcookie("username",$username, time() + (86400 * 365), "/");
       //setcookie(name)
       //echo "<h1>This is fine</h1>";
      
      // echo "<script>alert('giving login again');</script>";
       //header("Location:index.php");
     //}
     //else
     //{
      $row= $result->fetch_assoc();
       setcookie("username",$username, time() + (86400 * 1), "/");
       setcookie("test","$", time() + (86400 * 1), "/");
       setcookie("mailid",$row['mail_id'],time() + (86400 * 1),"/");
       header("Location:admin2.html");
    }     
   //}
  else
   {
    //echo "<script>alert('giving login again');</script>";
   	    header("Location:index.html");
   }
 }
   mysqli_close($conn);
?>