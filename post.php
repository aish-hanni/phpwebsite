<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

 <div class="container">

    <h1>Posting Data to the Same File</h1>

    <form method="post" action="post.php">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Number 1</label>
            <input type="number" name="number1" class="form-control" placeholder="Enter Number 1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Number 2</label>
            <input type="number" name="number2" class="form-control" placeholder="Enter Number 2">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php 
    
      if(isset($_POST['number2'])){

        $result = $_POST['number2'] + $_POST['number1'];
        echo "<h1>the Result is ".$result."</h1>";

      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>