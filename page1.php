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
			     <li class="dropdown active">
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
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">АСОРТИМЕНТ<b class="caret"></b></a>
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

    <h2 class="classH">«АГРОС»</h2>
    <br>
    <div class="container">
           <div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
					    <div id="carousel" class="carousel slide" interval="1000">
                        <!--Индикаторы слайдов-->
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carousel" data-slide-to="0"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                        </ol>

                        <!--Слайды-->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/20_1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/20_2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/20_3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/20_4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/20_5.jpg" alt="">
                            </div>
                        </div>

                        <!--Стрелки переключения слайдов-->
                        <a href="#carousel" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#carousel" class="right carousel-control" data-slide="next" id="buttonCarousel">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
				</div>				
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
                    <div class="layer">
                        <p class="text-justify" style="font-size: 16px; text-indent: 1.5em; padding: 1%;">
                        Пдприємство «АГРОС» знаходиться в селі Руська поляна на Черкащині. Очолює його директор Лі Ігор Миколайович. Воно з’явилась на ринку області більш, ніж 10 років тому. Ми є власниками «АГРОС», під якою випускається широкий асортимент фруктової та овочевої та продукції, яка стала очікуваним та улюбленим товаром для багатьох споживачів міста.</p>
                        <p class="text-justify" style="font-size: 16px; text-indent: 1.5em; padding: 1%;" >Підприємство «АГРОС» спеціалізується на вирощуванні і подальшому заморожуванні та продажу овочів, фруктів та ягід. Під посадкою знаходиться чимало сільгоспних земель з вирощуваними культурами полуниці, малини, вишні, цвітної капусти, брюссельський капусти і капусти броколі та інших овочів.  Вирощується наша продукція на родючих землях Черкаської області. Продукція БІО, так як вирощується в екологічно чистому районі, застосовуються тільки ручні методи обробки та збору. Полив і обробка ґрунту здійснюється найсучаснішою сільськогосподарською технікою. Працюють на полях жителі навколишніх сіл. Наша продукція не відрізняється від такої ж вирощеної на власному городі.</p>
                        <p class="text-justify" style="font-size: 16px; text-indent: 1.5em; padding: 1%;">Продукція розрахована на широкий спектр споживачів. Основні принципи нашого підприємства: <em>здоров'я, якість і доступні ціни.</em> Ми хочемо дати можливість українському споживачеві купувати товар належної якості за доступну ціну.</p>
                        <p class="text-justify" style="font-size: 16px; text-indent: 1.5em; padding: 1%;">Ми співпрацюємо з супермаркетами міста. Працюючи з нами ви завжди будете мати свіжий товар і надійного постачальника. </p>
                    </div>                    
                </div>
            </div>
		</div>
    </div>
 
    <a name=nameOne style="display:block;margin-bottom:51px; margin-top:-50px"></a>
    <h3 class="classH"><a>НАША СТРАТЕГІЯ</a></h3>
    <div class="container">
            <p class="text-justify">В плани підприємства «АГРОС» входить подальша реалізація агропромислової продукції на обласному ринку.
            Ми прагнемо забезпечити зростання сімейного бізнесу «АГРОС» на ринку області, а також відкривати нові ринки.</p>
            <p><strong><em>Наші стратегічні цілі:</em></strong></p>
            <ul>
                <li><p>зміцнити позиції підприємства, як одного з приватних підприємств ринку овочево-ягідної продукції, продовжуючи зростання сімейного бізнесу;</p></li>
                <li><p>послідовно шукати виходи на нові ринки, спираючись на зростаючий попит на дану продукцію у регіонах нашої області.</p></li>
            </ul>
    </div>
    
    <a name=nameTwo style="display:block;margin-bottom:51px; margin-top:-50px"></a>
    <h3 class="classH"><a>СИСТЕМА ЯКОСТІ</a></h3>
    <div class="container">
            <p class="text-justify">Наша продукція якісна та відповідає критеріям безпеки, що підтверджено висновками державної санітарно-епідеміологічної експертизи, сертифікатами якості.</p>
            <p><strong><em>Переваги підприємства  «АГРОС»:</em></strong></p>
            <ul>
                <li><p>Широке різноманіття всіляких продуктів харчування.</p></li>
                <li><p>Весь асортимент – тільки екологічно чисті та корисні продукти харчування.</p></li>
                <li><p>Ми пропонуємо тільки найсвіжіші овочі та фрукти.</p></li>
                <li><p>Фрукти та овочі якісні та ретельно відібрані.</p></li>
                <li><p>Складання різноманітних фруктово-овочевих кошиків.</p></li>
                <li><p>Можливість купити рідкісні екзотичні фрукти та поласувати смачним салатами.</p></li>
                <li><p>Доставка оперативна і гарантовано своєчасна прямо за заявленим адресом.</p></li>
                <li><p>Лояльні і доступні ціни.</p></li>
                <li><p>Індивідуальний підхід до кожного клієнта та швидке реагування, навіть на найбільш е неординарне замовлення.</p></li>
                <li><p>Прийом і виконання як індивідуального, так і колективного замовлення.</p></li>
            </ul>
    </div>
    
    <a name=nameThree style="display:block;margin-bottom:51px; margin-top:-50px"></a>
    <h3 class="classH"><a>СЕЗОННІСТЬ ЗБОРУ ВРОЖАЮ</a></h3>
    <div class="container content">
        <div class="row sezonn">                          
            <div class="col-xs-12 col-sm-6 col-md-6" style=" margin-top: -8px">
                <img class="img-responsive" dir="/" src="images/30.png" alt="">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <img class="img-responsive" dir="/" src="images/31.png" alt="">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6" style=" margin-top: -47px">
                <img class="img-responsive" dir="/" src="images/32.png" alt="">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6" style=" margin-top: -10px">
                <img class="img-responsive" dir="/" src="images/33.png" alt="">
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
    <script>//авт. смена фото в каруселе с интервалом 2.5 с.
        $('.carousel').carousel({
            interval: 3000,
            //pause: 'hover', //при наведении мыши фото останавливается!
            wrap: true
        });
    </script>
</body>
</html>