<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$address=$_REQUEST['address'];

if(isset($_POST['btntest']))

{
    $host="localhost";
    $user=root";
    $password="";
    $db="bis_level_four";

    $conn = mysqli_connect($host,$user,$password,$db);

    $insert= "insert into users values('$firstname','$secondname','$address')";
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;'>Your Registration is Done!</h1>")

    }

    else{

       echo("<h1 style='color:red;'>Your Registration is faild!</h1>") ;
    }
}




?>