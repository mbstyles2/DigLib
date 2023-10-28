<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ensure all required fields are filled
    $required_fields = array("bookname", "bookdesc", "bookauthor", "booklang", "uploadername", "uploaderemail");
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            die("Error: All fields are required.");
        }
    }

    // Upload the book file
    $target_dir = "uploads/";
    $bookfile = $target_dir . basename($_FILES["bookfile"]["name"]);

    if (move_uploaded_file($_FILES["bookfile"]["tmp_name"], $bookfile)) {
        // File uploaded successfully, insert data into the database
        $bookname = $_POST["bookname"];
        $bookdesc = $_POST["bookdesc"];
        $bookauthor = $_POST["bookauthor"];
        $booklang = $_POST["booklang"];
        $uploadername = $_POST["uploadername"];
        $uploaderemail = $_POST["uploaderemail"];
        

        // Create a connection to the database
       
$connect = mysqli_connect("localhost", "root", "", "newdb");
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO books (bookname, bookdesc, bookauthor, booklang, bookfile, uploadername, uploaderemail) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $bookname, $bookdesc, $bookauthor, $booklang, $bookfile, $uploadername, $uploaderemail);

        // Execute the statement
        if ($stmt->execute()) {
            echo 
            '<script>
            alert("Book uploaded successfully!");
        </script>';
        } else {
            echo "Error uploading book: " . $conn->error;
        }

        // Close the prepared statement and the database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Upload Book</title>
    <link rel="stylesheet" href="\E-Library-master\css\styles.css">
    <link rel="icon" type="image/x-icon" href=" \E-Library-master\images\DigiLib_colorful.png">
<style>
    body{
        overflow: hidden;
    }
    input,textarea{
        width: 80%;
        border-radius: 12px;
        margin: 4px;
        border: 2px solid #43D1AF;
       }
       
</style>
<body>
    <center>
    <div class="container">
    <img src="\E-Library-master\images\DigiLib_colorful.png" width="170" height="40">
    <h2>Upload Book</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label for="bookname"></label>
        <input type="text" name="bookname" placeholder="Book Name:" required><br>

        <label for="bookdesc"></label>
        <textarea name="bookdesc" rows="4" columns="25" placeholder="Book Description:"  required></textarea><br>

        <label for="bookauthor"></label>
        <input type="text" name="bookauthor" placeholder="Author:"  required><br>

        <label for="booklang"></label>
        <input type="text" name="booklang" placeholder="Book Language:"  required><br>

        <label for="bookfile"></label>
        <input type="file" name="bookfile"  required><br>

        <label for="uploadername"></label>
        <input type="text" name="uploadername" placeholder="Uploader Name:"  required><br>

        <label for="uploaderemail"></label>
        <input type="email" name="uploaderemail" placeholder="Uploader Email:" required><br>

        <input type="submit" value="Upload Book">
    </form>
    </div>
        </center>
</body>
</html>
