<?php  
 if(isset($_POST["action"]))  
 {  
      $output = '';  
      require_once 'config/connect.php'; 
      if($_POST["action"] =="Отправить заявку")  
      {  
           $full_name = mysqli_real_escape_string($connect, $_POST["fullName"]);  
           $date_birth = mysqli_real_escape_string($connect, $_POST["dateBirth"]);
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $phone = mysqli_real_escape_string($connect, $_POST["phone"]); 
           $distance = mysqli_real_escape_string($connect, $_POST["distance"]);  
           $payment = mysqli_real_escape_string($connect, $_POST["payment"]);   
           $procedure = "  
                CREATE PROCEDURE insertUser(IN fullName varchar(250), dateBirth varchar(250), email varchar(255), phone varchar(55), distance tinyint(3), payment int(11))  
                BEGIN  
                INSERT INTO users(full_name, date_birth, email, phone, distance, payment) VALUES (fullName, dateBirth, email, phone, distance, payment);   
                END;  
           ";  
           if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS insertUser"))  
           {  
                if(mysqli_query($connect, $procedure))  
                {  
                     $query = "CALL insertUser('".$full_name."', '".$date_birth."', '".$email."', '".$phone."', '".$distance."', '".$payment."')";  
                     mysqli_query($connect, $query);    
                }  
           }  
      }    
 }  
 ?>  