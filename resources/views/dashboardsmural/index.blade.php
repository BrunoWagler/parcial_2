<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    <title>Inicio</title>
</head>
<body>

<header>
<div class="flex justify-between items-center p-4" style="background-color: 	#D2B48C;">
    <div class="flex items-center">
        <img src="{{ asset('images/office-board-icon-flat-style-vector-removebg-preview.png') }}" 
             alt="Ícone" 
             class="w-10 h-10 object-contain rounded-2xl border-2 border-slate-700">
    </div>

<div class="flex space-x-4">
    <a href="{{route('dashboardsmural.loginmural')}}" class="bg-slate-600 text-white px-4 py-2 rounded-lg hover:bg-stone-700 transition">Login</a>
    <a href="{{route('dashboardsmural.registermural')}}" class="bg-slate-600 text-white px-4 py-2 rounded-lg hover:bg-stone-700 transition">Registrar</a>
</div>

</header>

<section class="bg-orange-100 py-12">
  <div class="max-w-3xl mx-auto text-center font-serif">
    <p class="mb-6">
        O mural é um espaço de trabalho colaborativo que permite a criação e organização de quadros, listas e cartões para gerenciar projetos, tarefas e ideias. É uma ferramenta visual que facilita a colaboração em equipe, permitindo que os membros adicionem, editem e comentem em tempo real. Com o mural, é possível visualizar o progresso das atividades, atribuir responsabilidades e acompanhar prazos, tudo em um ambiente intuitivo e fácil de usar.    </p>
  </div>
</section>


<section class="bg-amber-100 py-16 px-4">
  <div class="max-w-2xl mx-auto text-center">
    <div class="inline-block bg-white p-4 rounded-2xl shadow-lg">
      <img 
        src="{{ asset('images/mural-whiteboard-removebg-preview.png') }}" 
        alt="Mural Whiteboard" 
        class="w-24 h-24 object-contain"
      >
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

<footer class="bg-slate-900 py-8">
  <div class="max-w-2xl mx-auto">
    <div class="h-16 bg-slate-900 rounded-t-3xl shadow-lg"></div>
  </div>
  
</footer>

  
</body>

</html>