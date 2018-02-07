<?php 
    //Запускаем сессию
    session_start();
    require_once("php/myFunction.php");
    require_once("php/goods.php");
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
				<li><a href="page2.php">НОВИНИ</a></li>
                <li class="dropdown">
                    <a href="page3.php" class="dropdown-toggle" data-toggle="dropdown">АСОРТИМЕНТ<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="page3.php">ФРУКТИ</a></li>
                        <li class="divider"></li>
                        <li><a href="page3.php">ОВОЧІ</a></li>
                    </ul>
                </li>
				<li class="active"><a href="page4.php">ПОСЛУГИ</a></li>
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

<div class="jumbotron fixed-top">
<h2 class="classH">«ПОСЛУГИ»</h2>
<div class="container">
    <div class="thumbnail">
        <div class="caption">
        <div class="text-center classP"><strong>Замовити товар</strong></div> 
        <div class="row">
            <!--Левая часть-->
            <div class="col-lg-6 col-md-6 col-sm-6">
            <div style="width:100%">
                <div class="classP" style="text-indent: 1.5em;">
                     Підприємство «АГРОС» надає послуги, пов'язані з придбанням екологічно чистої та якісної овочево-фруктової продукції:
                </div>
                <!--
                <div id="carousel" class="carousel slide img-thumbnail" interval="1000" style="width:60%; float: right;">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/7.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/8.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/9.jpg" alt="">
                    </div>
                </div>
                </div>
                -->                   
                <ul>
                    <li class="classP" style="margin-left: 0px;">у свіжому вигляді;</li>
                    <li class="classP" style="margin-left: 0px;">у замороженому вигляді;</li>
                    <li class="classP" style="margin-left: 0px;">приготування салатів.</li>
                </ul>   
                <div class="classP" style="text-indent: 1.5em;">Доставка овочів і фруктів – прекрасна і зручна послуга «АГРОС».</div>
                <div class="classP" style="text-indent: 1.5em;">Доставка оперативна і гарантовано своєчасна прямо за заявленою адресою.</div>
                <div class="classP" style="text-indent: 1.5em;">Наше підприємство здійснює доставку також на замовлення деяких торгівельних мереж міста, ринки, дитячі заклади.</div>
            </div>
            </div>
            <!--Правая часть-->
            <div class="col-lg-6 col-md-6 col-sm-6">
            <style>
                table, td, th {
                   border: 2px solid rgba(238, 238, 238, 1);
                }   
            </style>
            <div style="background-color: rgba(238, 238, 238, 1);
            border: 2px solid rgba(51, 122, 183, 0.7);
            padding: 10px 20px; 
            width: 100%;
            border-radius: 25px;">
            <table class="table" border="0" style="width: 100%;">
                <form method="POST" action="page4.php">
                <tr>
                    <td style="width: 50%;">
                    <strong>Ім'я</strong><br>
                    <input  name="first_name" class="form-control" style="width: 100%;"  type="text" required="required" 
                    value="<?php first_name(); ?>">
                    </td>
                    <td style="width: 50%;">
                    <strong>Прізвище</strong><br>
                    <input  name="last_name" class="form-control" style="width: 100%;"   type="text" required="required"
                    value="<?php last_name(); ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <strong>Ваш email</strong><br>
                    <input name="email" class="form-control" style="width: 100%;" type="email" required="required" 
                    value="<?php echo $_SESSION['email']; ?>" >
                    </td>
                    <td>
                    <strong>Ваш телефон 0XX-XXXX-XXX</strong><br>
                    <input name="phone" class="form-control" style="width: 100%;" type="text" pattern="0[0-9]{2}-[0-9]{4}-[0-9]{3}" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Овочі чи Фрукти?</strong><br>
                        <select id="vegetables_fruits"  name="vegetables_fruits" class="form-control" style="width: 100%;" type="text" required="required" >
                          <option required="required"></option>
                          <option value="Фрукти">Фрукти</option>
                          <option value="Овочі">Овочі</option>
                        </select>
                    </td>
                    <td>
                        <strong>Назва товару</strong><br>
                        <select id="product_name" name="product_name" class="form-control" style="width: 100%;" type="text" required="required">
                        <option>Овочі чи Фрукти?</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <strong>Кількість кг</strong><br>
                    <select id="weight" type='text' name="weight" class="form-control" style="width: 100%;" type="text" required="required">
                          <option required="required"></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          
                          <option value="31">31</option>
                          <option value="32">32</option>
                          <option value="33">33</option>
                          <option value="34">34</option>
                          <option value="35">35</option>
                          <option value="36">36</option>
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                          <option value="44">44</option>
                          <option value="45">45</option>
                          <option value="46">46</option>
                          <option value="47">47</option>
                          <option value="48">48</option>
                          <option value="49">49</option>
                          <option value="50">50</option>
                    </select>
                    </td>
                    <td>
                        <strong><span id="span_priceOne"></span></strong><span id="span_priceTwo" style="color:#eee;" ></span><br>
                    <input id="price" name="price" class="form-control" style="width: 100%;" type="text" readonly value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" class="btn btn-primary" style="width: 100%;" value="Замовити товар" name="submit">
                    </td>

                </tr>
                </form>
            </table>
            </div>
            </div>
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
    <script src="js/myScript.js"></script>
    <script>//авт. смена фото в каруселе с интервалом 2.5 с.
        $('.carousel').carousel({
            interval: 3000,
            //pause: 'hover', //при наведении мыши фото останавливается!
            wrap: true
        });      
    </script>
</body>
</html>
<!--
    <form method="POST" action="php/goods.php">
                <div class="classP">
                    <input  name="first_name" class="form-control" style="width: 50%;"  type="text" placeholder="first_name" required="required">
                </div>
                <div class="classP">
                    <input  name="last_name" class="form-control" style="width: 50%;"  type="text" placeholder="last_name" required="required">
                </div>
                <div class="classP">
                    <input name="email" class="form-control" style="width: 50%;" type="email" placeholder="Ваш email" required="required">
                </div>
                <div class="classP">
                    <strong>Ваш телефон 0XX-XXXX-XXX</strong>:
                    <input name="phone" class="form-control" style="width: 50%;" type="text" pattern="0[0-9]{2}-[0-9]{4}-[0-9]{3}" required="required">
                </div>
                <div class="classP">
                    <input name="product_name" class="form-control" style="width: 50%;" type="text" placeholder="product_name" required="required">
                </div>
                <div class="classP">
                    <input name="weight" class="form-control" style="width: 50%;" type="text" placeholder="weight" required="required">
                </div>
                <div class="classP">
                    <input name="price" class="form-control" style="width: 50%;" type="text" placeholder="price" required="required">
                </div>
                    <input type="submit" class="btn btn-primary" value="Відправити повідомлення адміністратору" name="submit">
    </form>  
-->
