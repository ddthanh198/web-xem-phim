<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<base href="{{asset('')}}">
		<title>Movie Review</title>


   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- Comment-->
<<<<<<< HEAD

    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

=======
<<<<<<< HEAD
    <link href="/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

   

    <!-- Custom CSS -->
    <link href="/admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

=======
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">
>>>>>>> af3950bfbad09599f95c528ca76f29c19f9ff187
>>>>>>> develop
    <!-- Custom Fonts -->
    <link href="/admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Comment-->

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> develop
		<link rel="stylesheet" href="/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
<<<<<<< HEAD

=======
=======
		<link rel="stylesheet" href="style.css">
>>>>>>> af3950bfbad09599f95c528ca76f29c19f9ff187
>>>>>>> develop

        <!-- Bootstrap Core CSS -->
    <link href="/font/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
<<<<<<< HEAD

    <link href="font/css/shop-homepage.css" rel="stylesheet">
    	<link href="font/css/my.css" rel="stylesheet">

=======
<<<<<<< HEAD
    <link href="/font/css/shop-homepage.css" rel="stylesheet">
    <link href="/font/css/my.css" rel="stylesheet">
=======
    <link href="font/css/shop-homepage.css" rel="stylesheet">
    	<link href="font/css/my.css" rel="stylesheet">
>>>>>>> af3950bfbad09599f95c528ca76f29c19f9ff187
>>>>>>> develop
		
        <style type="text/css">
        	table {
  border:none;
}
        </style>
         
	</head>


	<body>
		  <?php 
               use App\Comment;
               use App\Film;
               
                $comment=Comment::where('idFilm',$idFilm)->get();
                $film=Film::where('id',$idFilm)->get()->shift();
               ?>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Company Name</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="review.html">Movie reviews</a></li>
							<li class="menu-item"><a href="joinus.html">Join us</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Hi...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

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
											<source src="/upload/film/cmm.mp4" type="video/mp4">
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
               
                    <table class="table table-striped  table-hover" id="dataTables-example" >
             
              
                     
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
                            	<button  style='font-size:24px;border:none;background-color: white' name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down "></i> &nbsp;&nbsp;</button><a id="TraLoi" >Trả Lời</a>	</td>

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
											<a href="#"><img src="/dummy/thumb-1.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="/dummy/thumb-2.jpg" alt="Movie 2"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="/dummy/thumb-2.jpg" alt="Movie 2"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="/dummy/thumb-2.jpg" alt="Movie 2"></a>
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
		<script type="text/javascript">
			$(document).ready(function{
				$("#Like").click(function{
					alert(1);
				})
			})
		</script>
 
	</body>

</html> 