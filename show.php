<?php

include "connection.php";


$que="SELECT * FROM `students` WHERE 1";

$result=mysqli_query($connection,$que);



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
    

<div class="container-fulid">
<a href="index.php">    <input type="button"  value="ADD Student"></a>
<h1 align="center" class="display-1 p-5 text-danger bg-warning">show data</h1>

<table class="table table-hover table-bordered  table-light ">

<thead  class=" bg-dark">
<tr>


<th>Name</th>
<th>Class</th>
<th>Email</th>
<th>Course</th>

</tr>


</thead>

<tbody>
<?php

while( $row = mysqli_fetch_assoc($result)             ){

?>
<tr>

<td> <?php    echo $row["s_name"]  ;     ?>  </td>
<td> <?php    echo $row["s_email"] ;      ?>  </td>
<td> <?php    echo $row["s_phone"]  ;     ?>  </td>
<td> <?php    echo $row["s_course"]  ;     ?>  </td>
</tr>

<?php  

}
?>

</tbody>

</table>


</div>



</body>
</html>


