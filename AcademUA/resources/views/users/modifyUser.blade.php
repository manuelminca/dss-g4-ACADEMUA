@section('title','Edit User')
@section('courseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')



<div class="clearfix"></div>
</div>
<ul>
  <section class="full-section latest-courses-section no-slider">

 <div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">Modify User</h1>
                    <p class="description">
                        Insert the data you want to change. If you don't put data in the fields it is going to keep the actual data.
                        
                        
                    </p>
                    <div class="breadcrumb">
                       
                    </div>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix">
                 {{-- Error messages --}}
                    @if (count($errors) > 0)
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    @endif</div>
                    <!-- Maldita hora-->
            <section class="cursos full-section latest-courses-section no-slider">



<form action="/users/modified/" method="post" enctype="multipart/form-data" >
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
                                            @if (Auth::user()->checkTeacher())
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" name="description" placeholder="Description">
                                                </div>
                                            </div>
                                            @endif              
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
                                             <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input  type="file" name="image" id = "image">
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