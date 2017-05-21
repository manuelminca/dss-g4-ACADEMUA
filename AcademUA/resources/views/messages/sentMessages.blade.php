@section('title','Message')
@section('messageCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')


    <!-- ############################ MESSAGES ############################## -->
        <section class="full-section misc-section fadeInDown-animation">
                <div class="container">
                    <div class="row" style="width:80%; margin:0 auto;">
                        <div class="col-md-12 basic-slider-box">
                            <div class="questions">
                                <h6 class="head-title">Sent Messages</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="slides">
                                        <li class="questions-slide-item">
<?php
$number = 1;
                                        foreach ($messages as $message) {
                                            
                                            echo "<div class='query clearfix'>";
                                                echo "<div class='image fl'>";
                                                    echo "<img src='/img/users/user1.jpg' alt=''>";
                                                echo "</div>";
                                                echo "<div class='query-content'>";
                                                    echo "<h3 class='post-title'>Sended to: ". $message->getUserReceive(); //AQUI HAY QUE MOSTRAR EL NOMBRE DEL USUARIO QUE HACE EL COMMENT.
                                                    echo "<p class='query-description'>". $message->message . "</p>";
                                                    echo "<div class='details'>";
                                                        echo " <div class='date ib'>";
                                                            echo "<span class='icon'><i class='fa fa-clock-o'></i></span>";
                                                            echo "<span class='text'>Time : ". $message->created_at . "</span>";
                                                        echo "</div>";
                                                       echo " <div class='date ib'>";
                                                            echo "<span class='icon'><i class='fa fa-star'></i></span>";
                                                            echo "<span class='text'>Subject: " . $message->subject . "</span>";
                                                        echo "</div>";
                                                        echo "<div class='center ib'>";
                                                            echo "<a href='/messages/delete/" .$message->id. "' class='btn grad-btn subscribe-btn'>Delete</a>";
                                                        echo "</div>";
                                                        

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