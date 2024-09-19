
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
    <link rel="stylesheet" href="design.css">
    

</head>
<body>
    <div class="container_center">
      <div>
          <div class="container">
             <h1 style="display: inline-block;"> Student Record Form </h1>
             <img src="Lagro_High_School_logo.png"
                style="height:60px;
                       width: 60px;
                       position: relative;    
                       top:20px ; 
                       left:20px;          
                                     ">   
               <hr> 
                  <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">                
                      <label for="student_id"> Student ID:</label> <br>                 
                          <input type="text" name="student_id" id="student_id"> <br>
                  <!--student-id -->
                      <label for="fullname"> Fullname:</label> <br>                 
                          <input type="text" name="fullname" id="fullname"> <br>
                  <!--Contact No-->
                      <label for="grade_section"> Grade & Section:</label> <br>                 
                          <input type="text" name="grade_section" id="grade_section"> <br>
                  <!--Grade & Section-->
                      <label for="address"> Address:</label> <br>                 
                          <input type="text" name="address" id="address"> <br>
                  <!--Address -->
                      <label for="contact_no"> Contact No:</label> <br>                 
                          <input type="text" name="contact_no" id="contact_no"> <br>
                  <!--Contact No -->
                          <input type="submit" value="register!">
                  </form>
               </div>
           </div>
       </div>
</body>
</html>
<?php
 
    include("db.connection.php"); 

       if($_SERVER["REQUEST_METHOD"] == "POST"){
      // getting the input value ==========================
            $student_id = $_POST["student_id"];
            $fullname = $_POST["fullname"];
            $grade_section = $_POST["grade_section"];
            $address = $_POST["address"];
            $contact_no = $_POST["contact_no"];
      // =================================================
                 if(empty($student_id )){
                       echo "<script> alert('fill up the Student ID!') </script>";       
                 }
                 elseif(empty($fullname)){
                       echo "<script> alert(lagay mo fullname bai') </script>";
                 }
                 elseif(empty($grade_section )){
                       echo "<script> alert('fill up the Grade & Section!') </script>";
                 }
                 elseif(empty($address)){
                       echo "<script> alert('saan k katira bai') </script>";
                 }
                 elseif(empty($contact_no)){
                       echo "<script> alert('fill up the Contact No!') </script>";
                 }
                 else{
                  //  INSERTING STUDENTS DATA TO MYSQL DATABASE ============================================
                       $sql = "INSERT INTO 
                                 studentdata (user_id, user_name, user_section, user_address, contact_no)
                                 VALUES ('$student_id', '$fullname','$grade_section', '$address', '$contact_no')"; 
                                //   =======
                                    mysqli_query($conn, $sql); 
                                     header("Location: header.php");      
                 };         
       }; 
       mysqli_close($conn); 
?>