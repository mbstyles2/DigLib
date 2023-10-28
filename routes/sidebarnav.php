<?php 
session_start();
 require_once('C:\xampp\htdocs\E-Library-master\backend\connection.php');
 $data = $_SESSION['data'];
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
    .left-sidebar{
    background-color: #43D1AF;
    width: 21%;
    padding: 15px;
    color: black;
    height: 95%;
    position: absolute;
    left: 0;
    top:0;
    padding-top: 30px;
}

.sidebar-nav a{
    text-decoration: none;
    font-size: 21px;
    padding: 25px;
    display: block;
    margin:  4px;
    color: black;
    
}


.sidebar-nav a:hover{
    background: white;
    border-radius: 12px;
}

.dropbtn {
  background-color: #43D1AF;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color:  #43D1AF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


h3{
    color: black;
}

</style>

<body>
<div class="left-sidebar">
    <div class="sidebar-nav">

        <img src="\E-Library-master\images\DigiLib_colorful.png" width="180" height="70">

        <h3>
        <img src="\E-Library-master\images\no.png" width="80" height="70"> 
        
        </h3>

        <a href="dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a>
        
        <a href="\E-Library-master\displaydata.php"><i class="fa fa-book"></i> Books</a>
        
        <a href="\E-Library-master\upload.php"><i class="fa fa-pencil"></i> Input Portal</a>

        <a href="\E-Library-master\records.php"><i class="fa fa-file"></i> Book Records</a>

        <div class="dropdown">
            <a class="dropbtn"><i class="fa fa-gear"></i> Settings</a>
            <div class="dropdown-content">
                <a href="#"> <i class="fa fa-sign-in"></i> Manage Account</a>
                <a href="\E-Library-master\routes\logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </div>
        </div>
    </div>
     
</div>
                       

        
        <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
         -->

</body>
</html>