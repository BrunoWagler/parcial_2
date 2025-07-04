@extends('layoutsmural.estrutura')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Murais</h1>

    @foreach ($avisos as $aviso)
        <div class="mb-4 p-4 border rounded shadow">
            <h3 class="text-lg font-bold">{{ $aviso['titulo'] }}</h3>
            <p>{{ $aviso['descricao'] }}</p>
        </div>
    @endforeach
@endsection
