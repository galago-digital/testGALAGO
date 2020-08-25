<?php  
 //fetch.php  
 require_once 'config/connect.php'; 
 if(isset($_POST["id"]))  
 {  
      $output = array();  
      $procedure = "  
      CREATE PROCEDURE whereUser(IN user_id int(11))  
      BEGIN   
      SELECT * FROM users WHERE id = user_id;  
      END;   
      ";  
      if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS whereUser"))  
      {  
           if(mysqli_query($connect, $procedure))  
           {  
                $query = "CALL whereUser(".$_POST["id"].")";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     $output['full_name'] = $row["full_name"];  
                     $output['date_birth'] = $row["date_birth"]; 
                     $output['email'] = $row["email"]; 
                     $output['phone'] = $row["phone"]; 
                     $output['distance'] = $row["distance"];  
                     $output['payment'] = $row["payment"];  
                }  
                echo json_encode($output);  
           }  
      }  
 }  
 ?>  