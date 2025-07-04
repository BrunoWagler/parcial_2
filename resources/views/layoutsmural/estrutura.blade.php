<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <title>Início</title>
</head>
<body class="flex flex-col min-h-screen">

<header>
    <div class="flex justify-between items-center p-2" style="background-color: #D2B48C;">
        <div class="flex items-center">
            <img src="{{ asset('images/office-board-icon-flat-style-vector-removebg-preview.png') }}" 
                 alt="Ícone" 
                 class="w-10 h-10 object-contain rounded-2xl border-2 border-slate-700">
        </div>
    </div>

    <nav class="bg-slate-800 px-4 py-2">
    <div class="flex space-x-2 justify-center">
        <a href="{{ route('dashboardsmural.index') }}" 
           class="bg-slate-600 text-white px-3 py-1 rounded hover:bg-stone-700 transition">
           Início
        </a>
        <a href="{{ route('dashboardsmural.registermural') }}" 
           class="bg-slate-600 text-white px-3 py-1 rounded hover:bg-stone-700 transition">
           Registrar
        </a>
        <a href="{{ route('dashboardsmural.loginmural') }}" 
           class="bg-slate-600 text-white px-3 py-1 rounded hover:bg-stone-700 transition">
           Login
        </a>
        <a href="{{ route('dashboardsmural.vermural') }}" 
           class="bg-slate-600 text-white px-3 py-1 rounded hover:bg-stone-700 transition">
           Ver Mural
        </a>
        <a href="{{ url()->previous() }}" 
           class="bg-slate-600 text-white px-3 py-1 rounded hover:bg-stone-700 transition">
           Voltar
        </a>
    </div>
</nav>

</header>

<main class="flex-grow px-4 py-2">
    @yield('content')
</main>

<footer class="bg-slate-900 py-4 mt-auto">
    <div class="max-w-2xl mx-auto">
        <div class="h-12 bg-slate-900 rounded-t-2xl shadow-lg"></div>
    </div>
</footer>

</body>
</html>
