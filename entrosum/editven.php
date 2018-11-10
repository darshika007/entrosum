<?php
	include_once('connect.php');
include('sessions_admin.php');
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query($db,"SELECT * FROM venue where vid='$id'");
		$row= mysqli_fetch_assoc($res);
}
if( isset($_POST['insert']))
{
    $id=$_POST['id'];
    $newVenue = $_POST['$newVenue'];

    $sql = "UPDATE venue SET audi='$newVenue' WHERE vid='$id'";
    $res 	 = mysqli_query($db,$sql) or die("Could not update");
    if ($res) {

      $msg = "Venue updated successfully";
      echo "<script type='text/javascript'>alert('$msg');window.location.href='venue.php';</script>";

    }
    else{

      $msg = "Failed to update Venue";
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
        <h1><i class="fas fa-tachometer-alt"></i>SPEAKERS</h1>
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
            <a class="nav-link" href="#"> <i class="fas fa-book"></i>About & Brief</a>
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
            <a class="nav-link" href="#"> <i class="fas fa-comment"></i>Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"> <i class="fas fa-power-off"></i>Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10">
      <div class="container">
        <form  action="editven.php" enctype="multipart/form-data" method="post">


            <div class="form-group">
								<input type="text" name="$newVenue" value='<?php echo $row['audi'] ?>'><br>
                <input type="hidden" name="id" value="<?php echo $row['vid']; ?>">
            </div>

            <button class="btn btn-success" name="insert" >UPDATE</button>
        </form>
      </div>
  </div>
</div>
  </body>
    </html>
