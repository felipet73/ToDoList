@extends('layout')

@section('title', 'Editar tarea')

@section('content')
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Editar tarea</h2>
        <label for="title">Título</label>
        <input id="title" name="title" type="text" value="{{ old('title', $task->title) }}" required autofocus>

        <label for="description">Descripción (opcional)</label>
        <textarea id="description" name="description">{{ old('description', $task->description) }}</textarea>

        <label><input name="completed" type="checkbox" value="1" @checked(old('completed', $task->completed))> Marcar como completada</label>
        <p><button class="button" type="submit">Actualizar tarea</button> <a href="{{ route('tasks.index') }}">Cancelar</a></p>
    </form>
@endsection
