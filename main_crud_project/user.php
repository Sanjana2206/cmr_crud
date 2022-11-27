<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $branch=$_POST['branch'];

    $sql="insert into crud_form(name,rollno,email,branch)
    values('$name','$rollno',' $email','$branch')";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:user.php');
        
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!--
header('location:display.php');-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <style>
        body {
            font-family: Poppins, sans-serif;
        }
        .anchor{
            text-decoration:none;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-warning">
        <div class="row justify-content-between">
            <div class="col-9">EAMCET/ ICET / PGCET CODE: CMRG</div>
            <div class="col-3">
                <a href="#" style="text-decoration: none; color: black; font-size: 14px;" class="fw-bold"><i class="bu bi-person-circle"></i> Student login</a>
                <a href="#" style="text-decoration: none; color: black; font-size: 14px;" class="fw-bold"><i class="bu bi-people-fill"></i> Staff login</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-3 justify-content-between">
            <div class="col align-self-start">
                <img src="cmr-header-image.jpg" class="img-fluid" alt="CMR Institutions Logo" width="800">
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success">Courses</button>
                <button type="button" class="btn btn-outline-primary">ARIIA</button>
                <button type="button" class="btn btn-outline-warning">NIRF</button>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-6 fw-bold" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">ADMINISTRATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">ACADEMICS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">INFARSTRUCTURE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">PLACEMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">DEPARTMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">RESEARCH</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">AMENITIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">EXAM SECTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">CONTACT</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="container-fluid m-5">
        <div class="row">
            <div class="col-4">
                <h3 class="fw-bold">Details Form</h1>
                <form method="post" class="">
        <div class="form-floating m-4 shadow-sm k w-75">
            <input  name="name" type="text" class="form-control" id="floatingInputGrid" placeholder="a" value="">
            <label for="floatingInputGrid">Name</label>
        </div>


        <div class="form-floating m-4 shadow-sm k w-75">
            <input name='rollno' type="text" class="form-control" placeholder="a" value="">
            <label for="floatingInputGrid">rollno </label>
        </div>


        <div class="form-floating m-4 shadow-sm k w-75">
            <input name='email' type="email" class="form-control" placeholder="a" value="">
            <label for="floatingInputGrid">email</label>
        </div>


        <div class="m-4 w-75">
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
            <button  name='submit' class="btn btn-primary m-4 btn-larg"> submit</button>


        </div>
        
        

    </form>
            </div>
            <div class="col-8">
                <h3 class="fw-bold">Students Details</h1>
                <table class="table table-hover m-3">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">rollno</th>
      <th scope="col">email</th>
      <th scope="col">branch</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    $sql="select * from crud_form";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $rollno=$row['rollno'];
            $email=$row['email'];
            $branch=$row['branch'];
            echo '
            <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$rollno.'</td>
                <td>'.$email.'</td>
                <td>'.$branch.'</td>
                <td>
                <button class="btn btn-success ">
                <a class="text-light anchor" href="update.php?updateid='.$id.'"/a>Update</a>
                </button>
                <button class="btn btn-danger "><a  href="delete.php?deleteid='.$id.'" class="text-light anchor">Delete</a></button>
                </td>
            </tr>


            ';
        }
    }


    
    ?>
  </tbody>
</table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>