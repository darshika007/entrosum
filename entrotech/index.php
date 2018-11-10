
<?php
include('connect.php');
 ?><!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
  <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="../entrotech/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">


  <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
  <!--- Owl Carousel CSS --->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Owl Carousel JS --->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <title>Entrotech Summit</title>
  <style>
    #mapid {
    height: 500px;
    width: 100%;
    opacity:0.9;

  }

  </style>

      <!-- <script type="text/javascript"> -->
      <script>

      var name;
      var email;
      var contact;
      var org;
      var feed;
      var query;
      var type;
      var Data;

        function Register() {
        name=document.getElementById("orangeForm-name").value;
        email=document.getElementById("orangeForm-email").value;
        contact=document.getElementById("orangeForm-contact").value;
        org=document.getElementById("orangeForm-org").value;

        if (name == '' || email == '' || org == '' || contact == '') {
          document.getElementById("Registerdiv").innerHTML = "Fill all fields!";
        }else {
          Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact;
          alert(Data);
          rloadDoc();
          }
        }

        function rloadDoc() {
          alert(Data);
          var rxhttp = new XMLHttpRequest();
          rxhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("Registerdiv").innerHTML = this.responseText;
            }
          };
          rxhttp.open("POST", "register.php", true);
          rxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          rxhttp.send(Data);
          //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
          }


          function Feedback() {
          name=document.getElementById("fName").value;
          email=document.getElementById("fEmail").value;
          contact=document.getElementById("fContact").value;
          org=document.getElementById("fOrg").value;
          feed=document.getElementById("fFeed").value;

          if (name == '' || email == '' || org == '' || contact == '' || feed == '') {
            alert("Please Fill All Fields");
          }else {
            Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact+"&feed="+feed;
            alert(Data);
            floadDoc();
          }
        }

          function floadDoc() {
            alert(Data);
            var fxhttp = new XMLHttpRequest();
            fxhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("feedbackdiv").innerHTML = this.responseText;
              }
            };
            fxhttp.open("POST", "feedback.php", true);
            fxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            fxhttp.send(Data);
          //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
          }


          function Queries() {
          name=document.getElementById("defaultRegisterFormFirstName").value;
          email=document.getElementById("defaultRegisterFormemail").value;
          contact=document.getElementById("defaultRegisterFormContact").value;
          org=document.getElementById("defaultRegisterFormOrg").value;
          query=document.getElementById("defaulttextarea").value;
          type=document.getElementById("defaultRegisterFormType").value;


          if (name == '' || email == '' || org == '' || contact == '' || query == '' || type == '') {
            alert("Please Fill All Fields");
          }else {
            Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact+"&query="+query+"&type="+type;
            alert(Data);
            qloadDoc();
          }
        }

          function qloadDoc() {
            alert(Data);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("querydiv").innerHTML = this.responseText;
              }
            };
            alert(Data);
            xhttp.open("POST", "query.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(Data);
          //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || query == "+query+"");
          }

  //---timer start
          // Set the date we're counting down to
            var countDownDate = new Date("Nov 10, 2018 11:40:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days + "d ";
            document.getElementById("hours").innerHTML = hours + "h ";
            document.getElementById("minutes").innerHTML = minutes + "m ";
            document.getElementById("seconds").innerHTML = seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
            }
          }, 1000);
// timer end
//owl start
  //owl end
      </script>

</head>

<body>


  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Entrotech Summit</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sevices
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="Overview.html">1 Overview</a>
                    <a class="dropdown-item" href="Coverage.html">2 Coverage</a>
                    <a class="dropdown-item" href="Compliance.html">3 Compliance</a>
                    <a class="dropdown-item" href="AttackerResScore.html">4 Attacker Resistance Score</a>
                  </div>
                </li>-->
          <li class="nav-item">
            <a class="nav-link" href="agenda.php" id="">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#speakers">Speakers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Sponsors">Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Partners">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-toggle="modal" data-target="#modalRegisterForm" href="#register">Registration</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--start modal -->
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header pb-4 bg-dark text-center">
          <h4 class="modal-title w-100 text-white font-weight-bold">Registration!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div id="Registerdiv">

          </div>
          <div class="md-form mb-5">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          </div>

          <div class="md-form mb-5">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="email" id="orangeForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>

          <div class="md-form mb-5">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="orangeForm-org" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-org">Your Organization</label>
          </div>

          <div class="md-form mb-5">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="number" pattern=".{10,10}" id="orangeForm-contact" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-contact">Contact</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-outline-success" onclick="Register();">Resgister</button>
        </div>
      </div>
    </div>
  </div>
  <!--end modal -->
  <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php
          $select="SELECT * FROM fusion where type='banner'";
          $res=mysqli_query($db,$select) or die(mysqli_error($db));
          if(mysqli_num_rows($res)>0){
            $flag=1;
            while($row=mysqli_fetch_assoc($res)){
              $idU=$row['id'];
              $imageURL = '../entrosum/img/banner/'.$row['imgpath'];
              if ($flag) { ?>

          <div class="carousel-item img-responsive active" style="background-image: url('<?php echo $imageURL;?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hello</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div>
        <?php  }else { ?>
          <div class="carousel-item img-responsive" style="background-image: url('<?php echo $imageURL;?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hello</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div>      <?php } $flag=0; ?>



          <?php } }?>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
<?php
$queryz="select * from fusion where type='aboutbrief'";
$resultz=mysqli_query($db,$queryz);
$array=array();
$count=0;
while ($rowz=mysqli_fetch_array($resultz)) {
  $prearray=array('img' => "../entrosum/img/banner/".$rowz['imgpath'] , 'abt'=> $rowz['name'] );
//  $array[$count][]=$prearray;
  array_push($array, $prearray);
  $count++;
}
 ?>
  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
      <!--  <img class=" card-img intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt=""> -->
        <div class=" intro-img w3-display-container w3-text-white">
            <img class="img-fluid mb-3 mb-lg-0 rounded" src="images/c1.jpeg" alt="">
            <?php
              switch ($count) {
                case '1': ?>
                  <div class="w3-card-4 m-1 w3-large w3-display-middle w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?></p> </div>
              <?php break;
                case '2': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-right w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-middle w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <?php   break;
                case '3': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-topright w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-right w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomright w3-padding" style="width:25%;"><img src="<?php echo $array[2]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[2]['abt']; ?> </p> </div>
                <?php  break;
                case '4': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-topright w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-topmiddle w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomright w3-padding" style="width:25%;"><img src="<?php echo $array[2]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[2]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottommiddle w3-padding" style="width:25%;"><img src="<?php echo $array[3]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[3]['abt']; ?> </p> </div>
                <?php  break;
                case '5': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-topright w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"> <?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-topmiddle w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-right w3-padding" style="width:25%;"><img src="<?php echo $array[2]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[2]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomright w3-padding" style="width:25%;"><img src="<?php echo $array[3]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[3]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottommiddle w3-padding" style="width:25%;"><img src="<?php echo $array[4]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[4]['abt']; ?> </p> </div>
                <?php  break;
                case '6': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-topright w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-topmiddle w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-right w3-padding" style="width:25%;"><img src="<?php echo $array[2]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[2]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-middle w3-padding" style="width:25%;"><img src="<?php echo $array[3]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[3]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomright w3-padding" style="width:25%;"><img src="<?php echo $array[4]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[4]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottommiddle w3-padding" style="width:25%;"><img src="<?php echo $array[5]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[5]['abt']; ?> </p> </div>
                <?php  break;
                case '7': ?>
                <div class="w3-card-4 m-1 w3-large w3-display-topright w3-padding" style="width:25%;"><img src="<?php echo $array[0]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[0]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-topmiddle w3-padding" style="width:25%;"><img src="<?php echo $array[1]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[1]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-right w3-padding" style="width:25%;"><img src="<?php echo $array[2]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[2]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-middle w3-padding" style="width:25%;"><img src="<?php echo $array[3]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[3]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomright w3-padding" style="width:25%;"><img src="<?php echo $array[4]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[4]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottommiddle w3-padding" style="width:25%;"><img src="<?php echo $array[5]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[5]['abt']; ?> </p> </div>
                <div class="w3-card-4 m-1 w3-large w3-display-bottomleft w3-padding" style="width:25%;"><img src="<?php echo $array[6]['img']; ?>" style="max-height:6vw" class="rounded-circle img-responsive" alt="Cinque Terre"> <p style="font-size:1.1vw;"><?php echo $array[6]['abt']; ?> </p> </div>
                <?php  break;
                default:
                  // code...
                  break;
              }
             ?>
        </div>
        <div class="img-fluid intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">About</span>
            <span class="section-heading-lower">The Summit</span>
          </h2>
          <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="time">
  <p class="h4 mb-4" align="center">Days Left</p>
  <div id="countup">
  <div class="part">
  <div id="d" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
  fill-opacity="0"></path>
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
  fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 6.90956;"></path>
  </svg>
  <div class="progressbar-text" id="days" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
  class="number">211</span><span class="label">DAYS</span></div>
  </div>
  </div>
  <div class="part">
  <div id="h" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
  fill-opacity="0"></path>
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
  fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 298.493;"></path>
  </svg>
  <div class="progressbar-text" id="hours" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
  class="number">0</span><span class="label">HOURS</span></div>
  </div>
  </div>
  <div class="part">
  <div id="m" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
  fill-opacity="0"></path>
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
  fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 29.8493;"></path>
  </svg>
  <div class="progressbar-text" id="minutes" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
  class="number">54</span><span class="label">MINS</span></div>
  </div>
  </div>
  <div class="part">
  <div id="s" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
  fill-opacity="0"></path>
  <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
  fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 119.397;"></path>
  </svg>
  <div class="progressbar-text" id="seconds" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
  class="number">36</span><span class="label">SECS</span></div>
  </div>
  </div>
  </div>
  </section>

  <br>
  <?php
    $query="select (select count(*) from speakers)as speak,(select count(*) from register)reg,(select count(*) from agenda)as agenda,(select count(*) from fusion where type='sponsors') as spon,(select count(*) from fusion where type='partners') as partner ";
    //$query="select (select count(*) from speakers)as speak,(select count(*) from agenda)as agenda,(select count(*) from fusion where type='sponsers') as spon,(select count(*) from fusion where type='partners') as partner ";
    $results=mysqli_query($db,$query) or die(mysqli_error($db));
    $results=mysqli_fetch_array($results);
   ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <div class="container">
    <br>

    <!--<h1 class="my-4" align="center">Solutions</h1>-->
    <div class="row">
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Speakers</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['speak'] ?></p>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Work Shops</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['agenda'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Registered</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['reg'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Companies</h4>
          <div class="card-body">
            <p class="card-text"><?php// echo $results[''] ?>Check on this one</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center" href="#Sponsors">Sponsors</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['spon'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Partners</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['partner'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-3 mb-3">
        <div class="count">
          <h4 class="card-header" align="center">Events</h4>
          <div class="card-body">
            <p class="card-text"><?php echo $results['agenda'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="speakers">
    <div class="container">

      <h1 class="my-4" align="center">Speakers</h1>
      <div class="row justify-content-center">

        <!-- <div class="card h-100"> -->

        <div class="card-deck ">
          <?php
          $select="SELECT * FROM speakers";
          $res=mysqli_query($db,$select);
          if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_assoc($res)){
                $imageURL = '../entrosum/img/speakers/'.$row['imgpath'];
                $idURL = $row['id'];
                $nameURL = $row['name'];
                $desigURL = $row['desig'];
                $companyURL = $row['company'];
                $linkURL = $row['link'];?>
          <div class="card mb-4" style="height:500px;width:200px;">
            <a href="<?php echo $linkURL;?>"><img class="card-img-top img-responsive rounded-circle" src="<?php echo $imageURL;?>" alt="Card image cap"></a>
            <div class="card-body">
              <h4 class="card-title"><?php echo $nameURL;?></h4>
              <p class="card-text"><?php echo $desigURL;?>  </p>
              <p class="card-text">  <?php echo $companyURL;?></p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        <?php } } ?>        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="Sponsors">
    <h1 class="my-4" align="center">Sponsors</h1>
    <div class="container mt-3">
      <div class="row justify-content-center">
        <?php
        $select="SELECT * FROM fusion where type='sponsors'";
        $res=mysqli_query($db,$select);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
              $imageURL = '../entrosum/img/sponsors/'.$row['imgpath'];
              $linkURL=$row['link'];?>
        <div class="col-6 col-md-2 mb-3"><a href="<?php echo $linkURL;?>"><img class="img-fluid" src="<?php echo $imageURL;?>" style="height:100px;width:100px;" alt=""></a></div><?php }}?>

      </div>
    </div>

  </section>
  <section id="Partners">
    <h1 class="my-4" align="center">Partners</h1>
    <div class="container mt-3">

      <div class="row justify-content-center">
        <?php
        $select="SELECT * FROM fusion where type='partners'";
        $res=mysqli_query($db,$select);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
              $imageURL = '../entrosum/img/partners/'.$row['imgpath'];
              $linkURL=$row['link'];
                $nameURL=$row['name'];
                  $contactURL=$row['contact'];
                    $emailURL=$row['email'];
              echo " <tr class='info'>";?>
        <div class="col-6 col-md-2 mb-3"><a href="<?php echo $linkURL;?>"><img  class="img-fluid" src="<?php echo $imageURL;?>" style="height:100px;width:100px;" alt=""></a></div>
      <?php } }?>
      </div>
    </div>
    </div>

  </section>

<!--
<div class="row">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">

  </div>
</div>
 -->
 <section class="page-section clearfix">
   <div class="container">
     <div class="feedback">

       <!-- Default form query -->

       <p class="h4 mb-4">How could we be better?</p>

       <div id="feedbackdiv">

       </div>

       <div class="form-row mb-4">
         <div class="col">
           <!-- First name -->
           <input type="text" id="fName"class="form-control" placeholder="Name">
         </div>
         <div class="col">
           <!-- Last name -->
           <input type="email" id="fEmail" class="form-control" placeholder="Email">
         </div>
       </div>
       <div class="form-row mb-4">
         <div class="col">
           <!-- First name -->
           <input type="number" pattern=".{10,10}" id="fContact" required class="form-control" placeholder="Contact">
         </div>
         <div class="col">
           <!-- First name -->
           <input type="text" id="fOrg" class="form-control" placeholder="Organization">
         </div>
       </div>
       <div class="form-row mb-4">
         <textarea id="fFeed" rows="8" cols="40" class="form-control mb-4" placeholder="Feedback"></textarea>
       </div>

       <button class="btn btn-info my-4 btn-block" onclick="Feedback()">Ask for query</button>

     </div>


   </div>
 </div>
</section>

  <section id="query" style="background-color: black">

    <div class="container">


      <!-- Default form query -->
      <div class="text-center p-5">

        <p class="h4 mb-4">Any Queries ?</p>
        <div id="querydiv">

        </div>
        <div class="form-row mb-4">
          <div class="col">
            <!-- name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <!-- email -->
            <input type="email" id="defaultRegisterFormemail" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="form-row mb-4">
          <div class="col">
            <!-- number -->
            <input type="email" id="defaultRegisterFormContact" class="form-control" placeholder="Contact">
          </div>
          <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormType" class="form-control" placeholder="Type">
          </div>
        </div>
        <div class="form-row mb-4">
          <div class="col">
            <!-- First name -->
            <input type="select" id="defaultRegisterFormOrg" class="form-control" placeholder="Organisation">
          </div>
          <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Other">
          </div>
        </div>
        <textarea id="defaulttextarea" class="form-control mb-4" placeholder="Queries"></textarea>
        <button class="btn btn-info my-4 btn-block" onclick="Queries();">Ask for query</button>
      </div>
    </div>
  </section>
  <!-- <section id="time">
    <p class="h4 mb-4" align="center">Days Left</p>
    <div id="countup">
      <div class="part">
        <div id="d" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
              fill-opacity="0"></path>
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
              fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 6.90956;"></path>
          </svg>
          <div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
              class="number">211</span><span class="label">DAYS</span></div>
        </div>
      </div>
      <div class="part">
        <div id="h" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
              fill-opacity="0"></path>
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
              fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 298.493;"></path>
          </svg>
          <div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
              class="number">0</span><span class="label">HOURS</span></div>
        </div>
      </div>
      <div class="part">
        <div id="m" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
              fill-opacity="0"></path>
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
              fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 29.8493;"></path>
          </svg>
          <div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
              class="number">54</span><span class="label">MINS</span></div>
        </div>
      </div>
      <div class="part">
        <div id="s" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block; width: 100%;">
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#ddd" stroke-width="5"
              fill-opacity="0"></path>
            <path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#fd7021" stroke-width="5"
              fill-opacity="0" style="stroke-dasharray: 298.493, 298.493; stroke-dashoffset: 119.397;"></path>
          </svg>
          <div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(253, 112, 33);"><span
              class="number">36</span><span class="label">SECS</span></div>
        </div>
      </div>
    </div>
  </section>-->





  <div class="container">
    <h1 class="my-4" align="center">Venue</h1>
  </div>

  <div id="mapid">



  </div>
  <!--<button onclick="getLocation()">Try It</button>-->

  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>
  <script>

    //var x = document.getElementById("demo");

    var mymap = L.map('mapid').setView([12.973112, 77.620414], 100);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}',
      {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoieGFpb2RyZTA5NiIsImEiOiJjam5wcG9tdHkwMXZqM2xvZWxvbXIzazVnIn0.Mz_b1iR6Q9t7aksAv_C_Yw'
      }).addTo(mymap);

    var marker = L.marker([12.973112, 77.620414]).addTo(mymap);
    marker.bindPopup("1 MG mall ").openPopup();

        // var theMarker = {}
        // function onMapClick(e)
        // {
        //   lat = e.latlng.lat;
        //   lon = e.latlng.lng;
        //   if (theMarker != undefined)
        //   {
        //       mymap.removeLayer(theMarker);
        //   };
        //   theMarker = L.marker(e.latlng).addTo(mymap);
        //   theMarker.bindPopup("Your restaurant").openPopup();
        //
        //   document.getElementById("latitude").value = lat;
        //   document.getElementById("longitude").value = lon;
        // }
        //
        // mymap.on('click', onMapClick);

  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <script>
    $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:true,
         navText: true,
         rewindNav:true,
         autoplay:true,
         autoplayTimeout:1500,
         autoHeight:true,
         dots:true,
         autoplayHoverPause:true,
         center: false,
         rtl:false,
         responsive:{
             0:{
                 items:1,
                 nav:true,
                 loop:true,
                 navText:true
             },
             600:{
                 items:2,
                 nav:true,
                 loop:true,
                 navText:true
             },
             1000:{
                 items:6,
                 nav:true,
         navText: true,
         rewindNav:true,
         loop:true
             }
         }
    });
</script>
</body>

</html>
