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
            <section class="cursos full-section latest-courses-section no-slider">
         
                

<!-- https://tympanus.net/codrops/2012/10/04/custom-drop-down-list-styling/ -->
<form action="/courses/filter/">
        {{ csrf_field() }}
<div class="loginForm login-page" style="max-width:60%; background-color:transparent;">
    <div class="dropdowns">
        <div class="row">
            <div class="col-md-12">
                <div class="login-form">
                    <div class="login-title">
                        <span class="text">Apply filters</span>
                        
                    </div><!-- End Title -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p class="dropdown-text">Order by: </p>
                            
                                <select name="order">
                                        <option value="precio" selected="selected">Price</option>
                                        <option value="nombre">Name</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <p class="dropdown-text">Asc/Desc: </p>
                            
                                <select name="how">
                                    <option value="asc" selected="selected">Ascending</option>
                                    <option value="desc">Descending</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <p class="dropdown-text">Search by: </p>
        
                                <select name="filter">
                                    <option value="precio_menor" selected="selected">Maximum price</option>
                                    <option value="nombre">Name</option>
                                </select>
                            </div>
                        
                            <div class="col-md-6 col-sm-6">
                                <div class="input form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                                    <input id="valor" type="text" class="form-control" name="valor" placeholder="Enter value" required>
                                    @if ($errors->has('valor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('valor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input clearfix">
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                            
                        </div><!-- end row -->
                </div><!-- end login form -->
            </form>
        </div><!-- end col-md-12 --> 
    </div>   <!-- end row -->
    </div><!-- dropdowns -->
</div><!-- end login page -->

<div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
 <?php
 $number = 0;
 use Illuminate\Support\Facades\Auth;
//Mostramos los cursos
foreach ($courses as $course) {
    $number = $number+1;
	echo "<div class='col-md-3 col-xs-6'>";
        echo "<div class='course'>";
            echo "<div class='course-image'>";
                echo "<div class='details-overlay'>";
                 echo "<span class='time'>"; 


                        echo "<span class='text'> $course->price";
                            //$course->getAverage();
                            //$course->getNumberStudents();
                            $rating = 5;
                            for($i = 1; $i<$rating; $i++) {
                                echo "&#9733;";
                            }
                        echo "</span>";
                    echo "</span>";
                    echo "<span class='place'>"; 
                        echo "<div class='col-xs-6' style='text-align: left'>";
                            echo "<span class='text'>" . $course->price ." </span>";
                            echo "<i class='fa fa-eur'></i>";
                        echo "</div>";
                        echo "<div class='col-xs-6' style='text-align: right'>";
                            echo "<span class='text'>" . $course->price ." </span>";
                            echo "<i class='fa fa-users'></i>";
                        echo "</div>";
                    echo "</span>";
                    
                echo "</div>";
                echo "<img src='/images/courses/" . $course->id . "' class='img-responsive'>";
                echo "</div>";
                echo "<div class='course-info'>";
                echo "<h3 class='course-title'><a href='/courses/course/" .$course->id. "' class='n-tr'>" . $course->name . "</a></h3>";
                echo "<p class='course-description'>" . $course->description . "</p>";
                echo "<div class='buttons'>";
                echo "<a href='/courses/course/" .$course->id. "' class='btn grad-btn orange-btn read-btn'>View</a>";
                
                if(Auth::check()){
                if($course->checkTeacher()){
                    echo "<a href='/courses/delete/" .$course->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                }
                }
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
    @if ($filtering)
        {{$courses->appends('filter', $filter)->appends('order', $order)->appends('how', $how)->appends('valor', $valor)->links()}}
    @endif
    @if (!$filtering)
        {{$courses->links()}}
    @endif

</div>
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')