 <?php  
 //sort.php  
 require_once 'config/connect.php';  
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM users ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="table">
    <thead class="thead-light">  
      <tr>  
          <th>ФИО</th>
          <th><a class="column_sort card-link text-success" id="date_birth" data-order="'.$order.'" href="#">Дата рождения</a></th>
          <th>Email</th>
          <th>Телефон</th>
          <th><a class="column_sort card-link text-success" id="distance" data-order="'.$order.'" href="#">Дистанция</a></th>
          <th><a class="column_sort card-link text-success" id="payment" data-order="'.$order.'" href="#">Взнос</a></th>  
      </tr>
    </thead>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
      <tr>  
          <td>'.$row["full_name"].'</td>  
          <td>'.$row["date_birth"].'</td> 
          <td>'.$row["email"].'</td>  
          <td>'.$row["phone"].'</td> 
          <td>'.$row["distance"].'</td>  
          <td>'.$row["payment"].'</td>    
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?>  