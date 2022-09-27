<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'myfirstresponsivewebsite');

$user = $_POST['user'];
$email = $_POST['email'];
if(isset($_POST['mobile'])){
    $mobile = $_POST["mobile"];
}else{
    $mobile = "Number"; 
}
if(isset($_POST['comment'])){
    $comment = $_POST['comment'];
}else{
    $comment = "Text";
}

$query = " insert into userdata (user, email, mobile, comment) values ('$user', '$email', '$mobile', '$comment') ";
 
mysqli_query($con, $query);
header('location:index.php');


?>