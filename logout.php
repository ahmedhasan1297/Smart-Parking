<?php    
  $p1=$_GET['p1'];
  $p2=$_GET['p2'];  
  $p1=trim($p1);   
  $p2=trim($p2);   
  unset($_COOKIE[$p1]);       
  unset($_COOKIE[$p2]);
  setcookie($p1,"0", time()-3600,"/");        
  setcookie($p2,"0", time()-3600,"/");
  header("location:index.html");    
?>