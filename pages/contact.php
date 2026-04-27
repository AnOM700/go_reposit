<?php include '../includes/header.php'; ?>

<main>
    <h1>Свяжитесь со мной</h1>
    <form action="process.php" method="POST">
        <input type="text" name="name" placeholder="Ваше имя" required><br><br>
        <input type="email" name="email" placeholder="Ваш Email" required><br><br>
        <textarea name="message" placeholder="Сообщение"></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>

