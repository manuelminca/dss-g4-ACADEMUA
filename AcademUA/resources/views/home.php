<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
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