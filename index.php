<!DOCTYPE html>
<html lang="en">
<head>

<?php require 'static/header.html'; ?>

</head>
<body>

<?php require 'static/navbar.html'; ?>

<div class="container" style="margin-top:30px; margin-bottom:45px">
  <div class="row">

    <div class="col-md-4 rounded" style="background-color: #b7b7b7;">

        <img class="mx-auto d-block img-fluid rounded" src="img/ZakJakub_photo_2.jpg" alt="Jakub" style="max-width: 100%; margin-top: 15px; margin-bottom: 15px;">

        <h1 class="text-center">Jakub Żak</h1><br>

        <h6 class="text-center">PhD Student at AGH University of Science and Technology</h6><br>

        <h6 class="text-center">Robotic Design Engineer in Multiproject Automation Ltd.</h6><br>

        <div class="list-group" style="margin-bottom: 20px;">

          <a class="list-group-item list-group-item-dark list-group-item-action" href="https://www.jakubzak.pl" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-dribbble"></i> www.jakubzak.pl
          </a>

          <a class="list-group-item list-group-item-dark list-group-item-action" href="mailto:contact@jakubzak.pl">
            <i class="fa fa-envelope"></i> contact@jakubzak.pl
          </a>

          <a class="list-group-item list-group-item-dark list-group-item-action" href="mailto:jzak@agh.edu.pl">
            <i class="fa fa-university"></i> jzak@agh.edu.pl
          </a>

          <a class="list-group-item list-group-item-dark list-group-item-action" href="https://www.linkedin.com/in/jakubzak21" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-linkedin"></i> in/jakubzak21
          </a>

          <a class="list-group-item list-group-item-dark list-group-item-action" href="https://facebook.com/jakub.zak.21" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-facebook-square"></i> fb.com/jakub.zak.21
          </a>

        </div>

    </div>

    <div class="col-md-8">
      
      <?php require 'static/about.html'; ?>

      <?php require 'static/experience.html'; ?>

      <?php require 'static/award.html'; ?>

      <?php require 'static/event.html'; ?>

<!--
      <p>
        Gallery from events as well as competitions is available <b><a class="text-dark" href="gallery.html">here</a></b>.
      </p>
-->
    </div>
  </div>
</div>

<?php require 'static/footer.html'; ?>

</body>
</html>
