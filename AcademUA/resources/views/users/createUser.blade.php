@section('title','New User')
@section('newUserCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

            <div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">Register</h1>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->

            <div class="clearfix"></div>


<div style="padding-top:200px">
</div>
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

        Teacher? (y,n):<br>
  <input value="{{ old('professor') }}" type="text" name="professor" <br><br>



  <input type="submit" value="Submit">
</form>
<?php
?>
</ul>
</body>
</html>