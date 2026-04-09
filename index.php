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
