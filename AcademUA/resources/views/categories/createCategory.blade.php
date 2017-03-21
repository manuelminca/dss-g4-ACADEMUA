@include('master')
<body>
@section('title','New Category')
<ul>
<form action="{{action('CategoriesController@createCategory')}}" method="POST">
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