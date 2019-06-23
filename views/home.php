<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbarcol">
    <img src="assets/image/Group.png" alt="sitelogo">
    <h3 class="myclass">Mytutorial class</h3>

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
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dashboard1.php">Course Category</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="header-bg bg-text">
            <h3>Free Online <br> Tutorials</h3>
            <div class="signup-button">
              <a href="register" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-image mt-5">
            <img src="assets/image/bg-image.svg" alt="" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section__1">
    <div class="container">
      <div class="text-center">
        <h5 class="section__2--header">Classes</h5>
        <ul class="nav nav-pills nav-justified mt-5 mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Trending Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Most Popular Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Most Recent Courses</a>
          </li>
        </ul>
        <div class="tab-content mt-5" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image2.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image2.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image5.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image6.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image2.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image7.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image5.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image2.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer__section mt-5 text-white">
    <div class="container">
      <div class="footer__content pt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="footer__header">
              <h5 class="footer__title">Mytutorial Class</h5>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem quisquam molestiae eum blanditiis nemo adipisci cumque ipsa, ipsam laborum cupiditate.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer__item">
              <h5>Quick Links</h5>
              <ul>
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer__item">
              <h5>Quick Links</h5>
              <ul>
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer__item">
              <h5>Join Us</h5>
              <ul>
                <li>
                  <a href="#!">
                    <i>Twitter</i>
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <i>Instagram</i>
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <i>LinkedIn</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>