@extends('master')
<body>

<ul>
<?php
foreach ($courses as $course) {
    echo "<li>" . $course->name . " - <a href='/users/delete/" .$course->id. "'>Delete</a></li>";
}

//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>




</body>
</html>