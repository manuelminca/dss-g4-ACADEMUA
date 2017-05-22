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
                                    <li><div class="image"><img src="/images/courses/{{ $course->id }}" alt="/img/course-slider-img-1-270x178.jpg" class="img-responsive"></div></li>
                                </ul><!-- End ul elements -->
                            </div><!-- End Single Slider -->
                        </div><!-- End col-md-6 -->
                        <div class="col-md-6">
                            <div class="entry clearfix">
                                <span class="entry-icon"><i class="fa fa-file-text"></i></span>
                                <h4 class="overview ib">Information</h4>
                                <div class="details" style="text-align:center;">
                                    <div class="date ib">
                                        <span class="icon"><i class="fa fa-asterisk"></i></span>
                                        <span class="text"> Rating: <?php echo $course->getAverage() ?> </span>
                                    </div>
                                    <div class="date ib">
                                        <span class="icon"><i class="fa fa-euro"></i></span>
                                        <span class="text"> <?php echo $course->price ?>€</span>
                                    </div>
                                    <?php
                                        if($course->checkAttend() == false && $course->checkTeacher() == false){
                                            echo "<a href='/courses/attend/" .$course->id. "' class='btn grad-btn orange-btn read-btn'>Attend</a>"; 
                                        }
                                        if($course->checkTeacher()){
                                            echo "<a href='/courses/modify/" .$course->id. "' class='btn grad-btn subscribe-btn'>Modify</a>";
                                            echo "<a href='/sessions/new/" .$course->id. "' class='btn grad-btn subscribe-btn'>Add Session</a>";
                                        }
                                        if($course->checkAttend() && $course->checkTeacher() == false ){
                                             echo "<a href='/courses/quit/" . $course->id. "' class='btn grad-btn subscribe-btn'>Quit</a>";
                                        }
                                    ?>
                                </div>
                            </div><!-- End Entry -->
                            <div class="entry clearfix" style="margin-top: 20px">
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


            @if ($course->checkTeacher() || $course->checkAttend())

            <section class="full-section latest-courses-section no-slider">
                <div class="container">
                    <div class="row" style="width:80%; margin:0 auto;">
                        <div class="col-md-12 basic-slider-box">
                            <div class="questions">
                                <h6 class="head-title">Videos</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="slides">
                                        <li class="questions-slide-item">
                                            <?php
                                                $number = 1;
                                                foreach ($sessions as $session) {
                                                    echo "<div class='query clearfix'>";
                                                        echo "<div class='query-content'>";
                                                            echo "<h3 class='post-title'>#". $number . ": " . $session->title . "</h3>"; 
                
                                                            echo "<iframe style='padding-top: 20px; margin-left:-150px;' width='560' height='315' src='" . $session->video . "' frameborder='0' allowfullscreen></iframe>";
                                                            
                                                            echo "<div class='post' style='margin-left:-105px; background-color:transparent;'>";
                                                                echo "<div class='entry clearfix' style='margin-top: 0px; padding-top: 10;'>";
                                                                    echo "<span class='entry-icon'><i class='fa fa-file-text'></i></span>";
                                                                    echo "<h4 class='overview ib'>Session content</h4>";
                                                                    echo "<div class='content'>";
                                                                        echo "<p>" . $session->content ." </p>";
                                                                    echo "</div>";
                                                                echo "</div><!-- End Entry -->";
                                                            echo "</div>";

                                                        echo "</div>"; 
                                                    echo "</div>";
                                                    $number = $number+1;
                                                }
                                                
                                            ?>
                                                            <div class="text-center">
    {{$sessions->links()}}
</div>

                                        </li><!-- End 1st Post Slide Item -->
                                    </ul><!-- End ul Items -->
                                </div><!-- End Posts Slider -->
                            </div><!-- End Blog Posts/Latest News -->
                        </div><!-- End col-md-6 -->
                    </div><!-- End row -->
                </div><!-- End container -->

                @endif


 @if ($course->checkTeacher() || $course->checkAttend())

                <div class="clearfix"></div>
                <form action="/comments/create/{{$course->id}}" >
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Comment</span>
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input value="{{ old('rating') }}" type="number" name="rating" min="0" max="5" placeholder="Rating">
                                                </div>
                                            </div>                  
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input" >
                                                    <input name="description" cols="50" rows="10" placeholder="Content"style = "min-height:200px">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end login form -->
                            </div><!-- end col-md-12-->
                        </div> <!-- end row -->
                    </div><!-- end login-page -->
                </form><!-- end form -->

                 @endif
                          
    <!-- ############################ COMMENTS ############################## -->
        
                <div class="container">
                    <div class="row" style="width:80%; margin:0 auto;">
                        <div class="col-md-12 basic-slider-box">
                            <div class="questions">
                                <h6 class="head-title">Comments</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="slides">
                                        <li class="questions-slide-item">
                                            <?php
                                                $number = 1;
                                                foreach ($comments as $comment) {
                                                    
                                                    echo "<div class='query clearfix'>";
                                                        echo "<div class='image fl'>";
                                                            echo "<img src='/img/users/user1.jpg' alt=''>";
                                                        echo "</div>";
                                                        echo "<div class='query-content'>";
                                                            echo "<h3 class='post-title'>#". $number . ":" . Auth::user()->username . "</h3>"; //AQUI HAY QUE MOSTRAR EL NOMBRE DEL USUARIO QUE HACE EL COMMENT.
                                                            echo "<p class='query-description'>". $comment->description . "</p>";
                                                            echo "<div class='details'>";
                                                                echo " <div class='date ib'>";
                                                                    echo "<span class='icon'><i class='fa fa-clock-o'></i></span>";
                                                                    echo "<span class='text'>" . $comment->created_at . "</span>";
                                                                echo "</div>";
                                                                echo " <div class='date ib'>";
                                                                    echo "<span class='icon'><i class='fa fa-star'></i></span>";
                                                                    echo "<span class='text'>Rating: " . $comment->rating . "</span>";
                                                                echo "</div>";
                                                                echo "<div class='place ib'>";
                                                                    echo "<span class='icon'><i class='fa fa-building'></i></span>";
                                                                    echo "<span class='text'>Academua</span>";
                                                            echo "</div>";

                                                                if (Auth::user()->id == $comment->user_id || Auth::user()->checkAdmin()){
                                                                echo "<div class='center ib'>";
                                                                    echo "<a href='/comments/delete/" .$comment->id. "&" . $course->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                                                                echo "</div>";
                                                                }
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                    $number = $number+1;
                                                }
                                            ?>
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