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
    <title>Exercise 1</title>
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
    <h2 class="text-white text-center pt-5">EXERCISE 1</h2>
</nav>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card my-3">
        <div class="card-header bg-success">
        <p class="text-white">1.)Write a program to loop over the given JSON data. Display the values via loops or recursion.JSON Data:</p>
        </div>
        <div class="card-body bg-info" style="padding-bottom:90px">
        <?php
                $json_array = json_decode('[
                    {
                        "name" : "James Belda",
                        "age"  : "15",
                        "school" : "Ahlcon Public school"
                        },
                        {
                        "name" : "Smith Soy",
                        "age"  : "16",
                        "school" : "St. Marie school"
                        },
                        {
                        "name" : "Charle Rena",
                        "age"  : "16",
                        "school" : "St. Columba school"
                        }
                    ]');
                foreach($json_array as $key => $value){
                    foreach($value as $key => $val){
                        echo "$key : $val"."<br>";
                    }
                    echo "<br>";
                }
            ?>
           </div>
        </div>
    </div>

</body>
</html>
