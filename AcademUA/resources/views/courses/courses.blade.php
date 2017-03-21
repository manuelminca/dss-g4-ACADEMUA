@include('master')
<body>
@section('title','Courses')

<ul>
<?php
foreach ($courses as $course) {
    echo "<li>";
    echo $course->name . " Description: " . $course->description;
    echo " - <a href='/courses/delete/" .$course->id. "'>Delete</a> - ";
    echo "<a href='/courses/modify/" .$course->id. "'>Modify</a>";
    echo "</li>";
}

//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>




</body>
</html>