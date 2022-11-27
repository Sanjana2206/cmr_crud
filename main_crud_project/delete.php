<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from crud_form where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:user.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>