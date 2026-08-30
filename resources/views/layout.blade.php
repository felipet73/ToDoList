<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de tareas')</title>
    <style>
        body { max-width: 800px; margin: 2rem auto; padding: 0 1rem; font-family: Arial, sans-serif; color: #1f2937; background: #f8fafc; }
        header, .task, form { background: #fff; border-radius: 8px; padding: 1.25rem; box-shadow: 0 1px 3px #0001; }
        header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        h1, h2 { margin-top: 0; } a, button { color: #2563eb; } button { cursor: pointer; }
        .button { display: inline-block; padding: .55rem .8rem; border: 0; border-radius: 5px; color: #fff; background: #2563eb; text-decoration: none; }
        .task { display: flex; justify-content: space-between; gap: 1rem; align-items: center; margin: .75rem 0; }
        .task h2 { font-size: 1.1rem; margin: 0 0 .3rem; } .completed { text-decoration: line-through; color: #64748b; }
        .actions { display: flex; gap: .6rem; align-items: center; } .actions form { padding: 0; box-shadow: none; }
        label { display: block; font-weight: bold; margin: 1rem 0 .35rem; } input[type=text], textarea { box-sizing: border-box; width: 100%; padding: .6rem; border: 1px solid #cbd5e1; border-radius: 5px; }
        textarea { min-height: 120px; resize: vertical; } .alert { margin-bottom: 1rem; padding: .8rem; border-radius: 5px; } .success { background: #dcfce7; color: #166534; } .errors { background: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <header>
        <h1>Lista de tareas</h1>
        <a class="button" href="{{ route('tasks.create') }}">Nueva tarea</a>
    </header>

    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert errors">
            <ul>
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <main>@yield('content')</main>
</body>
</html>
