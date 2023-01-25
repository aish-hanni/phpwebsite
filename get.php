<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

 <div class="container">

    <h1>Get Data from URL</h1>
    
    <hr>
    Expected URL
    <code>localhost/phpwebisite?test=adam waheed&age=30</code>
    
    <?php if(isset($_GET['name'])) { ?>

       <h2>Good Morning Mr <?php echo $_GET['name']; ?></h2>

    <?php }?> 


    <?php if(isset($_GET['age'])) { ?>

         <h2>I am  <?php echo $_GET['age']; ?> years old</h2>

    <?php }?> 

    <?php 

    $age = 0;
    if(isset($_GET['age'])) {
        
        $age = $_GET['age'];
    }

    if($age>18){
        echo "<h2>You are an adult</h1>";
    }
    
    if($age>65){
        echo "<h2>You will get 5000 mvr</h1>";
    }

    
    
    ?>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>