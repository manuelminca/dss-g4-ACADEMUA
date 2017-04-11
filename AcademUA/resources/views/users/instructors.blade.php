@section('title','Instructors')
@section('instructorsCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')
            <div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">OUR INSTRUCTORS</h1>
                    <p class="description">
                        In this section you can find information related with our instructors.
                    </p>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section no-slider">
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">


 <?php
 
//Mostramos los instructores
foreach ($users as $user) {
	echo "<div class='col-md-3 col-xs-6'>";
	echo "<div class='course'>";
	echo "<div class='course-image'>";
	echo "<div class='details-overlay'>";
	echo "<span class='place'>";
	echo "<i class='fa'></i>";
	echo "<span class='text'>Id : " . $user->id ."</span>";
	echo "</span>";

	echo "</div>";
	echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive'>";
	echo "</div>";
	echo "<div class='course-info'>";
	echo "<h3 class='course-title'><a href='#' class='n-tr'>" . $user->name . "</a></h3>";
	echo "<p class='course-description'>" . $user->description . "</p>";
	echo "<div class='buttons'>";
	echo "<a href='/users/modify/" .$user->id. "' class='btn grad-btn orange-btn read-btn'>Modify</a>";
	echo "<a href='/users/delete/" .$user->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}

?>
<!-- PAGINATION -->
<div class="clearfix"></div>

<div class="text-center">
    {{$users->links()}}
</div>
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')