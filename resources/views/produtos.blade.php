@extends ('layouts.app')

@section('content')

<ul>

    @foreach($produtos as $produto)
        <li>{{$produto->nome_produto}} </li>
    @endforeach

</ul>
{{$produtos->links()}}

@endsection