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

//echo $comments[0]->description;

// ########################## COURSE COMMENTS ########################## //

?> 
    <div class="clearfix"></div>                                        
                                                
        <section class="full-section misc-section fadeInDown-animation">
                <div class="container">
                    <div class="row" style="width:80%; margin:0 auto;">
                        <div class="col-md-12 basic-slider-box">
                            <div class="questions">
                                <h6 class="head-title">Comments</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="slides">
                                        <li class="questions-slide-item">

                                            <div class="query clearfix">
                                                <div class="image fl">
                                                    <img src="assets/img/content/q-img-1-63x61.jpg" alt="">
                                                </div><!-- End Post Image/Date -->
                                                <div class="query-content">
                                                    <h3 class="post-title"><a href="#" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <p class="query-description">
                                                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit quis urna adipiscing iaculis dos Curabitur vitae velit in neque dictum blandit.
                                                    </p>
                                                    <div class="details">
                                                        <div class="date ib">
                                                            <span class="icon"><i class="fa fa-clock-o"></i></span>
                                                            <span class="text">Time : 7 Dec, 2014</span>
                                                        </div><!-- date icon -->
                                                        <div class="place ib">
                                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                                            <span class="text">Place : Alex, Miami</span>
                                                        </div><!-- place icon -->
                                                        <div class="center ib">
                                                            <span class="icon"><i class="fa fa-building"></i></span>
                                                            <span class="text">Yat Academy</span>
                                                        </div><!-- center icon -->
                                                    </div><!-- End Details Box -->
                                                </div><!-- End Question Content -->
                                            </div><!-- End 1st Question -->

                                            <div class="query clearfix">
                                                <div class="image fl">
                                                    <img src="assets/img/content/q-img-2-63x61.jpg" alt="">
                                                </div><!-- End Post Image/Date -->
                                                <div class="query-content">
                                                    <h3 class="post-title"><a href="#" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <p class="query-description">
                                                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit quis urna adipiscing iaculis dos Curabitur vitae velit in neque dictum blandit.
                                                    </p>
                                                    <div class="details">
                                                        <div class="date ib">
                                                            <span class="icon"><i class="fa fa-clock-o"></i></span>
                                                            <span class="text">Time : 7 Dec, 2014</span>
                                                        </div><!-- date icon -->
                                                        <div class="place ib">
                                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                                            <span class="text">Place : Alex, Miami</span>
                                                        </div><!-- place icon -->
                                                        <div class="center ib">
                                                            <span class="icon"><i class="fa fa-building"></i></span>
                                                            <span class="text">Yat Academy</span>
                                                        </div><!-- center icon -->
                                                    </div><!-- End Details Box -->
                                                </div><!-- End Question Content -->
                                            </div><!-- End 1st Question -->

                                        </li><!-- End 1st Post Slide Item -->
                                    </ul><!-- End ul Items -->
                                </div><!-- End Posts Slider -->
                            </div><!-- End Blog Posts/Latest News -->
                        </div><!-- End col-md-6 -->
                    </div><!-- End row -->
                </div><!-- End container -->
            </section><!-- End MISC Section -->
                            
                           
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@include('footer')