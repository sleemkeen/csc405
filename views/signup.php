<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbarcol">
        <img src="assets/image/Group.png" alt="sitelogo"><h3 class="myclass">Mytutorial class</h3>

        <form class="form-inline form-search my-2 my-lg-0">
        <div class="input-group">
            <input type="text" class="form-control search-box" placeholder="Search..." aria-label="Search for...">
            <span class="input-group-btn">
            <button class="btn search-btn" type="button">Search</button>
            </span>
        </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">SignUp</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Dashboard1.php">Course Category</a>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-5">Welcome to SignUp</h1>
        <div class="fless mt-5 signup1">
            <div class="bg-image mt-5 fless__1">
                <img src="assets/image/signup.svg" alt="" style="width: 100%;">
            </div>
            <div class="fless__2 ml-5">
                <form class="form-signin" method="post" action="post/postlogin.php">
                    <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
                    <label for="Inputusername" class="">Name:</label>
                    <input type="text" name="username" id="Inputusername" class="form-control"  required autofocus> <br>
                    <label for="inputEmail" class="">Email address:</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" required autofocus> <br>
                    <label for="inputPassword" class="">Password:</label>
                    <input type="password" name="password" id="inputPassword" class="form-control mb-3" required>
                    <label for="option">Register as a student or a teacher</label><br>
                    <!-- <select name="options" id="option" value="Choose an option" class="mb-5">
                            <option>Teacher</option>
                            <option>Student</option>
                    </select><br> -->
                    <select class="custom-select mb-5">
                        <option selected>Open this select menu</option>
                        <option value="1">Teacher</option>
                        <option value="2">Student</option>
                    </select>
                    <!-- <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button> -->
                    <input name="submit" value="Login" type="submit" class="stylebut">
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>