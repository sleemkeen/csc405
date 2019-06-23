<?php include('inc/header.php'); ?>
<div class="container">
    <h1 class="text-center mt-5">Welcome to SignUp</h1>
    <div class="fless mt-5 signup1">
        <div class="bg-image mt-5 fless__1">
            <img src="assets/image/signup.svg" alt="" style="width: 100%;">
        </div>
        <div class="fless__2 ml-5">

            <?php if (isset($_SESSION['message'])) {  ?>
                <div class="alert alert-info" role="alert">
                    <?php echo $_SESSION['message']; ?>
                </div>

                <?php unset($_SESSION['message']); ?>

            <?php } ?>


            <form class="form-signin" method="post" action="post/postregister.php">
                <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
                <label for="Inputusername" class="">Name:</label>
                <input type="text" name="name" id="Inputusername" class="form-control" required autofocus> <br>
                <label for="inputEmail" class="">Email address:</label>
                <input type="email" name="email" id="inputEmail" class="form-control" required autofocus> <br>
                <label for="inputPassword" class="">Password:</label>
                <input type="password" name="password" id="inputPassword" class="form-control mb-3" required>
                <label for="option">Register as a student or a teacher</label><br>

                <select class="custom-select mb-5" name="who">
                    <option selected>Open this select menu</option>
                    <option value="admin">Teacher</option>
                    <option value="user">Student</option>
                </select>
                <!-- <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button> -->
                <input name="submit" value="Login" type="submit" class="stylebut">
            </form>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>