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

<section class="redac one">
<?php
error_reporting(0);
$newdesc = $_POST['new_desc'];
$newprice = $_POST['new_price'];
$nummanor = $_POST['nummanor'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bars";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$del  = $_POST['del'];
// $del2  = $_POST['del2'];
// $del3  = $_POST['del3'];
// $del4  = $_POST['del4'];
// $del5  = $_POST['del5'];
// $del6  = $_POST['del6'];
// $del7  = $_POST['del7'];
// $del8  = $_POST['del8'];
// $del9  = $_POST['del9'];
// $del10 = $_POST['del10'];
// $del11 = $_POST['del11'];
// $del12 = $_POST['del12'];
// $del13 = $_POST['del13'];
// $del14 = $_POST['del14'];
// $del15 = $_POST['del15'];

$num_m = $_POST['num_m'];

$del_m = $_POST['del'];

if(!empty($del)){
  echo 'Del: '.$num_m;

    // $sql = "UPDATE photos SET one='XXX' WHERE id=$num_m";
    // if ($conn->query($sql) === TRUE) {
    //   echo "Record updated successfully";
    // } else {
    //   echo "Error updating record: " . $conn->error;
    // }
}





  // $sql = "SELECT * FROM bani";
  // $result = $conn->query($sql);
  // if ($result->num_rows == 0) {
  //   echo 'Pusto<br> ';
  //   $sql = "INSERT INTO bani (id, price, descr)
  //   VALUES ('$nummanor', '$newprice', '$newdesc')";
  //       if ($conn->query($sql) === TRUE) {echo "INSERt created successfully";
  //       } else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
  // } else {
    
  //   while($row = $result->fetch_assoc()) {
      
  //     echo $row['id'] .'='. $nummanor;
  //     if($nummanor == $row['id']){
  //       $sql = "UPDATE bani SET price='$newprice', descr='$newdesc'  WHERE id=$nummanor";

  //       if ($conn->query($sql) === TRUE) {
  //           echo "Update updated successfully <br>";
  //           echo $newprice;

  //         } else {
  //           echo "Error updating record: " . $conn->error;
  //         }
  //     }else{
  //       $sql = "INSERT INTO bani (id, price, descr)
  //       VALUES ('$nummanor', '$newprice', '$newdesc')";
  //           if ($conn->query($sql) === TRUE) {echo "INSERt created successfully";
  //           } else { echo "Error: " . $sql . "<br>" . $conn->error;}
  //     } 
  //   }
  // }
  $conn->close();

// $sql = "UPDATE bani SET price='$newprice', descr='$newdesc'  WHERE id=$nummanor";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully <br>";
//     echo $newprice;

//   } else {
//     echo "Error updating record: " . $conn->error;
//   }

// header('Location: index.php', true, 301);

// $sql = "INSERT INTO bani (price, descr)
//  VALUES ('$newprice', '$newdesc')";
//     if ($conn->query($sql) === TRUE) {echo "New record created successfully";
//     } else { echo "Error: " . $sql . "<br>" . $conn->error;}
//     $conn->close();


//Udalyalka




?>


</section>

<footer></footer>

<script src="js/jquery-3.3.1.slim.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

</body>