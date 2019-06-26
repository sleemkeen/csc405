<?php include('inc/header.php'); ?>
<?php $init  =  new Classes(); ?>


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

      <div class="tab-content mt-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row">
            <?php foreach ($init->getWithVenue() as $value) { ?>
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="assets/image/image1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-left">
                    <h5 class="card-title"><?php echo $value['classTitle'] ?></h5>
                    <p class="card-text"><?php echo $value['classCode'] ?></p>
                    <!-- <a href="#" class="btn btn-primary">Start Now</a> -->
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>



<?php include('inc/footer.php'); ?>