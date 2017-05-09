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
            <section class="full-section latest-courses-section no-slider">




<h1>New User</h1>
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif


<!--
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
-->
<form action="/users/create/" >
            <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Register</span>
                                        
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
                                                    <input value="{{ old('email') }}" type="text" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="password" name="password_confirmation" placeholder = "Repeat password">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input" >
                                                    <input value="{{ old('username') }}" type="text" name="username" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input" >
                                                    <input  type="text" name="professor" placeholder="Professor 1">
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                            
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end modify course form -->

                            </form>
                        
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- End modify Page -->    



</section><!-- End Courses Section -->
@include('footer')