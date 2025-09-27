<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        li {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

    <h1>Planets</h1>

    <h3>{{ $intro }}</h3>

    <ul>
        <!-- Looping over planets array -->
        @foreach ($planets as $planet)
        <li>
            <a href="/planets/{{ $planet['name'] }}">
                <strong>{{ $planet['name'] }}</strong>
            </a>

            <br>{{ $planet['description'] }}
    
    
        </li>
        @endforeach
    </ul>
    
</body>
</html>