<?php    
  $p1=$_GET['p1'];
  $p2=$_GET['p2'];
  $p3=$_GET['p3'];  
  $p1=trim($p1);   
  $p2=trim($p2);   
  $p2=trim($p3);
  unset($_COOKIE[$p1]);       
  unset($_COOKIE[$p2]);
  unset($_COOKIE[$p3]);
  setcookie($p1,"0", time()-3600,"/");        
  setcookie($p2,"0", time()-3600,"/");
  setcookie($p3,"0",time()-3600,"/");
  header("location:index.html");    
?>