<?php
session_start();
require 'dbcon.php';


if(isset ($_POST["addMessage"])){
    $name=mysqli_real_escape_string($conn, $_POST["name"]);
    $email=mysqli_real_escape_string($conn, $_POST["email"]);
    $pno=mysqli_real_escape_string($conn, $_POST["pno"]);
    $message=mysqli_real_escape_string($conn, $_POST["message"]);

    $query= "INSERT INTO contact (name, email, pno, message)
            VALUES ('$name', '$email', '$pno', '$message')";

    $result=mysqli_query($conn, $query);

    if($result){
        echo "<script>
                alert('Your message has been sent!');
                window.location.href = 'contact.html';
            </script>";
            exit;  
    } else{
        echo "<script>alert('Failed to send you message)</scipt>";
    }  
}
?>