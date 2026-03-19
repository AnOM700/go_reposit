<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гончаров М.Д</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="registration-form">
        <h2>Регистрация</h2>
        
        <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
            <div class="error-messages" style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red; border-radius: 5px;">
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <p style="margin: 5px 0;"><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>
        
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" placeholder="Введите имя" 
                       value="<?php echo isset($_SESSION['old_data']['name']) ? htmlspecialchars($_SESSION['old_data']['name']) : ''; ?>" >
            </div>

            <div class="form-group">
                <label for="email">Почта:</label>
                <input type="email" id="email" name="email" placeholder="name@example.ru"
                       value="<?php echo isset($_SESSION['old_data']['email']) ? htmlspecialchars($_SESSION['old_data']['email']) : ''; ?>"  />
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль"/>
            </div>

            <div class="form-group">
                <label for="confirm_pwd">Подтверждение пароля:</label>
                <input type="password" id="confirm_pwd" name="confirm_password" placeholder="Подтвердите пароль"/>
            </div>

            <div class="form-group">
                <label for="gender">Пол:</label>
                <select id="gender" name="gender">
                    <option value="" disabled selected>Выберите пол</option>
                    <option value="male" <?php echo (isset($_SESSION['old_data']['gender']) && $_SESSION['old_data']['gender'] == 'male') ? 'selected' : ''; ?>>Мужской</option>
                    <option value="female" <?php echo (isset($_SESSION['old_data']['gender']) && $_SESSION['old_data']['gender'] == 'female') ? 'selected' : ''; ?>>Женский</option>
                </select>
            </div>

            <div class="btn-class">
                <button type="submit">Зарегистрироваться</button>
            </div>    
        </form>

        <p class="placeholder-note">* Все поля обязательны для заполнения</p>
    </div>
    
    <?php 
    if (isset($_SESSION['old_data'])) {
        unset($_SESSION['old_data']);
    }
    ?>
</body>
</html>
