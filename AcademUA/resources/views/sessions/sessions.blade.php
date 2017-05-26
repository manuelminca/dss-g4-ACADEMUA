@section('title','Courses')
@section('courseCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<!--
AQUI CHAVALES TENEMOS LAS VARIABLES:
$sessions que es un array con todas las sesiones que estan relacionadas con el curso
$course_id es la id del curso el cual queremos añadir nuevas sesiones, esta id del curso
sirve para llamar a /sessions/new/{$course_id} 
-->

<div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">


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
                                                                    echo "<a href='/sessions/delete/" .$session->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";

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




<ul>
            <form action="/sessions/create/{{$course}}" >
            <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Create a new session</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" value="{{ old('title') }}" name="title" placeholder = "Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
            
                                                    <input  value="{{ old('content') }}" type="text" name="content" placeholder = "Content">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                           
                                                    <input  value="{{ old('video') }}" type="text" name="video" placeholder = "Video">
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
                            </form>
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- End Login Page -->



</ul>

                
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
