@extends('layout')

@section('title', $task->title)

@section('content')
    <article class="task" style="display:block">
        <h2 class="{{ $task->completed ? 'completed' : '' }}">{{ $task->title }}</h2>
        <p><strong>Estado:</strong> {{ $task->completed ? 'Completada' : 'Pendiente' }}</p>
        <p><strong>Descripción:</strong><br>{{ $task->description ?: 'Sin descripción.' }}</p>
        <p><a class="button" href="{{ route('tasks.edit', $task) }}">Editar</a> <a href="{{ route('tasks.index') }}">Volver al listado</a></p>
    </article>
@endsection
