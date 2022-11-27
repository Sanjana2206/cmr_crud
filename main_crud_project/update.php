<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from crud_form where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$rollno=$row['rollno'];
$email=$row['email'];
$branch=$row['branch'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $branch=$_POST['branch'];

    $sql="update crud_form set id=$id,name='$name', rollno='$rollno', email='$email',branch='$branch' where id=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
       header("location:user.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="m-3">Please Update your Details</h3>
    <form method="post" class="">
  <div class="form-floating m-4 shadow-sm k w-25">
            <input  name="name" value="<?php echo $name ?>" type="text" class="form-control" id="floatingInputGrid" placeholder="a" value="">
            <label for="floatingInputGrid">Name</label>
        </div>


        <div class="form-floating m-4 shadow-sm k w-25">
            <input name='rollno' value="<?php echo $rollno ?>" type="text" class="form-control" placeholder="a" value="">
            <label for="floatingInputGrid">Email </label>
        </div>


        <div class="form-floating m-4 shadow-sm k w-25">
            <input name='email' value="<?php echo $email ?>" temailype="email" class="form-control" placeholder="a" value="">
            <label for="floatingInputGrid">mobile</label>
        </div>


        <div class="m-4 w-25">
                        <label for="branch"  class="form-label">Branch</label>
                        <select id="branch" value="branch" class="form-select" name="branch">
                            <option selected>Select Branch</option>
                            <option value="Civil">Civil</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electrical">Electrical </option>
                          </select>
                    </div>

        <div>
            <button  name='submit' class="btn btn-warning m-4 btn-larg">update</button>


        </div>
        
        

    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>