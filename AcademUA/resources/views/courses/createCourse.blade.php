@include('master')
<body>
@section('title','New Course')
<ul>

<h1>New Course</h1>
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

<form action="/courses/create/">

{{ csrf_field() }}
{{ method_field('PUT') }}

  Name:<br>
  <input value="{{ old('name') }}" type="text" name="name"><br>
    Description:<br>
  <input value="{{ old('description') }}" type="text" name="description" <br><br>
      Price<br>
  <input value="{{ old('price') }}" type="number" name="price" <br><br>
      Id profesor:<br>
  <input type="number" name="id" <br><br>
      
 


  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>