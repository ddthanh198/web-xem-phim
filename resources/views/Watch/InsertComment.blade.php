<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
    <link href="font/css/bootstrap.min.css" rel="stylesheet">

   
    
        <style type="text/css">
          table {
  border:none;
}
        </style>
        <body>
<<<<<<< HEAD
        	
        	 <table class="table table-striped  table-hover"  width="800px">
=======
            
             <table class="table table-striped  table-hover"  width="800px">
>>>>>>> develop
             
              
                     
                        <tbody>
                          
                           
                            <tr class="odd gradeX" align="center" width="800px">
                                <td  style="text-align: left;" width="637px"><b>{{$comment->User->name}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp{{$comment->time}}</td>
                                <td ></td>
                               
                                
                               
                               
                                <td class="center"></td>
                                <td style="text-align: right"><i class="fa fa-trash-o  fa-fw"></i><a href="Comment/Xoa/{{$comment->id}}"> Delete</a><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Admin/Sua">Edit</a></td>
                            </tr>
                            <tr style="background-color: pink">
<<<<<<< HEAD
                            	<td colspan="5">{{$comment->content}}</td>
                            </tr>
                            <tr>
                            	<td style="text-align: left"><button  style='font-size:24px;border:none;background-color: white' name="like" id="Like" ><i class="fa fa-thumbs-up"></i></button>&nbsp;&nbsp;
                            	<button  style='font-size:24px;border:none;background-color: white' name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down "></i> &nbsp;&nbsp;</button><a id="TraLoi" >Trả Lời</a>	</td>
=======
                                <td colspan="5">{{$comment->content}}</td>
                            </tr>
                            <tr>
                                <td style="text-align: left"><button  style='font-size:24px;border:none;background-color: white' name="like" id="Like" ><i class="fa fa-thumbs-up"></i></button>&nbsp;&nbsp;
                                <button  style='font-size:24px;border:none;background-color: white' name="Dislike" id="Dislike" ><i class="fa fa-thumbs-down "></i> &nbsp;&nbsp;</button><a id="TraLoi" >Trả Lời</a>  </td>
>>>>>>> develop

                            </tr>
                            <tr><td></td></tr>
                            
                        </tbody>
                    </table>
             
        </body>