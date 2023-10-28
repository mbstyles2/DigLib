<?php
 include 'C:\xampp\htdocs\E-Library-master\backend\connection.php';
    include("connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $check = mysqli_query($connect, "select * from admin where email='$email' and password='$password' ");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select firstname, email, username, mobile, id from admin where 1 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/admindashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }

    ?>
    