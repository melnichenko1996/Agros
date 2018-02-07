<?php 
    //Запускаем сессию
    session_start();
    require_once("php/myFunction.php");
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
<!-- Адаптивная навигация сайта -->
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
				<li class="active"><a href="page2.php">НОВИНИ</a></li>
                <li class="dropdown">
                    <a href="page3.php" class="dropdown-toggle" data-toggle="dropdown">АСОРТИМЕНТ<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="page3.php">ФРУКТИ</a></li>
                        <li class="divider"></li>
                        <li><a href="page3.php">ОВОЧІ</a></li>
                    </ul>
                </li>
				<li><a href="page4.php">ПОСЛУГИ</a></li>
				<li><a href="page5.php">КОНТАКТНА ІНФОРМАЦІЯ</a></li>
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
    <h3 class="classH">ПРИВІТАННЯ ДИРЕКТОРА ПІДПРИЄМСТВА «АГРОС» З Новим роком</h3>
    <div class="container">
        <h3 class="text-center"><strong>Дорогі земляки! Прийміть поздоровлення та привітання З Новим роком Собаки 2018</strong></h3>
        <p class="text-justify">
        <img src="images/18.jpg" class="img-thumbnail" alt="Responsive image" style="width:40%; float: right;">
        <div class="text-center" style="font-size: 21px;">        
           <br>Здоров’я і сили в 2018 році,
           <br>Щоб вас не кололо ні в серці, ні в боці.
           <br>Щоб у банку і в кишені були гривні і зелені,
           <br>Щоб був успіх і зростання, були сили для кохання!!!
           <br>Щоб ваша робота не дала вам вмерти,
           <br>Всіх вас годувала до самої смерті.
           <br>Щоб наша держава цвіла й багатіла
           <br>Та місце достойне у світі посіла.
        </div>
    </div>
    
    <hr>
    <h3 class="classH">ПРИВІТАННЯ ДИРЕКТОРА ПІДПРИЄМСТВА «АГРОС» <br>З ДНЕМ НЕЗАЛЕЖНОСТІ УКРАЇНИ</h3>
    <div class="container">
        <h3 class="text-center"><strong>Дорогі земляки! Щиро вітаю Вас з Днем Незалежності України!</strong></h3>
        <p class="text-justify" style="text-indent: 1.5em;">
        <img src="images/2.jpg" class="img-thumbnail" alt="Responsive image" style="width:35%; float: right;">
        Ця визначна дата увійшла в історію нашої молодої держави золотою сторінкою її біографії, започаткувала нову епоху в житті нашого народу. Ось уже 26 років День Незалежності символізує споконвічне прагнення українців бути господарями на своїй славетній і прекрасній землі – землі, де народилися наші пращури, ми та наші діти й онуки.</p>
        <p class="text-justify" style="text-indent: 1.5em;">У найбільше національне свято від усього серця бажаю Вам миру, щастя, здоров’я, успіхів і нових здобутків в ім’я нашої держави та майбутніх поколінь!</p>
    </div>
    
    <hr>
    <h3 class="classH">ПРИВІТАННЯ ДИРЕКТОРА ПІДПРИЄМСТВА «АГРОС» З ВЕЛИКОДНЕМ</h3>
    <div class="container">
        <h3 class="text-center"><strong>Дорогі земляки! Прийміть сердечні привітання та щирі побажання з нагоди Великодніх свят!</strong></h3>
        <p class="text-justify">
        <img src="images/3.jpg" class="img-thumbnail" alt="Responsive image" style="width:45%; float: right;">
        <div class="text-center" style="font-size: 21px;">        
            <br>З Воскресінням Христовим щиро Вас вітаю!
            <br>Жити в радості й любові від душі бажаю!
            <br>Запашною нехай буде Великодня Паска
            <br>І до віку буде з Вами світла Божа ласка!
            <br>Хай Божа матір Вас охороняє,
            <br>А Дух Святий здоров'я посилає.
            <br>Господь дарує Ангела з небес!
            <br>- Христос Воскрес!
            <br> - Воістину воскрес!
        </div>
    </div>
    
    <hr>
    <h3 class="classH">ПРИВІТАННЯ ДИРЕКТОРА ПІДПРИЄМСТВА «АГРОС» З Новим роком</h3>
    <div class="container">
        <h3 class="text-center"><strong>Дорогі земляки! Прийміть поздоровлення та привітання З Новим роком!</strong></h3>
        <p class="text-justify">
        <img src="images/10.jpg" class="img-thumbnail" alt="Responsive image" style="width:45%; float: right;">
        
        <div class="text-center" style="font-size: 21px;">
        <br>З Новим Роком в добрий час
        <br>Дід Мороз іде до нас,
        <br>А до тебе хай завітає
        <br>З тим що серце забажає,
        <br>Хай принесе тобі у хату,
        <br>Щастя й радості багато
        <br>Хай здоров’я повний міх
        <br>Покладе на твій поріг!
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