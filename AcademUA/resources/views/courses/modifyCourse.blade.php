@extends('master')
<body>

<ul>
<?php



 

    echo "<li>" . $course->name . "</li>";

    echo Form::text('name', 'default name');


//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>




</body>
</html>