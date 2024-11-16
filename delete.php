<?php
include 'connection.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];
    $sql="DELETE FROM usermessage WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:history.php');
       // echo "Deleted successfuly";
    }else
    echo "there is some problem";
}
?>