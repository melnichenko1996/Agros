<?php
        // Параметры для подключения

        $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_table = "users_goods"; // Имя Таблицы БД

        if (isset($_POST['first_name']) && isset($_POST['last_name'])){

        // Переменные с формы vegetables_fruits
        $first_name   =  $_POST['first_name'];
        $last_name    =  $_POST['last_name'];
        $email        =  $_POST['email'];
        $phone        =  $_POST['phone'];
   $vegetables_fruits =  $_POST['vegetables_fruits'];
        $product_name =  $_POST['product_name'];
        $weight       =  $_POST['weight'];
        $price        =  $_POST['price'];


        // Подключение к базе данных
        $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

        // Выборка базы
        mysql_select_db("agros",$db);

        // Установка кодировки соединения
        mysql_query("SET NAMES 'utf8'",$db);
        // Далее напишем наш запрос для записи в базу данных и запишем его в переменную.
        $result = mysql_query ("INSERT INTO ".$db_table." (first_name,last_name,email,phone,vegetables_fruits,product_name,weight,price) VALUES ('$first_name','$last_name','$email','$phone','$vegetables_fruits','$product_name','$weight','$price')");
        

        if ($result){
            ?>
                <script>
                    alert ("Ваше замовлення успішно відправленно. Адміністратор з вами зв'яжеться");
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert ("Ваше замовлення не було відправленно. Просимо пробачення за технічні неполадки.");
                </script>
            <?php
        } 
    }
?>