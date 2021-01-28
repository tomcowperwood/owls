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
    <title>Редактирование</title>
</head>
<body>

<?php
$m_num = $_POST['manornum'];
$m_desc = $_POST['manordesc'];
$m_price = $_POST['manorprice'];

// Connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bars";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<section class="redac one">
    
    <div class="r-photo">

        <div class="photos">
            
            <div class="ph_num">1.</div>
            
            <?php
                $servername = "localhost"; $username = "root"; $password = ""; $dbname = "bars";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

                $sql = "SELECT * FROM photos WHERE id='1'";
                $result = $conn->query($sql);
                
                while($row = $result->fetch_assoc()) {
                    //var_dump($row);
                    if(!empty($row['one']) && $row['one'] !== 'one'){
                        echo '<div class="r-img">
                                <img src="'.$row['one'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="one">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <form action="obr.php" method="post">
                                <input type="hidden" name="del" value="del">
                                <input type="hidden" name="num_m" value="1">
                                <input type="submit" value="Удалить" class="xbutton del">
                            </form>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="one">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                            <form action="obr.php" method="post">
                                <input type="hidden" name="del1" value="one">
                                <input type="submit" value="Удалить" class="xbutton del">
                            </form>';
                    }
            ?>
        </div>

        <div class="photos">
            <div class="ph_num">2.</div>
            <?php
                if(!empty($row['two'])  && $row['two'] !== 'two'){
                        echo '<div class="r-img">
                                <img src="'.$row['two'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="two">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="two">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
        </div>
        <!-- <div class="photos">
            <div class="ph_num">2.</div>
            
            <div class="r-img">
                <img src="img/1.jpg" class="d-block" alt="...">
            </div>
            
            <a href="#" class="xbutton del">Del</a>
        </div> -->

        <div class="photos">
            
            <div class="ph_num">3.</div>
            
            <?php
                if(!empty($row['three'])  && $row['three'] !== 'three'){
                        echo '<div class="r-img">
                                <img src="'.$row['three'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="three">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="three">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>

        <div class="photos">
            
            <div class="ph_num">4.</div>
            
            <?php
                if(!empty($row['one']) && $row['four'] != 'four'){
                        echo '<div class="r-img">
                                <img src="'.$row['four'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="four">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="four">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">5.</div>
            
            <?php
                if(!empty($row['five'])  && $row['five'] !== 'five'){
                        echo '<div class="r-img">
                                <img src="'.$row['five'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="five">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="five">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">6.</div>
            
            <?php
                if(!empty($row['six'])  && $row['six'] !== 'six'){
                        echo '<div class="r-img">
                                <img src="'.$row['six'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="six">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="six">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">7.</div>
            
            <?php
                if(!empty($row['seven'])  && $row['seven'] !== 'seven'){
                        echo '<div class="r-img">
                                <img src="'.$row['seven'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="seven">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="seven">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">8.</div>
            
            <?php
                if(!empty($row['eight'])  && $row['eight'] !== 'eight'){
                        echo '<div class="r-img">
                                <img src="'.$row['eight'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="eight">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="eight">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">9.</div>
            
            <?php
                if(!empty($row['nine'])  && $row['nine'] !== 'nine'){
                        echo '<div class="r-img">
                                <img src="'.$row['nine'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="nine">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="nine">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">10.</div>
            
            <?php
                if(!empty($row['ten'])  && $row['ten'] !== 'ten'){
                        echo '<div class="r-img">
                                <img src="'.$row['ten'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="ten">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="ten">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">11.</div>
            
            <?php
                if(!empty($row['eleven'])  && $row['eleven'] !== 'eleven'){
                        echo '<div class="r-img">
                                <img src="'.$row['eleven'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="eleven">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="eleven">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">12.</div>
            
            <?php
                if(!empty($row['twelve'])  && $row['twelve'] !== 'twelve'){
                        echo '<div class="r-img">
                                <img src="'.$row['twelve'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="twelve">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="twelve">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">13.</div>
            
            <?php
                if(!empty($row['thirteen'])  && $row['thirteen'] != 'thirteen'){
                        echo '<div class="r-img">
                                <img src="'.$row['thirteen'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="thirteen">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="thirteen">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">14.</div>
            
            <?php
                if(!empty($row['fourteen'])  && $row['fourteen'] !== 'fourteen'){
                        echo '<div class="r-img">
                                <img src="'.$row['fourteen'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="fourteen">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="fourteen">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
        </div>
        <div class="photos">
            
            <div class="ph_num">15.</div>
            
            <?php
                if(!empty($row['fifteen'])  && $row['fifteen'] !== 'fifteen'){
                        echo '<div class="r-img">
                                <img src="'.$row['fifteen'].'" class="d-block w-100" alt="...">
                            </div>';
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                <input type="hidden" name="photonum" value="fifteen">
                                <input type="file" name="file[]" multiple class="r-add">
                                <input type="submit" value="Заменить" class="r-add">
                            </form>
                
                            <a href="#" class="xbutton del">Del</a>';
                    }else{
                        echo '<form action="uploads.php" method="post" enctype="multipart/form-data" class="ph_form">
                                    <input type="hidden" name="manornum" value="'; echo $_POST['manornum']; echo'">
                                    <input type="hidden" name="photonum" value="fifteen">
                                    <input type="file" name="file[]" multiple class="r-add">
                                    <input type="submit" value="Загрузить" class="r-add">
                                </form>
        
                    <a href="#" class="xbutton del">Del</a>';
                    }
            
            
            ?>
            
            
        </div>
        
        <?php
            }
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- <div class="r-img">
            <img src="img/1.jpg" class="d-block" alt="...">
        </div>
        <div class="r-control">
            <span>#1</span>
            <a href="#" class="xbutton del">Del</a>
            <a href="#" class="xbutton ">Up</a>
            <a href="#" class="xbutton ">Down</a>
        </div>

        <div class="r-img">
            <img src="img/1.jpg" class="d-block" alt="...">
        </div>
        <div class="r-control">
            <a href="#" class="xbutton del">Del</a>
            <a href="#" class="xbutton ">Up</a>
            <a href="#" class="xbutton ">Down</a>
        </div>

        <div class="r-img">
            <img src="img/1.jpg" class="d-block" alt="...">
        </div>
        <div class="r-control">
            <a href="#" class="xbutton del">Del</a>
            <a href="#" class="xbutton ">Up</a>
            <a href="#" class="xbutton ">Down</a>
        </div>
        -->


<!--         
        <form action="uploads.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="manornum" value="
            <?php //echo $_POST['manornum']; ?>">
            <input type="file" name="file[]" multiple class="r-add xbutton">
            <input type="submit" value="Отправить" class="r-add xbutton">
        </form> -->
        
    </div>

    <div class="r-text">
        <div class="r-desc">
            <form action="obr.php" method="post">  
                <div class="">Описание</div>
                    <?php
                    // $sql = "INSERT INTO bani (price, descr)
                    // VALUES ('350', '6.BlaBla')";
                        // if ($conn->query($sql) === TRUE) {echo "New record created successfully";
                        // } else { echo "Error: " . $sql . "<br>" . $conn->error;}
                        // $conn->close();
                    ?>
                <textarea name="new_desc" id="" cols="30" rows="10">
                    <?php   echo $_POST['manordesc'];  ?>
                </textarea>

                <input type="hidden" name="nummanor" value=" <?php echo $m_num; ?>">
                    <div class="">Цена</div>

                <input type="text" name="new_price" id="" value=" <?php echo $m_price;  ?>">
                
                <input type="submit" value="Применить" class="xbutton apply"> 
            </form>

            

        </div>
    </div>
</section>

<footer></footer>

<script src="js/jquery-3.3.1.slim.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

</body>