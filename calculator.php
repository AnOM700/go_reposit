<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор на PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        
        .calculator {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .display {
            background-color: #fff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: right;
            font-size: 24px;
            min-height: 30px;
        }
        
        .input-group {
            margin-bottom: 15px;
        }
        
        .input-group input, .input-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        .input-group select {
            background-color: #666;
            color: white;
            cursor: pointer;
        }
        
        button {
            width: 100%;
            padding: 15px;
            background-color: #ff9500;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        button:hover {
            background-color: #ffaa33;
        }
        
        .result {
            background-color: #444;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2 style="color: white; text-align: center; margin-top: 0;">Калькулятор</h2>
        
        <form method="POST" action="">
            <div class="input-group">
                <input type="number" name="num1" step="any" placeholder="Первое число" required 
                       value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
            </div>
            
            <div class="input-group">
                <select name="operation" required>
                    <option value="add" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'add') ? 'selected' : ''; ?>>Сложение (+)</option>
                    <option value="subtract" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'subtract') ? 'selected' : ''; ?>>Вычитание (-)</option>
                    <option value="multiply" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'multiply') ? 'selected' : ''; ?>>Умножение (×)</option>
                    <option value="divide" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'divide') ? 'selected' : ''; ?>>Деление (÷)</option>
                </select>
            </div>
            
            <div class="input-group">
                <input type="number" name="num2" step="any" placeholder="Второе число" required
                       value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
            </div>
            
            <button type="submit" name="calculate">Вычислить</button>
        </form>
        
        <?php
        if (isset($_POST['calculate'])) {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);
            $operation = $_POST['operation'];
            $result = '';
            $error = '';
            
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $error = 'Ошибка: деление на ноль!';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $error = 'Выберите операцию';
            }
            
            if ($error) {
                echo "<div class='result' style='color: #ff6b6b;'>$error</div>";
            } else {
                echo "<div class='result'>Результат: " . number_format($result, 2, '.', '') . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
