<?php 
    //Запускаем сессию
    session_start();

    require_once("php/myFunction.php");
    require_once("php/messages.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>АГРОС</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php 
    //Проверяем авторизован ли пользователь,если нет !НАЧАЛО!
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
?>
<center>
        <h1 style="padding: 2%; color: #d43f3a;
                                text-shadow: 0 1px 3px rgba(0,0,0,.5);
                                background: rgba(0, 0, 0, 0.8);" >УВАГА!!!<br>Ви не маєте доступу до цієї сторінки!<br>
                                                                  Для того щоб зайти на цю сторінку потрібно провести авторизацію.<br> 
            <br><span style="color: #4cae4c;">Якщо ви бажаєте перейти на сторінку авторизацъ натисніть <br> "ПЕРЕЙТИ ДО АВТОРИЗАЦІЇ"</span>
        </h1>
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-12">
            <br>
            <a href="index.php" class="btn btn-success" style="width: 70%; padding: 1%;" title="ПЕРЕЙТИ НА ОСНОВНУ АВТОРИЗАЦІЇ">
                <span style="font-size: 250%;">ПЕРЕЙТИ ДО АВТОРИЗАЦІЇ</span>
            </a>
        </div>
        <div class="col-md-2"></div>
</center>
<div class="text-center navbar-fixed-bottom Textclass" style="font-size: 170%;" >
    <strong>© Агрос 2017</strong>
</div>

<?php
    //Проверяем авторизован ли пользователь, если нет...!КОНЕЦ!   
    }else{
    //Если пользователь авторизован !НАЧАЛО!
?>
<!-- Адаптивная навигация сайта-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 	<div class="container">
  		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">«АГРОС»</a>
    	</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			     <li class="dropdown">
                    <a href="page1.php" class="dropdown-toggle" data-toggle="dropdown">ГОЛОВНА СТОРІНКА<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="page1.php#nameFour">ПІДПРИЄМСТВО «АГРОС»</a></li>
                        <li class="divider"></li>
                        <li><a href="page1.php#nameOne">НАША СТРАТЕГІЯ</a></li>
                        <li class="divider"></li>
                        <li><a href="page1.php#nameTwo">СИСТЕМА ЯКОСТІ</a></li>
                        <li class="divider"></li>
                        <li><a href="page1.php#nameThree">СЕЗОННІСТЬ ЗБОРУ ВРОЖАЮ</a></li>
                    </ul>
                </li>
				<li><a href="page2.php">НОВИНИ</a></li>
                <li class="dropdown">
                    <a href="page3.php" class="dropdown-toggle" data-toggle="dropdown">АСОРТИМЕНТ<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="page3.php">ФРУКТИ</a></li>
                        <li class="divider"></li>
                        <li><a href="page3.php">ОВОЧІ</a></li>
                    </ul>
                </li>
				<li><a href="page4.php">ПОСЛУГИ</a></li>
				<li class="active"><a href="page5.php">КОНТАКТНА ІНФОРМАЦІЯ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
                    <a class="navbar-brand" data-toggle="tooltip"><?php userClient(); ?></a>
				</li>
				<li class="active">
					<a href="php/logout.php">Вийти</a>
				</li>
			</ul>
		</div>
  	</div>
</nav>

<div class="jumbotron">
    <h2 class="classH">«Контактна інформація»</h2>
    <div class="container">
		<div class="thumbnail">
            <div class="caption"> 
            <div class="text-center classP"><strong>Якщо у вас виникли питання ви можете з нами связатись</strong></div>               
                <table border="0" style="width: 100%;">
                <tr>
                    <td>
                        <div class="classP">
                            <strong>Директор: </strong>Лі Ігор Миколайович. 
                            <br><span class="glyphicon glyphicon-earphone"></span>+380 96 489 91 81;
                        </div>
                        <div class="classP">
                            <strong>Головний бухгалтер: </strong>Керивенко Ольга Сергіївна
                        </div>
                    </td>
                    <td>
                        <div class="classP">
                            <strong>Заступник директора: </strong>Цой Олена Ярославівна
                            <br><span class="glyphicon glyphicon-earphone"></span>+380 96 885 47 11 тел / viber / whatsapp;
                        </div>
                        <div class="classP">
                            <strong>Завідувач складом: </strong>Зарецький Дмитро Геннадійович
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
<!--Лева часть сайта-->
		<div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
					<div class="classP">
					    <strong>Додаткові дані для контакту з нами:</strong>
					    <ul>
                            <li><strong>скайп:</strong> <a>agros.li</a></li>
                            <li><strong>e-mail:</strong> <a>agros.li@gmail.com</a></li>
                        </ul>
				    </div> 
					<p><span class="glyphicon glyphicon-envelope"></span> <strong>Відправити нам повідомлення</strong></p>
					<!--Відправка повідомлення Адміністратору-->
				    <form method="POST" action="page5.php">
					<div class="classP">
						<strong>Користувач</strong>:<br>
						<input  name="name" class="form-control" style="width: 50%;"  type="text" value="<?php userClient(); ?>" required="required">
                    </div>
					<div class="classP">
						<strong>Ваш Email</strong>:<br>
						<input name="email" class="form-control" style="width: 50%;" type="email" value="<?php echo $_SESSION['email']; ?>" required="required">
                    </div>
					<div class="classP">
						<strong>Ваш телефон 0XX-XXXX-XXX</strong>:
						<input name="phone" class="form-control" style="width: 50%;" autofocus type="tel" pattern="0[0-9]{2}-[0-9]{4}-[0-9]{3}" required="required" />
						
                    </div>
					<div class="classP">
						<strong>Ваше повідомлення</strong>:
                    </div>
					<p>
						<textarea name="text" class="form-control" type="text" required="required" rows="3" wrap="hard"></textarea>
					</p>
					<center>
					    <input type="submit" class="btn btn-primary" value="Відправити повідомлення адміністратору" name="submit">
					</center>
					</form>				
				</div>				
			</div>
		</div>
<!--Лева часть сайта-->
		<div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
                    <div class="text-center classP"><strong>Територіальне місцезнаходження:</strong></div>
                    <div class="text-center classP"><a>Україна, м. Черкаси, с. Руська поляна, вул. Мічуріна, 56.</a></div>
               			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.7329207636503!2d31.909842495580527!3d49.41395622860899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14e42003cd0c9%3A0xc039afb4e0e21dcd!2z0LLRg9C7LiDQnNGW0YfRg9GA0ZbQvdCwLCDQoNGD0YHRjNC60LAg0J_QvtC70Y_QvdCwLCDQp9C10YDQutCw0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1509458549746" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
		</div>
    </div>
</div>
<div class="text-center Textclass" style="font-size: 170%;" >
    <strong>© Агрос 2017</strong>	
</div>
<?php
    }//Если пользователь авторизован !КОНЕЦ!
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>