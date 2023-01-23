<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Loop with array</h1>
    <hr>
<?php 
    $names = ['adam','waheed','Hussain','Ibrahim','Mode'];
?>


  <ul>

    <?php foreach($names as $name) { ?>

      <li><?php echo $name;?></li>

    <?php } ?>

  </ul>

 


    <hr>

      <?php 
        $employee = [
            "name"=>"adam Wahed",
            "age"=>37,
            "salary"=>1234123,
        ];
        
      echo $employee['age'];
      ?>
         </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>