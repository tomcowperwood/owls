<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Мебель под ключ</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="nav_name">
                    <span>Мебель под ключ</span>
                </div>
                <form action="obr.php" method="get" class="search_form">
                    <input type="text" name="search" class="search" placeholder="Поиск">
                </form>
                <div class="nav_bucket">
                    <span>Корзина</span>
                </div>
            </nav>
        </div>
    </header>
    <div class="search2">
        <form action="obr.php" method="get" class="search_form2">
            <input type="text" name="search" class="search" placeholder="Поиск">
        </form>
    </div>
    <section class="products">
    <div class="prod">
            <div class="prod_head">
                <a href="#" class="prod_name">Название</a>
            </div>
            <div class="prod_img">
                <img src="../img/1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="prod_body">
                <div class="prod_cat">Категория</div>
                <div class="prod_price">Цена</div>
            </div>
            <div class="prod_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus dolor placeat sint id, nesciunt expedita. Sequi excepturi tempore nostrum iste nesciunt repellat necessitatibus dolor ratione. Velit voluptate quasi corrupti.
                </div>
            <div class="prod_act">
                <a href="#" class="prod_del">Удалить</a>
                <a href="#" class="prod_buy">В корзину</a>
            </div>
        </div>
        <div class="prod">
            <div class="prod_head">
                <a href="#" class="prod_name">Название</a>
            </div>
            <div class="prod_img">
                <img src="../img/1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="prod_body">
                <div class="prod_cat">Категория</div>
                <div class="prod_price">Цена</div>
            </div>
            <div class="prod_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus dolor placeat sint id, nesciunt expedita. Sequi excepturi tempore nostrum iste nesciunt repellat necessitatibus dolor ratione. Velit voluptate quasi corrupti.
                </div>
            <div class="prod_act">
                <a href="#" class="prod_del">Удалить</a>
                <a href="#" class="prod_buy">В корзину</a>
            </div>
        </div>
        <div class="prod">
            <div class="prod_head">
                <a href="#" class="prod_name">Название</a>
            </div>
            <div class="prod_img">
                <img src="../img/1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="prod_body">
                <div class="prod_cat">Категория</div>
                <div class="prod_price">Цена</div>
            </div>
            <div class="prod_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus dolor placeat sint id, nesciunt expedita. Sequi excepturi tempore nostrum iste nesciunt repellat necessitatibus dolor ratione. Velit voluptate quasi corrupti.
                </div>
            <div class="prod_act">
                <a href="#" class="prod_del">Удалить</a>
                <a href="#" class="prod_buy">В корзину</a>
            </div>
        </div>
        <div class="prod">
            <div class="prod_head">
                <a href="#" class="prod_name">Название</a>
            </div>
            <div class="prod_img">
                <img src="../img/1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="prod_body">
                <div class="prod_cat">Категория</div>
                <div class="prod_price">Цена</div>
            </div>
            <div class="prod_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus dolor placeat sint id, nesciunt expedita. Sequi excepturi tempore nostrum iste nesciunt repellat necessitatibus dolor ratione. Velit voluptate quasi corrupti.
                </div>
            <div class="prod_act">
                <a href="#" class="prod_del">Удалить</a>
                <a href="#" class="prod_buy">В корзину</a>
            </div>
        </div>
    </section>

    <!-- Страничка товара -->
    <section class="prod_one">
        <div class="prod2">
            <div class="prod_head">
                <a href="#" class="prod_name"></a>
            </div>
            <div class="prod_img">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../img/1.jpg" class="d-block w-100" alt="...">
                        <!-- <img src="../img/1.jpg" alt="" sizes="" srcset=""> -->
                        </div>
                        <div class="carousel-item">
                        <img src="../img/2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                
            </div>
            <div class="prod_body">
                <div class="prod_cat">Категория</div>
                <div class="prod_price">Цена</div>
            </div>
            <div class="prod_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate beatae, tempora nesciunt laborum nostrum ipsam deserunt, omnis odit sequi doloribus cumque ea libero? Dolorum laborum, praesentium temporibus optio est debitis.</div>
            <div class="prod_act">
                <a href="#" class="prod_del">Удалить</a>
                <a href="#" class="prod_buy">В корзину</a>
            </div>
        </div>

        <div class="prod_cont">
            <div class="">...</div>
        </div>
    </section>
    
    
    
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>