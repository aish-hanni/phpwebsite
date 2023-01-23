<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Loop with array</h1>
    <hr>
<?php 
    $employees = [
        [
          'name' =>'Adam waheed',
          'age' => 37,
          'salary' => 10000
        ],

        [
          'name' =>'Hussain Ali',
          'age' => 14,
          'salary' => 34234
        ],
        [
          'name' =>'Aishath Ali',
          'age' => 41,
          'salary' => 2343
        ]

    ];
?>


  <table class="table">
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Salary</th>
      </tr>
    <?php foreach($employees as $employee) { ?>
      <tr>


      <?php 
        
          if($employee['age'] >= 18){

            $status=  "Adult";
            $tableRowClass = "table-danger";

          }else{

            $status = "Child";
            $tableRowClass = "table-success";
          }
      ?>
      
          <td><?php echo $employee['name']; ?></td>
          <td><?php echo $employee['age']; ?></td>

          <td class="<?php echo $tableRowClass;?>"  ><?php echo $status; ?> </td>
          <td><?php echo $employee['salary']; ?> MVR</td>
      </tr>
    <?php } ?>
   

  </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>