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
    <h2 class="text-white text-center pt-5">EXERCISE 7</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
    <div class="card my-3 bg-info" style="padding-bottom:130px">
                    <div class="card-header bg-success">
                         <p class="text-white">7.)Write a program to convert a digit into its word counterpart. E.g. 721 - Seven Two One </p>
                    </div>
                    <div class="card-body ">
                        <form method="post">
                        <label for="" class="form-label">Input a number:</label>
                        <input type="text" class="form-control" name="number" value=""><br>
                        <button class="btn btn-primary" value="Sum" name="Submit">Submit</button><br/><br/>
                </form>

<?php
if(isset($_POST["Submit"])){
    $number=$_POST["number"];
    $numReverse = strrev($number);

    while(floor($numReverse)) {  
        $rem = $numReverse % 10;  
        $numReverse = $numReverse/10;  
        switch($rem){
            case 1:
                echo "One";
                break;
            case 2:
                echo " Two ";
                break;
            case 3:
                echo " Three ";
                break;
            case 4:
                echo " Four ";
                break;
            case 5:
                echo " Five ";
                break;
            case 6:
                echo " Six ";
                break;
            case 7:
                echo " Seven ";
                break;
            case 8:
                echo " Eight ";
                break;
            case 9:
                echo " Nine ";
                break;
            default:
            }
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