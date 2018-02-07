   <?php
        // Параметры для подключения

        $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_table = "users_messages"; // Имя Таблицы БД

        if (isset($_POST['name']) && isset($_POST['email'])){

        // Переменные с формы
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $text =  $_POST['text'];



        // Подключение к базе данных
        $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

        // Выборка базы
        mysql_select_db("agros",$db);

        // Установка кодировки соединения
        mysql_query("SET NAMES 'utf8'",$db);
        // Далее напишем наш запрос для записи в базу данных и запишем его в переменную.
        $result = mysql_query ("INSERT INTO ".$db_table." (name,email,phone,text) VALUES ('$name','$email','$phone','$text')");
        
        if ($result){
            ?>
                <script>
                    alert ("Ваше повідомлення успішно відправленно. Адміністратор з вами зв'яжеться.");
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert ("Ваше повідомлення не було відправленно. Просимо пробачення за технічні неполадки.");
                </script>
            <?php
        } 
    }
?>