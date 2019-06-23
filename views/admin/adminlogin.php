<?php include('headadmin.php'); ?>
<div class="container">
    <h1 class="text-center mt-5">Welcome to AdminLogin</h1>
    <div class="fless mt-5">
        <div class="bg-image mt-5 fless__1">
            <img src="assets/image/signin.svg" alt="" style="width: 100%;">
        </div>
        <div class="fless__2 ml-5">

            <?php if (isset($_SESSION['error'])) {  ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>

                <?php unset($_SESSION['error']); ?>

            <?php } ?>

            <?php if (isset($_SESSION['success'])) {  ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success']; ?>
                </div>

                <?php unset($_SESSION['success']); ?>

            <?php } ?>
            <form class="form-signin" method="post" action="post/postlogin.php">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputEmail" class="">Email:</label>
                <input type="email" name="email" id="inputEmail" class="form-control" required autofocus> <br>
                <label for="inputPassword" class="">Password:</label>
                <input type="password" name="password" id="inputPassword" class="form-control mb-3" required>
                <input type="hidden" value="admin" name="who">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <div class="mb-3">
                    <a href="#!" class="forgot">Forgot password?</a>
                </div>
                <!-- <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button> -->
                <input name="submit" value="submit" type="submit" class="stylebut">
            </form>
        </div>
    </div>
</div>



