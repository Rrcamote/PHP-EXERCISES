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
<style>
#table {
    margin-left: 3px;
    margin-top: -28px;
    width: 426px;
}
</style>
</head>
<body>
<nav class="bg-dark pb-5">
    <h2 class="text-white text-center pt-5">EXERCISE 5</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
    <div class="card my-3 bg-info"style="padding-bottom:130px">
            <div class="card-header bg-success">
                    <p class="text-white">4.)Write a program to determine if the number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.</p>
                </div>
                <div class="card-body bg-info">
                        <?php
$number_array = array(10, 11, 2, 2, 3, 4, 5, 510, 5, 4, 1, 8, 7, 6, 6, 9, 8, 8, 7, 9, 10, 5, 11);
echo "Array Number is: " . "<br>";
foreach ($number_array as $new) {
    echo "$new,";
}
sort($number_array);
echo "<br>"."<br>";
echo "Sorted Array Number is: " . "<br>";
foreach ($number_array as $new => $value) {
    echo "$value,";
}
$delete_number = array_unique($number_array);
echo "<br>"."<br>";
echo "Remove the recurring elements inside a sorted list";
echo "<br>";
foreach($delete_number as $d_num){
    echo "$d_num,";
}
?>
</div>
</div>
               </div>
            </div>
        </div>
</body>
</html>