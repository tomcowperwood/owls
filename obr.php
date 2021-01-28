<?php
echo $_POST['red'];
?>
<section class="second">
        <h1 class="text-center"> OOP    </h1> 
        <span>Простота, Управляемость, Мобильность, Сопровождение.</span><br>
        <span>Class = $var (Свойство) + function(){} (Метод)</span><br>
        <span>Объявление класса: class Owl { }; </span><br>
            <?php   
                class Owl {
                    public $one = '1';
                    protected $two = '2';
                    private $three = '3';

                    public function fly(){
                        echo "Owl fly {$this->one}";
                    }
                };           
            ?>
        <span>Создание объекта:   $owl_1 = new Owl();</span><br>
            <?php   $owl_1 = new Owl();     ?>
        <span>Оператором instanceof можно узнать является ли объект $owl_1 экземпляром класса Owl. (true/false)</span><br>
            <?php   var_dump($owl_1 instanceof Owl);?><br>
        <span>Область видимость переменных: </span><br>
            <span>-private -> везде</span>
            <br><span>-protected -> в классе и дочерних классах</span>
            <br><span>-private -> только внутри методов этого класса</span><br><br>
            <?php 
                echo 'Public ->'.$owl_1->one.'<br>';
                echo 'Protected -> Fatal Error'; 
                // echo $owl_1->two;
                echo '<br> Private -> Fatal Error <br>'; 
                // echo $owl_1->three;
                $owl_1->fly();
            ?>
        <br><span>Констуктор - позволяет записывать в $ аргумент, записанный при создании объекта.</span>
        <br><span>А деструктор - удаляет оперативную память.</span>
            <?php

                class cinema {
                    public $movie;
                    public $genre;

                    function __construct($movie, $genre){
                        $this->movie = $movie;
                        $this->genre = $genre;
                    }

                    function get_m(){
                        return"{$this->movie}";
                    }
                    function get_g(){
                        return"{$this->genre}";
                    }
                }
                $mgs = new cinema("MGS", "Military");
                echo $mgs->get_g();

                class Fruit {
                    public $name;
                    public $color;
                  
                    function __construct($name) {
                      $this->name = $name;
                    }
                    function __destruct() {
                      echo "The fruit is {$this->name}.";
                    }
                  }
                  
                  $apple = new Fruit("Apple");
                  echo $apple->color;
            ?>
        <br>







        </section>