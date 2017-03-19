@extends('master')
<body>
<ul>

<form action="/modifiedCourse.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>



<?php

//$name = $_POST['name'];

//echo $name;


//echo "<li>" . $courses->name . "</li>";

// echo Form::text('name', 'default name');


//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>
</body>
</html>