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
                    echo "<a href='/courses/attend/" .$course->id. "&1' class='btn grad-btn orange-btn read-btn'>Attend</a>"; //HERE WE HAVE TO PUT & USER ID IN THE FUTURE

                   echo "<a href='/courses/modify/" .$course->id. "' class='btn grad-btn subscribe-btn'>Modify</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    $number = 1;
    foreach ($comments as $comment) {
        $number = $number+1;
        echo "<div class='col-md-3 col-xs-6'>";
            echo "<div class='course'>";
                echo "<div class='course-image'>";
                    echo "<div class='details-overlay'>";
                    echo "<span class='place'>";
                    echo "<i class='fa fa-briefcase'></i>";
                    echo "<span class='text'>Rating : " . $comment->id ."</span>";
                    echo "</span>";
                    echo "<span class='time'>";
                    echo "<i class='fa fa-money'></i>";
                    echo "<span class='text'>" . $comment->rating . "</span>";
                    echo "</span>";
                    echo "</div>";
                    echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive'>";
                    echo "</div>";
                    echo "<div class='course-info'>";
                    echo "<h3 class='course-title'><a href='#' class='n-tr'>" . $comment->id . "</a></h3>";
                    echo "<p class='course-description'>" . $comment->description . "</p>";
                    echo "<div class='buttons'>";
                    //echo "<a href='/comments/comment/" .$course->id. "' class='btn grad-btn orange-btn read-btn'>View</a>";
                    echo "<a href='/comments/delete/" .$comment->id. "&" . $course->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        if($number == 4){
            echo "<div class='clearfix'></div>";
        }
    }

?>


<form action="/comments/create/{{$course->id}}">

{{ csrf_field() }}
{{ method_field('POST') }}

      Rating:<br>
  <input value="{{ old('rating') }}" type="number" name="rating" min="0" max="5"> <br><br>
      Description:<br>
      <textarea name="description" cols="50" rows="10"></textarea><br><br>
      Id user:<br>
  <input type="number" name="id_user" min="0" <br><br>
  <!-- Con esto podremos analizar la URI:
  <input type="hidden" id="current_url" name="current_url" value="<?php echo 'http://localhost:8080',$_SERVER['REQUEST_URI'];?>"-->


  <input type="submit" value="Submit">
</form>
                     
                                            
                                                
        
                            
                           
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')