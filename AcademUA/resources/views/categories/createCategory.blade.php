@include('master')
<body>
@section('title','New Category')
<ul>
<form action="/categories/create/">
{{ csrf_field() }}
{{ method_field('PUT') }}
  Name:<br>
  <input type="text" name="name"><br>


  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>