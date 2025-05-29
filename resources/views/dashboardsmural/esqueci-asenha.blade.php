@extends('layoutsmural.estrutura')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold mb-6 text-center">Recuperar Senha</h2>

  <p class="text-sm text-gray-600 mb-4 text-center">
    Informe seu e-mail para receber instruções de redefinição de senha.
  </p>

  <form 
    {{-- action="{{ route('password.email') }}" --}}
    method="POST"
    class="space-y-4"
  >
    {{-- @csrf --}}

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

    <button 
      type="submit" 
      class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700"
    >
      Enviar link de recuperação
    </button>
  </form>
</div>
@endsection
