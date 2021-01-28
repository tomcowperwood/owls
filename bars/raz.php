<?php
// Connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bars";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// Create database
$sql = "CREATE DATABASE bars CHARACTER SET utf8mb4";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE bani (
    id INT(6) UNSIGNED PRIMARY KEY,
    price VARCHAR(100) NOT NULL,
    descr VARCHAR(3000) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table bani created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

$sql = "CREATE TABLE progs (
    prog VARCHAR(100) NOT NULL,
    p_descr VARCHAR(3000) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table progs created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
$sql = "CREATE TABLE photos (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  one VARCHAR(300) NOT NULL,
  two VARCHAR(300) NOT NULL,
  three VARCHAR(300) NOT NULL,
  four VARCHAR(300) NOT NULL,
  five VARCHAR(300) NOT NULL,
  six VARCHAR(300) NOT NULL,
  seven VARCHAR(300) NOT NULL,
  eight VARCHAR(300) NOT NULL,
  nine VARCHAR(300) NOT NULL,
  ten VARCHAR(300) NOT NULL,
  eleven VARCHAR(300) NOT NULL,
  twelve VARCHAR(300) NOT NULL,
  thirteen VARCHAR(300) NOT NULL,
  fourteen VARCHAR(300) NOT NULL,
  fifteen VARCHAR(300) NOT NULL
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table photos created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
    

      $sql = "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' );";
      $sql .= "INSERT INTO photos ( one, two, three, four, five, six, seven, eight, nine, ten, eleven,
      twelve, thirteen, fourteen, fifteen )
      VALUES ('one','two','three','four','five','six','seven','eight','nine','ten','eleven',
      'twelve','thirteen','fourteen','fifteen' )";
     
          // if ($conn->query($sql) === TRUE) {echo "INSERt created successfully";
          // } else { echo "Error: " . $sql . "<br>" . $conn->error;}
          if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
  
    $conn->close();




?>