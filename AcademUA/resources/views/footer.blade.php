<!-- /resources/views/footer.blade.php -->

           <div class="clearfix"></div>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget about-widget">
                                <h6 class="widget-title">About AcademUA</h6>
                                <p class="about-text">
                                    Group 4 of SSD, AcademUA Webpage 2017.
                                </p>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="/about" class="ln-tr">About Us</a></li>
                                        <li><a href="/contact" class="ln-tr">Contact Us</a></li>
                                    </ul>
                                </div><!-- End Footer Links -->
                            </div><!-- End About Widget -->
                        </div><!-- End col-md3 -->
                        <div class="col-md-3">
                            <div class="widget twitter-widget">
                                <h6 class="widget-title">Latest Tweets</h6>
                                <div id="tweets-slider" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@AcademUA</a> New Java course is available!
                                                <div class="date">24th December 2017</div>
                                            </div><!-- End Single Tweet -->
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@AcademUA</a> ¿Don't you have an account in AcademUA yet?<a href="/register">Go Register</a>!
                                                <div class="date">24th December 2017</div>
                                            </div><!-- End Single Tweet -->
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@AcademUA</a> A new instructor has just created a new Course, go and check it out in "Related instructors".
                                                <div class="date">22th December 2017</div>
                                            </div><!-- End Single Tweet -->
                                        </li><!-- End 1st Tweet Slide Item -->
                                    </ul><!-- End ul Items -->
                                </div><!-- End Tweets Slider -->
                            </div><!-- End Twitter Widget -->
                        </div><!-- End col-md3 -->
                        <div class="col-md-4">
                            <div class="widget courses-widget">
                                <h6 class="widget-title">Latest Courses</h6>
                                <div id="footer-courses-slider" class="flexslider">
                                    <ul class="slides">
                                        <?php
                                        //Mostramos los cursos
                                        foreach ($coursesFooter as $course) {
                                            echo "<li class='clearfix' style='padding-top:20px; padding-bottom:20px;'>";
                                                echo "<div class='course-icon fl'>";
                                                    if(file_exists(public_path().'/images/courses/' . $course->id)){
                                                            echo "<img src='/images/courses/" . $course->id . "' class='img-footer' >";
                                                    }else{
                                                            echo "<img src='/img/course-slider-img-1-270x178.jpg' class='img-responsive img-height'>";
                                                    }
                                                   
                                                echo "</div><!-- End Course Icon -->";
                                                echo "<div class='course-info'>";
                                                    echo "<h4 class='footer-course-title'><a href='/courses/course/" .$course->id. "' class='ln-tr'>" . $course->name . "</a></h4>";
                                                    echo "<p class='footer-course-description'>" . $course->description . "</p>";
                                                    echo "<span class='course-date'>" . $course->created_at . "</span>";
                                                echo "</div><!-- End Course Info -->";
                                            echo "</li><!-- End 1st Slide Item -->";
                                            echo "<hr>";
                                        }
                                        ?>            
                                    </ul><!--- End ul Items -->
                                </div><!-- End Footer Scourses Slider -->
                            </div><!-- End Courses Widget -->
                        </div><!-- End col-md4 -->
                        <div class="col-md-2">
                            <div class="widget links-widget">
                                <h6 class="widget-title">Quick Links</h6>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="/courses" class="ln-tr">Courses</a></li>
                                        <li><a href="/users/instructors" class="ln-tr">Instructors</a></li>
                                        <li><a href="/about" class="ln-tr">About</a></li>
                                        <li><a href="/messages/new" class="ln-tr">Write a Message</a></li>

                                    </ul>
                                </div><!-- End Footer Links -->
                            </div><!-- End Links Widget -->
                        </div><!-- End col-md2 -->
                    </div>
                </div>
                <div id="bottom">
                    <div class="container">
                        <div class="fl copyright">
                            <p>All Rights Reserved &copy; AcademUA | By Group 4 </p>
                        </div><!-- End Copyright -->
                        <div class="fr footer-social-icons">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/profile.php?id=100017271163676" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/academua" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- End Social Media Icons -->
                    </div><!-- End container -->
                </div><!-- End Bottom Footer -->
            </footer><!-- End Footer -->
        </div><!-- End Entire Wrap -->


        <!-- jQuery -->
        <script src="/js/jquery-1.11.2.min.js"></script>
        <!-- Plugins -->
        <script src="/js/bsmodal.min.js"></script>
        <script src="/js/jquery.countdown.min.js"></script>
        <script src="/js/jquery.easydropdown.min.js"></script>
        <script src="/js/jquery.flexslider-min.js"></script>
        <script src="/js/jquery.isotope.min.js"></script>
        <script src="/js/jquery.themepunch.tools.min.js"></script>
        <script src="/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/js/jquery.viewportchecker.min.js"></script>
        <script src="/js/jquery.waypoints.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script>
        // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script> 
        <script>
        $('.main-navigation').find('ul:first').clone().appendTo('.mobile-container');

    $('.mobile-navigation').find('.mobile-btn').on("click", function(event) {
        $('body').addClass('mobile_nav-open');
        $('.mobile-navigation').find('.mobile-container').slideToggle();
        $(this).toggleClass('show-menu');
        event.preventDefault();
    });

    $('.mobile-navigation').find('.haschild').each(function() {
        var mobile_submenu = $(this).find('ul:first');
        $(this).hover(function() { 
            mobile_submenu.stop().css({overflow:'hidden', height:'auto', display:'none', paddingTop:0}).slideDown(500, function() {
                $(this).css({overflow:'visible', height:'auto'});
            }); 
        },function() {
            mobile_submenu.stop().slideUp(500, function() {   
                $(this).css({overflow:'hidden', display:'none'});
            });
        }); 
    });

    $('.mobile-navigation').find('.haschild').children('a').one('click',function() {
        return false;
    }).on("click", function() {
        return true;
    });
        </script>
        
    </body>
</html>