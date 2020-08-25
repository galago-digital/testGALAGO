
 $(document).ready(function(){  
      fetchUser();  
      function fetchUser()  
      {  
           var action = "select";  
           $.ajax({  
                url : "select.php",  
                method:"POST",  
                data:{action:action},  
                success:function(data){  
                     $('#full_name').val('');  
                     $('#date_birth').val('');
                     $('#email').val('');  
                     $('#phone').val(''); 
                     $('#distance').val('');  
                     $('#payment').val('');   
                     $('#action').text("Отправить заявку");  
                     $('#result').html(data);  
                }  
           });  
      }  
      $('#action').click(function(){  
           var fullName = $('#full_name').val();  
           var dateBirth = $('#date_birth').val();
           var email = $('#email').val();  
           var phone = $('#phone').val(); 
           var distance = $('#distance').val();   
           var payment = $('#payment').val();   
           var id = $('#user_id').val();  
           var action = $('#action').text();  
           var form = $('#formdata')[0];
          var forms = document.getElementsByClassName('needs-validation')

          Array.prototype.filter.call(forms, function (form) {
              if(!form.checkValidity()){
                  form.classList.add('was-validated')
              } else form.classList.remove('was-validated')
          });



           if(form.checkValidity() && fullName != '' && dateBirth != '' && email != '' && phone != '' && distance != '' && payment != '')  
           { 
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{fullName:fullName, dateBirth:dateBirth, email:email, phone:phone, distance:distance, payment:payment, id:id, action:action},  
                     success:function(data){    
                          fetchUser();  
                     }  
                });  
           }    
      });   
      $(document).on('click', '.delete', function(){  
           var id = $(this).attr("id");  
                var action = "Delete";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data)  
                     {  
                          fetchUser();  
                     }  
                }) 
      });  
 });  