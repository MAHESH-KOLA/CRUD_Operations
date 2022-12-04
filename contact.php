<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-image: radial-gradient(circle, red, yellow, green);

}
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
  padding-left: 350px;
}
h2{
text-align: center;
}
.container .img1 {
  width: 100%;
  height: auto;
}
.container .img2 {
  width: 30px;
  height: 30px;
}

.container .btn {
  position: absolute;
  top: 85%;
  left: 550px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
<!--  background-color: black; -->
  float: bottom;
}
</style>
</head>
<body>

<h2>Click on Contacts icon⬇️ to redirect to the list of contacts📱️..</h2>
<p></p>

<div class="container">
  <img class="img1" src="mobile.jpeg" alt="Snow" style="width:100%">
  <button type="submit" class="btn"><a href="display.php" ><img class="img2" src="contact.jpeg" width="20px" height="15px"> </a></button>
</div>

</body>
</html>

