<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    
    $errors = [];
    

    if (empty($username)) {
        $errors[] = "Имя не должно быть пустым!";
    } elseif (strlen($username) < 2) {
        $errors[] = "Имя должно содержать минимум 2 символа!";
    }
    

    if (empty($email)) {
        $errors[] = "Email не должен быть пустым!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Введите корректный email адрес!";
    }
    

    if (empty($password)) {
        $errors[] = "Пароль не должен быть пустым!";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов!";
    }
    

    if (empty($confirm_password)) {
        $errors[] = "Подтверждение пароля не должно быть пустым!";
    } elseif ($password !== $confirm_password) {
        $errors[] = "Пароли не совпадают!";
    }
    

    if (empty($gender)) {
        $errors[] = "Выберите пол!";
    }
    

    $_SESSION['old_data'] = [
        'name' => $username,
        'email' => $email,
        'gender' => $gender
    ];
    
    if (!empty($errors)) {

        $_SESSION['errors'] = $errors;
        header("Location: index.php");
        exit();
    } else {

        $_SESSION['success_data'] = [
            'name' => $username,
            'email' => $email,
            'gender' => $gender
        ];
header("Location: calculator.php");
        exit();
    }
} else {

    header("Location: index.php");
    exit();
}
?>
