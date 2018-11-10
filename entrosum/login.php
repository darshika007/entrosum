<?php
session_start();
if(isset($_SESSION['adminlogin'])){
  header("location: index.php");
}
?>

<html>
<head>
<title> Admin Login</title>
<style type="text/css">
.overlay {
  width: 50%;
  height: 20%;
  left: 25%;
  top: 1%;
  position: absolute;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  padding-top: 3px;
  box-sizing: border-box;
}
#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(img/bg.jpeg) no-repeat center center fixed;
  background-size:cover ;
  -webkit-filter: blur(7px);
}

form {
  position: relative;
  width: 250px;
  margin: 0 auto;
  background: rgba(130,130,130,.3);
  padding: 20px 20px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
}

form input, form button {
  width: 248px;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Lucida Sans", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}
form input:focus { background-color: rgba(0,0,0,.4); }

form input.username {

  background-position: 220px 10px;
}

form input.password {

  background-position: 220px 10px
}


form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: #497694;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #04223a;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
</style>
</head>

<body>

<div id="bg"></div>
<div class= "overlay">

<div style="text-align: center">

<img src="" float="left" alt="the logo" width="500" height="200">
<br>
<form method="post" action="log.php">
<h2 style ="color:#04223a;"> Admin Login</h2>

<br>
<div>
<input type="text" placeholder="Username"  name="username" id="username" required>
<br>
</div>
<input type ="password" placeholder="Password" name="password" id="password" required>
<br>
<a href="log.php"><button type="submit"> Login</button></a>
</form>
<br>


</div>
</body>
</html>
