@extends('master')
<body>
@section('title','Categories')

<ul>
<?php
foreach ($categories as $category) {
    echo "<li>";
    echo $category->name;
    echo " - <a href='/categories/delete/" .$category->id. "'>Delete</a> - ";
    //echo "<a href='/courses/modify/" .$course->id. "'>Modify</a>";
    echo "</li>";
}

//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>




</body>
</html>