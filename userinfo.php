<?php

$con = mysqli_connect('localhost', 'root', '');

if($con)
{
    echo "Connection succesful";
}
else
{
    echo "no connection";
}

mysqli_select_db($con, 'kutteyuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfodata (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment');";

mysqli_query($con, $query);

header('location: closing.php');

?>