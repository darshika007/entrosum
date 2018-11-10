<?php
include('sessions_admin.php');
include("connect.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

       if (isset($_POST['btn-upload'])) {
         $target = "../entrosum/img/banner/".basename($_FILES["fileimg"]["name"]);
         $fileimg=$_FILES['fileimg']['name'];
         $error = $_FILES['fileimg']['error'];
         $imgtype=$_FILES['fileimg']['type'];
         $ext= GetImageExtension($imgtype);
         $about=$_POST['about'];
         $sql = "insert into fusion(imgpath,type,name) values ('$fileimg','aboutbrief','$about')";
         mysqli_query($db,$sql);

       if (move_uploaded_file($_FILES['fileimg']['tmp_name'],$target)) {

         $msg = "About was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='about.php';</script>";

       }
       else{

         $msg = "Failed to upload about";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='about.php';</script>";

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
        <h1><i class="fas fa-tachometer-alt"></i>AGENDA</h1>
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
      <center>
            <form action="about.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="about">About:</label>
                <input type="file" name="fileimg" id="fileimg">
                  <input type="text" name="about" placeholder="Title">
              </div>
              <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
            </form></center>
            <br>
            <div class="table-responsive table-bordered table-hover table-striped">
              <table class="table">
                <?php
                $select="SELECT * FROM fusion where type='aboutbrief'";
                $res=mysqli_query($db,$select);
                if(mysqli_num_rows($res)>0){
                  echo "<tr class='success'>

                        <th>Title</th>
                          <th>About Image</th>
                    </tr>";
                    while($row=mysqli_fetch_assoc($res)){
                      $idU=$row['name'];
                      $imageURL = '../entrosum/img/banner/'.$row['imgpath'];
                      echo " <tr class='info'>";?>
                <td><h4 style="text-align:center; overflow:hidden"><?php echo $idU;?></h4></td>
                <td><img class="img-responsive" src='<?php echo $imageURL;?>' style="height:150px; width:150px; margin:auto;"></td>
              </tr>
              <?php
      }
      }
      ?>
              </table>
            </div>
        <br>
      </div>
  </div>
</div>
        </body>
    </html>
