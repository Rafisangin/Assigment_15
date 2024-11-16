<?php
include('connection.php');
include('nav.html');
$id=$_GET['updateid'];
  $sql="SELECT * FROM `usermessage` WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $email=$row['email'];
  $message=$row['message'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$sql="UPDATE usermessage SET id=$id,name='$name',email='$email',message='$message' where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   // echo "Updated successfuly";
  header('location:histroy.php');
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
    <title>Unit conventer</title>
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container ">
     <form action="" method="post" class="m-5 ">
         <div class="form-group">
             <label for="name">Name</label><br>
             <input type="text" name="name" placeholder="Enter your name" class="form-control" autocomplete="off" value="<?php
             echo $name; ?>">
         </div>
         <div class="form-group">
             <label for="name">Email</label><br>
             <input type="text" name="email" placeholder="Enter your email" class="form-control" autocomplete="off" value="<?php echo $email; ?>">
         </div>
         <div class="form-group">
             <label for="name">Message</label>br
             <input type="text" name="message" placeholder="Enter your email" class="form-control" autocomplete="off" value="<?php echo $message; ?>">
         </div>
       <br>
         <button type="submit" name="submit" class="btn btn-primary" >Update</button>
     </form>
     </div> 
</body>
</html>
<?php

include('footer.html');
?>