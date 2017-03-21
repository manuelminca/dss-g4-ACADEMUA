@include('master')
<body>
@section('title','New User')
<ul>
<form action="/users/create/">

{{ csrf_field() }}
{{ method_field('PUT') }}

  Name:<br>
  <input type="text" name="name"><br>
    Email:<br>
  <input type="text" name="email" <br><br>
      Password:<br>
  <input type="password" name="pass" <br><br>
      Repeat Password:<br>
  <input type="password" name="pass2" <br><br>
      Username:<br>
  <input type="text" name="username" <br><br>


  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>