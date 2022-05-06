<?php 
session_start() ;
$servername = "localhost";
$username = "root";
$password = "hello1234";
$dbname = "MuleSoftDB1";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {
   // echo "Error creating database: " . $conn->error;
}

// Create database
//$sql = "CREATE DATABASE MuleSoftDB1";
//if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
//} else {
  //echo "Error creating database: " . $conn->error;
//}

//name, actor, actress, director, year of release
$sql = "CREATE TABLE MOVIES2(movie_name varchar(20), actor varchar(20), actress varchar(20), year_of_release date, director varchar(20))";
if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}

$sql = "INSERT INTO MOVIES2 VALUES('Avengers_age_of_ultron', 'Mark Ruffalo', 'scarlet johanson', '2011-04-03', 'john wat')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES2 VALUES('Power of dog', 'Bendict Ruffalo', 'thomh johanson', '2016-04-03','jmes campion')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES2 VALUES('Spider man 1', 'Tom', 'tommy', '2015-04-03','sam raimi')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES2 VALUES('Thor', 'Chris Hemshworth', 'portman johanson', '2019-04-03','taika watiti')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES2 VALUES('Hulk', 'Mark Ruffalo', 'annie johanson', '2018-04-03','rohit shetty')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES2 values('Peaky Blinders', 'Cilian Murphy', 'Angeleina jolie', '2014-04-03','rishab shetty')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}

$sql = "SELECT * FROM MOVIES2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Movie Name: " . $row["movie_name"]. " - Actor Name: " . $row["actor"]. "  " ."Actress Name: ". $row["actress"]." Year of release: ".$row["year_of_release"]." Director Name: ". $row["director"]."<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>

