<?php

$username = "root";
$password = "";
$server = 'localhost';
// database name
$db = 'jobform';

$con = mysqli_connect($server,$username,$password,$db);

  if($con){
    //  echo "connect suseccessfull";
     ?>
      <script>
      alert("connection succesfull to the server");
      // swal("DATABASES CONNECTION!", "connection successfull!", "success");
      </script>
    <?php
  }else {
    //  echo "not connect suseccessfull";
    ?>
      <script>
      alert("connection not succesfull");
      </script>
    <?php
  }
  // $con->close();

?>