


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Hello, world!</title>
  </head>
  <style>
    #a1{
      cursor:pointer;
      color:#73c376;
    }
    #a2{
       cursor:pointer;
       color:#ff3b00a6;
    }
  </style>
  <body>
    <h1 class="text-center display-4">Data Table!</h1>
     <section class="container">
     <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">mobile</th>
            <th scope="col">email</th>
            <th scope="col">refer</th>
            <th scope="col">degree</th>
            <th scope="col">post</th>
            <th colspan="2" scope="col">update / delete</th>
            </tr>
        </thead>
        <tbody>
                <?php

                    include 'conect.php';

                    $selectquery = "SELECT * FROM jobdata";

                    $query = mysqli_query($con,$selectquery);

                    // $res = mysqli_num_cols($query);


                    while ($res = mysqli_fetch_array($query)) {
                        # code...
                    ?>
                            <tr>
                            <th scope="row"><?php echo $res['id'] ?></th>
                            <td><?php echo $res['name'] ?></td>
                            <td><?php echo $res['mobile'] ?></td>
                            <td><b><?php echo $res['email'] ?></b></td>
                            <td><?php echo $res['reference'] ?></td>
                            <td><?php echo $res['degree'] ?></td>
                            <td><?php echo $res['post'] ?></td>
                            <td><a href="update-data.php?id=<?php echo $res['id'] ?>" id="a1" data-toggle="tooltip" data-placement="left" title="update!"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delet-data.php?id=<?php echo $res['id'] ?>" id="a2" data-toggle="tooltip" data-placement="left" title="delet!"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                    <?php       
                       }
                    ?>
           
            
        </tbody>
        </table>
     </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
  </body>
</html>

