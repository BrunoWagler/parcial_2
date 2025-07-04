@extends('layoutsmural.estrutura')

@section('content')

<section class="bg-orange-100 py-12 flex-grow">
  <div class="max-w-3xl mx-auto text-center font-serif">
    <p class="mb-6">
        O mural é um espaço de trabalho colaborativo que permite a criação e organização de quadros, listas e cartões para gerenciar projetos, tarefas e ideias. É uma ferramenta visual que facilita a colaboração em equipe, permitindo que os membros adicionem, editem e comentem em tempo real. Com o mural, é possível visualizar o progresso das atividades, atribuir responsabilidades e acompanhar prazos, tudo em um ambiente intuitivo e fácil de usar.
    </p>
  </div>
</section>

<section class="bg-amber-100 py-16 px-4">
  <div class="max-w-2xl mx-auto text-center">
    <div class="inline-block bg-white p-4 rounded-2xl shadow-lg">
      <img 
        src="{{ asset('images/mural-whiteboard-removebg-preview.png') }}" 
        alt="Mural Whiteboard" 
        class="w-24 h-24 object-contain"
      />
    </div>

    <h2 class="mt-8 text-3xl font-semibold font-serif text-stone-800">
      Organize seu Mundo Visualmente
    </h2>

    <p class="mt-4 text-stone-700 text-lg font-serif leading-relaxed">
      O mural é a maneira ideal de estruturar ideias, tarefas e projetos de forma clara, colaborativa e visual. Com uma interface simples e poderosa, sua equipe trabalha em sintonia e produtividade.
    </p>

    <button class="mt-6 px-6 py-2 border border-stone-700 text-stone-700 hover:bg-stone-700 hover:text-white transition rounded-full shadow-sm">
      Saiba mais
    </button>
  </div>
</section>

@endsection
