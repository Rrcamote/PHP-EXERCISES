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
    <title>Exercise 2</title>
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
    <h2 class="text-white text-center pt-5">EXERCISE 2</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card my-3">
                <div class="card-header bg-success">
                    <p class="text-white">2.)There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item.</p>
                </div>
                <div class="card-body bg-info">
                <form action="" method="post">
                <label for="" class="form-label">Quantity1:</label>
                <input type="text" class="form-control" name="q1" value="200">
                <label for="" class="form-label">Quantity2:</label>
                <input type="text" class="form-control" name="q2" value="100">
                <label for="" class="form-label">Price1:</label>
                <input type="text" class="form-control" name="p1" value="35">
                <label for="" class="form-label">Price2:</label>
                <input type="text" class="form-control" name="p2" value="30"><br>
                <button class="btn btn-primary" value="Sum" name="sub">Submit</button>
                </form>
                    <?php
if (isset($_POST['sub'])) {
    $quantity1 = $_POST['q1'];
    $quantity2 = $_POST['q2'];
    $price1 = $_POST['p1'];
    $price2 = $_POST['p2'];
    if (($quantity1 >= $quantity2) && ($price2 > $price1)) {
        echo "<script>alert('The best deal to purchase is Quantity1 with $quantity1' pieces with the price of $price1');<scipt>";

    } else {
        echo "<script>alert('The best deal to purchase is Quantity2 with $quantity2 pieces with the price of $price1');</script>";
    }
}
?>
</div>
</div>
                </div>
            </div>
        </div>
</body>
</html>
