@extends('master')
<body>
@section('title','Home')

<ul>
<?php
foreach ($users as $user) {
    echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. "'>Delete</a></li>";
}

//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>
<h1>"Welcome to AcademUA"</h1>
<div class="col-sm-4">
    <h2>"this is a column"</h2>
</div>
<div class="col-sm-4">
    <h2>"this is a column"</h2>
</div>
<div class="col-sm-4">
    <h2>"this is a column"</h2>
</div>
</body>
</html>