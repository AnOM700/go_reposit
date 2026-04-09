<?php
class Page {
    private string $name;
    private string $template;

    public function __construct(){
    
        $this->name="page";
        $this->template="<div><p>It is a default page</p></div>"        
        
    }

    public function render(){
        echo $this->template;
    
    }


}

class BlogPage extends Page{
    public function __construct(){

        $this->name = "blog";
        $this->template="
        <div style='display: flex; gap: 20px;'>
            <h1>Что появилось раньше: яйцо или курица?</h1>
                <div style='border: 1px solid #000; padding:10px;'>
                    <img src='Images/chicken.jpg' alt='img'/>
                    <h3>Курица</h3>
                    <p>Подробнее о курице...</p>
                </div>
                <div style='border: 1px solid #000; padding:10px;'>
                    <img src='Images/egg.jpg'/>
                    <h3>Яйцо</h3>
                    <p>Подробнее о яйце</p>
                </div>
        </div>"



    }




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
</body>
</html>


?>

