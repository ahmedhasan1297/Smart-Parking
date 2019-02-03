<?php
$servername="localhost";
$user="root";
$pass="";
$db="smartparking";
$conn=mysqli_connect($servername,$user,$pass,$db);
if(!$conn)
{
  die("Connection failed:" .mysqli_connect_error()); 
}
   $username=$_POST['text'];
   $password=$_POST['password'];
  if (isset($_POST['text']) && isset($_POST['password']))
  {
   $sql="select * from registration where emp_id='$username' and password='$password'";
   $query=mysqli_query($conn, $sql);
   $rows=mysqli_num_rows($query);
   if($rows==1)
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
      $row=$result->fetch_assoc();
       setcookie("username",$username, time() + (86400 * 1), "/");
       setcookie("mailid",$)
       setcookie("test","x", time() + (86400 * 1), "/");
    }
     header("Location:dashboard.html");
   //}
   /*else
   {
    //echo "<script>alert('giving login again');</script>";
   	    header("Location:login2.html");
   }*/
 }
   mysqli_close($conn);
?>