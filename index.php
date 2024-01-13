<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("Location: login.php"); // Redirect to login page
    exit;
}
include 'db.php'; // include the database connection
$students = [];

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if($result->num_rows >0){
   $students =  mysqli_fetch_all($result,MYSQLI_ASSOC);
}
else{
    echo "No students found";
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Logout</a>
      
        </div>
      </li>
     
    </ul>
    
  </div>
</nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h1>List of Students</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="create_student.php" class="btn btn-primary mb-3">Create Student</a>
            </div>

        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $index = 1; ?>
    <?php foreach($students as $student): ?>
    <tr>
      <th scope="row"><?php echo $index ?></th>
      <td> <?php echo $student['fullname']?></td>
      <td> <?php echo $student['gender']?></td>
      <td> <?php echo $student['phone']?></td>
      <td> <img src="<?php echo $student['photo']?>" width="100" alt=""></td>

  
      <td>
            <a href="edit_student.php?id=<?php echo $student['id'] ?>"  class="btn btn-primary">Edit</a>
            <a href="delete_student_handler.php?id=<?php echo $student['id']?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php 
    $index++;
  endforeach; ?>
  
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>