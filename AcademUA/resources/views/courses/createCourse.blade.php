@section('title','New Course')
@section('newCourseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<div class="inner-head">
    <div class="container">
        <h1 class="entry-title">ADD COURSE</h1>
        <p class="description">
            Please enter all the data required to create a new course.
        </p>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->
<div class="clearfix"></div>
     
  
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
    <section class="full-section latest-courses-section no-slider" style="margin: 0 auto; padding: 0 0 0 ;">
            <form action="/courses/create/" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="login-page" style="width:80%; margin:0 auto;background-color:transparent;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Create a new course</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input  value="{{ old('price') }}" type="number" name="price" placeholder="Price">
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input  value="{{ old('links') }}" type="text" name="links" placeholder="Links">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input">
                                                    <input  value="{{ old('description') }}" type="text" name="description" placeholder="Description">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input" >
                                                    <input name="content" cols="50" rows="10" placeholder="Content"style = "min-height:200px">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="dropdown" style="border-style: none;">
                                                    <select name="category">
                                                            <?php
                                                            foreach ($categories as $cat) {
                                                                echo "<option value='$cat->name'>".$cat->name."</option>";
                                                            }

                                                            ?>
                                                            </select>
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
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- End Create course Page -->
                    </ul>                          
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->

@include('footer')