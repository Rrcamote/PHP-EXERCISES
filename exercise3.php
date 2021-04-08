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
    <title>Exercise 3</title>

<style>
body {
    background-image: url('https://image.freepik.com/free-vector/wood-background-realistic_107791-102.jpg?1');
    background-repeat: no-repeat;
    background-size: cover;
}
#table {
    margin-left: 3px;
    margin-top: -28px;
    width: 426px;
}
</style>
</head>
<body>
<nav class="bg-dark pb-5">
    <h2 class="text-white text-center pt-5">EXERCISE 3</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card my-3">
                <div class="card-header bg-success">
                    <p class="text-white">3.)Write a division table program using the for loop.</p>
                </div>
                <table class="card-table table-bordered " id="table">
                <div class="card-body ">
                
<?php
$counter_num = 1;
$end_counter = 10;
print("<tr>");
print("<th></th>");
for ($th_counter = $counter_num; $th_counter <= $end_counter; $th_counter++) {
    print("<th>$th_counter</th>");
}

print("</tr>");

for ($th_counter = $counter_num; $th_counter <= $end_counter; $th_counter++) {
    print("<tr><th>$th_counter</th>");
    for ($count_2 = $counter_num; $count_2 <= $end_counter; $count_2++) {
        $results = $th_counter / $count_2;
        printf(
            "<td>%.2f</td>",
            $results
        );
    }
    print("</TR>\n");
}

?>
</table>
                </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>