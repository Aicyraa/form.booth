<?php
  // COONECTION FILE
     $server = "localhost";
     $user = "root";
     $pass = "";
     $server_name = "studentform";    
       $conn  = "";
         try{ 
          $conn = mysqli_connect($server, $user, $pass, $server_name);
           }
         catch(mysqli_sql_exception){
               echo"nde naka konek bai!"  ;
           } ;
?>           