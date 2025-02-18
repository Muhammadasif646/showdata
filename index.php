<?php


include "connection.php";

if(isset($_GET["submit"])){


$name =$_GET["name"];
$email =$_GET["email"];
$phone =$_GET["number"];
$course =$_GET["course"];

$query ="INSERT INTO `students`( `s_name`, `s_email`, `s_phone`, `s_course`) VALUES ('$name',' $email','$phone','$course')";


$re=mysqli_query($connection,$query);






?>

<script>
    alert("insert data successfully")
</script>



<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<a href="show.php"><input type="button" value="show data " class="btn btn-dark"></a>
<form action="" method="get"  class="table">

<h1 align="center" class="display-1 p-5 text-danger bg-warning">students data</h1>
<input type="text" placeholder="Enter Name"  class="form-control"     name="name" >
<br>
<input type="email" placeholder="Enter Email"  class="form-control"     name="email" >
<br>

<input type="number" placeholder="Enter P_number"  class="form-control"     name="number" >
<br>


<input type="text" placeholder="Enter Course Name"  class="form-control"     name="course" >
<br>


<input type="submit" class="btn btn-danger"   name="submit">
</form>



</body>
</html>