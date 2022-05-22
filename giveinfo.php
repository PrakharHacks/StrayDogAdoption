<?php
$submission = $_POST['sent'];
if (isset($submission)) {
    //gets all the information about the image
    //creates array that shows name and type of the image in $image
    var_dump($_FILES);
    $image = $_FILES['upload_image'];

    $fileName = $_FILES['upload_image']['name'];
    $fileTmpName = $_FILES['upload_image']['tmp_name'];
    $fileSize = $_FILES['upload_image']['size'];
    $fileError = $_FILES['upload_image']['error'];
    $fileType = $_FILES['upload_image']['type'];


    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 9000000) {
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'Giveaway/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "File size is too big keep it below ";
            }
        } else {
            echo "There has been an error try again later.";
        }
    } else {
        echo "You cannot upload files of this type";
    }
} else {
    echo "No connection was made";
}

$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    echo "Connection was not successful";
}


mysqli_select_db($conn, 'kutteyuserdata');
$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO giveawaydata (user, email, mobile, comment) VALUES ('$name', '$email', '$mobile', '$comment');";
mysqli_query($conn, $query);



header("Location: giveaway.php");
