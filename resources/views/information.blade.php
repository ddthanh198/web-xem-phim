@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/phongNgan.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap_glyphicons.css')}}">
 -->
    <!-- Comment-->

@endsection
@section('webMain')
<?php
 //var_dump($filmInfo);
$x = $filmInfo->toArray();
//print_r($x[0]["id"]);
// var_dump($comment);
// var_dump($cate);
?>
<main class="main-content">

	<div class="container">
		<div class="listkind">
			<a href="index.html">Phim mới</a>
			<a href="index.html">Thể loại</a>
			<a href="index.html">Quốc gia</a>
			<a href="index.html">Phim lẻ</a>
			<a href="index.html">Phim bộ</a>
		</div>
		<div class="page">
			<div class='info1'>
				<div class='logofilm'><img class="imgFilm" src="{{$x[0]['hinhanh']}}"> </div>
				<div class='infofilm scroll'>
					<p> 
						Tên phim: <span class="inforFilm cred">{{$x[0]['name']}}</span>
						<br>
						Quốc gia: <span class="inforFilm">{{$x[0]['nation']}}</span>
						<br>
						Tác giả:  <span class="inforFilm">{{$x[0]['author']}}</span>
						<br>
						Năm sản xuất: <span class="inforFilm">{{$x[0]['year']}}</span>
						<br>
						Thời lượng:
						<br>
						Số tập:
						<br>
						Ngôn ngữ:
						<br>
						Thể loại: <?php
							foreach ($cate as $key => $value) {
								echo '<a class="tag" href="/">'.$value->name.'</a> ' ;
							}

						?> 	
						<br>
						Lượt xem: <span class="inforFilm">{{$x[0]['views']}}</span>
						<br>
						Chất lượng:
					</p>
				</div>
			</div>
			<div class="info2 row" style="text-align: center;">
				<div class="col-md-4 col-sm-12" style="margin-top: 10px">
					<a class='button_a' href="/watch/{{$id}}"> Xem phim </a>
				</div>
				<div style="text-align: center; font-size: 25px;margin-top: 10px;" class=" col-md-8 col-sm-12">
					<span class="stargroup"><strong>Đánh Giá:&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
						<span id="star">
						<!-- <img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-on.png">
						<img class="fix" src="/images/star-off.png"> -->
						</span>
						<span id="percent" class="size20">rate: 00.00% </span><strong id="stas" class="size20">bad</strong><span class="size20" id="numDG"></span>
					</span>
				</div>
			</div>

			<div class="info3">
				<strong>Nội dung phim:</strong>
				<br>
				<br>
				<p>
					{{$x[0]['content']}}
				</p>
			</div>
			<hr>
			<strong class=" info3">Bình Luận</strong>
			<br>
				<br>
				 <div class="well">
                    <h4 class="z12">Viết bình luận ...<span class="fa fa-pen"></span></h4>
                        <div class="form-group">
                            <textarea id="Content" class="form-control" rows="1" name="Content" ></textarea>
                        </div>
                        <button  type="button" class="btn btn-primary" id="InsertComment">Gửi</button>
                    </form>
                </div>
			<div class="info4 scroll">

			 <table id="InsertCommentTable"></table>
               
                    <table class=" custom_table" id="dataTables-example" >
             
              
                     
                        <tbody>
                           @foreach($comment as $comment)
                           	

                           	<tr>
                           		<td class="iconComment" rowspan="2">
                           			<img style="padding-top:10px;padding-right: 10px" src="{{$comment->User->avatar}}"></td> 
                      			<td><strong style="color: blue">{{$comment->User->name}}</strong></td>
                           	</tr>
                           	<tr> <td>{{$comment->content}}</td></tr>
                           	<tr><td></td> <td><span  class="Like fa fa-thumbs-up"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<span class="Dislike fa fa-thumbs-down"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp {{$comment->time}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<i class="fa fa-trash-o  fa-fw"></i><a href="/Comment/Xoa/{{$comment->id}}"> Delete</a><i class="fa fa-pencil fa-fw"></i> <a href="/Admin/Admin/Sua">Edit</a><hr></td></tr>
                            @endforeach
                        </tbody>
                    </table>
             
               
			</div>
			<?php
			
			?>
		</div>
	</div> <!-- .container -->
</main>
<script type="text/javascript" src="{{asset('js/phongNgan.js')}}"></script>
	 <script type="text/javascript">
    liked = true;
    disliked= true;
    $(document).ready(function(){
    	$click=0;
        $(".Like").click(function(){
            if(liked){
                $(this).css('color', 'blue');
                alert(" Mạnh viết bựa VL'Bạn đã thích video này nhé'");
                $(".Dislike").css('color', 'black');
                liked  = false;
                dislike = true;

            } else {
                $(this).css('color', 'black');
                liked  = true;
            }   
        });
         $(".Dislike").click(function(){
            if(disliked){
            	alert('cmm');
                $(this).css('color', 'blue');
                $(".Like").css('color', 'black');
                disliked  = false;
                liked  = true;
            } else {
                $(this).css('color', 'black');
                disliked  = true;
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
					$.get("/Ajax/Like/"+$idFilm+"/"+$idUser,function(data){
                       
					})
				})
				
				$('#Dislike').click(function(){
					$idFilm=1;
					$idUser=1;
					$.get("/Ajax/Dislike/"+$idFilm+"/"+$idUser,function(data){
                       
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
              $.get("/Comment/Insert/"+$idFilm+"/"+$idUser+"/"+$content,function(data){
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
                 	alert("CommentTest");
               $("#Test").append(data);
             })
              

            })
          })
        </script>
        <script type="text/javascript">
        	var like= <?=$x[0]['liked']?>;
        	var unlike= <?=$x[0]['unliked']?>;
        	function setStar(){
        		if(like+unlike==0) console.log("Chua binh luan");
        		
        		var rate=0
        		if(like+unlike!=0)
        			rate= like/(like+unlike);
        		$("#percent")[0].innerHTML="rate: "+(rate*100)+"% ";
        		
        		rate= Math.round(rate*8);
        		if(rate<=2){
        			$("#stas")[0].innerHTML="very bad";
        			$("#stas").css("color","red");
        		}
        		else if(rate<=3){
        			$("#stas")[0].innerHTML="bad";
        			$("#stas").css("color","orange");
        		}
        		else if(rate<=4){
        			$("#stas")[0].innerHTML="normal";
        			$("#stas").css("color","green");
        		}
        		else if(rate<=6){
        			$("#stas")[0].innerHTML="good";
        			$("#stas").css("color","green");
        		}
        		else if(rate<=7){
        			$("#stas")[0].innerHTML="very good";
        			$("#stas").css("color","green");
        		}
        		else if(rate<=8){
        			$("#stas")[0].innerHTML="amazing";
        			$("#stas").css("color","green");
        		}
        		for(let i=0 ; i<rate;i++){
        			$("#star")[0].innerHTML+='<img class="fix" src="/images/star-on.png">';
        		}
        		for(let i=rate;i<8;i++){
        			$("#star")[0].innerHTML+='<img class="fix" src="/images/star-off.png">';
        		}
        		$("#numDG")[0].innerHTML="("+(like+unlike)+" đánh giá)";
        	}
       		document.onload= setStar();
        </script>
@endsection