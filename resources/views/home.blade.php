<?php 
use Illuminate\Support\Facades\Auth;
?>
@extends('mainframe')
@section('title')
<title>Movie Review</title>
@endsection
@section('webMain')


<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
    <link href="font/css/bootstrap.min.css" rel="stylesheet">

   
    
        <style type="text/css">
          table {
  border:none;
}
        </style>
         
  
        <body>
  <?php 
  use App\Comment;
  use App\Film;
  use App\DanhGia;
  $idUser=0;
  if(Auth::User())  {
    $nguoidung=Auth::user();
    $idUser=$nguoidung->id;
    
  }
else $idUser=0;
$idFilm=1;

                $RightFilm=Film::where('NoiBat',1)->get()->sortByDesc('created_at')->take(4);
                
               $film=$RightFilm->shift();
               $idFilm=$film->id;
              

                ?>

<div id="InsertComment">
 <main class="main-content">
                <div class="container">
                    <div class="page">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="slider">
                                    <ul class="slides">
                                        @foreach($RightFilm as $RF)
                                        <li><a class="RightFilm" RightFilm="{{$RF->id}}"><img src="upload/hinhanh/{{$RF->hinhanh}}" alt="Slide 1"></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="latest-movie">
                                          @foreach($RightFilm as $RF)
                                          <a>{{$RF->name}}</a>
                                        <a class="RightFilm" RightFilm="{{$RF->id}}"><img src="upload/hinhanh/{{$RF->hinhanh}}" alt="Slide 1"></a>
                                        @endforeach

                                        </div>
                                    </div>
                                     <div class="col-sm-6 col-md-12">
                                        <div class="latest-movie">
                                         <div id="HienThiFilm"></div>
           <div style="padding-left: 80px;"> <button id="XemThemFilm" >Xem Thêm</button></div>
                                       
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- .row -->
                       
                        
                       
                    </div>
                </div> <!-- .container -->
            </main>
        </div>
        
        <script type="text/javascript">
      $(document).ready(function(){
            $("#ButtonSearch").click(function(){
                
                 $TextSearch=$("#TextSearch").val();
                 alert("DisPlayComment");
                 $.get("SearchFilm/"+$TextSearch,function(data){
                      $("#InsertComment").html(data);
                 })
               
              

            })
          })
      //hiển thị thêm Film
     $TrangFilm=-1;
    $(document).ready(function(){
      $("#XemThemFilm").click(function(){
        $TrangFilm++;
        alert($TrangFilm);
        $.get("XemThemFilmHome/"+$TrangFilm,function(data){
           $("#HienThiFilm").append(data);
      })
      })
    })
      //xem film
       $(document).ready(function(){
          $(".RightFilm").click(function(){
            $Film=$(this).attr("RightFilm");
            alert($Film);
            $.get("RightFilm/"+$Film,function(data){
              $("#InsertComment").html(data);
            })
          })
        })
</script>
@endsection