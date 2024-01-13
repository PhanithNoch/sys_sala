<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card{
            width: 50%;
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Login</h2>
        </div>
        <div class="card-body">
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" placeholder="Username" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" placeholder="Password" type="text" name="password" id="password">
                </div>

                <button class="btn btn-primary" type="submit" value="submit">Login</button>


            </form>
        </div>
    </div>
    
</body>
</html>