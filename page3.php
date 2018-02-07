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
				<li><a href="page2.php" class="active">НОВИНИ</a></li>
                <li class="dropdown active">
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


<!--Осн. информ на странице-->
<div class="jumbotron fixed-top">
<div class="container-fluid">
    
    <div class="col-md-6">
       <div class="rov">
        <!--ФРУКТИ-->
        <style>
        table, td, th {
            border: 2px solid #797777;
        }   
        </style>
        <div class="table-responsive ">
            <table class="table">
                <caption><h3><a>Фрукти</a></h3></caption>
                <tr>
                    <th rowspan="2">Назва фруктів</th>
                    <th colspan="3">Ціна 2015 (грн./кг)</th>
                    <th colspan="3">Ціна 2016 (грн./кг)</th>
                    <th colspan="3">Ціна 2017 (грн./кг)</th>
                </tr>
                <tr>
                    <th>Весна</th>
                    <th>Літо</th>
                    <th>Осінь</th>
                    <th>Весна</th>
                    <th>Літо</th>
                    <th>Осінь</th>
                    <th>Весна</th>
                    <th>Літо</th>
                    <th>Осінь</th>
                </tr>
                <tr>
                    <td>Вишня </td>
                    <td>45</td>
                    <td>35</td>
                    <td>30</td>
                    <td>50</td>
                    <td>45</td>
                    <td>40</td>
                    <td>50</td><td>45</td><td>40</td>
                </tr>
                <tr>
                    <td>Полуниця </td>
                    <td>45</td>
                    <td>40</td>
                    <td>30</td>
                    <td>50</td>
                    <td>45</td>
                    <td>30</td>
                    <td>60</td><td>55-45</td><td>30</td>
                </tr>
                <tr>
                    <td>Малина </td>
                    <td>70</td>
                    <td>50</td>
                    <td>40</td>
                    <td>65</td>
                    <td>40</td>
                    <td>30</td>
                    <td>45</td><td>42</td><td>38</td>
                </tr>
            </table>
        </div>
        <!--<div id="oil" style="width: 100%; height: 250px;"></div>-->
        <!--Овочі-->
        <div class="table-responsive ">
        <table class="table">
            <caption><h3><a>Овочі</a></h3></caption>
            <tr>
                <th rowspan="2">Назва Овочів</th>
                <th colspan="3">Ціна 2015 (грн./кг)</th>
                <th colspan="3">Ціна 2016 (грн./кг)</th>
                <th colspan="3">Ціна 2017 (грн./кг)</th>
            </tr>
            <tr>
                <th>Весна</th>
                <th>Літо</th>
                <th>Осінь</th>
                <th>Весна</th>
                <th>Літо</th>
                <th>Осінь</th>
                <th>Весна</th>
                <th>Літо</th>
                <th>Осінь</th>
            </tr>
            <tr>
                <td>Огірок </td>
                <td>35</td>
                <td>20</td>
                <td>15</td>
                <td>40</td>
                <td>15</td>
                <td>20</td>
                <td>50</td><td>20</td><td>30</td>
            </tr>
            <tr>
                <td>Баклажан </td>
                <td>75</td>
                <td>20</td>
                <td>6</td>
                <td>80</td>
                <td>25</td>
                <td>8</td>
                <td>75</td><td>30</td><td>10</td>
            </tr>
            <tr>
                <td>Капуста молода </td>
                <td>19</td>
                <td>12</td>
                <td>10</td>
                <td>15</td>
                <td>6</td>
                <td>8</td>
                <td>40</td><td>15</td><td>10</td>
            </tr>
            <tr>
                <td>Капуста цвітна </td>
                <td>60</td>
                <td>20</td>
                <td>45</td>
                <td>65</td>
                <td>20</td>
                <td>50</td>
                <td>75</td><td>20</td><td>50</td>
            </tr>
            <tr>
                <td>Капуста стара </td>
                <td>10</td>
                <td>5</td>
                <td>2</td>
                <td>13</td>
                <td>6</td>
                <td>3</td>
                <td>15</td><td>10</td><td>6</td>
            </tr>
            <tr>
                <td>Картопля</td>
                <td>10</td>
                <td>8</td>
                <td>4</td>
                <td>12</td>
                <td>10</td>
                <td>4</td>
                <td>12</td><td>8</td><td>5</td>
            </tr>
            <tr>
                <td>Картопля молода </td>
                <td>35</td>
                <td>25</td>
                <td>12</td>
                <td>30</td>
                <td>20</td>
                <td>10</td>
                <td>30</td><td>20</td><td>13</td>
            </tr>
            <tr>
                <td>Лук перо </td>
                <td>30</td>
                <td>40</td>
                <td>20</td>
                <td>25</td>
                <td>35</td>
                <td>13</td>
                <td>50</td><td>40</td><td>20</td>
            </tr>
            <tr>
                <td>Цибуля біла </td>
                <td>20</td>
                <td>15</td>
                <td>12</td>
                <td>14</td>
                <td>12</td>
                <td>9</td>
                <td>20</td><td>15</td><td>13</td>
            </tr>
            <tr>
                <td>Морква молода </td>
                <td>22</td>
                <td>14</td>
                <td>10</td>
                <td>20</td>
                <td>15</td>
                <td>12</td>
                <td>22</td><td>19</td><td>14</td>
            </tr>
            <tr>
                <td>Морква стара </td>
                <td>9</td>
                <td>5</td>
                <td>4</td>
                <td>8</td>
                <td>4</td>
                <td>2</td>
                <td>8</td><td>6</td><td>4</td>
            </tr>
            <tr>
                <td>Перець гіркий </td>
                <td>68</td>
                <td>55</td>
                <td>45</td>
                <td>72</td>
                <td>65</td>
                <td>60</td>
                <td>80</td><td>70</td><td>65</td>
            </tr>
            <tr>
                <td>Перець червоний </td>
                <td>98</td>
                <td>90</td>
                <td>95</td>
                <td>113</td>
                <td>108</td>
                <td>108</td>
                <td>105</td><td>98</td><td>104</td>
            </tr>
            <tr>
                <td>Перець жовтий </td>
                <td>96</td>
                <td>89</td>
                <td>96</td>
                <td>112</td>
                <td>110</td>
                <td>109</td>
                <td>104</td><td>98</td><td>104</td>
            </tr>
            <tr>
                <td>Редька </td>
                <td>30</td>
                <td>14</td>
                <td>12</td>
                <td>25</td>
                <td>13</td>
                <td>11</td>
                <td>30</td><td>15</td><td>15</td>
            </tr>
            <tr>
                <td>Буряк </td>
                <td>14</td>
                <td>12</td>
                <td>8</td>
                <td>15</td>
                <td>13</td>
                <td>9</td>
                <td>10</td><td>14</td><td>8</td>
            </tr>
            <tr>
                <td>Селера </td>
                <td>50</td>
                <td>40</td>
                <td>20</td>
                <td>45</td>
                <td>35</td>
                <td>13</td>
                <td>40</td><td>30</td><td>20</td>
            </tr>
            <tr>
                <td>Томат </td>
                <td>30</td>
                <td>20</td>
                <td>17</td>
                <td>35</td>
                <td>15</td>
                <td>10</td>
                <td>30</td><td>20</td><td>16</td>
            </tr>
            <tr>
                <td>Томат сливка </td>
                <td>45</td>
                <td>35</td>
                <td>25</td>
                <td>55</td>
                <td>40</td>
                <td>30</td>
                <td>45</td><td>35</td><td>30</td>
            </tr>
            <tr>
                <td>Томат рожевий </td>
                <td>55</td>
                <td>28</td>
                <td>25</td>
                <td>60</td>
                <td>32</td>
                <td>28</td>
                <td>65</td><td>40</td><td>35</td>
            </tr>
            <tr>
                <td>Кріп </td>
                <td>40</td>
                <td>30</td>
                <td>35</td>
                <td>60</td>
                <td>70</td>
                <td>40</td>
                <td>70</td><td>60</td><td>50</td>
            </tr>
            <tr>
                <td>Часник </td>
                <td>95</td>
                <td>85</td>
                <td>78</td>
                <td>100</td>
                <td>90</td>
                <td>95</td>
                <td>150</td><td>140</td><td>120</td>
            </tr>
        </table>
    </div>
       </div>
    </div>
    
    <!--Текст-->
    <div class="col-md-4">
       <div class="rov" style="position: fixed; margin-right: 20%;">
        
        <h4><a>Заморожена ягода</a></h4><img src="images/14.jpg" class="img-thumbnail" style="width:35%; float: right;">
        <strong>Спосіб заморозки:</strong> шокова заморозка.<br>                          
        <strong>Умови зберігання:</strong><br>
        - при температурі +2 ... + 5°С: до 1 доби;<br>
        - при температурі -6°С: до 7 діб;<br>
        - при температурі -12°С: до 1 місяця;<br>
        - при температурі -18°С: до 36 місяців.<br>
        <strong>Період:</strong> цілий рік.<br>
        <strong>Упаковка:</strong> ящик 5 кг, ящик 10 кг, мішок 25 кг.<br>
        <strong>Мінімальна партія:</strong> 5 кг.<br>
        <strong>Рекомендації з транспортування:</strong> бажано -18°С<br>
        <strong>Походження:</strong> Польща
        <div class="text-justify">
        <strong>Характеристика:</strong> ягоди витягнуті, великого розміру, з дрібними кістянками, насиченого червоного кольору, блискучі, щільні. Смак ягід дуже приємний - солодкий з легкою кислинкою. Ягоди ароматні. Придатні для реалізації на свіжому ринку, а також для промислової переробки і швидкого заморожування. Після розморожування вихід становить до 95%.<br>
        <strong>Транспортабельність:</strong> відмінна.<br>
        </div>
        <strong>Зберігання:</strong> до 10 днів.<br>
        <strong>Рекомендації:</strong> свіжий ринок, заморозка, промислова переробка.<br>
        <strong>Регіон:</strong> Черкаська область.<br>
        <strong>Період збору врожаю:</strong> серпень - жовтень.<br>
       </div>
    </div>
    
    <div class="col-md-2">
        <div class="rov" style="position: fixed;">
        <img src="images/13.jpg" class="img-thumbnail" style="width:100%;"><br>
        <img src="images/15.png" class="img-thumbnail" style="width:100%;"><br>
        <img src="images/16.png" class="img-thumbnail" style="width:100%;"><br>
        <img src="images/12.jpg" class="img-thumbnail" style="width:100%;">
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