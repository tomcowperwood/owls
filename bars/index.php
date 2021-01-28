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
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&family=Philosopher&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<header class="header">
    <div class="headline">
        <h2 class="name">Банный комплекс</h2>
        <h1 class="name">БАРС</h1>
    </div>
        <!-- <h1 class="name">Барс</h1> -->

    <nav class="nav">
        <a href="#" id="rus-b">Русская баня</a>
        <a href="#" id="tur-b">Турецкая баня</a>
        <a href="#" id="fin-b">Финская баня</a>
        <a href="#" id="sport-b">Спорт комплекс</a>
        <a href="#" id="auto-b">Авто-баня</a>
    </nav>

</header>

<section class="one">
    <div class="manors-r" id="idmanor-r">
        <span class="manor" id="r-1-b">I</span>
        <span class="manor" id="r-2-b">II</span>
        <span class="manor" id="r-3-b">III</span>
        <span class="manor" id="r-4-b">IV</span>
        <span class="manor" id="tur1-b">I</span>
        <span class="manor" id="tur2-b">II</span>
    </div>

    <div id="r-1">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $servername = "localhost"; $username = "root"; $password = ""; $dbname = "bars";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

                        $sql = "SELECT * FROM photos WHERE id='1'";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            
                            echo   '<div class="carousel-item active">
                                    <img src="'.$row['one'].'" class="d-block w-100" alt="...">
                                    </div>';    

                                if(!empty($row['two'])){
                                    echo '<div class="carousel-item">
                                            <img src="'.$row['two'].'" class="d-block w-100" alt="...">
                                        </div>';
                                }
                                elseif(!empty($row['three'])){
                                    echo '<div class="carousel-item">
                                            <img src="'.$row['three'].'" class="d-block w-100" alt="...">
                                        </div>';
                                }
                                else{
                                    echo '<div class="carousel-item">
                                            <img src="img/3.jpg" class="d-block w-100" alt="...">
                                        </div>';
                                }
                            

                            

                            }
                          } else {
                            echo "0 results";
                          }
                        $conn->close();

                        // echo '<div class="carousel-item active">
                        //         <img src="'.$m[1].'" class="d-block w-100" alt="...">
                        //     </div>';
                        // foreach($m as $v){
                        //     if(!empty($v)){
                        //     echo '

                        //     <div class="carousel-item">
                        //         <img src="'.$v.'" class="d-block w-100" alt="...">
                        //     </div>
                        //     ';
                        //     }
                        // }
                        
                        ?>



                        <!-- <div class="carousel-item active">
                            <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='1'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
            echo "<p>".$row1["descr"]."</p>";
            echo "<p> Цена: ".$row1["price"]." грн/час</p>";
                
                ?>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>
                
                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="1">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                    </form>
                    <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                    }} else {
                    echo "0 results";
                    echo 
                    '   <form action="redac.php" method="post">
                            <input type="hidden" name="manornum" value="1">
                            <input type="submit" value="Добавит запись" class="xbutton">
                        </form>
                    ';                    
                    }
                    $conn->close();
                        ?>
                </div>
            </div>    
        </div>
    </div>
    <div id="r-2">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    // $servername = "localhost"; $username = "root"; $password = ""; $dbname = "bars";
                    // $conn = new mysqli($servername, $username, $password, $dbname);
                    // if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

                    // $sql = "SELECT photo FROM bani WHERE id='2'";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    // // output data of each row
                    // while($row = $result->fetch_assoc()) {
                    //     $m = explode(';',$row['photo']);
                    // }
                    // } else {
                    // echo "0 results";
                    // }
                    // $conn->close();
                    // echo '<div class="carousel-item active">
                    //         <img src="'.$m[1].'" class="d-block w-100" alt="...">
                    //     </div>';
                    // foreach($m as $v){
                    //     if(!empty($v)){
                    //     echo '

                    //     <div class="carousel-item">
                    //         <img src="'.$v.'" class="d-block w-100" alt="...">
                    //     </div>
                    //     ';
                    //     }
                    // }

                    ?>



                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='2'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="2">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                    '   <form action="redac.php" method="post">
                            <input type="hidden" name="manornum" value="2">
                            <input type="submit" value="Добавит запись" class="xbutton">
                        </form>
                    ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>  
            
        </div>
    </div>
    <div id="r-3">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    // $servername = "localhost"; $username = "root"; $password = ""; $dbname = "bars";
                    // $conn = new mysqli($servername, $username, $password, $dbname);
                    // if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

                    // $sql = "SELECT photo FROM bani WHERE id='3'";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    // // output data of each row
                    // while($row = $result->fetch_assoc()) {
                    //     $m = explode(';',$row['photo']);
                    // }
                    // } else {
                    // echo "0 results";
                    // }
                    // $conn->close();
                    // echo '<div class="carousel-item active">
                    //         <img src="'.$m[1].'" class="d-block w-100" alt="...">
                    //     </div>';
                    // foreach($m as $v){
                    //     if(!empty($v)){
                    //     echo '

                    //     <div class="carousel-item">
                    //         <img src="'.$v.'" class="d-block w-100" alt="...">
                    //     </div>
                    //     ';
                    //     }
                    // }

                    ?>



                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='3'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="3">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="3">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div id="r-4">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    // $servername = "localhost"; $username = "root"; $password = ""; $dbname = "bars";
                    // $conn = new mysqli($servername, $username, $password, $dbname);
                    // if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

                    // $sql = "SELECT photo FROM bani WHERE id='4'";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    // // output data of each row
                    // while($row = $result->fetch_assoc()) {
                    //     $m = explode(';',$row['photo']);
                    // }
                    // } else {
                    // echo "0 results";
                    // }
                    // $conn->close();
                    // echo '<div class="carousel-item active">
                    //         <img src="'.$m[1].'" class="d-block w-100" alt="...">
                    //     </div>';
                    // foreach($m as $v){
                    //     if(!empty($v)){
                    //     echo '

                    //     <div class="carousel-item">
                    //         <img src="'.$v.'" class="d-block w-100" alt="...">
                    //     </div>
                    //     ';
                    //     }
                    // }

                    ?>



                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='4'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="4">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="4">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>

    <div id="tur">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='5'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="5">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="5">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div> 
        </div>
    </div>
    <div id="tur2">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls6" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls6" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='6'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="6">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="6">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div id="fin">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls7" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls7" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='7'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="7">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="7">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div id="sport">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls8" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls8" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='8'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="8">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="8">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div id="auto">
        <div class="xev">
            <div class="photo">
                <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls9" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls9" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>

            <div class="desc">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT price, descr FROM bani WHERE id='9'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                echo "<p>".$row1["descr"]."</p>";
                echo "<p> Цена: ".$row1["price"]." грн/час</p>";

                ?>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>

                <div class="xbuttons">
                    <form action="redac.php" method="post">
                        <input type="hidden" name="manornum" value="9">
                        <input type="hidden" name="manordesc" value=" <?php echo $row1["descr"] ?> ">
                        <input type="hidden" name="manorprice" value=" <?php echo $row1["price"] ?> ">
                        <!-- <input type="text" name="manortext" id=""> -->
                        <input type="submit" value="Редактировать" class="xbutton">
                        </form>
                        <!-- <a href="redac.php" class="xbutton">Редактировать</a> -->
                        <?php
                        }} else {
                        echo "0 results";
                        echo 
                        '   <form action="redac.php" method="post">
                                <input type="hidden" name="manornum" value="9">
                                <input type="submit" value="Добавит запись" class="xbutton">
                            </form>
                        ';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="xev">
        <div class="photo">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        
        </div>

        <div class="desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi architecto, odio doloribus tenetur repellendus deleniti corporis, aliquid eum nam porro amet distinctio! Rerum molestias commodi labore, dolorem officiis molestiae.</p>
            
            <div class="xbuttons">
                <a href="#" class="xbutton">Редактировать</a>

            </div>
        </div>    
    </div> -->
    
    <div class="desc2">
        <div class="prog">
            <a href="#">Программа "Стандарт"</a>
            <a href="#">Программа "Медово-пивное парение"</a>
            <a href="#">Программа "Парение на меду"</a>
            <a href="#">Программа "Парение в закарпатском чане"</a>
            <a href="#">Программа "Банные утехи"</a>
            <a href="#">Программа "Холодное парение"</a>
            <a href="#">Скрабирование</a>
            <a href="#">Мыльно-березовый обмыв</a>
            <a href="#">Массаж</a>
            <a href="#">Контрастные процедуры</a>
            <a href="#">Ванночки для ног</a>
            <a href="#">Парение на сене</a>
            <a href="#">Фруктовые апликации</a>
            
        </div>
        <div class="prog-text">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>
            

            <div class="photo-2">
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            
            </div>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi sit aspernatur est deleniti laboriosam velit. Eum aperiam ipsum fugiat esse assumenda excepturi? Earum placeat consequuntur vel nihil nemo dolore.</p>        
            
            
            <video width="80%" height="400px" controls class="xvideo">
                <source src="vid.mp4" type="video/mp4">
            </video>
            
            
            <div class="xbuttons">
                <a href="#" class="xbutton">Редактировать</a>
            </div>
        </div>
        
    </div>
    

</section>

<section class="two">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1281.656835130671!2d36.20210194632003!3d50.024218004623975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a14685617cb9%3A0xf67bc34cbeab0c70!2z0YPQuy4g0KHQtdC80ZHQvdCwINCa0YPQt9C90LXRhtCwLCA2Miwg0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1sru!2sua!4v1551972260719" frameborder="0" allowfullscreen></iframe>        
    </div>

    <div class="cont">
       
        <div class="">Адрес: ул. Семена Кузнеца 62-А</div>
        <div class="">        +380675407978</div>
        <div class="">Часы работы: с 10:00</div>
        
    </div>

</section>





<footer></footer>

<script src="js/jquery-3.3.1.slim.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

</body>