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
    echo $idUser;
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
                                        <li><a href="https://www.youtube.com/watch?v=JgidK9DTsKk"><img src="upload/hinhanh/{{$RF->hinhanh}}" alt="Slide 1"></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="latest-movie">
                                          @foreach($RightFilm as $RF)
                                        <li><a href="https://www.youtube.com/watch?v=JgidK9DTsKk"><img src="upload/hinhanh/{{$RF->hinhanh}}" alt="Slide 1"></a></li>
                                        @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- .row -->
                       
                        
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="section-title">December premiere</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <ul class="movie-schedule">
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                </ul> <!-- .movie-schedule -->
                            </div>
                            <div class="col-md-4">
                                <h2 class="section-title">November premiere</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <ul class="movie-schedule">
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                </ul> <!-- .movie-schedule -->
                            </div>
                            <div class="col-md-4">
                                <h2 class="section-title">October premiere</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <ul class="movie-schedule">
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                    <li>
                                        <div class="date">16/12</div>
                                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                                    </li>
                                </ul> <!-- .movie-schedule -->
                            </div>
                        </div>
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
      
</script>
@endsection