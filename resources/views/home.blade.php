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
    
    

    <div id="site-content">
     

         

          <div class="mobile-navigation"></div>
        </div>
      </header>
       <main class="main-content">
        <div class="container">
          <div class="page">
            <div class="row">
              <div class="col-md-9">
                <div class="slider">
                  <div class="slides" >
                    <video controls="" width="800px" >
                      <source src="upload/film/cmm.mp4" type="video/mp4">
                    </video>
                  </div>
                 
                 
              
               
              
               <!-- Hiển thị tất cả comment-->

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                   @foreach($RightFilm as $RF)
              

                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a class="RightFilm" RightFilm="{{$RF->id}}">
                     <img src="upload/hinhanh/{{$RF->hinhanh}}">
                  </a>
                    </div>
                  </div>
                 @endforeach
                </div>
              </div>
            </div> 
            
           
          </div>
        </div> <!-- .container -->
      </main>
     
      
    </div>
    <!-- Default snippet for navigation -->
    

 
      <script type="text/javascript">
   
    $(document).ready(function(){
      

        $("#Like").click(function(){
         if($click==1){
           alert($click);
          $click=-1;
            $(this).css('background-color', 'white');
              alert("Bạn đã bỏ thích");
           
              $.get("Ajax/DestroyLike/"+$idUser+"/"+$idFilm,function(data){
                       
          })
         }
         else{
           alert($click);
          $click=1;
          
            $(this).css('background-color', 'blue');
                alert("Bạn đã  video này nhé"); 
                $("#Dislike").css('background-color', 'white');
                 $.get("Ajax/Like/"+$idUser+"/"+$idFilm,function(data){
                       
          })
         }
        })

         $("#Dislike").click(function(){
         if($click==0){
           alert($click);
          $click=-1;
            $(this).css('background-color', 'white');
              alert("Bạn đã bỏ không thích");
           
              $.get("Ajax/DestroyLike/"+$idUser+"/"+$idFilm,function(data){
                        $("#Like").hmtl(data);
          })
         }
         else{
           alert($click);
          $click=0;
          
            $(this).css('background-color', 'blue');
                alert("Bạn không thích video này nhé"); 
                $("#Like").css('background-color', 'white');
                 $.get("Ajax/Dislike/"+$idUser+"/"+$idFilm,function(data){
                       
          })
         }
        })

      })





     //insertComment
        $(document).ready(function(){
      $("#ButtonInsertComment" ).click(function() {
       $idFilm=<?php echo $idFilm; ?>;
       $idUser=<?php echo $idUser; ?>;
     

              $content=$("#Content").val();
             
           
              $.get("Comment/Insert/"+$idFilm+"/"+$idUser+"/"+$content,function(data){
                alert("InsertComment");
               $("#InsertCommentTable").append(data);
             })
            
           })
})
       
      
          $(document).ready(function(){
          $(".RightFilm").click(function(){
            $Film=$(this).attr("RightFilm");
            alert($Film);
            $.get("RightFilm/"+$Film,function(data){
              $("#InsertComment").html(data);
            })
          })
        })
//xóa comment
      $(document).ready(function(){
        $(".DeleteComment").click(function(){
          $id=$(this).attr("DeleteComment");
           $("#Change"+$id).html("");
          $.get("DeleteComment/"+$id,function(data){
           
          })
          
        })
      })
      //EditComment
       $(document).ready(function(){
      $(".ButtonEditComment" ).click(function() {
     $IdComment=$(this).attr("EditComment");
     alert($IdComment);
     $.get("EditComment/"+$IdComment,function(data){
         $("#"+$IdComment).html(data);
     })
            
           })
})
      </script>
      
   
   
   
    
    


 





  
        </body>
   
@endsection