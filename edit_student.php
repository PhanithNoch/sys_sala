
<?php
    include('db.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($sql);
  
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $fullname = $row['fullname'];
        $gender  = $row['gender'];
        $phone  = $row['phone'];
        $photo  = $row['photo'];
    }
    else{
        echo "No students found";
    }
}
else{
    echo "No id specified";
    exit;

}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                Edit Student
            </div>
            <div class="card-body">
                <form action="update_handler.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input value="<?php echo $fullname ?>" type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gender</label>
                        <input value="<?php echo $gender ?>"  type="text" name="gender" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text"  value="<?php echo $phone ?>"  name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <?php echo $photo ?>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" value="<?php echo $photo ?>"  name="photo" class="form-control" id="exampleInputPassword1" onchange="loadFile(event)">
                        <img width="100" src="<?php echo $photo ?>" alt="" id="output" class="mt-3">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let loadFile = function(event){
            let output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function(){
                URL.revokeObjectURL(output.src) // free memory
            }
        }
        
    </script>
</body>

</html>