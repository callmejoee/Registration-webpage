<?php
$targetDirectory = "uploads/";
$targetFilePath = $targetDirectory . basename($_FILES["user_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $targetFilePath)) {
        echo "The file ". htmlspecialchars(basename($_FILES["user_image"]["name"])). " has been uploaded. ";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

?>