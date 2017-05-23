@section('title','Contact')
@section('contactCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')

<div class="inner-head">
                <div class="container">
                    <h1 class="entry-title">CONTACT US</h1>
                    <p class="description">
                        Let us know what you think about AcademUA
                    </p>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->
            <div class="clearfix"></div>
            <section class="full-section latest-courses-section no-slider">
                <div class="section-content latest-courses-content fadeInDown-animation">
                    <div class="container">
                        <div class="row">


<div class="containercontact">
  <form action="/action_page.php">
  
    <label for="mail">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    
    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
     <input type="submit" value="Submit">
  </form>
</div>



