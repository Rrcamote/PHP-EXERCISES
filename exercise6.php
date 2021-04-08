<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
body {
    background-image: url('https://image.freepik.com/free-vector/wood-background-realistic_107791-102.jpg?1');
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
</head>
<body>
<nav class="bg-dark pb-5">
    <h2 class="text-white text-center pt-5">EXERCISE 6</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card my-3 bg-info"style="padding-bottom:130px">
            <div class="card-header bg-success">
                <p class="text-white">6.)Write a program to delete the recurring elements inside a sorted list of Strings.</p>
            </div>
            <div class="card-body">
<?php
$string_array = array("Romeo", "James", "Joshua", "Romeo", "Miguel", "James", "April");
echo "Array String is: " . "<br>";
foreach ($string_array as $new1) {
    print_r("$new1,");
}
$sort_array = sort($string_array);
echo "<br>"."<br>";
echo " Sorted Array String is: " . "<br>";
foreach ($string_array as $new_value) {
    print_r("$new_value,");
   
}
echo "<br>"."<br>";
echo "Remove the recurring elements inside a sorted list:" . "<br>";
$Delete_recurring = array_unique($string_array);
foreach($Delete_recurring as $new){
    print_r("$new,");
}
?>
                        </div>
                    </div>
               </div>
            </div>
        </div>
</body>
</html>