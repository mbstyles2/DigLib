<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../routes/dashboard.php");
}
$data = $_SESSION['data'];
// have a database connection established

include('C:\xampp\htdocs\E-Library-master\routes\sidebar.php');

?>




<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="\E-Library-master\bootstrap-5.2.0-beta1-dist\css\bootstrap.css">
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="\E-Library-master\css\styles.css">
    <link rel="icon" type="image/x-icon" href=" \E-Library-master\images\DigiLib_colorful.png">
</head>

<style>
body{
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

.main-section{
    position: absolute;
    right: 0rem;
    background: whitesmoke;
    width: 78%;
    min-height: 105vh;
    text-align: center;
    justify-content: center;
    top : 0; 

}

#dash{
    position: absolute;
    left: 0;
    margin: 10px;
    font-size: 35px;
    box-shadow: 0 14px 15px;
    background: radial-gradient(lavender,#43D1AF);
    border-radius: 12px;
}


.d-section{
    padding-top: 4rem;
    padding-left: 12rem;
    position: relative;
    display: flex;
    text-align: center;
    justify-content: center;
    
}

.card-section{
    background-image: linear-gradient(to bottom left, #43D1AF, white) ;
    position: relative;
    width: 10%;
    margin: 15px 30px;
    padding: 15px;
    color: black;
    height: 200px;
    box-shadow: 3px 5px;
    text-align: center;
   
}

.rev{
    
    position: absolute;
    bottom: 3rem;
    right:0;
    
}
</style>

<center>

   <div class="main-section">
    
        <div id="dash">DASHBOARD</div>
                <br><br>
                <p><span id="date-time" style=" color:black;"></span>.</p>
                <?php echo $data['firstname']?>
                     <div class="rev">
                            <h2> Your reviews</h2>
                                <?php
                                if(isset($_SESSION['visit'])){//start session
                                    $_SESSION['visit'] += 1; //set session variable
                                } else{
                                    $_SESSION['visit'] = 1;
                                }

                                echo "You visited this page ".$_SESSION['visit']. " times";

                                ?>
                     </div>
           
        </div>
        <div class="d-section">
            <div class="card-section">
                <h3>No. of Books</h3>
                                <?php
                $sql = "SELECT COUNT(*) AS book_count FROM books"; // Change 'books' to your actual table name

            // Execute the query
            $result = $connect->query($sql);

            if ($result) {
                // Fetch the result
                $row = $result->fetch_assoc();
                $bookCount = $row['book_count'];

                // Display the number of books
                echo " " . $bookCount;
            } else {
                echo "Error: " . $connect->error;
            }

            // Close the database connection
            $connect->close();
            ?>

            </div>
            
            <div class="card-section" onlick>
                <h3>Report</h3>
                No Uploads
                <i class="fa fa-file"></i>
            </div>

            <div class="card-section">
                <h3>ID</h3>
                <i class="fa fa-user"></i>
                <?php echo $data['id']?>
            </div>

            <div class="card-section">
                <h3>Mat.No</h3>
                <i class="fa fa-pencil"></i>
                <?php echo $data['mobile'];
                

          ?>
            </div>
            
           

        </div>
        
        <br>

  
       
    </div>
  
        </center>


   <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
   <script>
        var dat= new Date();
        document.getElementById("date-time").innerHTML = dat;



    </script>
</body>
</html>

<?php

// Close the database connection
mysqli_close($connect);
?>

