<?php
include('nav.html');
include('connection.php');
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
$sql="INSERT INTO usermessage (name,email,message)values('$name','$email','$message')";
$result=mysqli_query($conn,$sql);
if($result){
header('location:history.php');
}else{
echo "you make poblem";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Conventer</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100 ">

    <section class=" contact  justify-content-center align-items-center centered-content mx-auto">
        <div class="info">
          <h2 class="mt-2 text-center">contact form </h2>
          <form action="" method="post">
            <div class="form-group text-center">
              <input type="text" name="name" id="" placeholder="Enter the name" required>
              <label for="" class="form-lable  text-muted">Enter the name</label>
            </div>
            <div class="form-group mt-4 text-center">
              <input type="email" name="email" id="" placeholder="" required>
              <label for="" class="form-lable  text-muted">Enter the Email </label>
            </div>
            <div class="form-group mt-4 text-center">
              <textarea name="message" id="" cols="24" placeholder="  "></textarea>
              <label for="" class="form-lable  text-muted">Enter your message </label>
    
            </div>
            <button class="contactButton justify-content-center align-items-center d-flex mx-auto" type="submit" name="submit">
              send message
            </button>
          </form>
        </div>
      </section>


    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <?php 
    include('footer.html');
    ?>
</body>
</html>