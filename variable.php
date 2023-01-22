<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Variable</h1>
    <hr>

  <?php 
    $firstName = "Adam";
    $lastName = "Waheed";
    $address = "Finihiyaage";
    $contact = "7905798";
    $dob = "9 May 1968";

    $birthYear = 1986;
    
    $currentYear = date("Y");

    $fullName = $firstName.' '.$lastName;

    $age = $currentYear - $birthYear;
  ?> 


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">contact</th>
      <th scope="col">DOB</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $fullName; ?></td>
      <td><?php echo $address; ?></td>
      <td><?php echo $contact; ?></td>
      <td><?php echo $dob; ?></td>
      <td><?php echo $age; ?></td>
    </tr>
  </tbody>
</table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>