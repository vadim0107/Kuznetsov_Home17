<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="database.php" method="post">
    <fieldset>
        <legend><strong>Коротко о себе</strong></legend>
        <ul>
            <li>
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name">
            </li>
            <li>
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname" name="surname">
            </li>
            <li>
                <label for="">Пол:</label>
                <input type="radio" name="gender" checked="checked" id="man" value="man">
                <label for="man">мужской</label>
                <input type="radio" name="gender" id="woman" value="woman">
                <label for="woman">женский</label>
            </li>
            <li>
                <label for="age">Возраст:</label>
                <input type="text" id="age" size="2" name="age"> лет
            </li>
        </ul>
    </fieldset>
    <fieldset>
        <legend><strong>Подробнее о себе:</strong></legend>
        <ul>
            <li>
                <input type="radio" checked="checked" id="man2" name="sex" value="man2">
                <label for="man2">Молодой человек</label>
            </li>
            <li>
                <input type="radio" id="woman2" name="sex" value="woman2">
                <label for="woman2">Девушка</label>
            </li>
            <li>
                <input type="text" id="date" name="birthday">
                <label for="date">Дата рождения</label>
            </li>
            <li>
                <input type="text" id="family" name="family">
                <label for="family">Семейное положение</label>
            </li>
            <li>
                <input type="text" id="social" name="social">
                <label for="social">Социальний статус</label>
            </li>
            <li>
                <input type="text" id="home" name="home">
                <label for="home">Местожительство</label>
            </li>
        </ul>
        <h4>Что вы обычно делаете на выходных:</h4>
        <ul>
            <li>
                <input type="checkbox" name="activity[]" value="sleep" id="sleep">
                <label for="sleep">Сплю</label>
            </li>
            <li>
                <input type="checkbox" name="activity[]" value="friends" id="friends">
                <label for="friends">Гуляю з друзьями</label>
            </li>
            <li>
                <input type="checkbox" name="activity[]" value="fishing" id="fish">
                <label for="fish">Хожу на рыбалку</label>
            </li>
            <li>
                <input type="checkbox" name="activity[]" value="games" id="play">
                <label for="play">Играю в игры</label>
            </li>
        </ul>
        <h4>Рассказать о формах в книге, посвященной HTML:</h4>
        <ul>
            <li>
                <select name="frequency" id="frequency">
                    <option value="site">Site frequency:</option>
                    <option value="one">one</option>
                    <option value="two">two</option>
                    <option value="three">three</option>
                </select>
            </li>
        </ul>
        <h4>Сколько книг вы прочитали за свою жизнь:</h4>
        <ul>
            <li>
                <input type="radio" id="ten" name="book" value="0-10" checked>
                <label for="ten">0-10</label>
            </li>
            <li>
                <input type="radio" id="twenty" name="book" value="11-20">
                <label for="twenty">11-20</label>
            </li>
            <li>
                <input type="radio" id="fifty" name="book" value="21-50">
                <label for="fifty">21-50</label>
            </li>
            <li>
                <input type="radio" id="fifty-plus" name="book" value="50+">
                <label for="fifty-plus">50+</label>
            </li>
        </ul>
        <h4>Ваши комментарии:</h4>
        <ul>
            <li>
                <label for="comments"></label>
                <textarea name="comments" cols="50" rows="10" id="comments"></textarea>
            </li>
            <li>
                <label for="position"></label>
                <select name="position" size="3" id="position">
                    <option value="first_pos">Первая позиция</option>
                    <option value="second_pos" selected>Вторая позиция</option>
                    <option value="third_pos">Третяя позиция</option>
                </select>
            </li>
        </ul>
    </fieldset>
    <fieldset>
        <legend><strong>И в заключении:</strong></legend>
        <ul>
            <li>
                <input type="text" placeholder="Это поле было введено до вас" size="25">
            </li>
            <li>
                <label for="mail">Email:</label>
                <input type="email" id="mail" size="25">
            </li>
        </ul>
        <h4>Хотите подписаться на самую модную рассылку спама?</h4>
        <span><em>Выберите категории</em></span>
        <ul>
            <li>
                <input type="checkbox" id="category1" value="category1">
                <label for="category1">Оборудование</label>
            </li>
            <li>
                <input type="checkbox" id="category2" value="category2">
                <label for="category2">Как приготовить обеды</label>
            </li>
            <li>
                <input type="checkbox" id="category3" value="category3">
                <label for="category3">Заработай миллион за два дня</label>
            </li>
        </ul>
        <h4>На сколько сложная задача:</h4>
        <ul>
            <li>
                <input type="radio" id="answer1" checked="checked" name="task" value="answer1">
                <label for="answer1">Совсем нет</label>
            </li>
            <li>
                <input type="radio" id="answer2" name="task" value="answear2">
                <label for="answer2">Так себе</label>
            </li>
            <li>
                <input type="radio" id="answer3" name="task" value="answear3">
                <label for="answer3">Еле справились</label>
            </li>
        </ul>
    </fieldset>
    <input type="submit">
</form>
<a href="list-db.php"><h3>View all database</h3></a>
</body>
</html>
