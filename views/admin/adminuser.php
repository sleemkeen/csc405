<?php include('headadmin.php'); ?>
<div class="admin">
    <header class="admin__header">
        <h1 class="logo dashcol">MyTutorial Admin</h1>
        <div class="toolbar">
            <a href="logout" class="logout" style="text-decoration:none;">
                Log Out
            </a>
        </div>
    </header>
    <nav class="admin__nav navcol" style="min-height:2000px">
        <ul class="menu">
            <li class="menu__item">
                <a class="menu__link" href="adminhome">Dashboard</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="admincourses">Add Course</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="adminvenue">Add Venue</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="adminuser">Add User</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="adminconfig">Add Config</a>
            </li>
        </ul>
    </nav>
    <main class="admin__main">

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <!-- Classes -->
            <div class="alert alert-secondary" role="alert">
                Welcome Admin,
            </div>
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
            <div class="bordered-around pl-3 pt-3 pr-3 pb-3">
                <div class="course_reg pt-3 pl-2">Add Admin</div>
                <hr>
                <form action="post/postadmin.php" method="post">
                    <label for="Inputusername" class="">Name:</label>
                    <input type="text" name="name" id="Inputusername" class="form-control" required style="width:50%;"> <br>
                    <label for="inputEmail" class="">Email:</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" required style="width:50%;"> <br>
                    <label for="inputPassword" class="">Password:</label>
                    <input type="password" name="password" id="inputPassword" class="form-control mb-3" style="width:50%;" required>


                    <input type="submit" name="submit" style="background-color:  #032658; color: #fff;" value="Submit" />
                </form>
            </div>
        </div>
    </main>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>