<?php include('headadmin.php'); ?>
<div class="admin">
    <header class="admin__header">
        <h1 class="logo dashcol">MyTutorial Admin</h1>
        <div class="toolbar">
            <a href="login" class="logout" style="text-decoration:none;">
                Log Out
            </a>
        </div>
    </header>
    <nav class="admin__nav navcol">
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
        </ul>
    </nav>
    <main class="admin__main">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="alert alert-secondary" role="alert">
            Welcome Admin,
        </div>
        <div class="bordered-around pl-3 pt-3 pr-3 pb-3">
            <div class="course_reg pt-3 pl-2">Add Venue</div>
            <hr>
            <label for="coursevenue" class="">Venue</label>
            <input type="text" name="ven" id="coursevenue" class="form-control" style="width:50%;" required> <br>

            <button type="submit" style="background-color:  #032658; color: #fff;">Submit</button>
        </div>

        <!-- <div class="tab-content" id="v-pills-tabContent">
            
            <div class="tab-pane fade active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>

                <div class="card mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size: 15px;">Total Classes <br> registered 10</p>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-danger btn-sm">Danger</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>
                <div class="bordered-around pl-3 pt-3 pr-3 pb-3">
                    <div class="course_reg pt-3 pl-2">Courses Registration</div>
                    <hr>

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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </main>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>



