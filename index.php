<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="nav_name">
                    <span>Owl's Cinema Club</span>
                </div>
                <form action="obr.php" method="get" class="search_form">
                    <input type="text" name="search" class="search" placeholder="Search">
                </form>
                <div class="nav_enter">
                    <span>Sign In</span>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="first">
        <div class="container">
            <div class="fitst_welcome">
                <h1 class="">
                Welcome to the Owl's Cinema Club.</h1>
                <h2> </h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis saepe aspernatur expedita, voluptate molestias incidunt nemo aliquam quos? Sunt quia aut, numquam exercitationem ad corrupti vero dolores quos eius sed?</h3>
                <h4><a href="jk/index.php">Jk</a></h4>
                <h4><a href="jko/index.php">Jk (OOP)</a></h4>
                <h4><a href="http://banya-bars.kh.ua">Bars</a></h4>
                <h4><a href="bars">Bars beta</a></h4>
                <h4><a href="major">Comrade</a></h4>
                
            </div>
        </div>
    </section>

    <div class="nav_2">
        <div class=""><a href="#" class="link">Искусство </a> </div> 
        <div class=""><a href="#" class="link">История </a> </div> 
        <div class=""><a href="#" class="link">Философия </a> </div> 
        <div class=""><a href="#" class="link">Образование </a> </div> 
        
    </div>

    <section class="meta_1">        
            <div class="c1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nam voluptatibus maiores vero modi nihil, reiciendis accusamus repudiandae id non voluptates ad corporis mollitia voluptatem soluta saepe! Debitis, unde iste!</div>
            <div class="c2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt numquam commodi laboriosam at nihil cumque necessitatibus distinctio eius? Dicta voluptate exercitationem perferendis illum. Voluptatem velit, excepturi ea at magni aperiam.</div>
    </section>

    <section class="second">
        <h1 class="text-center"> OOP    </h1> 

        <?php
            require_once 'classes/1.php';
            







            
        ?>

    </section>


        
   
    
    
    <footer></footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
              <script src="js/popper.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    
</body>
</html>