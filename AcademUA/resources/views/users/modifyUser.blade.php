@extends('master')
<body>
<ul>
<form action="/users/modified/2/">
  Name:<br>
  <input type="text" name="name"><br>
    Email:<br>
  <input type="text" name="email" <br><br>
      Password:<br>
  <input type="text" name="pass" <br><br>
      Repeat Password:<br>
  <input type="text" name="pass2" <br><br>
  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>