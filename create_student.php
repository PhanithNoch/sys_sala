<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                Create Student
            </div>
            <div class="card-body">
                <form action="create_student_handler.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gender</label>
                        <input type="text" name="gender" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" name="photo" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>