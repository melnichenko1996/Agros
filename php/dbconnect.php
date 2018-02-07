<?php
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
    $username = "root"; /* Имя пользователя БД */
    $password = ""; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
    $database = "agros"; /* Имя базы данных, которую создали */
 

    


    // Подключение к базе данный через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);

    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }

    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');

    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://Agros";


    





    function userClient(){
        $host='localhost'; // имя хоста (уточняется у провайдера)
        $database='agros'; // имя базы данных, которую вы должны создать
        $user='root'; // заданное вами имя пользователя, либо определенное провайдером
        $pswd=''; // заданный вами пароль

        $emailUsers=$_SESSION['email'];//email в сесии

        $dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
        mysql_select_db($database) or die("Не могу подключиться к базе.");
        $query = "SELECT * FROM `users` where email='$emailUsers'";
        $res = mysql_query($query);

        while($row = mysql_fetch_array($res))
        {   
            echo $row['first_name']." ".$row['last_name']."<br>";
        }
    }

?>