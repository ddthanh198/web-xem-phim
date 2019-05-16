<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
    <link href="font/css/bootstrap.min.css" rel="stylesheet">

   
    
        <style type="text/css">
          table {
  border:none;
}
        </style>
        <body>
            
              <table class="table table-striped  table-hover" id="dataTables-example" style="background-color: white;">
             
              
                     
                        <tbody id="Change{{$comment->id}}">
                          
                           
                            <tr class="odd gradeX" align="center" width="800px" style="background-color: gray">
                                <td  style="text-align: left;" width="700px;" ><b>{{$comment->User->name}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp{{$comment->time}}</td>
                                <td ></td>
                               
                                
                               
                               
                               
                                 
                                <td style="text-align: right"><button  style="border:none;" name="EditComment" class="DeleteComment" DeleteComment="{{$comment->id}}" ><i class="fa fa-trash-o  fa-fw"></i></button>
                                   
                                <button  style='border:none;' name="EditComment" class="ButtonEditComment" EditComment="{{$comment->id}}" ><i class="fa fa-pencil " ></i></button>
                              
                               
                            </tr>
                            <tr  >
                                 <td colspan="5" id="{{$comment->id}}" >{{$comment->content}}</td>
                            </tr>
                           
                            <tr><td></td></tr>
                            
                        </tbody>
                    </table>
             
        </body>
        <!--Xóa Comment -->
        <script type="text/javascript">
             $(document).ready(function(){
        $(".DeleteComment").click(function(){
          $id=$(this).attr("DeleteComment");
           $("#Change"+$id).remove();
          $.get("DeleteComment/"+$id,function(data){
           
          })
          
        })
      })
       <!-- EditComment-->
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