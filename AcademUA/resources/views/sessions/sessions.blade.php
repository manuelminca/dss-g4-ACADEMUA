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
 <?php
 $number = 0;
 use Illuminate\Support\Facades\Auth;
//Mostramos las sesiones
foreach ($sessions as $session) {
    $number = $number+1;
	
    echo $session->title;
    echo "<br>";






    if($number == 4){
        echo "<div class='clearfix'></div>";
    }
}

?>

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






<!-- PAGINATION -->
<div class="clearfix"></div>

<div class="text-center">
   

    {{$sessions->links()}}


</div>
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
