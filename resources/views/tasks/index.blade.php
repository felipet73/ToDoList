@extends('layout')

@section('title', 'Mis tareas')

@section('content')
    @forelse ($tasks as $task)
        <article class="task">
            <div>
                <h2 class="{{ $task->completed ? 'completed' : '' }}">{{ $task->title }}</h2>
                <small>{{ $task->completed ? 'Completada' : 'Pendiente' }}</small>
            </div>
            <div class="actions">
                <a href="{{ route('tasks.show', $task) }}">Ver</a>
                <a href="{{ route('tasks.edit', $task) }}">Editar</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Eliminar esta tarea?')">Eliminar</button>
                </form>
            </div>
        </article>
    @empty
        <p>Aún no hay tareas. Crea la primera con el botón «Nueva tarea».</p>
    @endforelse
@endsection
