<h1>Lista de Tareas</h1>

<form action="{{ route('tareas.store') }}" method="POST">
    @csrf
    <label for="titulo">Título</label>
    <input type="text" name="titulo" required>
    <!-- otros campos -->
    <button type="submit">Guardar</button>
</form>

<ul>
@foreach($tareas as $tarea)
    <li>
        {{ $tarea->titulo }} -
        <a href="/tareas/{{ $tarea->id }}/edit">Editar</a>

        <form action="/tareas/{{ $tarea->id }}" method="POST"
    style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>