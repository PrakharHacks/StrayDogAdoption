<?php
    $submission = $_POST['submit1'];
    if(isset($submission))
    {
        //gets all the information about the file
        //creates array that shows name and type of the file in $file
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if(in_array($fileActualExt, $allowed))
        {
            if($fileError === 0)
            {
                if($fileSize < 9000000)
                {
                    $fileNewName = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNewName;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    header("Location: index.php");
                }
                else
                {
                    echo "File size is too big keep it below ";
                }
            }
            else
            {
                echo "There has been an error try again later.";
            }
        }
        else
        {
            echo "You cannot upload files of this type";
        }
    }
    else
    {
        echo "No connection was made";
    }


?>