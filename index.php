<!doctype html>
<html lang="en" class="h-100">
  <head>
      <meta charset="utf-8">  
      <title>Уже бегу!</title>  
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link href="css/styles.css" rel="stylesheet">
  </head>  
  <body class="d-flex flex-column h-100">  
    <nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
      <div class="container">
      <span class="navbar-brand">Уже бегу!</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">О забеге</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Бегут с нами</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Стать участником</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <main>
      <div class="container">
        <div class="forms">
          <div class="order-md-1"> 
              <h4 class="mb-3">Заявка на участие в забеге</h4>
              <form class="needs-validation" id="formdata" novalidate>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Введите ФИО" 
                    pattern="^[a-zA-ZА-Яа-яЁё\s]+$" required/>
                    <div class="invalid-feedback">
                      Неверные данные.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">   
                    <input type="text" name="date_birth" id="date_birth" class="form-control" placeholder="Введите дату рождения" required/>
                    <div class="invalid-feedback">
                      Неверные данные.
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Введите актуальный E-mail" pattern="([A-z0-9_.-]{1,})+@([A-z0-9]{1,})+\.([A-z]{2,8})" required/> 
                    <div class="invalid-feedback">
                      Неверный формат E-mail.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">   
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Введите номер телефона"  required/> 
                    <div class="invalid-feedback">
                    Неверные данные.
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <select class="form-control" name="distance" id="distance" required>
                      <option value="" disabled selected>Выберите вашу дистанцию</option>
                      <option value="3">3 км</option>
                      <option value="5">5 км</option>
                      <option value="10">10 км</option>
                    </select>
                    <div class="invalid-feedback">
                      Вы не выбрали дистанцию.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" name="payment" id="payment" min="100" max="10000000"
                      placeholder="Введите сумму взноса." 
                      title="Минимальная и максимальная суммы взноса составляют 100₽ и 10000000₽" required>
                      <div class="input-group-append">
                        <span class="input-group-text">₽</span>
                      </div>
                      <div class="invalid-feedback">
                        Минимальная и максимальная суммы взноса составляют 100₽ и 10000000₽.
                      </div>
                    </div>
                  </div>
                  </div>                   
                <div>  
                     <input type="hidden" name="id" id="user_id" />  
                     <button type="button" class="btn btn-success btn-block" name="action" id="action" title="Для успешной отправки заявки заполните все поля.">Отправить заявку</button>  
                </div>
              </form>
          </div>
        </div>
        <hr>
        <div id="result" class="table-responsive">  
        </div>
      </div>   
    </main>
    <footer class="footer mt-auto py-3 text-center text-small">
      <div class="container">
        <p class="mb-1">Благотворительный забег "Уже бегу!" &copy; 2000-2020</p>
      </div>
    </footer>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/submit.js"></script>
  <script src="js/sort.js"></script>
  <script src="js/mask.js"></script>
  <script src="js/action.js"></script>
  <script src="jquery/date.js"></script>   
</html>  
