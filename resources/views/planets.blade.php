<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>

    <h2>Planets</h2>

    <h3>{{ $intro }}</h3>

    <ul>
        <!-- Looping over planets array -->
        @foreach ($planets as $planet)
        <li><strong>{{ $planet['name'] }}</strong><br>{{ $planet['description'] }}</li>
        @endforeach
    </ul>
    
</body>
</html>