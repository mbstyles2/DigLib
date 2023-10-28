<?php
// have a database connection established
$connect = mysqli_connect("localhost", "root", "", "newdb");
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";


include('C:\xampp\htdocs\E-Library-master\routes\sidebarnav.php');


    session_start();
    if(isset($_SESSION['id'])){
        header("location: ../routes/admindashboard.php");
    }
    $check = mysqli_query($connect, "select * from users where username='$username' and password='$password' ");
    $data = mysqli_fetch_array($check);
    $_SESSION['id'] = $data['id'];
    $_SESSION['data'] = $data;

?>




<!DOCTYPE html>
<head>
    <title>ADMIN Dashboard</title>
    <link rel="stylesheet" type="text/css" href="\E-Library-master\css\styles.css">
    <link rel="icon" type="image/x-icon" href=" \E-Library-master\images\DigiLib_colorful.png">
</head>

<style>
body{
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

.main-section{
    position: absolute;
    right: 0rem;
    background: whitesmoke;
    width: 78%;
    min-height: 1000vh;
    text-align: center;
    justify-content: center;
    top : 0; 

}

#dash{
    position: absolute;
    left: 0;
    margin: 10px;
    font-size: 35px;
    box-shadow: 0 0 15px;
    background: radial-gradient(lavender,#43D1AF);
    border-radius: 12px;
}


.d-section{
    padding-top: 2rem;
    position: relative;
    display: block;
    text-align: center;
    justify-content: center;
    width: 40%;
}

.card-section{
    background-image: linear-gradient(to bottom left, #43D1AF, white) ;
    width: 10%;
    margin: 15px;
    padding: 15px;
    color: black;
    height: 70px;
    box-shadow: 2px 4px;
    text-align: center;
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

   <div class="main-section">
    
        <div id="dash">Admin DASHBOARD</div>
                <br><br>
                <p><span id="date-time" style=" color:black;"></span>.</p>
                <?php //echo $data['username']; ?>
           
                </div>
        <div class="d-section">
            <table class="" width="100%">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>lastname</th>
                        <th>username</th>
                        <th>email</th>
                        <th>mobile</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($connect, $query);

                    if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $row){
                            //echo $row['name'];
                            ?>
                             <tr>
                                 <td><?php echo $row['firstname']; ?></td>
                                 <td><?php echo $row['lastname']; ?></td>
                                 <td><?php echo $row['username']; ?></td>
                                 <td><?php echo $row['email']; ?></td>
                                 <td><?php echo $row['mobile']; ?></td>
                                 <!-- <td><a class="btn btn-danger my-3">Delete</a>      </td> -->
                                 <?php ?>	
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

             <br><br><br>

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
       
       
   </div> 
    
 </center>


   <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
   <script>
        var dat= new Date();
        document.getElementById("date-time").innerHTML = dat;
    
        function DeleteConfirm() {
      confirm("Are you sure to delete the record");
     }


    </script>
</body>
</html>

<?php

// Close the database connection
mysqli_close($connect);
?>

