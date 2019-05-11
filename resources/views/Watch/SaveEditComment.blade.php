<div id="Comment">
<table>
	<tr ><input size="100" type="text" name="" id="EditComment" value="{{$comment->content}}" ></tr>
	<tr><hr></tr>
	<tr><a style="float:right;" id="SaveComment"><button>Lưu</button></a><a id="CancelComment"><button>Hủy</button></a></tr>
</table>
</div>

<script type="text/javascript">
	  //SaveEditComment 
         $(document).ready(function(){
          $("#SaveComment").click(function(){
            $content=$("#EditComment").val();
            $id=<?php echo $comment->id; ?>;

            $.get("SaveEditComment/"+$content+"/"+$id,function(data){
            	$("#Comment").html(data);
            })
            
          })
          //CancelEditComment
          $("#CancelComment").click(function(){
            
            $("#Comment").html("{{$comment->content}}");
            
          })
        })
      
</script>