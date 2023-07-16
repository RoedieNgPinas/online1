<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "buyer-register";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $sql = "INSERT INTO buyer_registration_data (username, email, password) 
    values('$username', '$email', '$password')";
    if($conn->query($sql)){
        echo "Registration Successful";
    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;

    }
    $conn->close();

}
?>