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
	






    if($number == 4){
        echo "<div class='clearfix'></div>";
    }
}

?>

<!-- PAGINATION -->
<div class="clearfix"></div>

<div class="text-center">
   

    {{$sessions->links()}}


</div>
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
