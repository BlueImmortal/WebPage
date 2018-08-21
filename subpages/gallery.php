<!DOCTYPE html>
<html lang="en">
<head>

  <?php require '/static/header.html'; ?>

</head>
<body>

  <?php require '/static/navbar.html'; ?>

<div class="container" style="margin-top:30px; margin-bottom:45px">
  <div class="row">

    <div class="col-md-12">

      <h3 class="text-center"> Robotic Competition RobotTEC 2017 </h3>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="photo">
                <img class="d-block mx-auto" src="gallery/RoboTEC (1).jpg" alt="First slide">
              </div>
          </div>
          <div class="carousel-item">
            <div class="photo">
              <img class="d-block" src="gallery/RoboTEC (2).jpg" alt="Second slide">
            </div>
          </div>
          <div class="carousel-item">
            <div class="photo">
              <img class="d-block" src="gallery/RoboTEC (3).jpg" alt="Third slide">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

  </div>

</div>

<?php require '/static/footer.html'; ?>

</body>

</html>