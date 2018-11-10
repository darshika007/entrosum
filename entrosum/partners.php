<?php

include("connect.php");
include('sessions_admin.php');
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
         $target = "../entrosum/img/partners/".basename($_FILES["fileimg"]["name"]);
         $fileimg=$_FILES['fileimg']['name'];
         $error = $_FILES['fileimg']['error'];
         $imgtype=$_FILES['fileimg']['type'];
         $ext= GetImageExtension($imgtype);
         $name = mysqli_real_escape_string($db, $_POST['name']);
         $contact = mysqli_real_escape_string($db, $_POST['contact']);
         $email = mysqli_real_escape_string($db, $_POST['email']);
         $link = mysqli_real_escape_string($db, $_POST['link']);
         $sql = "insert into fusion(imgpath,type,link,name,contact,email) values ('$fileimg','partners','$link','$name','$contact','$email')";
         mysqli_query($db,$sql);

       if (move_uploaded_file($_FILES['fileimg']['tmp_name'],$target)) {

         $msg = "Item was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='partners.php';</script>";

       }
       else{

         $msg = "Item to upload Image";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='partners.php';</script>";

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
        <h1><i class="fas fa-tachometer-alt"></i>PARTNERS</h1>
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
        <form action="partners.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="banner">Banner:</label>
            <input type="file" name="fileimg" id="fileimg">
          </div>
            <div class="form-group">
              <input type="text" name="name" placeholder="Name"><br>
              <input type="digit" pattern="[6789][0-9]{9}" name="contact" placeholder="Contact"><br>
              <input type="email" name="email" placeholder="Email"><br>
              <input type="text" name="link" placeholder="Link"><br>
            </div>
          <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
        </form>
        <br>
        <div class="table-responsive table-bordered table-hover table-striped">
          <table class="table">
            <?php
            $select="SELECT * FROM fusion where type='partners'";
            $res=mysqli_query($db,$select);
            if(mysqli_num_rows($res)>0){
              echo "<tr class='success'>
                    <th>Partner Image</th>
                    <th>Link</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>";
                while($row=mysqli_fetch_assoc($res)){
                  $imageURL = '../entrosum/img/partners/'.$row['imgpath'];
                  $linkURL=$row['link'];
                    $nameURL=$row['name'];
                      $contactURL=$row['contact'];
                        $emailURL=$row['email'];
                  echo " <tr class='info'>";?>
            <td><img class="img-responsive" src='<?php echo $imageURL;?>' style="height:100px; width:100px; margin:auto;"></td>
            <td><h5 style="text-align:center; overflow:hidden"><?php echo $linkURL;?></h5></td>
            <td><h5 style="text-align:center; overflow:hidden"><?php echo $nameURL;?></h5></td>
            <td><h5 style="text-align:center; overflow:hidden"><?php echo $contactURL;?></h5></td>
            <td><h5 style="text-align:center; overflow:hidden"><?php echo $emailURL;?></h5></td>
            <td><a href="delpart.php?id=<?php echo $row['id']?>">Delete File </a></td>
            <td><a href="editpart.php?edit=<?php echo $row['id']?>">Edit File</a></td>
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
