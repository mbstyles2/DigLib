<?php 
session_start();
 require_once('C:\xampp\htdocs\E-Library-master\backend\connection.php');
//  $data = $_SESSION['data'];
 ?>
<html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
 <link rel="stylesheet" href = "\fontawesome-free-6.4.2-web\css\fonta.css">
 <link rel="stylesheet" href="../css/styles.css">
</head>
<style>
    body {
    background-image: url("../images/library.jpg");
	background-repeat: no-repeat;
    font-family: 'Courier New', Courier, monospace;
    background:  #43D1AF;
   
}

.d-section{
    padding-top: 2rem;
    position: relative;
    display: block;
    text-align: center;
    justify-content: center;
    width: 40%;
}
table{
    border-collapse: collapse;
    box-shadow:0 0 13px; 
}

td,th{
    padding:20px;
    border: 2px black solid;
}
.btn-danger{
    background: red;
}

 </style>

<center>
<h1> Book Records</h1>

<div class="d-section">
            <table class="" width="70%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Book</th>
                        <th>Author</th>
                        <th>Language</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM books";
                    $query_run = mysqli_query($connect, $query);

                    if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $row){
                            //echo $row['name'];
                            ?>
                             <tr>
                                 <td><?php echo $row['bookname']; ?></td>
                                 <td><?php echo $row['bookdesc']; ?></td>
                                 <td><?php echo $row['bookauthor']; ?></td>
                                 <td><?php echo $row['booklang']; ?></td>
                                 

                            </tr>
                            <?php
                        }
                    } 
                    else{
                    ?>
                     <tr>
                        <td>No record</td>
                    </tr>
                    <?php
                }
                ?> 
                </tbody>
            </table>
            </center>    