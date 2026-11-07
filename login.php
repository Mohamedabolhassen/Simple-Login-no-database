
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP PROJECT</a>

        <div class="navbar-nav">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link active" href="login.php">Login</a>
            <a class="nav-link" href="register.php">Register</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="border text-center p-2 mb-1">
                <h3 class="mb-0">Login</h3>
            </div>

            <div class="border p-3">
                <form action="handlelrs/handelLogin.php" method="post" >
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"  class="form-control"
                               placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control"
                               placeholder="Enter your password">
                    </div>

                    <button type="submit" class="btn btn-light border w-100">
                        Login
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
