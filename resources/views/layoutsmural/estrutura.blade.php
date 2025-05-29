<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">

<header>
    <div class="flex justify-between items-center p-4" style="background-color: #D2B48C;">
        <div class="flex items-center">
            <img src="{{ asset('images/office-board-icon-flat-style-vector-removebg-preview.png') }}" 
                 alt="Ícone" 
                 class="w-10 h-10 object-contain rounded-2xl border-2 border-slate-700">
        </div>
    </div>
</header>

<main class="flex-grow p-4">
    @yield('content')
    <div id="content"></div>
</main>

<footer class="bg-slate-900 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="h-16 bg-slate-900 rounded-t-3xl shadow-lg"></div>
    </div>
</footer>

</body>
</html>
