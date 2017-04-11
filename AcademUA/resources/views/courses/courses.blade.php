@section('title','Courses')
@section('courseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

            <div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">Self Development Courses</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                    </p>
                    <div class="breadcrumb">
                        <ul class="clearfix">
                            <li class="ib"><a href="">Home</a></li>
                            <li class="ib current-page"><a href="">Courses</a></li>
                        </ul>
                    </div>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section no-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-courses top-margin">
                                <img src="assets/img/icons/addcourse-icon.png" alt="" class="fl add-courses-icon">
                                <a href="#" class="add-courses-title ln-tr">You Are an Instructor ? Add Your Courses Now !</a>
                                <p class="add-courses-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                                </p>
                            </div><!-- End Add Courses -->
                        </div>
                    </div><!-- End row -->
                </div>
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">


<form action="/courses/filter/">
{{ csrf_field() }}
 Search by: <select name="filter">
                    <option value="precio_menor" selected="selected">Maximum price</option>
                    <option value="nombre">Name</option>
              </select>
 Order by: <select name="order">
                    <option value="precio" selected="selected">Price</option>
                    <option value="nombre">Name</option>
              </select>
Asc/Desc:    <select name="how">
                    <option value="asc" selected="selected">Ascending</option>
                    <option value="desc">Descending</option>
              </select>
  <input value="{{ old('valor') }}" type="text" name="valor"><br>

  <input type="submit" value="Submit">
</form>


 <?php
 $number = 0;
 
//Mostramos los cursos
foreach ($courses as $course) {
    $number = $number+1;
	echo "<div class='col-md-3 col-xs-6'>";
        echo "<div class='course'>";
            echo "<div class='course-image'>";
                echo "<div class='details-overlay'>";
                echo "<span class='place'>";
                echo "<i class='fa fa-briefcase'></i>";
                echo "<span class='text'>Id : " . $course->id ."</span>";
                echo "</span>";
                echo "<span class='time'>";
                echo "<i class='fa fa-money'></i>";
                echo "<span class='text'>" . $course->price . "€</span>";
                echo "</span>";
                echo "</div>";
                echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive'>";
                echo "</div>";
                echo "<div class='course-info'>";
                echo "<h3 class='course-title'><a href='#' class='n-tr'>" . $course->name . "</a></h3>";
                echo "<p class='course-description'>" . $course->description . "</p>";
                echo "<div class='buttons'>";
                echo "<a href='/courses/course/" .$course->id. "' class='btn grad-btn orange-btn read-btn'>View</a>";
                echo "<a href='/courses/delete/" .$course->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
	echo "</div>";
    if($number == 4){
        echo "<div class='clearfix'></div>";
    }
}

?>

<!-- PAGINATION -->
<div class="clearfix"></div>

<div class="text-center">
    {{$courses->links()}}
</div>
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')