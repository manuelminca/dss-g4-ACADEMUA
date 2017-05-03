@section('title','Edit User')
@section('courseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')



<div class="clearfix"></div>
</div>
<ul>
  <section class="full-section latest-courses-section no-slider">


<!--
<form action="/users/modified/{{$user->id}}">
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

  <input type="submit" value="Submit">
</form>

-->

<form action="/users/modified/" >
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Modify User</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input value="{{ old('name') }}" type="text" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input value="{{ old('email') }}" type="text" name="email"  placeholder="Email">
                                                </div>
                                            </div>                  
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input" >
                                                    <input type="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input" >
                                                    <input type="password" name="password_confirmation" placeholder="Password confirmation">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                            
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end login form -->
                            </form>
<?php
?>
</ul>
</section>
@include('footer')