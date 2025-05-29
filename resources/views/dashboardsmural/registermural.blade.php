@extends('layoutsmural.estrutura')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
  <h1 class="text-2xl font-bold mb-4">Registrar Novo Usuário</h1>

  <form 
    {{-- action="{{ route('usuarios.store') }}" --}}
    method="POST" 
    class="space-y-4"
  >
    {{-- @csrf --}}

    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
      <input 
        type="text" 
        name="name" 
        id="name" 
        required 
        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
      <input 
        type="email" 
        name="email" 
        id="email" 
        required 
        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
      <input 
        type="password" 
        name="password" 
        id="password" 
        required 
        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <div>
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha</label>
      <input 
        type="password" 
        name="password_confirmation" 
        id="password_confirmation" 
        required 
        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <button 
      type="submit" 
      class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700"
    >
      Registrar
    </button>
  </form>
</div>
@endsection
