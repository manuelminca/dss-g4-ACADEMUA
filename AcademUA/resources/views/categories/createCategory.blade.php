@section('title','New Course')
@section('newCourseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">ADD CATEGORY</h1>
                    <p class="description">
                        Please, enter the data to create a new Category.
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

<form action="/categories/create/">

{{ csrf_field() }}
{{ method_field('PUT') }}

  Name:<br>
  <input value="{{ old('name') }}" type="text" name="name"><br>
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