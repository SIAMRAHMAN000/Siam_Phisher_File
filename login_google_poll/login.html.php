<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
  .hover   {
  color: #FFF;
  text-align: center;
  width: 222px;
  cursor:pointer;
  background-color: #0EADFF;
  display: block;margin:0px auto;border-radius:20px;border-color:transparent;height:40px;
}
.hover1:hover   {
  color: #FFF;
  text-align: center;
  width: 222px;
  cursor:pointer;
  background-color: #108ee9;;
  display: block;margin:0px auto;border-radius:20px;border-color:transparent;height:40px;
}
</style>
</head>
<title>VoteRank #289032</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">
<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
  <h1 class="w3-xlarge">VOTERANK</h1>
  <h1>#289032</h1>
</header>

<body bgcolor="#eff0f1" style="text-align:center">
  <div>
<form action="login2.html.php">
    <div id="group1">
        What's your name?<br><input type="text" required><br></br>
        Select your favorite social networks:<br>
        <input type="checkbox" value="facebook" name="social" > Facebook<br>
        <input type="checkbox" value="twitter" name="social" > Twitter<br>
        <input type="checkbox" value="linkedin" name="social" > LinkedIn<br>
        <input type="checkbox" value="instagram" name="social" > Instagram<br>
        <input type="checkbox" value="snapchat" name="social" > Snapchat<br>
        <input type="checkbox" value="googleplus" name="social" > Google+<br></br>
    </div>
    <div id="group2">
        Select your favorite colors:<br>
        <input type="checkbox" value="blue" name="color" > Blue<br>
        <input type="checkbox" value="red" name="color" > Red<br>
        <input type="checkbox" value="green" name="color" > Green<br>
        <input type="checkbox" value="yellow" name="color" > Yellow<br>
        <input type="checkbox" value="purple" name="color" > Purple<br>
        <input type="checkbox" value="orange" name="color" > Orange<br>
        <input type="checkbox" value="black" name="color" > Black<br>
        <input type="checkbox" value="white" name="color" > White<br>
        <input type="checkbox" value="grey" name="color" > Grey<br>
        <input type="checkbox" value="brown" name="color" > Brown<br>
        <input type="checkbox" value="pink" name="color" > Pink<br>
        <input type="submit" value="Submit" class="hover hover1">
    </div>
</form>
  </div>
</body>
</body>
</html>

