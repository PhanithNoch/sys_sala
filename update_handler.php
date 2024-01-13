<?php

include('db.php');

if (isset($_POST['submit'])) {
    // collect form data
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $target_file = null;
    $id = $_POST['id'];
    $isHasPhoto = false;


    // Handle photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $isHasPhoto = true;

        $photoName = basename($_FILES["photo"]["name"]);
        $target_dir = "uploads/"; // Ensure this directory exists and is writable
        $target_file = $target_dir . $photoName;

        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
            echo "File uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            $target_file = ""; // Set to empty if failed
        }
    }
    $sql  = null;
 
    if($isHasPhoto){
        $sql = "UPDATE students SET fullname='$fullname',gender='$gender', phone = '$phone', photo = '$target_file' WHERE id = $id";
    }
    else{
        $sql = "UPDATE students SET fullname='$fullname',gender='$gender', phone = '$phone' WHERE id = $id";
    }
    $result = $conn->query($sql);
    if ($result) {
        echo "Student updated successfully";
        header("Location: index.php");
    } else {
        echo "Failed to update student";
    }
}
