<?php
use App\FilmAndCategory

?>

 <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Menu
                    </li>
                       @foreach($category as $category)
                    <li href="#" class="list-group-item menu1">
                    	{{$category->name}}
                    </li>
                    <ul>
                    	
                        <?php $FilmAndCategory=FilmAndCategory::where('idCategory','like',$category->id)->get(); ?>
                    	
                    	@foreach($FilmAndCategory as $id)
                		<li class="list-group-item">
                			<a href="#">{{$id->idFilm}}</a>
                		</li>
                		@endforeach
                    </ul>

                   @endforeach
            </div>
