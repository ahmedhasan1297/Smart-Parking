<?php
$servername="localhost";
$user="root";
$pass="";
$db="timetables";
$conn=mysqli_connect($servername,$user,$pass,$db);
if(!$conn)
{
  die("Connection failed:" .mysqli_connect_error()); 
}
   $username=$_POST['empid'];
   $password=$_POST['password'];
//   if($_POST['rememberme']=='on')
 //  $rememberme=true;
  // else
   // $rememberme=false;
//   echo "Hai this is variable declaration";
  if (isset($_POST['email']) && isset($_POST['password']))
  {
   $sql="select * from registration where emp_id='$username' and password='$password'";
   $query=mysqli_query($conn, $sql);
   $rows=mysqli_num_rows($query);
//   echo "Query executed<br>";
//   echo $rememberme;
   if($rows==1)
   {
    //if (isset($_POST['rememberme']))
    //{
      // echo "<script>alert('setting cookie');</script>";
       //setcookie("test","x", time() + (86400 * 365), "/");
       //setcookie("username",$username, time() + (86400 * 365), "/");
       //setcookie(name)
       //echo "<h1>This is fine</h1>";
      
       //echo "<script>alert('giving login again');</script>";
       //

    header("Location:index.php");
     //}
     //else
     //{
       setcookie("test","x", time() + (86400 * 1), "/");
       setcookie("username",$username, time() + (86400 * 1), "/");     }
     header("Location:index.php");
   }
   else
   {
    header("Location:login.html");
   	  //  header("Location:login2.html");
   }
 }
   //mysqli_close($conn);
?>