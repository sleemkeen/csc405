<html>

</html>

<h1>welcome to login</h1>


<div>
    <form class="form-signin" method="post" action="post/postlogin.php">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <input type="hidden" value="user" name="who">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <!-- <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button> -->
        <input name="submit" value="submit" type="submit">
    </form>
</div>

</html>