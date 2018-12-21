<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>1-1</title>
    </head>
    <body>

        <?php 
            $name = 'Андрей';
            $yearsold = 25;
            $email = '123@gmail.com';
            $city = 'Брест';
            $aboutme = 'Ещё молод';
        ?>

        <h1>Страница пользователя <?php echo $name; ?></h1>

        <dl>
            <dt>Имя</dt>
            <dd><?php echo $name; ?></dd>

            <dt>Возраст</dt>
            <dd><?php echo $yearsold; ?></dd>

            <dt>Адрес электронной почты</dt>
            <dd><a href="<?php echo $email; ?>"><?php echo $email; ?></a></dd>

            <dt>Город</dt>
            <dd><?php echo $city; ?></dd>

            <dt>О себе</dt>
            <dd><?php echo $aboutme; ?></dd>
        </dl>




    </body>
</html>