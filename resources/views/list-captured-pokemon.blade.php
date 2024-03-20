<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of captured pokemon</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layout.navbar')
    <h1 class="text-center">(6.1) List of captured pokemon</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Guild</th>
                <th>User</th>
                <th>Pokemon</th>
                <th>Captured at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
            <tr>
                <td>{{ $pokemon->guild_name }}</td>
                <td>{{ $pokemon->user_name }}</td>
                <td>{{ $pokemon->name }}</td>
                <td>{{ $pokemon->captured_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <footer class="p-1">
        {{ $pokemons->links() }}
    </footer>
</body>

</html>