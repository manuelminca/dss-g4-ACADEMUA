@include('master')
<body>
@section('title','Courses')

<ul>
<div class="container">
<?php
foreach ($courses as $course) {
    echo "<div class='col-md-4'>";

    echo "<div class='text-center courseTitle'>";
    echo $course->name;
    echo "</div>";

    echo $course->description;

    echo "<div class='text-center'>";
    echo " - <a href='/courses/delete/" .$course->id. "'>Delete</a> - ";
    echo "<a class='btn' href='/courses/modify/" .$course->id. "'>Modify</a>";
    echo "</div>";

    echo "</div>";
}

//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>
</div>
<div class="text-center">
    {{$courses->links()}}
</div>
<button class="btn-primary">Hola</button>
</body>
</html>