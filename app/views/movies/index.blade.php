@foreach($movies as $movie)
    <h3>{{ $movie->title }}</h3>
    <p>Genres:</p>
    <ul>
    @foreach($movie->genres as $genre)
        <li>{{ $genre->name }} </li>
    @endforeach
    </ul>
@endforeach