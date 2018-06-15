
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
 

Скопировать с GitHub  или сделать git clone https://github.com/yadrovGrigoriy/finalTaskPHP22.git<br>
Устaновить Composer https://getcomposer.org <br>
В Composer обновить зависимости:   comoser update <br> 
Переименовать .nav.example в .nav<br>
сгенерировать новый ключ php artisan key:generate <br>
Создать базу данных faq  и выполнить миграцию  или использовать вложеный dump<br> 
Вход в интерфейс Администратора Login: admin. Password:admin <br>
 [Dump базы](https://drive.google.com/open?id=1YGjKqg8CxSyq4uc7e6kLdshrMaoLDrZ9)
