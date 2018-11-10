<?php
include("connect.php");
include('sessions_admin.php');

if (isset($_POST['btn-upload'])) {
    $topic = mysqli_real_escape_string($db, $_POST['topic']);
    $stime = mysqli_real_escape_string($db, $_POST['stime']);
    $etime = mysqli_real_escape_string($db, $_POST['etime']);
    $people1 = mysqli_real_escape_string($db, $_POST['people1']);
    $mc = mysqli_real_escape_string($db, $_POST['mc']);
    $venue = mysqli_real_escape_string($db, $_POST['venue']);




 $sql = "insert into agenda (spkid,topic,stime,etime,mc,vid) values ('$people1','$topic','$stime','$etime','$mc','$venue')";
  $res=mysqli_query($db, $sql);
  if(!empty($_POST['people2'])){
      $people2=mysqli_real_escape_string($db, $_POST['people2']);
  $sql = "insert into agenda (spkid,topic,stime,etime,mc,vid) values ('$people2','$topic','$stime','$etime','$mc','$venue')";
   $res=mysqli_query($db, $sql);
 }
   if(!empty($_POST['people3'])){
       $people3 = mysqli_real_escape_string($db, $_POST['people3']);
   $sql = "insert into agenda (spkid,topic,stime,etime,mc,vid) values ('$people3','$topic','$stime','$etime','$mc','$venue')";
    $res=mysqli_query($db, $sql);
  }
  if(!empty($_POST['people4'])){
    $people4=mysqli_real_escape_string($db, $_POST['people4']);
    $sql = "insert into agenda (spkid,topic,stime,etime,mc,vid) values ('$people4','$topic','$stime','$etime','$mc','$venue')";
     $res=mysqli_query($db, $sql);
   }
  if ($res) {

    $msg = "Agenda uploaded successfully";
    echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

  }
  else{

    $msg = "Failed to upload Agenda";
    echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

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
            <a class="nav-link" href="sponsors.php"> <i class="fas fa-money-bill-alt"></i>Sponsors</a>
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
      <center>  <form method="post" action="agenda.php" role="form" style="border:1px solid black">
      <div id="people-container">
        <input type="text" name="topic" placeholder="Topic">
        <input type="time" name="stime" placeholder="Start time">
        <input type="time" name="etime" placeholder="End time">
        <input type="text" name="mc" placeholder="Moderator, if any">
        <select name="venue" placeholder="Venue">
          <?php $select="SELECT * FROM venue";
              $res=mysqli_query($db,$select);
              if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_assoc($res)){?>
            <option name="venue" value="<?php echo $row['vid'];?>"><?php echo $row['audi'];}?><option><?php }?>
        </select>
          <h5>Speaker 1:</h5>
              <select name="people1" placeholder="Speaker Name">
                <?php $select="SELECT * FROM speakers";
                    $res=mysqli_query($db,$select);
                    if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){?>
                  <option name="people1" value="<?php echo $row['id'];?>"><?php echo $row['name'];}?><option><?php }?>
              </select>
      </div>

      <a href="javascript:;" id="add-new-person">Add new speaker</a>

      <p>
          <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
      </p>
  </form></center>


        <br>
        <div class="table-responsive table-bordered">
          <?php
          # connect to mysql server
          # and select the database, on whic
          # Query the data from database.
          $query  = 'SELECT venue.vid,venue.audi,agenda.aid,agenda.spkid,speakers.id,speakers.name,agenda.topic,speakers.desig,speakers.company,agenda.stime,agenda.etime,agenda.mc FROM agenda,speakers,venue where agenda.spkid=speakers.id and agenda.vid=venue.vid order by agenda.stime,agenda.topic';
          $result = mysqli_query($db,$query);
          # $arr is array which will be help ful during
          # printing
          $arr = array();

          # Intialize the array, which will
          # store the fetched data.
          $spk = array();
          $top = array();
          $name = array();
          $desig = array();
          $comp = array();
          $start = array();
          $end = array();
          $mc = array();
          $id = array();
          $vid = array();




          while($row = mysqli_fetch_assoc($result)) {
              array_push($id,$row['aid']);
              array_push($top, $row['topic']);
              array_push($spk, $row['spkid']);
              array_push($name, $row['name']);
              array_push($desig, $row['desig']);
              array_push($comp, $row['company']);
              array_push($start,$row['stime']);
              array_push($end,$row['etime']);
              array_push($mc,$row['mc']);
              array_push($vid,$row['audi']);


              if (!isset($arr[$row['topic']])) {
                  $arr[$row['topic']]['rowspan'] = 0;
              }
              $arr[$row['topic']]['printed'] = 'no';
              $arr[$row['topic']]['rowspan'] += 1;

          }

          echo "<table cellspacing='5' cellpadding='5'>
                  <tr>
                      <th>Topic</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Moderator(if any)</th>
                      <th>Venue</th>
                      <th>Spk ID</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Company</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>";


          for($i=0; $i < sizeof($spk); $i++){

              $topics = $top[$i];
              echo "<tr>";

              # If this row is not printed then print.
              # and make the printed value to "yes", so that
              # next time it will not printed.
              if ($arr[$topics]['printed'] == 'no') {
                  echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$topics."</td>";
                  echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$start[$i]."</td>";
                  echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$end[$i]."</td>";
                  if(!empty($mc[$i])){
                  echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$mc[$i]."</td>";
                } else {
                  echo "<td rowspan='".$arr[$topics]['rowspan']."'>-No-</td>";
                }
                echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$vid[$i]."</td>";
                  $arr[$topics]['printed'] = 'yes';
              }
              echo "<td>".$spk[$i]."</td>";
              echo "<td>".$name[$i]."</td>";
              echo "<td>".$desig[$i]."</td>";
              echo "<td>".$comp[$i]."</td>";
              echo "<td>".$id[$i]."</td>";?>
              <td><a href="editagenda.php?edit=<?php echo $id[$i];?>">Edit</a></td>
              <td><a href="deleteagenda.php?id=<?php echo $id[$i];?>">Delete</a></td>
              <?php
              echo "</tr>";
          }

          echo "</table>";
          ?>

        </div>
      </div>
  </div>
</div>
<script>
let i = 2;
document.getElementById('add-new-person').onclick = function () {
    let template = `
        <h5>Speaker ${i}:</h5>
        <p>
        <select name="people${i}" placeholder="Speaker Name">
          <?php $select="SELECT * FROM speakers";
              $res=mysqli_query($db,$select);
              if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_assoc($res)){?>
            <option name="people${i}" value="<?php echo $row['id'];?>"><?php echo $row['name'];}?><option><?php }?>
        </select>`;

    let container = document.getElementById('people-container');
    let div = document.createElement('div');
    div.innerHTML = template;
    container.appendChild(div);

    i++;
}
</script>
        </body>
    </html>
