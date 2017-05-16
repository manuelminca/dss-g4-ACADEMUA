@section('title','New Message')
@section('newMessageCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">ADD MESSAGE</h1>
                    <p class="description">
                        Please enter all the data required to create a new message.
                    </p>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section no-slider">

<ul>
            <form action="/messages/create/" >
            <div class="login-page" style="width:80%; margin:0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Create a new message</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" value="{{ old('subject') }}" name="subject" placeholder = "Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                           
                                                    <input  value="{{ old('receiver') }}" type="text" name="receiver" placeholder = "Receiver">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input">
                                                
                                                    <input  value="{{ old('message') }}" type="text" name="message" placeholder = "Message" >
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

@include('footer')