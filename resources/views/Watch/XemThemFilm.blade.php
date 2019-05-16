  @foreach($RightFilm as $RF)
              
 <div class="row">
                   <div class="col-sm-6 col-md-12">
                                        <div class="latest-movie">
                                          @foreach($RightFilm as $RF)
                                          <a>{{$RF->name}}</a>
                                        <a class="RightFilm" RightFilm="{{$RF->id}}"><img src="upload/hinhanh/{{$RF->hinhanh}}" alt="Slide 1"></a>
                                        @endforeach

                                        </div>
                                    </div>
                                  </div>
                 @endforeach
                 <script type="text/javascript">
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