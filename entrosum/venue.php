<?php

include("connect.php");
include('sessions_admin.php');
       if (isset($_POST['btn-upload'])) {
         $audi=mysqli_real_escape_string($db, $_POST['audi']);
         $sql = "insert into venue(audi) values ('$audi')";
         $res = mysqli_query($db,$sql);

       if ($res) {

         $msg = "Venue uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='venue.php';</script>";

       }
       else{

         $msg = "Failed to upload Venue";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='venue.php';</script>";

       }

     }
     ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row head">
      <div class="col-md-2 logo text-center">
        <img src="img/logo.png" alt="logo" class="img-fluid">
      </div>
      <div class="col-md-10 hello">
        <h1><i class="fas fa-tachometer-alt"></i>VENUE</h1>
      </div>
    </div>
    <div class="row" style="height:100vh; width: 100vw;">
      <div class="col-md-2 option">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><i class="fas fa-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="banners.php"><i class="fas fa-image"></i>Banners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="venue.php"> <i class="fas fa-bars"></i>Venue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agenda.php"> <i class="fas fa-calendar"></i>Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"> <i class="fas fa-book"></i>About & Brief</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="speakers.php"> <i class="fas fa-user"></i>Speakers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponsors.php"> <i class="fas fa-money-bill-alt"></i>Sponsers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="partners.php"> <i class="fas fa-handshake"></i>Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="queries.php"> <i class="fas fa-comment"></i>Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"> <i class="fas fa-power-off"></i>Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10">
      <div class="container">
        <form action="venue.php" method="post" enctype="multipart/form-data">
          <center><h3 style="color:white">VENUE</h3></center>
          <div class="form-group">
            <input type="text" name="audi" placeholder="Audi/Room No">
          </div>
          <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
        </form>
        <br>
        <div class="table-responsive table-bordered table-hover table-striped">
          <table class="table">
            <?php
            $select="SELECT * FROM venue";
            $res=mysqli_query($db,$select);
            if(mysqli_num_rows($res)>0){
              echo "<tr class='success'>
                    <th>Venue ID</th>
                    <th>Audi/Room number</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>";
                while($row=mysqli_fetch_assoc($res)){
                  $idU=$row['vid'];
                  $imageURL = $row['audi'];
                  echo " <tr class='info'>";?>
            <td><h4 style="text-align:center; overflow:hidden"><?php echo $idU;?></h4></td>
            <td><h4 style="text-align:center; overflow:hidden"><?php echo $imageURL;?></h4></td>
            <td><a href="editven.php?edit=<?php echo $row['vid']?>">Edit</a></td>
            <td><a href="delven.php?id=<?php echo $row['vid']?>">Delete</a></td>
          </tr>
          <?php
  }
  }
  ?>
          </table>
        </div>
      </div>
  </div>
</div>
            </script>
        </body>
    </html>
