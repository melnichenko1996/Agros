<?php 
    //Запускаем сессию
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            //================ Проверка email ==================

            //регулярное выражение для проверки email
            var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
            var mail = $('input[name=email]');
            
            mail.blur(function(){
                if(mail.val() != ''){

                    // Проверяем, если введенный email соответствует регулярному выражению
                    if(mail.val().search(pattern) == 0){
                        // Убираем сообщение об ошибке
                        $('#valid_email_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }else{
                        //Выводим сообщение об ошибке
                        $('#valid_email_message').text('Не правильний Email');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                    }
                }else{
                    $('#valid_email_message').text('Уведіть ваш email');
                }
            });

            //================ Проверка длины пароля ==================
            var password = $('input[name=password]');
            
            password.blur(function(){
                if(password.val() != ''){

                    //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                    if(password.val().length < 6){
                        //Выводим сообщение об ошибке
                        $('#valid_password_message').text('Мінімальна довжина пароля 6 символів');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                        
                    }else{
                        // Убираем сообщение об ошибке
                        $('#valid_password_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }
                }else{
                    $('#valid_password_message').text('Введіть пароль');
                }
            });
        });
    </script>
</head>
