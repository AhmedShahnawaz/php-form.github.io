<?php

include "conect.php";

$id = $_GET['id'];

$deletquerry = "DELETE FROM `jobdata` WHERE id=$id";

$query = mysqli_query($con,$deletquerry);

header('location:store-data.php');
?>