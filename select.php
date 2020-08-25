<?php   
 $connect = mysqli_connect('localhost', 'root', 'root', 'crud');  
 $query = "SELECT * FROM users ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  

  <div class="table-responsive" id="employee_table">  
         <table class="table">
            <thead class="thead-light">   
              <tr>  
                  <th>ФИО</th>
                  <th><a class="column_sort card-link text-success" id="date_birth" data-order="desc" href="#">Дата рождения</a></th>
                  <th>Email</th>
                  <th>Телефон</th>
                  <th><a class="column_sort card-link text-success" id="distance" data-order="desc" href="#">Дистанция</a></th>
                  <th><a class="column_sort card-link text-success" id="payment" data-order="desc" href="#">Взнос</a></th>  
              </tr> 
            </thead> 
              <?php  
              while($row = mysqli_fetch_array($result))  
              {  
              ?>  
              <tr>  
                 <td><?php echo $row["full_name"]; ?></td>  
                 <td><?php echo $row["date_birth"]; ?></td>  
                 <td><?php echo $row["email"]; ?></td>  
                 <td><?php echo $row["phone"]; ?></td>  
                 <td><?php echo $row["distance"]; ?></td>  
                 <td><?php echo $row["payment"]; ?></td>   
              </tr>  
              <?php  
              }  
              ?>  
         </table>  
  </div>