@extends ('template')

@section('menu')
    <h1>
        Listado
    </h1>


    @foreach ($posts as $post)
        <p> <strong>{{ $post->id }}</strong>
            <a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a>
        </p>
        <span>{{ $post -> user -> name }}</span>
        <hr>
    @endforeach

{{ $posts -> links() }}

@endsection
