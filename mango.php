<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Mango</h1>
    <hr>

 <?php 

 $baskets = [
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'apple'],
    ['name' => 'mango'],
    ['name' => 'apple']
 ];

 foreach($baskets as $basket){

    if($basket['name'] == 'mango'){
        echo "Take it and smile <br>";
    }else{
        echo "oh shit its an apple <br>";
    }
 }
 
 ?> 
 <hr>

   

    
       


    </div>
    <div class="container">
    <h1>Strawberry Basket</h1>
  
    <?php
    $baskets = [
   ['name' => 'red'],
   ['name' => 'brown'],
   ['name' => 'red'],
   ['name' => 'brown'],
   ['name' => 'red']

    ];
    foreach($baskets as $basket){
      if($basket['name'] == 'red'){
      echo "Wow this is so fresh <br>";
      }
      else{
        echo "Ohno this is rotten <br>";
        }
      }
    


      ?>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>