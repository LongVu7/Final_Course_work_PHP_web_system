<?php 
session_start();
require_once 'conn.php';

if(isset($_POST['register'])) {
    if($_POST['name'] != "" && $_POST['password'] != "" && $_POST['email'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != ""){
        try{
            $name = $_POST['name'];
            $password = md5($_POST['password']); // Hashing the password
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `author` 
            VALUES ('', '$name', '$password','$email', '$firstname', '$lastname')";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        $_SESSION['message'] = array("text" => "Created User Account Successfully", "alert" => "info");
        $conn = null;
        header('location:templates/login.html.php');
}else {
    echo "
    <script>alert('Please fill up the required field!')</script>
    <script>window.location = 'templates/register.html.php'</script>
    "; 
    }
}

// password_hash($password, PASSWORD_DEFAULT);
?>