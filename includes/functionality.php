<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    session_start();

    $errors = [];

    // Check if all the fields are filled and escape them

    foreach ($_POST as $key => $field) {
        if (empty(trim($field))) {
            $errors['empty_fields'] = 'Моля попъленете всички полета.';
        }
    }

    // Check if email is valid

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['not_valid_email'] = 'Невалиден адрес';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: http://form.dev/');
        exit();
    }

    // Insert it into the Database

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'form';

    $con = mysqli_connect($server, $username, $password, $db);
    mysqli_set_charset($con, 'UTF8');

    if (!$con) {
        die('Connection Problem.') . mysqli_connect_error();
    }

    // Escape the information from the frontend

    foreach ($_POST as $key => $field) {
        $_POST[$key] = mysqli_real_escape_string($con, $field);
    }

    $qry = "INSERT INTO user_records (first_name, last_name, email, description , current_work , address) VALUES ('{$_POST['firstname']}' , '{$_POST['lastname']}' , '{$_POST['email']}' , '{$_POST['description']}' , '{$_POST['currentwork']}' , '{$_POST['adress']}')";

    mysqli_query($con, $qry);

    mysqli_close($con);

    // Send Email

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: WebsiteContact <localhost@local.bg>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $massage = 'Изпратено от контактната форма на сайта' . '<br/>' . 'Име ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '<br/>' . 'Електронна поща ' . $_POST['email'] . '<br/>' . 'Описание ' . $_POST['description'] . '<br/>' . 'Место работа ' . $_POST['currentwork'] . '<br/>' . 'Адрес ' . $_POST['adress'];

    $sender = mail('aleksanduralexiev@gmail.com', 'Mail from contact form', $massage, $headers);

    if ($sender) {
        $_SESSION['success'] = 'Успешно изпратихте формата';
        header('Location: http://form.dev/');
        exit();
    } else {
        $errors['not_sent'] = 'Имаше проблем с изпращането';
        $_SESSION['errors'] = $errors;
        header('Location: http://form.dev/');
        exit();
    }


} else {
    header('Location: http://form.dev/');
    exit();
}