<?php
$conn=new mysqli('localhost','root','','crud_project');  #create a variable conn and pass server name username password and database name
if($conn){
    #echo "connection successful";
}
else{
    die(mysqli_error($conn));  #it shows where we are getting an error in conn variable

}


?>