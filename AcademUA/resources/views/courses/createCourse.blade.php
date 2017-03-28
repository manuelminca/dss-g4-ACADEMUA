@include('master')
<body>
@section('title','New Course')
<ul>
<form action="/courses/create/">

{{ csrf_field() }}
{{ method_field('PUT') }}

  Name:<br>
  <input type="text" name="name"><br>
    Description:<br>
  <input type="text" name="description" <br><br>
      Price<br>
  <input type="number" name="price" <br><br>
      Id profesor:<br>
  <input type="number" name="id" <br><br>
      
 


  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>