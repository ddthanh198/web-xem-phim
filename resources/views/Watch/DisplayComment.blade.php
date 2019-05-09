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


                $RightFilm=Film::where('id','like','%'.$idFilm."%")->take(4)->get();
                
               $film=Film::where('id','like','%'.$idFilm."%")->get()->shift();
               $idFilm=$film->id;
                $comment=Comment::where('idFilm',$idFilm)->get();
                
                 $Liked=-1;
              if($idUser!=0){
                $danhgia=DanhGia::where('idUser',$idUser)->where('idFilm',$idFilm)->get();
                if(count($danhgia)>0) $danhgiaOld=$danhgia->shift();
                $Liked=$danhgiaOld->Liked;
              }
             echo $Liked;

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
                  <div><h3>Ten Phim</h3>
                    
                    <a>Luợt xem: {{$film->views}}</a>
                    
                <a style="float: right">
                  @if($idUser!=0)
<button  
@if($Liked==1)
style='font-size:24px;border:none;background-color: blue' ;
@else style='font-size:24px;border:none;background-color: white' ;
@endif()
name="like" id="Like" ><i class="fa fa-thumbs-up fa-1.5x"></i></button> 
  <button  
  @if($Liked==-0)
style='font-size:24px;border:none;background-color: blue' ;
@else style='font-size:24px;border:none;background-color: white' ;
@endif()
   name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down fa-1.5x"></i> </button>  
  @endif
  <button  style='font-size:24px;border:none;background-color: white' name="Download" id="Share" ><i class="fa fa-share fa-1.5x"></i></button>
  <button  style='font-size:24px;border:none;background-color: white' name="Save" id="Save" ><i class="fa fa-save fa-1.5x"></i></button></a>
  <br>
</div>
                  <hr>
                  @if($idUser!=0)
                       <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                  
                       
                        <div class="form-group">
                            <textarea id="Content" class="form-control" rows="1" name="Content" ></textarea>
                        </div>
                        <button  type="button" class="btn btn-primary" id="ButtonInsertComment">Gửi</button>

                    </form>
                </div>
                @endif
               <!-- Hiển thị tất cả comment-->
             
            <table id="InsertCommentTable"></table>
               
                    <table class="table table-striped  table-hover" id="dataTables-example">
             
              
                     
                        <tbody>
                           @foreach($comment as $comment)
                           
                            <tr class="odd gradeX" align="center" >
                                <td class="Comment" IdComment="11" style="text-align: left;"><b>{{$comment->User->name}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp{{$comment->time}}</td>

                                <td></td>
                               
                                
                               
                               
                                <td class="center"></td>
                              @if($idUser==$comment->iduser)
                                <td style="text-align: right"><i class="fa fa-trash-o  fa-fw"></i><a href="Comment/Xoa/{{$comment->id}}"> Delete</a>
                                   
                                <button  style='font-size:24px;border:none;background-color: white' name="Save" class="ButtonEditComment" EditComment="{{$comment->id}}" ><i class="fa fa-save fa-1.5x" ></i></button></a>
                               @endif
                            </tr>
                            <tr style="background-color: pink">
                              <td colspan="5" id="{{$comment->id}}" >{{$comment->content}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: left"><button  style='font-size:24px;border:none;background-color: white' name="like" id="Like" ><i class="fa fa-thumbs-up"></i></button>&nbsp;&nbsp;
                              <button  style='font-size:24px;border:none;background-color: white' name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down "></i> &nbsp;&nbsp;</button><a id="TraLoi" >Trả Lời</a>  </td>

                            </tr>
                            <tr><td></td></tr>
                            @endforeach
 
     
                        </tbody>
                    </table>
              
               
              
               <!-- Hiển thị tất cả comment-->

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                   @foreach($RightFilm as $RF)
              

                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a class="RightFilm" RightFilm="{{$RF->id}}">
                     <video controls="" width="400px" >
                      <source src="{{$RF->source}}" type="video/mp4">
                    </video>
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
      $click=<?php echo $Liked?>;
       $idFilm=<?php echo $idFilm; ?>;
       $idUser=<?php echo $idUser; ?>;

        $("#Like").click(function(){
         if($click==1){
           alert($click);
          $click=-1;
            $(this).css('background-color', 'white');
              alert("Bạn đã bỏ thích");
           
              $.get("Ajax/DestroyLike/"+$idUser+"/"+$idFilm,function(data){
                        $("#Like").hmtl(data);
          })
         }
         else{
           alert($click);
          $click=1;
          
            $(this).css('background-color', 'blue');
                alert("Bạn đã thích video này nhé"); 
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
                alert("Bạn đã bỏ thích video này nhé"); 
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
      $(".ButtonEditComment" ).click(function() {
     $IdComment=$(this).attr("EditComment");
     alert($IdComment);
     $.get("EditComment/"+$IdComment,function(data){
         $("#"+$IdComment).html(data);
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
      </script>
      
   
   
   
    
    


 





  
        </body>
   
