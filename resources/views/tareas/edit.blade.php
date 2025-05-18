{{-- resources/views/tareas/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Editar tarea</h1>

    {{-- Aquí va el formulario de edición --}}
    <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- campos del formulario -->
        <button type="submit">Actualizar</button>

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="{{ $tarea->titulo }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion">{{ $tarea->descripcion }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection