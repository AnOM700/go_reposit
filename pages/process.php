<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    echo "<h1>Спасибо, $name!</h1>";
    echo "<p>Мы получили ваше сообщение и ответим на $email.</p>";
    echo '<a href="../index.php">Вернуться на главную</a>';
} else {
    header("Location: contact.php");
}
?>

