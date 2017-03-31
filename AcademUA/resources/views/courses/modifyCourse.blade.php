@include('master')
<body>
@section('title','Modify Course')

<ul>
<h1>Modify Course</h1>
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif


<form action="/courses/modified/{{$courses->id}}">
  Name of the course:<br>
  <input value="{{ old('name') }}" type="text" name="name"><br>
    Description:<br>
  <input value="{{ old('description') }}" type="text" name="description" <br><br>
  <input type="submit" value="Submit">
</form>

<?php
?>
</ul>
</body>
</html>