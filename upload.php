<?php
    if (isset($_POST['uploadImg'])){
        $file = $_FILES['file'];

        $fileName  = $_FILES['file']['name'];
        $fileTmpName  = $_FILES['file']['tmp_name'];
        $fileSize  = $_FILES['file']['size'];
        $fileError  = $_FILES['file']['error'];
        $fileType  = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowedimg = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'webp');
        $allowedvideo = array('webm', 'mp4');
        $allowed = array_merge($allowedimg, $allowedvideo);

        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0){
                if ($fileSize < 10000000){
                    if (in_array($fileActualExt, $allowedimg)){
                        $mediaType = "img";
                    }else{
                        $mediaType = "video";
                    }
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$mediaType.'/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    date_default_timezone_set('Europe/Copenhagen');
                    $timeStamp = time();
                    $userName = "not-set";
                    $nextline = "\n";
                    $myfile = fopen('img_data.txt', 'a+') or die('Unable to open file!');
                    fwrite($myfile, ','.$nextline.'{"id": "0", "'.$mediaType.'": "' . $fileNameNew . '", "fileSize": "'.$fileSize.'", "user": "'.$userName.'", "mediaType": "'.$mediaType.'", "timeStamp": "'.$timeStamp.'"}');     
                    fclose($myfile);
                    header("Location: create_json.php");
                } else{
                    echo "your file is to big!";
                }
            } else{
                echo "ther was an error! ".$fileError;
            }
        } else{
            echo "you cannot upload files of this type!";
        }
    }
?>