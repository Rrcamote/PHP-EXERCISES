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
#table {
    margin-left: 3px;
    margin-top: -28px;
    width: 426px;
}
body {
    background-image: url('https://image.freepik.com/free-vector/wood-background-realistic_107791-102.jpg?1');
    background-repeat: no-repeat;
    background-size: cover;
}


</style>
</head>
<body>
<nav class="bg-dark pb-5">
    <h2 class="text-white text-center pt-5">EXERCISE 4</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card my-3">
            <div class="card-header bg-success">
                    <p class="text-white">4.)Write a program to determine if the number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.</p>
                </div>
                    <div class="card-body bg-info" style="padding-bottom:90px;">
                        <form method="post">
                        <label for="" class="form-label ">Input a number:</label>
                        <input type="text" class="form-control" name="number"><br>
                        <button class="btn btn-primary" value="Sum" name="submit">Submit</button><br><br>
                        <br>
                        </form>
                            <?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $temp = $number;
    $sum = 0;
    while ($temp != 0) {
        $reminder = $temp % 10;
        $sum = $sum + ($reminder * $reminder * $reminder);
        $temp = $temp / 10;
    }
    if ($number == $sum) {
        echo "<script>alert('Yes.... $number is an Armstrong Number');</script>";
    } else {
        echo "<script>alert('$number is not an Armstrong Number');</script>";
    }
}
?>
                </div>
            </div>
        </div>
</body>
</html>