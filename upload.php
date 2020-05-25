<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName  = $_FILES['file']['name'];
        $fileTmpName  = $_FILES['file']['tmp_name'];
        $fileSize  = $_FILES['file']['size'];
        $fileError  = $_FILES['file']['error'];
        $fileType  = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'webp');

        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0){
                if ($fileSize < 10000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $userName = "not-set";
                    $nextline = "\n";
                    $myfile = fopen('img_data.txt', 'a+') or die('Unable to open file!');
                    fwrite($myfile, ','.$nextline.'{"id": "0", "img": "' . $fileNameNew . '", "fileSize": "'.$fileSize.'", "user": "'.$userName.'"}');     
                    fclose($myfile);
                    header("Location: create_json.php");
                    exit;
                } else{
                    echo "your file is to big!";
                }
            } else{
                echo "ther was an error!";
            }
        } else{
            echo "you cannot upload files of this type!";
        }
    }
?>