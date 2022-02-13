<?php
            //$acno=$_POST['ac'];
            $name = $_POST['n'];
            $email = $_POST['em'];
            $balance = $_POST['bal'];
            
           
            


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "INSERT INTO users (name,email,`balance`)
VALUES ('$name','$email','$balance')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Registered Successfully !');
                                     window.location='money.php';
                           </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
