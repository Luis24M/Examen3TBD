@extends('layouts.layout')

@section('content')
<main class="p-5 mx-10">
  <h2 class="text-2xl text-center py-5 font-black">Clientes</h2>
  <a href="{{ route('clientes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Crear Cliente</a>
  <section class="flex">
    @foreach($clientes as $cliente)
    <div class="border border-stone-600 rounded-md m-4 p-4">
      <div>
        <h3 class="text-xl">{{ $cliente->name }}</h3>
        <hr class="my-2">
        <p>{{ $cliente->email }}</p>
        <p>{{ $cliente->direccion }}</p>
        <p>{{ $cliente->telefono }}</p>
      </div>
      <!-- botones de editar y eliminar -->
      <div class="py-3 flex gap-2">
        <a href="{{ route('clientes.edit', $cliente) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
        </form>
      </div>
    </div>
    @endforeach
  </section>
</main>
@endsection