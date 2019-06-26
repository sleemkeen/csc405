<?php include('inc/adminheader.php'); ?>

<?php $init  =  new Classes(); ?>
<?php $initlinks  =  new Links(); ?>
<?php $closing  =  new Config(); ?>
<div class="admin">
    <header class="admin__header">
        <h1 class="logo dashcol">Dashboard</h1>
        <div class="toolbar">
            <a href="logout" class="logout" style="text-decoration:none;">
                Log Out
            </a>
        </div>
    </header>
    <nav class="admin__nav navcol" style="min-height:2000px">
        <!-- <ul class="menu">
                <li class="menu__item">
                    <a class="menu__link" href="#">Course Registration</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Classes</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Time Table</a>
                </li>
            </ul> -->
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link menu__link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Classes</a>
            <a class="nav-link menu__link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Course Registration</a>
            <a class="nav-link menu__link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Time Table</a>
        </div>
    </nav>
    <main class="admin__main">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <!-- Classes -->
                <div class="alert alert-danger" role="alert">
                    Course Registration ends <?php $date = new DateTime($closing->showById(1)['closeTime']);
                                                echo $date->format('g:ia \o\n l jS F Y'); ?>
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
                    <div class="course_reg pt-3 pl-2">Course Registration</div>
                    <hr>



                    <?php if ($init->isRegistered(($_SESSION['user_id']))) { ?>
                        <form method="post" action="post/postregcourses.php">
                            <table class="table table-striped">

                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Course Title</th>
                                        <th scope="col">Course Code</th>
                                        <th scope="col">Venue</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>


                                    <?php foreach ($init->getWithVenue() as $value) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++ ?></th>
                                            <td><?php echo $value['classTitle'] ?></td>
                                            <td><?php echo $value['classCode'] ?></td>
                                            <td><?php echo $value['venue'] ?></td>

                                            <td><input type="checkbox" value="<?php echo $value['classId'] ?>" name="selectcourse[]"></td>
                                        </tr>
                                    <?php } ?>



                                </tbody>
                            </table>

                            <button type="submit" name="submit" style="background-color:  #032658; color: #fff;">Submit</button>
                        </form>
                    <?php
                } else { ?>
                        <div class="alert alert-info" role="alert">
                            <P>Course Registered Successfully</P>
                        </div>
                    <?php } ?>



                </div>

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <!-- Course Registration -->
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>

                <?php if (count($initlinks->showUserCourses()) >= 1) { ?>

                    <div class="card mb-5" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text text-center" style="font-size: 15px;">Total Classes <br> registered <?php echo \count($initlinks->showUserCourses()) ?></p>
                        </div>
                    </div>

                    <div class="bordered-around pl-3 pt-3 pr-3 pb-3">
                        <div class="course_reg pt-3 pl-2">Courses Registered</div>
                        <hr>
                        <div class="action_btns pl-2 pb-3">
                            <button type="button" class="btn btn-success btn-sm">Excel</button>
                            <button type="button" class="btn btn-danger btn-sm">PDF</button>
                            <button type="button" class="btn btn-primary btn-sm">Print</button>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Date Registered</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($initlinks->showUserCourses() as $key) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $key['classTitle'] ?></td>
                                        <td><?php echo $key['classCode'] ?></td>
                                        <td><?php echo $key['linkCreated'] ?></td>
                                        <td><?php echo $key['venue'] ?></td>
                                        <td><a class="btn btn-warning btn-sm" href="views/deletecourse.php?linkId=<?php echo $key['linkId'] ?>">Delete</a></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        Please enroll for classes
                    </div>
                <?php } ?>

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <!-- Time Table -->
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>
                <div class="bordered-around pl-3 pt-3 pr-3 pb-3">
                    <div class="course_reg pt-3 pl-2">Courses Registration</div>
                    <hr>
                    <?php if (count($initlinks->showUserCourses()) >= 1) { ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Date Registered</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1; ?>
                                <?php foreach ($initlinks->showUserCourses() as $key) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $key['classTitle'] ?></td>

                                        <td><?php echo $key['classCode'] ?></td>

                                        <td><?php echo $key['linkCreated'] ?></td>
                                        <td><?php echo $key['venue'] ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-info" role="alert">
                            Please enroll for classes
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>