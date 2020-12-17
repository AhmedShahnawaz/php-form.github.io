<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Hello, world!</title>
  <style>
   body{
     /* background-image:linear-gradient(125deg, #ffd7de,rgb(13 110 253 / 10%)); */
   }
  </style>
</head>
<body>

  <div class="container col-6 mt-5">
    <form class="row bg-light shadow-lg" action="" method="POST" name="contact-form">
      <h1 class="m-auto display-4">Update your data</h1>
        
                            <?php

                            include 'conect.php';
                             
                            $ids = $_GET['id'];
                            $selectqueryupd = "SELECT * FROM jobdata WHERE id={$ids}";
                            $showdata = mysqli_query($con,$selectqueryupd);
                            $set = mysqli_fetch_array($showdata);
                            
                            if(isset($_POST['submit01'])){
                            $idupd = $_GET['id'];
                              
                            $name1 = $_POST['user'];
                            $number1 = $_POST['number'];
                            $email1 = $_POST['email'];
                            $refr1 = $_POST['refr'];
                            $degree1 = $_POST['degree'];
                            $post1 = $_POST['post'];
                            // tabale name is jobdata
                            
                            // $insertquerry = "INSERT INTO `jobdata`(`name`, `mobile`, `email`, `reference`, `degree`, `post`) VALUES ('$name1','$number1','$email1','$refr1','$degree1','$post1')";
                            $updatequery = "UPDATE `jobdata` SET `id`=$idupd,`name`='$name1',`mobile`='$number1',`email`='$email1',`reference`= '$refr1',`degree`='$degree1',`post`= '$post1' WHERE `id`=$idupd ";
                            
                            // echo $insertquerry;
                            $res = mysqli_query($con,$updatequery);

                         

                            if($res){
                                ?>
                                <script>
                                    alert("Data Updated succesfull");
                                </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("data not Updated");
                                </script>
                                <?php
                            }
                            $con->close();
                            }
                            ?>

      <div class="col-12">
        <label for="firstname" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="user"  value="<?php echo $set['name'] ?>" required>
        <p id="name-error"></p>
      </div>
      <div class="col-12">
        <label for="mobilnumber" class="form-label">phone no.</label>
        <input type="number" class="form-control" id="call" name="number" value="<?php echo $set['mobile'] ?>" required>
        <p id="call-error"></p>
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"  value="<?php echo $set['email'] ?>"required>
        <p id="email-error"></p>
      </div>
      <div class="col-12">
        <label for="refrance" class="form-label">refreneces</label>
        <input type="text" class="form-control" id="ref" name="refr" value="<?php echo $set['reference'] ?>" required>
        <p id="ref-error"></p>
      </div>
      <div class="col-12">
        <label for="inputCity" class="form-label">degree</label>
        <input type="text" class="form-control" id="degree" name="degree"  value="<?php echo $set['degree'] ?>"required>
        <p id="degree-error"></p>
      </div>
      <div class="col-12">
        <label for="inputqualification" class="form-label">post</label>
        <input type="text" class="form-control" id="post" name="post" value="<?php echo $set['post'] ?>" required>
        <p id="post-error"></p>
      </div>
       <br>
      <div class="m-auto mt-3 mb-3 justify-content-between">
        <button type="submit" class="btn btn-primary col-6 shadow-sm"  id="sub" name="submit01">update now</button>
        <a href="store-data.php"  target="_blank" class="text-primary m-3">check form data values</a>
      </div>
    </form>
  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>
   <script src="index.js"></script>

   
</body>
</html>
