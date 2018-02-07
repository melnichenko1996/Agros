<?php 
    //Подключение шапки
    require_once("header.php");
?>
<body class="body-background">
<?php 
        //Проверяем авторизован ли пользователь !НАЧАЛО!
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на регистрации
?>
<h1 class="text-center Textclass" style="margin:0; font-size: 300%;">«АГРОС»</h1>
<br>
<div class="col-md-3">
</div>
<div class="col-md-6 col-sm-12">
<br>
    <form role="form" action="php/register.php" method="post" name="form_register" style="max-width: 330px;
                                                                                  padding: 10px; 
                                                                                  margin: 0 auto;
                                                                                  background: rgba(0, 0, 0, 0.8);
                                                                                  border-radius: 15px;
                                                                                  ">
        <h3 class="text-center" style="color: #f5f5f5;"><strong>РЕЄСТРАЦІЯ</strong></h3>
        <input type="text"  class="form-control" name="first_name" required="required" placeholder="Введіть ваше ім'я:" autofocus="">
        <br>
        <input type="text"  class="form-control" name="last_name"  required="required" placeholder="Введіть ваше прізвище:">
        <br>
        <input type="email" class="form-control" name="email" required="required" placeholder="Введіть Email адресу:">
        <span  id="valid_email_message" class="mesage_error"></span>
        <br>
        <input type="password" class="form-control" name="password" required="required" placeholder="Введіть пароль(мінімум 6 символів):">
        <span id="valid_password_message" class="mesage_error">  </span><br>
        <div class="input-group">
          <span class="input-group-addon" style="padding: 0px 0px; border: 1px solid #ccc; border-radius: 4px;"><img src="php/captcha.php" alt="Капча"></span>
          <input type="text" name="captcha" required="required" class="form-control" placeholder="Перевіряючий код:">
        </div>    
        <br>     
            <!-- Блок для вывода сообщений -->
            <div class="block_for_messages" style="font-size: 20px;">
            <?php
                if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
                    echo $_SESSION["error_messages"];

                    //Уничтожаем чтобы не появилось заново при обновлении страницы
                    unset($_SESSION["error_messages"]);
                }

                if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
                    echo $_SESSION["success_messages"];

                    //Уничтожаем чтобы не появилось заново при обновлении страницы
                    unset($_SESSION["success_messages"]);
                }
            ?>
            </div>
        <input type="submit" name="btn_submit_register" value="ЗАРЕЄСТРУВАТИСЯ НА САЙТІ" class="btn btn-lg btn-success btn-block"><br>
        <a class="btn btn-lg btn-success btn-block" href="/index.php">АВТОРИЗУВАТИСЯ</a><br>
    </form>
</div>
<div class="col-md-3">
</div>

<?php
    //Проверяем авторизован ли пользователь, если нет...!КОНЕЦ!   
    }else{
    //Если пользователь авторизован !НАЧАЛО!
?>     
    <center>
        <h1 style="padding: 2%; color: #fff; 
                                text-shadow: 0 1px 3px rgba(0,0,0,.5);
                                background: rgba(0, 0, 0, 0.8);" >Ви уже провели авторизацію на цьому сайті.<br> 
            <br><span style="color: #d43f3a">Якщо ви бажаєте  вийти із своєї особистої сторінки натисніть "ТАК!"</span>
            <br><span style="color: #4cae4c;">Якщо ви бажаєте перейти на основну сторінку сайту натисніть "НІ"</span>
        </h1>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <a href="php/logout.php" class="btn btn-danger" style="width: 70%; padding: 1%;" title="ВИЙТИ ІЗ СВОЄЇ ОСОБИСТОЇ СТОРІНКИ">
                <span style="font-size: 500%;">ТАК!</span>
            </a>
        </div>
        <div class="col-md-4">
            <a href="page1.php" class="btn btn-success" style="width: 70%; padding: 1%;" title="ПЕРЕЙТИ НА ОСНОВНУ СТОРІНКУ САЙТУ">
                <span style="font-size: 500%;">НІ!</span>
            </a>
        </div>
        <div class="col-md-2"></div>
    </center>
    <?php
        }//Если пользователь авторизован !КОНЕЦ!
?>


<div class="text-center navbar-fixed-bottom Textclass" style="font-size: 170%;" >
    <strong>© Агрос 2017</strong>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>