<?php
$target_dir = "uploads/"; // Specify the directory where the file will be placed
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileSizeLimit = 50 * 1024 * 1024; // 50 MB in bytes

// Check if file size exceeds the limit
if ($_FILES["fileToUpload"]["size"] > $fileSizeLimit) {
    echo "Sorry, your file is too large. Maximum allowed size is 50 MB.";
    $uploadOk = 0;
}

// Move the uploaded file to the target directory
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
}
?>
