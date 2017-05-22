@section('title','Home')  
@section('homeCurrent','current_page_item')
@section('headerId','header')
@section('bodyId','home')
@include('master')
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <li>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="caption tp-resizeme white"
                    data-y="245"
                    data-x="center"
                    data-hoffset="0"
                    data-start="300"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-easing="Power3.easeInOut"
                    data-endspeed="300"
                    style="z-index: 2">
                    <h2 class="slide-title">We Help You Learn What You Love</h2>
                </div>
                <!-- LAYER NR. 2 -->
                <div class="caption black tp-resizeme" 
                    data-x="center" 
                    data-hoffset="0" 
                    data-y="270" 
                    data-speed="500" 
                    data-start="1300" 
                    data-easing="Power3.easeInOut" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-elementdelay="0.1" 
                    data-endelementdelay="0.1" 
                    data-endspeed="500" style="z-index: 99; white-space: pre-line;">
                    <p class="slide-description">AcademUA provides easy access to the courses that you desire. Easy to learn and easy to follow, take the time you need.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <section class="full-section instructors-section fancy-shadow">
                <div class="container">
                    <h3 class="section-title">Starred Instructors</h3>
                    <p class="section-description" style="display:inline">
                       In this section you can find the related instructors. You can visit the section <h3 class="course-title" style="display:inline" ><a href="/users/instructors" class="ln-tr">instructors</a></h3> to see all of them.
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content instructors-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <?php

//Mostramos los instructores
                            foreach ($users as $user) {
	echo "<div class='col-md-3 col-xs-6'>";
	echo "<div class='instructor'>";
	if(file_exists(public_path().'/images/users/' . $user->id)){
		echo "<img src='/images/users/" . $user->id . "' class='img-responsive'>";
	}
	else{
		echo "<img src='/img/teacher1.jpg' class='img-responsive'>";
	}
	
	echo "<div class='instructor-info'>";
	echo "<p class='name'>" . $user->name . "</p>";
	echo "<span class='position'>" . $user->description . "</span>";
	echo "<div class='social-icons'>";
	echo "<ul class='clearfix'>";
	echo "<li><a href='#' class='fb-icon es-tr'><i class='fa fa-facebook'></i></a></li>";
	echo "<li><a href='#' class='tw-icon es-tr'><i class='fa fa-twitter'></i></a></li>";
	echo "<li><a href='#' class='gp-icon es-tr'><i class='fa fa-google-plus'></i></a></li>";
	echo "<li><a href='#' class='in-icon es-tr'><i class='fa fa-linkedin'></i></a></li>";
	echo "</ul>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}

?>
                        </div>
                    </div>
                </div><!-- End Instructors Section Content -->
            </section><!-- End Our Instructors Container -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section">
                <div class="container">
                    <h3 class="section-title">Our latests courses</h3>
                    <p class="section-description" style="display:inline">
                        You can see all of them in the <h3 class="course-title" style="display:inline" ><a href="/courses" class="ln-tr">courses</a></h3> section.
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <?php

//Mostramos los cursos
                            foreach ($courses as $course) {
                                echo "<div class='col-md-3 col-xs-6'>";
                                echo "<div class='course'>";
                                echo "<div class='course-image'>";
                                echo "<div class='details-overlay'>";
                                echo "<span class='time'>";
                                echo "<span class='text'>";
                                $rating = $course->getAverage();
                                $string = "N/A";
                                if(strcmp($rating, $string) == 0){
                                    echo "0 COMMENTS";
                                    $rating = 0;
                                }
                                else {
                                    echo $rating;
                                    echo "    ";
                                }
                                //$	course->getAverage();
                                //$	course->getNumberStudents();
                                if($rating == 0){
                                    
                                }
                                else {
                                    for ($i = 0; $i<floor($rating); $i++) {
                                        echo "&#9733;";
                                    }
                                }
                                
                                echo "</span>";
                                echo "</span>";
                                echo "<span class='place'>";
                                echo "<div class='col-xs-6' style='text-align: left'>";
                                echo "<span class='text'>" . $course->price ." </span>";
                                echo "<i class='fa fa-eur'></i>";
                                echo "</div>";
                                echo "<div class='col-xs-6' style='text-align: right'>";
                                echo "<span class='text'>" . $course->getNumStudents() ." </span>";
                                echo "<i class='fa fa-users'></i>";
                                echo "</div>";
                                echo "</span>";
                                
                                echo "</div>";
                                
                                if(file_exists(public_path().'/images/courses/' . $course->id)){
                                    echo "<img src='/images/courses/" . $course->id . "' class='img-responsive'>";
                                }
                                else{
                                    echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive'>";
                                }
                                
                                
                                
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
                            }

?>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
            <div class="clearfix"></div>
@include('footer')