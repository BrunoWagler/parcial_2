@extends('layoutsmural.estrutura')

@section('content')
<div class="max-w-7xl mx-auto bg-white p-12 rounded-lg shadow-lg">
    <h2 class="text-5xl font-extrabold mb-6 text-gray-900">Título do Bloco</h2>

    <label for="descricao" class="block text-gray-700 text-lg font-semibold mb-2">
        Descrição
    </label>

    <textarea id="descricao" name="descricao" rows="6"
        class="w-full p-4 border mb-5 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg resize-none"
        placeholder="Escreva aqui a descrição..."></textarea>
  
       <button 
            type="submit"
            class="bg-slate-600 text-white px-6 py-3 rounded-lg hover:bg-stone-700 transition font-semibold focus:outline-none focus:ring"
        >
            Enviar
        </button>

</div>
@endsection