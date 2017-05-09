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
            @if(Auth::check())
            @if (Auth::user()->checkAttendingCourse($course->id))
                <h1>You can see this because you are attending this course!</h1>
            @endif
            @endif

            @if(Auth::check())
            @if (!Auth::user()->checkAttendingCourse($course->id))
                <h1>You can see this even if you are not attending the course</h1>
            @endif
            @endif
            

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
                                <h4 class="overview ib">Information</h4>
                                <div class="details" style="text-align:center;">
                                    <div class="date ib">
                                        <span class="icon"><i class="fa fa-asterisk"></i></span>
                                        <span class="text"> id: <?php echo $course->price ?> </span>
                                    </div>
                                    <div class="date ib">
                                        <span class="icon"><i class="fa fa-euro"></i></span>
                                        <span class="text"> <?php echo $course->price ?>€</span>
                                    </div>
                                    <?php
                                        echo "<a href='/courses/attend/" .$course->id. "' class='btn grad-btn orange-btn read-btn'>Attend</a>"; //HERE WE HAVE TO PUT & USER ID IN THE FUTURE
                                        echo "<a href='/courses/modify/" .$course->id. "' class='btn grad-btn subscribe-btn'>Modify</a>";
                                        echo "<a href='#' class='btn grad-btn subscribe-btn'>Quit</a>";
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
                                                foreach ($comments as $comment) {
                                                    
                                                    echo "<div class='query clearfix'>";
                                                        echo "<div class='query-content'>";
                                                            echo "<h3 class='post-title'>#". $number . ": " . "VIDEO NAME HERE" . "</h3>"; //AQUI HAY QUE MOSTRAR EL NOMBRE DEL USUARIO QUE HACE EL COMMENT.
                                                            echo "<p class='query-description'> </p>";
                                                            echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/iCUV3iv9xOs' frameborder='0' allowfullscreen></iframe>";
                                                
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
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="number" name="id_user" min="0" placeholder="User id">
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