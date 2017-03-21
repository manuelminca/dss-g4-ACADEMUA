@include('master')
<body>
@section('title','Modify Course')

<ul>



<form action="/courses/modified/2/">
  Name of the course:<br>
  <input type="text" name="name"><br>
    Description:<br>
  <input type="text" name="description" <br><br>
  <input type="submit" value="Submit">
</form>

<?php

//$name = isset($_POST['name'])? $_POST['name']: '';

//echo $name;


//echo "<li>" . $courses->name . "</li>";

// echo Form::text('name', 'default name');


//echo "<li>" . $user->name . " - <a href='/users/delete/" .$user->id. ">Delete</a></li>";
?>
</ul>
</body>
</html>