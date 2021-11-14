<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form method="POST" action="aksilogin.php">
    <div class="login-container">
        <h2> Form Login </h2> 
        <div class="row"> 
            <div class="col-md-12 form-group"> 
            <input type="text" name="username" class="form-control"  
                    placeholder="Your Username">
            </div>
        </div>
    <div class="row"> 
            <div class="col-md-12 form-group"> 
            <input type="password" name="password" 
                    class="form-control" placeholder="Your Password">
            </div>
        </div>
    <div class="row"> 
            <div class="col-md-12 form-group"> 
            <input type="submit" class="btn btn-block btn-login" 
                    class="form-control" value="Login">
            </div>
        </div>
    </div>
    </form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>