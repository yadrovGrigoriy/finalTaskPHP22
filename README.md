
 <h1> Описание </h1>
 Реализован стандартный сервис вопросов и ответов на базе фреймворка Laravel с использованием встроеного шаблонизатора. Клиентская часть  и интерфейс администратора. Администраторы редактируют и публикуют вопросы и ответы на сайте. Вопросы без ответов не публикуются. Проект написан  паттерном MVC, разеделен  на представление, контроллеры и модели связаные маршрутизатором. 
 
 
 <hr>
 <h1> Примеры </h1>
 
 [Клиентская часть](https://drive.google.com/open?id=1IlmT8lxIQF7xk7p5l7AwqNCmMFB6Q8ZE)
 
 [Админка](https://drive.google.com/open?id=1BDjXcGessFPG26uiXJg9bMXwfdNkbcvf)
 <hr>
 
 [структура базы](https://drive.google.com/open?id=1b0TSoyS7AOZEpr1nSMkSIvmCKTKL_Dk0)
 <hr>
 <h1>Требования </h1>
 
 PHP 7.1.3 или выше;
 MySQL      
 
 <h1>Установка</h1>
 

Скопировать с GitHub  или сделать git clone https://github.com/yadrovGrigoriy/finalTaskPHP22.git
Устaновить Composer https://getcomposer.org
В Composer обновить зависимости:   comoser update 
Переименовать .nav.example в .nav
сгенерировать новый ключ php artisan key:generate
Создать базу данных faq  и выполнить миграцию  или использовать вложеный dump 
Вход в интерфейс Администратора Login: admin. Password:admin 
 [Dump базы](https://drive.google.com/open?id=1YGjKqg8CxSyq4uc7e6kLdshrMaoLDrZ9)
