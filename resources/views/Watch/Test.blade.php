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
  if(Auth::User( Auth::user()->name))  {
    $nguoidung=Auth::user();
    $idUser=$nguoidung->id;
  }
else $idUser=0;

               use App\Comment;
               use App\Film;
               $film=Film::where('id','like','%'.$idFilm."%")->get()->shift();
               $idFilm=$film->id;
                $comment=Comment::where('idFilm',$idFilm)->get();
                
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
<button  style='font-size:24px;border:none;background-color: white' name="like" id="Like" ><i class="fa fa-thumbs-up fa-1.5x"></i></button> 
  <button  style='font-size:24px;border:none;background-color: white' name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down fa-1.5x"></i> </button>  
  
  <button  style='font-size:24px;border:none;background-color: white' name="Download" id="Share" ><i class="fa fa-share fa-1.5x"></i></button>
  <button  style='font-size:24px;border:none;background-color: white' name="Save" id="Save" ><i class="fa fa-save fa-1.5x"></i></button></a>
  <br>
</div>
                  <hr>
                 
                       <div class="well">

                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                  
                       
                        <div class="form-group">
                            <textarea id="Content" class="form-control" rows="1" name="Content" ></textarea>
                        </div>
                        <button  type="button" class="btn btn-primary" id="InsertComment">Gửi</button>

                    </form>
                </div>
              
             
               <!-- Hiển thị tất cả comment-->
             
            <table id="InsertCommentTable"></table>
               
                    <table class="table table-striped  table-hover" id="dataTables-example">
             
              
                     
                        <tbody>
                           @foreach($comment as $comment)
                           
                            <tr class="odd gradeX" align="center" >
                                <td class="Comment" IdComment="11" style="text-align: left;"><b>{{$comment->User->name}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp{{$comment->time}}</td>
                                <td></td>
                               
                                
                               
                               
                                <td class="center"></td>
                                <td style="text-align: right"><i class="fa fa-trash-o  fa-fw"></i><a href="Comment/Xoa/{{$comment->id}}"> Delete</a><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Admin/Sua">Edit</a></td>
                            </tr>
                            <tr style="background-color: pink">
                              <td colspan="5">{{$comment->content}}</td>
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
                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a href="#"><img src="dummy/thumb-1.jpg" alt="Movie 1"></a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a href="#"><img src="dummy/thumb-2.jpg" alt="Movie 2"></a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a href="#"><img src="dummy/thumb-2.jpg" alt="Movie 2"></a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                      <a href="#"><img src="dummy/thumb-2.jpg" alt="Movie 2"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            
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
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">Recent Review</h3>
                <ul class="no-bullet">
                  <li><a href="#">Lorem ipsum dolor</a></li>
                  <li><a href="#">Sit amet consecture</a></li>
                  <li><a href="#">Dolorem respequem</a></li>
                  <li><a href="#">Invenore veritae</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">Help Center</h3>
                <ul class="no-bullet">
                  <li><a href="#">Lorem ipsum dolor</a></li>
                  <li><a href="#">Sit amet consecture</a></li>
                  <li><a href="#">Dolorem respequem</a></li>
                  <li><a href="#">Invenore veritae</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">Join Us</h3>
                <ul class="no-bullet">
                  <li><a href="#">Lorem ipsum dolor</a></li>
                  <li><a href="#">Sit amet consecture</a></li>
                  <li><a href="#">Dolorem respequem</a></li>
                  <li><a href="#">Invenore veritae</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">Social Media</h3>
                <ul class="no-bullet">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Google+</a></li>
                  <li><a href="#">Pinterest</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">Newsletter</h3>
                <form action="#" class="subscribe-form">
                  <input type="text" placeholder="Email Address">
                </form>
              </div>
            </div>
          </div> <!-- .row -->

          <div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
        </div> <!-- .container -->

      </footer>
      
    </div>
    <!-- Default snippet for navigation -->
    

 
    
      
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
     <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
      $click=0;
        $("#Like").click(function(){
            if(clicked){
                $(this).css('background-color', 'blue');
                alert("Bạn đã thích video này nhé");
                $("#Dislike").css('background-color', 'white');
                clicked  = false;

            } else {
                $(this).css('background-color', 'white');
                clicked  = true;
            }   
        });
         $("#Dislike").click(function(){
            if(clicked){
              alert('cmm');
                $(this).css('background-color', 'blue');
                $("#Like").css('background-color', 'white');
                clicked  = false;
            } else {
                $(this).css('background-color', 'white');
                clicked  = true;
            }   
        });

    });
    </script>
    <!-- Color Like And DisLike-->
    <script type="text/javascript">
      $(document).ready(function(){
        
        $('#Like').click(function(){
          $idFilm=1;
          $idUser=<? $idUser ?>
          $.get("Ajax/Like/"+$idFilm+"/"+$idUser,function(data){
                       
          })
        })
        
        $('#Dislike').click(function(){
          $idFilm=1;
          $idUser=1;
          $.get("Ajax/Dislike/"+$idFilm+"/"+$idUser,function(data){
                       
          })
        })
      })
    </script>
    <!-- InsertComment-->
    
    <script type="text/javascript">
      $(document).ready(function(){
      $("#InsertComment" ).click(function() {
    alert(1);
            
           })
})
    </script>







    <!-- Xóa Comment -->
     <script type="text/javascript">
          $(document).ready(function(){
            $(".Comment").click(function(){
              $idFilm=<?php $idFilm?>;
          $idUser=<?php $idUser ?>;
              
                 $id=$(this).attr("IdComment");
                 alert("InsertComment");
                 $.get("CommentTest",function(data){
               $("#InsertComment").append(data);
             })
              

            })
          })
        </script>
        </body>