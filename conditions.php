<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Conditions</h1>
    <hr>

    <?php 
      $name = "Adam Waheed";
      
      $age = 19;

      if($age>=18)
      {
        echo "you are Eligible for Voting";
      }
      else
      {
        echo "you are not Eligible for Voting";
      }

    ?>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>