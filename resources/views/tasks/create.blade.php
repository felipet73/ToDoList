@extends('layout')

@section('title', 'Nueva tarea')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <h2>Nueva tarea</h2>
        <label for="title">Título</label>
        <input id="title" name="title" type="text" value="{{ old('title') }}" required autofocus>

        <label for="description">Descripción (opcional)</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>

        <label><input name="completed" type="checkbox" value="1" @checked(old('completed'))> Marcar como completada</label>
        <p><button class="button" type="submit">Guardar tarea</button> <a href="{{ route('tasks.index') }}">Cancelar</a></p>
    </form>
@endsection
