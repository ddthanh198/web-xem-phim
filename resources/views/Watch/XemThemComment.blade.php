<?php use Illuminate\Support\Facades\Auth;
 if(Auth::User())  {
    $nguoidung=Auth::user();
    $idUser=$nguoidung->id;
    
  }
else $idUser=0;
 ?>
 @foreach($comment as $comment)
<table class="table table-striped  table-hover" id="dataTables-example">
             
              
                       
                        <tbody id="Change{{$comment->id}}">
                          
                           
                            <tr class="odd gradeX" align="center"  >
                                <td class="Comment" IdComment="11" style="text-align: left;"><b>{{$comment->User->name}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp{{$comment->time}}</td>

                                <td></td>
                               
                                
                               
                               
                                <td class="center"></td>
                              @if($idUser==$comment->iduser)
                              <td style="text-align: right"><button class="DeleteComment" DeleteComment="{{$comment->id}}">  <i class="fa fa-trash-o  fa-fw"></i></button>
                                   
                                <button  style='font-size:24px;border:none;background-color: white' name="EditComment" class="ButtonEditComment" EditComment="{{$comment->id}}" ><i class="fa fa-pencil fa-1.5x" ></i></button>
                              
                               @endif
                            </tr>
                            <tr style="background-color: pink">
                              <td colspan="5" id="{{$comment->id}}" >{{$comment->content}}</td>
                            </tr>
                            
                            

                            
 
     
                        </tbody>
                       
                    </table>
                    <br>
                     @endforeach
                     <script type="text/javascript">
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