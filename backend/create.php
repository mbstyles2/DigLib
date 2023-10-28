<?php
//DB Connection
 include 'C:\xampp\htdocs\E-Library-master\backend\connection.php';

include("connection.php");


 $username = $_POST['username'];
 $contact = $_POST['firstname'];
 $lcontact = $_POST['lastname'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $password = $_POST['password'];
 $rpassword = $_POST['password'];
$image = $_FILES["image"]["name"]."_".uniqid();
$temp_name = $_FILES["image"]["tmp_name"];
 if($rpassword!=$password){
    echo '<script>
            alert("Passwords do not match!");
            window.location = "../routes/create.php";
        </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect, "insert into users (username, firstname, lastname, email, mobile, password) values('$username', '$contact', '$lcontact', '$email',' $mobile', '$password') ");
    if($insert){
        echo '<script>
                alert("Registration successfull!");
                window.location = "../index.php";
            </script>';
    }
}


