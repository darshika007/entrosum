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
        <h1><i class="fas fa-tachometer-alt"></i>QUERIES</h1>
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
        <br>
        <?php
        include("connect.php");
        $query="select * from queries";
        $result= mysqli_query($db,$query) or die(mysqli_error($db));
        ?>
        <div class="row mt-5">
          <div class="col-12">
            <div class="table-responsive table-wrapper-scroll-y">
              <!--Table-->
              <table class="table table-striped">

                <!--Table head-->
                <thead>
                  <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Query</th>
                    <th>Answer</th>
                    <th>Answered By</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                  <?php
                  $slno=0;
                   while ( $row=mysqli_fetch_array($result)) {
                  $slno++;
                     ?>
                    <form action="qupdate1.php" method="post">
                  <tr>
                    <th scope="row"><?php echo $slno ?></th>
                      <input type="hidden" name="PKid" value=<?php echo $row['id'] ?>>
                      <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['query'] ?></td>


                    <?php if ($row['ans']==null) {?>
                      <td> <textarea required row=50 column=100 name='textarea'></textarea></td>
                      <td> <p class="text-muted">Please answer!</p> </td>
                      <td>
                         <button type="submit" name="button" class="btn btn-outline-success">Submit</button>
                         &nbsp
                         <a href="qupdate2.php?PKid=<?php echo $row['id']; ?>&email=<?php echo $row['email']; ?>"><button type="button" name="button" class="btn btn-outline-danger">Ignore</button></a>
                      </td>

                    <?php }else {?>
                      <td><?php echo $row['ans']; ?></td>
                      <td><?php echo $row['ansby']; ?></td>
                      <td>
                      <button type="submit" name="button" class="btn btn-outline-success" disabled>Submit</button>
                      &nbsp
                      <button type="submit" name="button" class="btn btn-outline-danger" disabled>Ignore</button>
                      </td>
                      <?php } ?>
                  </tr>
                </form>
                <?php } ?>
                </tbody>
                <!--Table body-->
              </table>
              <!--Table-->
            </div>

          </div>

        </div>

      </div>
  </div>
</div>
            </script>
        </body>
    </html>
