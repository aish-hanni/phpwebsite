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
      
      $marks = 100;

      $grade = "F";

      if($marks>=95)
      {
        $grade = "A+";
      }
      else if($marks>=85){
        $grade = "A";
      }
      else if($marks>=75){
        $grade = "B";
      }
      else if($marks>=65){
        $grade = "C";
      }
      else if($marks>=50){
        $grade = "D";
      } 
      else if($marks<50){
        $grade = "F";
      }
      else if($marks<10){
        $grade = "X";
      }else{
        $grade = "U";
      }


      echo $name ." got ". $grade . " Grade";

      

    ?>

    </div>
    <div class="container">
      <br>
    <h1>Conditions.exercise</h1>
    <hr>
<?php
$name = "You";
$amount= 10000;
$class=["business_class_tickets!","economy_class_tickets!"];

if($amount===10000){
  $type = $class[0];
}
elseif($amount<6000)
{
  $type = $class[1];
} 
echo $name ." "."get"." ". $type;
?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>