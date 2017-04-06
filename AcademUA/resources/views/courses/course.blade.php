@section('title','Course')
@section('courseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

            <div class="inner-head">
                <div class="container">
                    <h1 class="entry-title"> <?php  echo $course->name ?> </h1>
                    <p class="description">
                        <?php echo $course->description ?>
                    </p>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->

            <div class="clearfix"></div>


            <article class="post alt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="single-slider" class="alt flexslider">
                                <ul class="slides">
                                    <li><div class="image"><img src="/img/course-slider-img-1-270x178.jpg" alt="" class="img-responsive"></div></li>
                                </ul><!-- End ul elements -->
                            </div><!-- End Single Slider -->
                        </div><!-- End col-md-6 -->
                        <div class="col-md-6">
                            <div class="entry clearfix">
                                <span class="entry-icon"><i class="fa fa-file-text"></i></span>
                                <h4 class="overview ib">Description</h4>
                                <div class="content">
                                    <p><?php echo $course->content ?></p>
                                </div>
                            </div><!-- End Entry -->
                        </div><!-- End col-md-6 -->
                    </div><!-- End row -->
                </div><!-- End container -->
            </article>

            <section class="full-section latest-courses-section no-slider">
                <div class="container">
                    
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">



 <?php


        
    echo "<div class='col-md-3 col-xs-6'>";
        echo "<div class='course'>";
            echo "<div class='course-image'>";
                echo "<div class='details-overlay'>";
                    echo "<span class='place'>";
                        echo "<i class='fa fa-map-marker'></i>";
                        echo "<span class='text'>Id : " . $course->id ."</span>";
                    echo "</span>";
                    echo "<span class='time'>";
                        echo "<i class='fa fa-clock-o'></i>";
                        echo "<span class='text'>Price : " . $course->price . "</span>";
                    echo "</span>";
                echo "</div>";
                echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive'>";
            echo "</div>";
            echo "<div class='course-info'>";
                echo "<h3 class='course-title'><a href='#' class='n-tr'>" . $course->name . "</a></h3>";
                echo "<p class='course-description'>" . $course->description . "</p>";
                echo "<div class='buttons'>";
                    echo "<a href='/courses/attend/" .$course->id. "&1' class='btn grad-btn orange-btn read-btn'>Attend</a>";

                   echo "<a href='/courses/delete/" .$course->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";


?>
                     
                                            
                                                
        
                            
                           
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')