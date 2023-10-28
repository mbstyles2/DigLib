<?php
// Create a connection to the database
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all uploaded books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<head>
    <title>Library</title>
    <link rel="stylesheet" type="text/css" href="css/display.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="icon" type="image/x-icon" href=" \E-Library-master\images\DigiLib_colorful.png">
</head>
<body>
    <center>
    <img src="\E-Library-master\images\DigiLib_colorful.png" width="170" height="50">
    <h1 style="color:white;">Catalog</h1> 
    <!-- <p><span id="date-time" style=" color:white;"></span>.</p> -->
    </center>
    <table width="0%" cellspacing="0" cellpadding="18px">
        <tr>
            <th>Bookname</th> 
            <th>Author</th>
            <th>Language</th>
            <th></th>
            <th>Descriptions</th>
            <th></th>
            <th>Uploader</th>
            <th></th>
            <th>Book</th>
            <th></th>
            <th>Access</th>
        </tr>
    <?php
    // Check if there are any records
    if ($result->num_rows > 0) {
        // Loop through the records and display them
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo ' <td><h2>' . $row["bookname"] . '</h2></td>'; 
            echo '<td><p><strong></strong> ' . $row["bookauthor"] . '</p></td>';
            echo '<td><p><strong></strong> ' . $row["booklang"] . '</p><td>';
            echo '<td><p><strong></strong><br>' . $row["bookdesc"] . '</p><td>';
            echo '<td><p><strong></strong> ' . $row["uploadername"] . ' (' . $row["uploaderemail"] . ')</p><td>';
            echo '<td><p><a href="/E-Library-master/uploads/">Download Book</a></p><td>'; 
            echo ' <td> Available
             </td>'; 


            echo "</tr>";
            
           
            }
          }
        
    
    // Close the database connection
    $conn->close();
    ?>
    </table>

    <script>
        var dat= new Date();
        document.getElementById("date-time").innerHTML = dat;
    </script>
</body>
</html>
