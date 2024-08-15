@extends('layouts.layout')

@section('content')
<main class="flex justify-center p-5">
  <form class="p-5 rounded-xl border border-gray-400 
  [&>div>input]:border [&>div>input]:border-gray-950 [&>div>input]:rounded-md [&>div>input]:px-2" 
  action="{{ route('clientes.update', $cliente) }}" 
  method="POST">
  @csrf
  @method('PUT')
  <h2 class="text-2xl text-center py-5 font-black">Editar Cliente</h2>
    <div class="mb-3 flex flex-col">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $cliente->name }}" required>
    </div>
    <div class="mb-3 flex flex-col">
      <label for="direccion" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>
    </div>
    <div class="mb-3 flex flex-col">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
    </div>
    <div class="mb-3 flex flex-col">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
    </div>
    <button type="submit" class="p-2 bg-green-400 rounded-lg">Guardar</button>
  </form>
</main>
@endsection