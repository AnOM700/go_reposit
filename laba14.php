<?php
class Page {
    protected string $name;
    protected string $template;

    public function __construct(){
    
        $this->name="page";
        $this->template="<div><p>It is a default page</p></div>";        
        
    }

    public function render(){
        echo $this->template;
    
    }


}

class BlogPage extends Page{
    public function __construct(){

        $this->name = "blog";
        $this->template="
        <div>
            <h1>Что появилось раньше: яйцо или курица?</h1>
            <div style='display: flex;  gap: 20px; align-items:flex-start;'>
                <div style='border: 1px solid #000; padding:10px;'>
                    <img src='Images/chicken.jpg' alt='img' width=250px/>
                    <h3>Курица</h3>
                    <p>Подробнее о курице...</p>
                </div><br>
                <div style='border: 1px solid #000; padding:10px; height:285px '>
                    <img src='Images/egg.jpg' width=250px/>
                    <h3>Яйцо</h3>
                    <p>Подробнее о яйце...</p>
                </div>

            </div>
        </div>";



    }




}
class HomePage extends Page {
    public function __construct() {
        $this->name = "home";
        $this->template = "
            <div style='background: #e1f5fe; padding: 20px; border-radius: 5px;'>
                <h1>Добро пожаловать на Главную!</h1>
                <p>Это первая страница в соответствии с заданием.</p>
            </div>";
    }
}

$currentPage = $_GET['page'] ?? 'home'; 

switch ($currentPage) {
    case 'blog':
        $view = new BlogPage();
        break;
    case 'page':
        $view = new Page();
        break;
    case 'home':
    default:
        $view = new HomePage();
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гончаров М.Д.</title>
    <style>
        nav{background:#f4f4f4;padding:10px;margin-bottom:20px}
        nav a {margin-right:15px;text-decoration:none;color:blue;font-weight:bold;}
        .active{color:red;}
    </style>
</head>
<body>
    <nav>
        <a href="?page=home">1.Главная</a>
<a href="?page=page">2. Стандартная страница</a>
<a href="?page=blog">3. Блог(Карточки)</a>
    </nav>
    <div>
        <?php

            $view->render();
        ?>
    </div>
</body>
</html>



