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
        <form action="index.php" method="post">

            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" placeholder="Введите имя" required>
            </div>

          <div class="form-group">
                <label for="email">Почта:</label>
                <input type="email" id="email" name="email" placeholder="name@example.ru" required>
            </div>


            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" required>
            </div>


            <div class="form-group">
                <label for="gender">Пол:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Выберите пол</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
            </div>

<div class="btn-class">
            <button type="submit">Зарегистрироваться</button>
</div>    
    </form>

        <p class="placeholder-note">* Все поля обязательны для заполнения</p>
    </div>


</body>
</html>


