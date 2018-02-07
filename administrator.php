<?php
	$username = 'admin';
	$password = 'admin';

	if (isset($_SERVER['PHP_AUTH_USER']) &&
		isset($_SERVER['PHP_AUTH_PW']))
	{
		if ($_SERVER['PHP_AUTH_USER'] == $username &&
			$_SERVER['PHP_AUTH_PW'] == $password){
            
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>АГРОС, admin</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: #fff;">
<h2 class="classH">«Cторінка адміністратора»</h2>
<div class="container">
<div class="row">
 
<!-- Вкладки tabs -->
<ul class="nav nav-tabs">
    <li style="width:35%;" class="active"><a href="#users" data-toggle="tab" class="btn"><strong>Зареєстровані користувачі</strong></a></li>
    <li style="width:30%;">               <a href="#users_goods"data-toggle="tab" class="btn"><strong>Замовлення товару</strong></a></li>
    <li style="width:35%;">               <a href="#users_messages" data-toggle="tab" class="btn"><strong>Відправлені повідомлення</strong></a></li>
</ul>

<!-- Tab панелі -->
<div class="tab-content">
    <!--Зареєстровані користувачі-->
    <div class="tab-pane fade in active" id="users">
        <br>
        <?php
            $MySQLConnection = mysql_connect('localhost', 'root', '');
            $MySQLSelectedDB = mysql_select_db('agros', $MySQLConnection);
            mysql_query('SET NAMES utf8');

            $MySQLRecordSet = mysql_query('SELECT * FROM `users` LIMIT 10');
        ?>
            <table class="table table-hover table-bordered table-striped">
            <tr>
        <?
            $iter = 0;
            while($name = @mysql_field_name($MySQLRecordSet, $iter++))
            {
        ?>
                <th><? echo $name; ?></th>
        <?
            }
        ?>
            </tr>
        <?
            while($Result = mysql_fetch_assoc($MySQLRecordSet))
            {
        ?>
                <tr>
        <?
                foreach($Result as $k => $val)
                {
        ?>
                    <td><? echo $val; ?></td>
        <?                
                }
        ?>
                
              <!--<td class="text-center" style="background: red;" >удалить</td>-->
        </tr>
        <?
            }
        ?>
        </table>
    </div>
    <!--Замовлення товару-->
    <div class="tab-pane fade" id="users_goods">
        <br>
        <?php
            $MySQLConnection = mysql_connect('localhost', 'root', '');
            $MySQLSelectedDB = mysql_select_db('agros', $MySQLConnection);
            mysql_query('SET NAMES utf8');

            $MySQLRecordSet = mysql_query('SELECT * FROM `users_goods`');
        ?>
            <table class="table table-hover table-bordered table-striped">
            <tr>
        <?
            $iter = 0;
            while($name = @mysql_field_name($MySQLRecordSet, $iter++))
            {
        ?>
                <th><? echo $name; ?></th>
        <?
            }
        ?>
            </tr>
        <?
            while($Result = mysql_fetch_assoc($MySQLRecordSet))
            {
        ?>
                <tr>
        <?
                foreach($Result as $k => $val)
                {
        ?>
                    <td><? echo $val; ?></td>
        <?                
                }
        ?>
                </tr>
        <?
            }
        ?>
        </table>
    </div>
    <!--Відправлені повідомлення-->
    <div class="tab-pane fade" id="users_messages">
        <br>
        <?php
            $MySQLConnection = mysql_connect('localhost', 'root', '');
            $MySQLSelectedDB = mysql_select_db('agros', $MySQLConnection);
            mysql_query('SET NAMES utf8');

            $MySQLRecordSet = mysql_query('SELECT * FROM `users_messages` LIMIT 10');
        ?>
            <table class="table table-hover table-bordered table-striped">
            <tr>
        <?
            $iter = 0;
            while($name = @mysql_field_name($MySQLRecordSet, $iter++))
            {
        ?>
                <th><? echo $name; ?></th>
        <?
            }
        ?>
            </tr>
        <?
            while($Result = mysql_fetch_assoc($MySQLRecordSet))
            {
        ?>
                <tr>
        <?
                foreach($Result as $k => $val)
                {
        ?>
                    <td><? echo $val; ?></td>
        <?                
                }
        ?>
                </tr>
        <?
            }
        ?>
        </table>
    </div>
</div>


</div> 
</div>
<br>
<br>
<div class="text-center navbar-fixed-bottom Textclass" style="font-size: 170%;" >
    <strong>© Агрос 2017</strong>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>


<?php
        }else{
           die("<center><H2>Невірна комбінація ім'я користувача - пароль. <br> Щоб спробувати знову, потрібно повністю закрити і знову відрити браузер і попробувати ще раз.</H2></center>");  
        } 
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Restricted Section"');
		header('HTTP/1.0 401 Unauthorized');
		die ("Пожалуйста, введите имя пользователя и пароль");
	}
?>