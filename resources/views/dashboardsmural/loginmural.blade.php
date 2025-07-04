@extends('layoutsmural.estrutura')

@section('content')
<form 
    method="GET"
    action="{{ route('dashboardsmural.loginmural') }}"
    class="space-y-4 max-w-md mx-auto mt-8"
>
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
        <input 
            type="email" 
            id="email" 
            name="email"
            required 
            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm"
        >
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
        <input 
            type="password" 
            id="password" 
            name="password"
            required 
            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm"
        >
    </div>

    <button 
        type="submit" 
        class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition"
    >
        Entrar
    </button>

    <div class="text-right mt-2">
        <a 
            href="{{ route('dashboardsmural.esqueci-asenha') }}" 
            class="text-sm text-indigo-600 hover:underline"
        >
            Esqueci minha senha
        </a>
    </div>
</form>
@endsection
