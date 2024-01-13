<?php

include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM students where id = $id;";
$result = $conn->query($sql);
if($result){
    echo "Student deleted successfully";
    header("Location: index.php");
}
else{
    echo "Failed to delete student";
}

?>