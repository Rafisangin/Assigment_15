<?php
include 'connection.php';
include('nav.html');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unit conventer</title>
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <style>
    .homecard{
    width: 370px;
    height: 300px;
    padding: 30px;
    border-radius: 5px;
    background:white;
    box-shadow: 7px 7px 20px black;
    color: black;
    display: block;
    margin-bottom: 20px;
}
  </style>
</head>
<body class="d-flex flex-column min-vh-100 body">
  <!-- header --> 
  <!-- main card -->
  <section class="  d-flex  mt-3">
    <div class="homecard justify-content-center align-items-center centered-content mx-auto">
      <h1>Unit conventer</h1>
      <h6 class="text-start">what is this web application?</h6>
      <p>it is a simple web application  that you can  use for changing currany and also this web application have another 3 parts that you can contact with us and also know about our team.</p>
    </div>

  </section>
 
 
  <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/scripy.js"></script>
</body>

</html>
<?php
include('footer.html');

?>