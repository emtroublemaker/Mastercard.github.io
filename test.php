<?php
session_start();
echo "<br> Welcome to the php code";
echo "<br>";
echo "<br>";
echo session_id();

$_SESSION['logged_in_user_id']='1';
echo "<br>";
$_SESSION['logged_in_user_name']='Scores';
echo "<br>";

echo $_SESSION['logged_in_user_id'];
echo "<br>";
echo $_SESSION['logged_in_user_name'];
echo "<br>";


//Connecting to Database
$host ="localhost";
$user = "root";
$pass ="";
$db = 'mydb';

//Creating a connection object
$conn = mysqli_connect($host, $user, $pass, $db);
echo "<br>";

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "Connection was successful";

$sql = "INSERT INTO scoretb (id, username, password) VALUES ('2','John','2007')";
//$result = mysqli_query($conn, $sql);

if($result = $conn -> query("INSERT INTO scoretb (id, username, password) VALUES ('2','John','2007')"));
    echo "<br>";
    echo 'Data inserted successfully';

if($score = $conn -> query("SELECT * FROM scoretb ORDER BY id DESC"));
    echo "<br>";
    //settype ($score, "integer");
    echo "Data Fetched Successfully";
   


    
?>