<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
</head>
<body>
    
    <h1>Colors</h1>

    <h3>{{ $greeting}}</h3>

    <ul>
        <!-- Eerder geprobeerd met PHP code maar dat is niet compatibel met Blade syntax, dus maar Blade syntax opgezocht en gebruikt -->
        @foreach ($colorList as $color)
            <li>{{ $color[0] }}</li>
        @endforeach
    </ul>

</body>
</html>
