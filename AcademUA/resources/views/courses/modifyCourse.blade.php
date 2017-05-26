@section('title','Modify Course')
@section('newCourseCurrent','current_page_item')
@include('master')


<div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">MODIFY COURSE</h1>
                    <p class="description">
                        Please enter all the data required to create a new course.
                    </p>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section no-slider">

<!--<ul>


<!--
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
</ul>
-->         
{{-- Error messages --}}
@if (count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

<form action="/courses/modified/{{$courses->id}}" >
            <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Modify course</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    {{-- Error messages --}}
                                                    @if ($errors->has('name') > 0)
                                                    <ul>
                                                    @foreach ($errors->get('name') as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                    </ul>
                                                    @endif
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
                                                    <input  value="{{ old('description') }}" type="text" name="description" placeholder="Description">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input" >
                                                    <input name="content" cols="50" rows="10" placeholder="Content"style = "min-height:200px">
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
         </ul>
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
           
@include('footer')