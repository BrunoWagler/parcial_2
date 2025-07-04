@extends('layoutsmural.estrutura')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Registrar Novo Usuário</h1>

    <form method="GET" class="space-y-4">


        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" name="name" id="name" required
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="email" name="email" id="email" required
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
            <input type="password" name="password" id="password" required
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                class="mt-1 block w-full mb-5 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <a href="{{ route('dashboardsmural.escrevermural') }}"
            class="bg-slate-600 text-white mb-1 px-4 py-2 rounded-lg hover:bg-stone-700 transition font-semibold focus:outline-none focus:ring">
            Registrar
        </a>
        
    </form>
</div>
@endsection