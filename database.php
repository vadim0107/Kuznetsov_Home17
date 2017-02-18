<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'homework17';


$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) OR DIE("Не могу создать соединение ");

$db_connect->set_charset("utf8");

$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$family = $_POST['family'];
$social = $_POST['social'];
$home = $_POST['home'];
$activity = $_POST['activity'];

if (isset($activity)) {
    $activityString = implode(",", $activity);
};

$frequency = $_POST['frequency'];
$books = $_POST['book'];
$comments = $_POST['comments'];
$spam = $_POST['spam'];

if (isset($spam)) {
    $spamString = implode(",", $spam);
};

$complexity = $_POST['task'];

$result = mysqli_query($db_connect, "INSERT INTO anketa (name, surname, gender, age, birthday, family, social, home, activity, frequency, books, comments, spam, complexity) VALUES ('$name','$surname', '$gender', '$age', '$birthday', '$family', '$social', '$home', '$activityString', '$frequency', '$books', '$comments', '$spamString', '$complexity')");

echo mysqli_error($db_connect);

echo 'Congratulation!!!';

echo '<a href="list-db.php"><h2>View all database</h2> </a>';
