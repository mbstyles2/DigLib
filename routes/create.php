<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" integrity="sha512-chZc2Mx8B1GzGSNMfJRH63jW7uYZXzX0a/UlWRrTvl4kxxYqUHNMtyTTA5IDQ7gTl4ATLoXlZthsialW3muS0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <link rel="stylesheet" href="../css/styles.css">
 <link rel="stylesheet" href = "\fontawesome-free-6.4.2-web\css\fonta.css">
 <title>DigLib/Signup</title>
</head>
<style>
      body{
        overflow: hidden;
    }

    .home{
      margin: 1rem;
      padding: 60px 90px 10px 0px;
    }

    .container-2{
      border-radius: 14px;

    }

    .home a{
      font-size: 30px;
      text-decoration: none;
      color: green;
      padding: 12px;
    }
</style>

<body>

<center>
 <!-- main container -->
 <div class="container-2">

    <div class="home">
        <h1>Welcome to <img src="\E-Library-master\images\DigiLib_colorful.png" width="170" height="60"></h1>

        <br><br>
    <h2>DIGILIB is a library of free ebooks, documents, research works, pdfs, journals, and more.</h2>

    <br>
       <b> <i class="fa fa-arrow"><a href="upload.php">Upload </a>
       <i class="fa fa-book"><a href="\E-Library-master\displaydata.php">Library </a>
        <a href="index.php"><i class="fa fa-sign-in">Login </a>
      </b>


    </div>


  <div class="form pt-3 pb-5 pl-2 pe-4">
   <h2 class="py-2" style="text-align: center; color: purple;">Signup</h2>
   <!-- signup form container -->
   <form action="../backend/create.php" method="POST" enctype="multipart/form-data" name="form">

    <!-- username and contact input -->
    <div class="first_row">
    <input type="text" id="firstname" name="firstname" placeholder="Enter firstname" required /> 
    <input type="text" id="lastname" name="lastname" placeholder="Enter lastname" required /> <br>
    <input type="text" id="username" name="username" placeholder="Enter username" required /> 
    <input type="text" id="mobile" class="outline-none" name="mobile" placeholder="phonenumber or matnumber" onkeyup="validateContact()" style="outline:none" required /> 
    </div>
    <!-- email input -->
    <div class="second_row">
     <input type="email" id="email" name="email" class="" placeholder="Enter Email" required />
    </div>
    <!-- password input -->
    <div class="first_row">
     <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required /> <br>
     <input type="password" id="re_password" name="re_password" placeholder="Re-enter password" onkeyup="checkPassword()" required />
    </div>
   
    <!-- submit button input -->
    
     <span class="text-danger" id="error_board"></span> <br />
     <input type="submit" name="create_btn" class="btn btn px-5 rounded-0" id="submit_btn" value="Create a new Account"><br /><br />
     <a href="../index.php" id="redirect_link">Already have account?</a>
    </center>
    <br />

     
   </form>
  </div>
 </div>
</body>
<script>
 // is necessary field valid 
 var isValid = false;

 //disabled the button until the all the form field is done
 $("#formData #submit_btn").prop("disabled", true);

 //validate contact number
 function validateContact() {
  let contact = $("#formData #contact").val()
  if (contact.length == 10) {
   isValid = true;
   $("#formData #error_board").text("");
   $("#formData #contact").css("border", "1px solid black");
   $("#formData #submit_btn").prop("disabled", false);
  } else {
   isValid = false;
   $("#formData #error_board").text("Contact number must contains 10 character !");
   $("#formData #contact").css("border", "1px solid red");
   $("#formData #submit_btn").prop("disabled", true);
  }
  console.log(isValid)
 }

 //validate re password
 function checkPassword() {
  let oldpassword = $("#formData #new_password").val();
  let newpassword = $("#formData #re_password").val();
  if (oldpassword == newpassword) {
   isValid = true;
   $("#formData #error_board").text("");
   $("#formData #submit_btn").prop("disabled", false);
  } else {
   isValid = false;
   $("#formData #error_board").text("Password donot match");
   $("#formData #submit_btn").prop("disabled", true);
  }

  if (isValid) {
   $("#formData #submit_btn").prop("disabled", false);
  }
 }
</script>

</html>