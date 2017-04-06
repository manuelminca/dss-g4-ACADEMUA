@section('title','Modify Course')
@section('newCourseCurrent','current_page_item')
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
            <section class="full-section latest-courses-section no-slider">

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
      Content:<br>
  <input value="{{ old('content') }}" type="text" name="content" <br><br>
      Links:<br>
  <input value="{{ old('links') }}" type="text" name="links" <br><br>
      Price: (If you do not want to change the price, enter the old price manually)<br>
  <input value="{{ old('price') }}" type="number" name="price" <br><br>
  <input type="submit" value="Submit">
</form>

<?php
?>
</ul>
                                                
        
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')