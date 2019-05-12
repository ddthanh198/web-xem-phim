<<<<<<< HEAD

<!DOCTYPE html>
<html>
<head>
		<base href="{{asset('')}}">
	<title></title>
	<style type="text/css">
		.red{background-color: red; }
		.blue{background-color: blue; }
		.gray{background-color: gray; }
		.green{background-color: green; }
		.black{background-color: black; }
	
	</style>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body >	
		<div class="dropdown open">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown
			</button>
			<div class="dropdown-menu" id="dropdown1" aria-labelledby="dropdownMenu1">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Action</a>
			</div>
		</div>

</body>
</html>
https://xpsp2p1.playphim.info/drive/hls/dfe7f7ebfde6d4d2dbc8a775ca969d86/dfe7f7ebfde6d4d2dbc8a775ca969d86162.html?ch=dfe7f7ebfde6d4d2dbc8a775ca969d86&s=4315559&l=236128
=======
<<<<<<< HEAD
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
               $idFilm=1;
                $comment=Comment::where('idFilm',$idFilm)->get();
                $film=Film::where('id',$idFilm)->get()->shift();
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
          $idUser=1;
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
        $idFilm=1;
          $idUser=1;
              $content=$("#Content").val();
             alert(1);
              $.get("Comment/Insert/"+$idFilm+"/"+$idUser+"/"+$content,function(data){
               $("#InsertCommentTable").append(data);
             })
            
           })
})
    </script>
     <script type="text/javascript">
          $(document).ready(function(){
            $(".Comment").click(function(){
              $idFilm=1;
          $idUser=1;
              
                 $id=$(this).attr("IdComment");
                 alert($id);
                 $.get("CommentTest",function(data){
               $("#Test").append(data);
             })
              

            })
          })
        </script>
        </body>
=======

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="testStyle.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Carousel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div> -->
     <div class="slider">
          <ul class="slides">
               <li><a href="/watch/12345"><img src="dummy/slide-1.jpg" alt="Slide 1"></a></li>
               <li><a href="/watch/12345"><img src="dummy/slide-2.jpg" alt="Slide 2"></a></li>
               <li><a href="#"><img src="dummy/slide-3.jpg" alt="Slide 3"></a></li>
          </ul>
     </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">


  </div><!-- /.container -->

  </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="testJS.js"><\/script>')</script><script src="testJS.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
>>>>>>> 83837fcb7daf3c33bb36f61846a662266d41e361
>>>>>>> 4a5551439239987e0a7664426cb95a4df7a725b8
