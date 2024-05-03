<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <meta name="description" content="Контактная информация мастерской по пошиву спецодежды. Звоните или оставляйте заявки через форму обратной связи.">
    <meta name="keywords" content="контакты мастерской пошива спецодежды, телефон мастерской, адрес мастерской, форма обратной связи">
</head>
<?php
echo "<body bgcolor='#90EE90' color='SkyBlue'>";

?>
<li><a href="http://ssait/Poshiv1/">На главную</a></li>
<body>
    <h1>Контакты</h1>
    <p>Свяжитесь с нами для заказа спецодежды или задайте любые вопросы:</p>
    <ul>
        <li>Телефон: 123-456-789</li>
        <li>Адрес: г. Москва, ул. Примерная, д. 123</li>
    </ul>
    <h2>Форма обратной связи</h2>
    <form action="submit_contact.php" method="POST">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="message">Сообщение:</label>
        <textarea name="message" id="message" rows="5"></textarea>

        <button type="submit">Отправить</button>
    </form>

    
    
    
</body>
</html>
