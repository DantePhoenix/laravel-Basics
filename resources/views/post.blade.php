@extends ('template')

@section('menu')
<h1>{{ $post -> title}}</h1>

<p> {{ $post -> body}}</p>

    @endsection