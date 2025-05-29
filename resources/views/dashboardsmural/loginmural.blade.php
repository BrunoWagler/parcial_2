@extends('layoutsmural.estrutura')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

  <form 
    method="POST"
    class="space-y-4"
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
      class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700"
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
</div>
@endsection
