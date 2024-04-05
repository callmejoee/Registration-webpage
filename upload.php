<?php
if(isset($_FILES["user_image"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["user_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
    if($check !== false) {
        // File is an image - process the upload
        if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["user_image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // File is not an image - handle error
        echo "File is not an image.";
    }
}
?>
