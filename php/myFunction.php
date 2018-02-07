<?
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
            echo $row['first_name']." ".$row['last_name'];
        }
    }

    function first_name(){
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
            echo $row['first_name'];
        }
    }

    function last_name(){
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
            echo $row['last_name'];
        }
    }


?>