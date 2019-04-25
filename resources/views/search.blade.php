@extends('mainframe')
@section('title')
<title>Movie Review | Review</title>
@endsection
@section('webMain')

<main class="main-content">
    <div class="container">
        <h2>Tìm kiếm: fast 8</h2>

        <div class="movie-list">
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-3.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Maleficient</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-4.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">The adventure of Tintin</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-5.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Hobbit</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-6.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Exists</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-1.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Drive hard</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-2.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Robocop</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-7.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">Life of Pi</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
            <div class="movie">
                <figure class="movie-poster"><img src="dummy/thumb-8.jpg" alt="#"></figure>
                <div class="movie-title"><a href="single.html">The Colony</a></div>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
            </div>
        </div> .movie-list

        <div class="pagination">
				<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
				<span class="page-number current">1</span>
				<a href="#" class="page-number">2</a>
				<a href="#" class="page-number">3</a>
				<a href="#" class="page-number">4</a>
				<a href="#" class="page-number">5</a>
				<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
			</div>
    </div>


</main>

@endsection