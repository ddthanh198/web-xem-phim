@extends('Layout.index');
@section('Content')
<?php use App\FilmAndCategory; ?>
<!-- Page Content -->

    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    	<?php $count=0;?>
                    	@foreach($filmHome as $film)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$count}}" 
                        @if($count==0)
                        class="active">
                        @endif	
                        </li>
                        <?php $count++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                    	<?php $count=0;?>
                    	@foreach($filmHome as $film)
                        <div 
                        @if($count==0)
                        class="item active"
                        @else class="item"
                        @endif
                        >
                        <?php $count++ ?>

                        <a href="#">
                             <img class="slide-image" src="font/image/800x300.png" alt="" width=""> </a>
                        </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
           @include('Layout.menu');
            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
	            		@foreach($category as $category)
					    <div class="row-item row">
		                	<h3>
		                		<a href="category.html">{{$category->name}}</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<!--tìm phim nổi bật trong thể loại -->
		                	<?php 

                            
                            
		                	?>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="font/image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
			                        <h3></h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							
							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                @endforeach
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    @endsection