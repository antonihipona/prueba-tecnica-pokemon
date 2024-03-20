<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a captured pokemon</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layout.navbar')
    <h1 class="text-center ">(5.1) Add a captured pokemon</h1>

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form class="mx-1" action="/add-captured-pokemon" method="post">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-select">
                @foreach ($users as $user)
                @if ($user->id == old('user_id'))
                <option value="{{ $user->id }}" selected="selected">{{ $user->name }}</option>
                @else
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="pokemon" class="form-label">Pokemon</label>
            <select name="pokemon_id" id="pokemon" class="form-select">
                @foreach ($pokemons as $pokemon)
                @if ($pokemon->id == old('pokemon_id'))
                <option value="{{ $pokemon->id }}" selected="selected">{{ $pokemon->name }}</option>
                @else
                <option value="{{ $pokemon->id }}">{{ $pokemon->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="captured_at" class="form-label">Captured at</label>
            <input type="datetime-local" name="captured_at" id="captured_at" class="form-control" value="{{ old('captured_at') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>