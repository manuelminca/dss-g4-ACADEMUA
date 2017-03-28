@include('master')
<body>
@section('title','Modify Course')

<ul>



<form action="/courses/modified/{{$courses->id}}">
  Name of the course:<br>
  <input type="text" name="name"><br>
    Description:<br>
  <input type="text" name="description" <br><br>
  <input type="submit" value="Submit">
</form>

<?php
?>
</ul>
</body>
</html>