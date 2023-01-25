<!doctype html>
<html lang="en">
    <?php include "header.php"; ?>
  <body>
<?php include "nav.php"; ?>

    <div class="container">
    <h1>Loop Practical</h1>
    <hr>


   <?php 
    $people = [
        [
            'name' => 'Adam Waheed',
            'age' => 37,
        ],
        [
            'name' => 'Hussain Waheed',
            'age' => 67,
        ],
        [
            'name' => 'ALI wahed',
            'age' => 68,
        ],
        [
            'name' => 'Abdullah Ali',
            'age' => 67,
        ],
        [
            'name' => 'Ibrahim Muneer',
            'age' => 10,
        ],
        [
            'name' => 'Hanaan',
            'age' => 25,
        ],
        [
            'name' => 'Affan',
            'age' => 43,
        ],
        [
            'name' => 'Lujan',
            'age' => 99,
        ],

    ];

    $count = 1;   

    foreach($people as $person){

        if($person['age']>=65){
            $count = $count*2; 
           
        }
    }

    $count =1;

    $count = $count * 2;

    $count = $count * 2;

    $count = $count * 2;
    
    $count = $count * 2;

    echo $count;
   
   ?> 


       


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>