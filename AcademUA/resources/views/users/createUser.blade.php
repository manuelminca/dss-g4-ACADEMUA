@include('master')
<body>
@section('title','New User')
<ul>

<h1>New User</h1>
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

<form action="/users/create/">

{{ csrf_field() }}
{{ method_field('PUT') }}

  Name:<br>
  <input value="{{ old('name') }}" type="text" name="name"><br>
    Email:<br>
  <input value="{{ old('email') }}" type="text" name="email" <br><br>
      Password:<br>
  <input type="password" name="password" <br><br>
      Repeat Password:<br>
  <input type="password" name="password_confirmation" <br><br>
      Username:<br>
  <input value="{{ old('username') }}" type="text" name="username" <br><br>


  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>