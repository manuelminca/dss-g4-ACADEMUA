@section('title','New Course')
@section('newCourseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<<<<<<< HEAD
=======


>>>>>>> Mario
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
      Content:<br>
      <textarea name="content" cols="50" rows="10"></textarea><br><br>

      Links<br>
  <input value="{{ old('links') }}" type="text" name="links" <br><br>

      Id profesor:<br>
  <input type="number" name="id" <br><br>


<select name="category">
<?php
foreach ($categories as $cat) {
    echo "<option value='$cat->name'>".$cat->name."</option>";
}

?>
</select>



  <input type="submit" value="Submit">
</form>



</ul>



                                            
                                                
        
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')