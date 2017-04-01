@section('title','Home')  
@section('homeCurrent','current_page_item')
@section('headerId','header')
@section('bodyId','home')
@include('master')

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/content/01-home-slide-item-1-1600x770.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sft skewtoleft tp-resizeme start white"
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
                            <div class="tp-caption black randomrotate skewtoleft tp-resizeme start" 
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
                                <p class="slide-description">Lorem Ipsum is simply dummy of the printing and typesetting 's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </li><!-- end 1st slide -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/content/01-home-slide-item-2-1600x770.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sft skewtoleft tp-resizeme start white"
                                data-y="245"
                                data-x="center"
                                data-hoffset="0"
                                data-start="300"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-easing="Power3.easeInOut"
                                data-endspeed="300"
                                style="z-index: 2">
                                <h2 class="slide-title">Join Coursaty now & get our free courses!</h2>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption black randomrotate skewtoleft tp-resizeme start" 
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
                                <p class="slide-description">Lorem Ipsum is simply dummy of the printing and typesetting 's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </li><!-- end 2nd slide -->
                    </ul><!-- end ul elements -->
                </div><!-- end tp-banner -->
            </div><!-- End Home Slider Container -->

            <div class="clearfix"></div>

            <div class="course-search fancy-shadow">
                <div class="container">
                    <form action="10-courses-grid-1.html" id="course-search-form" class="clearfix">
                        <input type="text" name="course-name" id="course-name" placeholder="Write the course name here then choose Time, Category & Country">
                        <div class="select-time ib">
                            <select class="dropdown" name="course-time" id="course-time" data-settings='{"cutOff": 7}'>
                                <option value="" class="label">Time (this month)</option>
                                <option value="1">Today</option>
                                <option value="2">Last week</option>
                                <option value="3">Last month</option>
                                <option value="4">Last year</option>
                                <option value="5">All time</option>
                            </select>
                        </div><!-- End Select Time -->
                        <div class="select-category ib">
                            <select class="dropdown" name="course-category" id="course-category" data-settings='{"cutOff": 7}'>
                                <option value="" class="label">Business (3 courses)</option>
                                <option value="1">Social Marketing</option>
                                <option value="2">Computer & IT</option>
                                <option value="3">Web Design</option>
                                <option value="4">Business & Finance</option>
                                <option value="5">Programming</option>
                                <option value="6">Engineering</option>
                                <option value="7">Health & Medical</option>
                                <option value="8">Art and Media</option>
                                <option value="9">Self Development</option>
                            </select>
                        </div><!-- End Select Category -->
                        <div class="select-country ib">
                            <select class="dropdown" name="course-country" id="course-country" data-settings='{"cutOff": 7}'>
                                <option value="" class="label">UAE (7 courses)</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AO">Angola</option>
                                <option value="BH">Bahrain</option>
                                <option value="BE">Belgium</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="CZ">Denmark</option>
                                <option value="EG">Egypt</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Palestine</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="AE">U.A.E</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="KW">Kuwait</option>
                            </select>
                        </div><!-- End Select Country -->
                        <input type="submit" name="search-btn" id="search-btn" class="grad-btn ln-tr" value="Search">
                    </form><!-- End Sourse Search Form -->
                </div>
            </div><!-- End Course Container -->

            <div class="clearfix"></div>

            <section class="full-section features-section fancy-shadow">
                <div class="container">
                    <h3 class="section-title">Welcome Dear Visitor in Coursaty</h3>
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content features-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="feature-box">
                                    <div class="icon"><img src="assets/img/icons/feature-icon-1.png" class="es-tr" alt=""></div><!-- End Icon -->
                                    <h5 class="feature-title">Learn Anything Online</h5>
                                    <p class="feature-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                    </p>
                                </div><!-- End Features Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature-box">
                                    <div class="icon"><img src="assets/img/icons/feature-icon-2.png" class="es-tr" alt=""></div><!-- End Icon -->
                                    <h5 class="feature-title">Talk to Our Instructors</h5>
                                    <p class="feature-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                    </p>
                                </div><!-- End Features Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature-box">
                                    <div class="icon"><img src="assets/img/icons/feature-icon-3.png" class="es-tr" alt=""></div><!-- End Icon -->
                                    <h5 class="feature-title">Communicate with Others</h5>
                                    <p class="feature-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                    </p>
                                </div><!-- End Features Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature-box">
                                    <div class="icon"><img src="assets/img/icons/feature-icon-4.png" class="es-tr" alt=""></div><!-- End Icon -->
                                    <h5 class="feature-title">Check for Centers</h5>
                                    <p class="feature-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                    </p>
                                </div><!-- End Features Box -->
                            </div>
                        </div>
                    </div>
                </div><!-- End Features Section Content -->
            </section><!-- End Features Section -->

            <div class="clearfix"></div>

            <section class="full-section instructors-section fancy-shadow">
                <div class="container">
                    <h3 class="section-title">Meet Our Instructors</h3>
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content instructors-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="instructor">
                                    <div class="avatar"><img src="assets/img/content/instructor-avatar-1-270x270.jpg" class="img-responsive" alt=""></div><!-- End Avatar -->
                                    <div class="instructor-info">
                                        <p class="name">Ibrahim Abo Seada</p>
                                        <span class="position">Web Developer</span>
                                        <div class="social-icons">
                                            <ul class="clearfix">
                                                <li><a href="#" class="fb-icon es-tr"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="tw-icon es-tr"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="gp-icon es-tr"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="in-icon es-tr"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Instructor Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instructor">
                                    <div class="avatar"><img src="assets/img/content/instructor-avatar-2-270x270.jpg" class="img-responsive" alt=""></div><!-- End Avatar -->
                                    <div class="instructor-info">
                                        <p class="name">Mahmoud Begha</p>
                                        <span class="position">UI Designer</span>
                                        <div class="social-icons">
                                            <ul class="clearfix">
                                                <li><a href="#" class="fb-icon es-tr"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="tw-icon es-tr"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="gp-icon es-tr"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="in-icon es-tr"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Instructor Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instructor">
                                    <div class="avatar"><img src="assets/img/content/instructor-avatar-3-270x270.jpg" class="img-responsive" alt=""></div><!-- End Avatar -->
                                    <div class="instructor-info">
                                        <p class="name">Naity Mohamed</p>
                                        <span class="position">Branding Developer</span>
                                        <div class="social-icons">
                                            <ul class="clearfix">
                                                <li><a href="#" class="fb-icon es-tr"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="tw-icon es-tr"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="gp-icon es-tr"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="in-icon es-tr"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Instructor Box -->
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instructor">
                                    <div class="avatar"><img src="assets/img/content/instructor-avatar-4-270x270.jpg" class="img-responsive" alt=""></div><!-- End Avatar -->
                                    <div class="instructor-info">
                                        <p class="name">Ahmed Abdul Halim</p>
                                        <span class="position">Web Developer</span>
                                        <div class="social-icons">
                                            <ul class="clearfix">
                                                <li><a href="#" class="fb-icon es-tr"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="tw-icon es-tr"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="gp-icon es-tr"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="in-icon es-tr"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Instructor Box -->
                            </div>
                        </div>
                    </div>
                </div><!-- End Instructors Section Content -->
            </section><!-- End Our Instructors Container -->

            <div class="clearfix"></div>

            <section class="full-section latest-courses-section">
                <div class="container">
                    <h3 class="section-title">Look at Our Latest Courses</h3>
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <div id="courses-slider" class="flexslider">
                                <ul class="slides">
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="featured-badge"><span>special</span></div>
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-1-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 1st Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-2-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 2nd Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-3-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 3rd Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-4-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 4th Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="featured-badge"><span>special</span></div>
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-2-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 5th Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-3-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 6th Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-4-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 7th Slide -->
                                    <li class="course-slide-item clearfix">
                                        <div class="col-md-12">
                                            <div class="course">
                                                <div class="course-image">
                                                    <div class="details-overlay">
                                                        <span class="place">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="text">Place : Alexandria, Miami</span>
                                                        </span>
                                                        <span class="time">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="text">Time : 7 Dec, 2015</span>
                                                        </span>
                                                    </div><!-- End Course Overlay -->
                                                    <img src="assets/img/content/course-slider-img-1-270x178.jpg" class="img-responsive" alt="">
                                                </div><!-- End Course Image -->
                                                <div class="course-info">
                                                    <h3 class="course-title"><a href="13-single-course.html" class="ln-tr">Course Name Here</a></h3>
                                                    <p class="course-description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="13-single-course.html" class="btn grad-btn orange-btn read-btn">Read More</a>
                                                        <a href="13-single-course.html" class="btn grad-btn subscribe-btn">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div><!-- End Course -->
                                        </div><!-- End col-md-12 -->
                                    </li><!-- End 8th Slide -->
                                </ul><!-- End ul Items -->
                            </div><!-- End Courses Slider -->
                        </div><!-- End 1st row -->
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="add-courses">
                                    <img src="assets/img/icons/addcourse-icon.png" alt="" class="fl add-courses-icon">
                                    <a href="#" class="add-courses-title ln-tr">You Are an Instructor ? Add Your Courses Now !</a>
                                    <p class="add-courses-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                                    </p>
                                </div><!-- End Add Courses -->
                            </div>
                        </div><!-- End 2nd row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->

            <div class="clearfix"></div>

            <section class="full-section categories-section">
                <div class="container">
                    <h3 class="section-title">See All Our Courses Classifications</h3>
                    <p class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                    </p><!-- End Section Description -->
                </div>
                <div class="section-content categories-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-1-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-user"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Self Development Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-2-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-cog"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Administrative Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-3-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-database"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Business & Finance Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-4-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-share-alt"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Social Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-5-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-desktop"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Computer and IT Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-6-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-book"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Language Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-7-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-home"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Engineering Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-8-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-heart"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Health & Medical Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-9-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-legal"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Policy and Law Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-10-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-camera"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Art and Media Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-11-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-lock"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Security and safety Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                            <div class="col-md-3 col-xs-4">
                                <div class="cat-box">
                                    <div class="cat-image">
                                        <img src="assets/img/content/course-cat-img-12-270x148.jpg" class="img-responsive" alt="">
                                        <span class="cat-icon"><i class="fa fa-send"></i></span>
                                    </div><!-- End CAT Image -->
                                    <h4 class="cat-title"><a href="10-courses-grid-1.html" class="ln-tr">Travel and Tourism Courses</a></h4>
                                    <p class="courses-counter">(<span class="nums">44</span>) Course.</p>
                                </div><!-- End Category Box -->
                            </div><!-- End col-md-3 -->
                        </div><!-- End row -->
                    </div><!-- End container -->
                </div><!-- End Categories Content -->
            </section><!-- End Categories Section -->

            <div class="clearfix"></div>

            <section class="full-section misc-section fadeInDown-animation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 basic-slider-box">
                            <div class="blog-posts">
                                <h6 class="head-title">Latest News</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="slides">
                                        <li class="post-slide-item">

                                            <div class="post clearfix">
                                                <div class="image-post fl">
                                                    <img src="assets/img/content/posts-slider-img-1-172x126.jpg" alt="">
                                                    <div class="post-date">
                                                        <span class="day">9</span>
                                                        <span class="month">Nov</span>
                                                    </div>
                                                </div><!-- End Post Image/Date -->
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="25-blog-single-right-sidebar.html" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <div class="meta">
                                                        <div class="author ib">
                                                            <span class="author-icon"><i class="fa fa-user"></i></span>
                                                            <span>By : </span><a href="#" class="ln-tr">Begha</a>
                                                        </div><!-- End Author -->
                                                        <div class="comments ib">
                                                            <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                                            <span>Comments : </span><a href="#" class="ln-tr">22</a>
                                                        </div><!-- End Comments -->
                                                    </div><!-- End Meta -->
                                                    <p class="post-description">
                                                        Lorem ipsum dolor sit amet, conssectfetufar adipiscing elit. Integer lorem quam, adipcing condimentum tristique.
                                                    </p>
                                                    <a href="#" class="read-more ln-tr">Read More</a>
                                                </div><!-- End Post Content -->
                                            </div><!-- End 1st Post -->

                                            <div class="post clearfix">
                                                <div class="image-post fl">
                                                    <img src="assets/img/content/posts-slider-img-2-172x126.jpg" alt="">
                                                    <div class="post-date">
                                                        <span class="day">9</span>
                                                        <span class="month">Nov</span>
                                                    </div>
                                                </div><!-- End Post Image/Date -->
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="25-blog-single-right-sidebar.html" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <div class="meta">
                                                        <div class="author ib">
                                                            <span class="author-icon"><i class="fa fa-user"></i></span>
                                                            <span>By : </span><a href="#" class="ln-tr">Begha</a>
                                                        </div><!-- End Author -->
                                                        <div class="comments ib">
                                                            <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                                            <span>Comments : </span><a href="#" class="ln-tr">22</a>
                                                        </div><!-- End Comments -->
                                                    </div><!-- End Meta -->
                                                    <p class="post-description">
                                                        Lorem ipsum dolor sit amet, conssectfetufar adipiscing elit. Integer lorem quam, adipcing condimentum tristique.
                                                    </p>
                                                    <a href="#" class="read-more ln-tr">Read More</a>
                                                </div><!-- End Post Content -->
                                            </div><!-- End 2nd Post -->

                                        </li><!-- End 1st Post Slide Item -->

                                        <li class="post-slide-item">

                                            <div class="post clearfix">
                                                <div class="image-post fl">
                                                    <img src="assets/img/content/posts-slider-img-2-172x126.jpg" alt="">
                                                    <div class="post-date">
                                                        <span class="day">9</span>
                                                        <span class="month">Nov</span>
                                                    </div>
                                                </div><!-- End Post Image/Date -->
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="25-blog-single-right-sidebar.html" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <div class="meta">
                                                        <div class="author ib">
                                                            <span class="author-icon"><i class="fa fa-user"></i></span>
                                                            <span>By : </span><a href="#" class="ln-tr">Begha</a>
                                                        </div><!-- End Author -->
                                                        <div class="comments ib">
                                                            <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                                            <span>Comments : </span><a href="#" class="ln-tr">22</a>
                                                        </div><!-- End Comments -->
                                                    </div><!-- End Meta -->
                                                    <p class="post-description">
                                                        Lorem ipsum dolor sit amet, conssectfetufar adipiscing elit. Integer lorem quam, adipcing condimentum tristique.
                                                    </p>
                                                    <a href="#" class="read-more ln-tr">Read More</a>
                                                </div><!-- End Post Content -->
                                            </div><!-- End 1st Post -->

                                            <div class="post clearfix">
                                                <div class="image-post fl">
                                                    <img src="assets/img/content/posts-slider-img-1-172x126.jpg" alt="">
                                                    <div class="post-date">
                                                        <span class="day">9</span>
                                                        <span class="month">Nov</span>
                                                    </div>
                                                </div><!-- End Post Image/Date -->
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="25-blog-single-right-sidebar.html" class="ln-tr">Lorem ipsum post title.</a></h3>
                                                    <div class="meta">
                                                        <div class="author ib">
                                                            <span class="author-icon"><i class="fa fa-user"></i></span>
                                                            <span>By : </span><a href="#" class="ln-tr">Begha</a>
                                                        </div><!-- End Author -->
                                                        <div class="comments ib">
                                                            <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                                            <span>Comments : </span><a href="#" class="ln-tr">22</a>
                                                        </div><!-- End Comments -->
                                                    </div><!-- End Meta -->
                                                    <p class="post-description">
                                                        Lorem ipsum dolor sit amet, conssectfetufar adipiscing elit. Integer lorem quam, adipcing condimentum tristique.
                                                    </p>
                                                    <a href="#" class="read-more ln-tr">Read More</a>
                                                </div><!-- End Post Content -->
                                            </div><!-- End 2nd Post -->

                                        </li><!-- End 2nd Post Slide Item -->
                                    </ul><!-- End ul Items -->
                                </div><!-- End Posts Slider -->
                            </div><!-- End Blog Posts/Latest News -->
                        </div><!-- End col-md-6 -->
                        <div class="col-md-6">
                            <h6 class="head-title">Why Coursaty</h6>
                            <div id="accordion-container" class="accordion">
                                <h4 class="accordion-header ln-tr">What Is Coursaty?</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. Duis dapibus aliquam mi, eget euismod sceler ut, Duis dapibus aliquam mi, eget euismod scelerisque at elit quis urna adipiscing.
                                    </p>
                                </div><!-- End 1st Item -->
                                <h4 class="accordion-header ln-tr">Why Should I Buy Coursaty?</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. Duis dapibus aliquam mi, eget euismod sceler ut, Duis dapibus aliquam mi, eget euismod scelerisque at elit quis urna adipiscing.
                                    </p>
                                </div><!-- End 2nd Item -->
                                <h4 class="accordion-header ln-tr">What Is Coursaty Features?</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. Duis dapibus aliquam mi, eget euismod sceler ut, Duis dapibus aliquam mi, eget euismod scelerisque at elit quis urna adipiscing.
                                    </p>
                                </div><!-- End 3rd Item -->
                            </div><!-- End Accordion Container -->
                        </div><!-- End col-md-6 -->
                    </div><!-- End row -->
                </div><!-- End container -->
                <div class="container our-clients">
                    <h6 class="head-title">Our Clients</h6>
                    <div class="row">
                        <div id="clients-slider" class="flexslider">
                            <ul class="slides clearfix">
                                <li class="clients-slide-item">
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-1-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-2-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-3-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-4-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-5-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-6-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                </li><!-- End 1st Slide Item -->
                                <li class="clients-slide-item">
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-1-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-2-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-3-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-4-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-5-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <div class="client"><a href="#"><img src="assets/img/content/client-img-6-170x68.jpg" alt=""></a></div><!-- End Client -->
                                    </div>
                                </li><!-- End 2nd Slide Item -->
                            </ul><!-- End ul Items -->
                        </div><!-- End Clients Slider -->
                    </div><!-- End row -->
                </div><!-- End Our Clients -->
            </section><!-- End MISC Section -->

            <div class="clearfix"></div>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget about-widget">
                                <h6 class="widget-title">About Coursaty</h6>
                                <p class="about-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                                </p>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#" class="ln-tr">About Us</a></li>
                                        <li><a href="#" class="ln-tr">Meet Our Team</a></li>
                                        <li><a href="#" class="ln-tr">Contact Us</a></li>
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
                                                <a href="#" class="ln-tr">@begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.
                                                <div class="date">Dec. 6, 2014</div>
                                            </div><!-- End Single Tweet -->
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.
                                                <div class="date">Dec. 6, 2014</div>
                                            </div><!-- End Single Tweet -->
                                        </li><!-- End 1st Tweet Slide Item -->
                                        <li>
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.
                                                <div class="date">Dec. 6, 2014</div>
                                            </div><!-- End Single Tweet -->
                                            <div class="tweet">
                                                <a href="#" class="ln-tr">@begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.
                                                <div class="date">Dec. 6, 2014</div>
                                            </div><!-- End Single Tweet -->
                                        </li><!-- End 2nd Tweet Slide Item -->
                                    </ul><!-- End ul Items -->
                                </div><!-- End Tweets Slider -->
                            </div><!-- End Twitter Widget -->
                        </div><!-- End col-md3 -->
                        <div class="col-md-4">
                            <div class="widget courses-widget">
                                <h6 class="widget-title">Latest Courses</h6>
                                <div id="footer-courses-slider" class="flexslider">
                                    <ul class="slides">
                                        <li class="clearfix">
                                            <div class="course-icon fl">
                                                <span class="icon grad-btn"><i class="fa fa-bookmark"></i></span>
                                            </div><!-- End Course Icon -->
                                            <div class="course-info">
                                                <h4 class="footer-course-title"><a href="#" class="ln-tr">How to Design website?</a></h4>
                                                <p class="footer-course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem</p>
                                                <span class="course-date">Dec 8, 2015</span>
                                            </div><!-- End Course Info -->
                                            <div class="course-icon fl">
                                                <span class="icon"><i class="fa fa-bookmark"></i></span>
                                            </div><!-- End Course Icon -->
                                            <div class="course-info">
                                                <h4 class="footer-course-title"><a href="#" class="ln-tr">How to Design website?</a></h4>
                                                <p class="footer-course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem</p>
                                                <span class="course-date">Dec 8, 2015</span>
                                            </div><!-- End Course Info -->
                                        </li><!-- End 1st Slide Item -->
                                        <li class="clearfix">
                                            <div class="course-icon fl">
                                                <span class="icon grad-btn"><i class="fa fa-bookmark"></i></span>
                                            </div><!-- End Course Icon -->
                                            <div class="course-info">
                                                <h4 class="footer-course-title"><a href="#" class="ln-tr">How to Design website?</a></h4>
                                                <p class="footer-course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem</p>
                                                <span class="course-date">Dec 8, 2015</span>
                                            </div><!-- End Course Info -->
                                            <div class="course-icon fl">
                                                <span class="icon"><i class="fa fa-bookmark"></i></span>
                                            </div><!-- End Course Icon -->
                                            <div class="course-info">
                                                <h4 class="footer-course-title"><a href="#" class="ln-tr">How to Design website?</a></h4>
                                                <p class="footer-course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem</p>
                                                <span class="course-date">Dec 8, 2015</span>
                                            </div><!-- End Course Info -->
                                        </li><!-- End 2nd Slide Item -->
                                    </ul><!--- End ul Items -->
                                </div><!-- End Footer Scourses Slider -->
                            </div><!-- End Courses Widget -->
                        </div><!-- End col-md4 -->
                        <div class="col-md-2">
                            <div class="widget links-widget">
                                <h6 class="widget-title">Quick Links</h6>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#" class="ln-tr">Help</a></li>
                                        <li><a href="#" class="ln-tr">Sitemap</a></li>
                                        <li><a href="#" class="ln-tr">Mobile</a></li>
                                        <li><a href="#" class="ln-tr">Privacy Policy</a></li>
                                        <li><a href="#" class="ln-tr">Support</a></li>
                                        <li><a href="#" class="ln-tr">Careers</a></li>
                                        <li><a href="#" class="ln-tr">Instructors</a></li>
                                    </ul>
                                </div><!-- End Footer Links -->
                            </div><!-- End Links Widget -->
                        </div><!-- End col-md2 -->
                    </div>
                </div>
                <div id="bottom">
                    <div class="container">
                        <div class="fl copyright">
                            <p>All Rights Reserved &copy; Coursaty Template | By <a target="_blank" href="http://iseada.com/" class="ln-tr">iSeada</a> & <a target="_blank" href="http://7oroof.com/" class="ln-tr">7oroof</a></p>
                        </div><!-- End Copyright -->
                        <div class="fr footer-social-icons">
                            <ul class="clearfix">
                                <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="yt-icon ln-tr"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="rss-icon ln-tr"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div><!-- End Social Media Icons -->
                    </div><!-- End container -->
                </div><!-- End Bottom Footer -->
            </footer><!-- End Footer -->
        </div><!-- End Entire Wrap -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog container">
                <div class="popup-content">
                    <div class="login-page">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="icon"><i class="fa fa-group"></i></span>
                                        <span class="text">Login Area</span>
                                        <a href="#" class="close-modal fr" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                        </a>
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" id="login_username" class="username-input" placeholder="User Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="password" id="login_password" class="password-input" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" id="login_submit" class="submit-input grad-btn ln-tr" value="Login">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 clearfix">
                                                <div class="custom-checkbox fl">
                                                    <input type="checkbox" id="login_remember" class="checkbox-input" checked>
                                                    <label for="login_remember">Remember Password</label>
                                                </div>
                                            </div><!-- end remember -->
                                            <div class="col-md-6 col-sm-6 clearfix">
                                                <div class="forgot fr">
                                                    <a href="#" class="new-user">Create New Account</a> / <a href="#" class="reset">Forget Password ?</a>
                                                </div>
                                            </div><!-- end forgot password -->
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end login form -->
                                <div class="login-options">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr fb">Login with Facebook Account</a>
                                        </div><!-- end FB login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr gp">Login with Google Account</a>
                                        </div><!-- end GP login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr tw">Login with Twitter Account</a>
                                        </div><!-- end TW login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr ya">Login with Yahoo Account</a>
                                        </div><!-- end YA login -->
                                    </div>
                                </div><!-- end login optionss -->
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- End Login Page -->
                </div><!-- End Modal Content -->
            </div><!-- End Dialog -->
        </div><!-- End Login Modal -->

        <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog container">
                <div class="popup-content">
                    <div class="login-page">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form register">
                                    <div class="login-title">
                                        <span class="icon"><i class="fa fa-group"></i></span>
                                        <span class="text">Register</span>
                                        <a href="#" class="close-modal fr" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                        </a>
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="register-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" id="reg_username" class="username-input" placeholder="User Name">
                                                </div>
                                            </div><!-- end username -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="email" id="reg_email" class="email-input" placeholder="Email">
                                                </div>
                                            </div><!-- end email -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="password" id="reg_password" class="password-input" placeholder="Password">
                                                </div>
                                            </div><!-- end password -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="password" id="reg_confirm-password" class="confirm-password-input" placeholder="Confirm Password">
                                                </div>
                                            </div><!-- end confirm password -->
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" id="reg_submit" class="submit-input grad-btn ln-tr" value="Login">
                                                </div>
                                            </div><!-- end submit -->
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end login form -->
                                <div class="login-options">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr fb">Login with Facebook Account</a>
                                        </div><!-- end FB login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr gp">Login with Google Account</a>
                                        </div><!-- end GP login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr tw">Login with Twitter Account</a>
                                        </div><!-- end TW login -->
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="login-op-btn grad-btn ln-tr ya">Login with Yahoo Account</a>
                                        </div><!-- end YA login -->
                                    </div>
                                </div><!-- end login optionss -->
                            </div><!-- end col-md-8/offset -->
                        </div><!-- end row -->
                    </div><!-- End Register Page -->
                </div><!-- End Modal Content -->
            </div><!-- End Dialog -->
        </div><!-- End Register Modal -->
        <!-- jQuery -->
        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
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
    </body>
</html>