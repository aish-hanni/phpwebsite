<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ; ?>
<body>
<?php include "nav.php" ; ?>

<div class = "container">
    <h1>Mortgage<h1>
        <hr>
    <?php
$Type1 = "Condo";
$Type2 = "Apartment";
$Type3 = "House";
$Type4 = "Townhouse";
$Ownership1 = "Unit";
$Ownership2 = "None";
$Ownership3 ="House Property";
$Ownership4 ="Unit Property";
$Costs1 = "HOA,Mortgage,Taxes";
$Costs2 = "Monthly rent";
$Maintenance1 = "In-unit";
$Maintenance2 = "None";
$Maintenance3 = "Interior/exterior property";
?>

<table class="table table-striped fs-5 fs-5 text">
  <thead>
    <tr>
      <th scope="col">Types</th>
      <th scope="col">Ownership</th>
      <th scope="col">Costs</th>
      <th scope="col">Maintenance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Condo</th>
      <td><?php echo $Ownership1?></td>
      <td><?php echo $Costs1?></td>
      <td><?php echo $Maintenance1?></td>
    </tr>
    <tr>
      <th scope="row">Apartment</th>
      <td><?php echo $Ownership2?></td>
      <td><?php echo $Costs2?></td>
      <td><?php echo $Maintenance2?></td>
    </tr>
    <tr>
      <th scope="row">House</th>
      <td><?php echo $Ownership3?></td>
      <td><?php echo $Costs1?></td>
      <td><?php echo $Maintenance3?></td>
    </tr>
    <tr>
      <th scope="row">Townhouse</th>
      <td><?php echo $Ownership4?></td>
      <td><?php echo $Costs1?></td>
      <td><?php echo $Maintenance3?></td>
    </tr>
  </tbody>
</table>
<hr>
<h1>Availibility<h1>
<?php
$Months = ["February","May","September"];
$Male = "4 Apartments from Male";
$Hulhumale = "4 Condos and 6 Apartments from Hulhumale";
$Villimale = "2 Houses in Villimale";
?>
<?php
if($Months[1]=="May");
{
    echo $Hulhumale;
}

?>



 


</body>
</html>