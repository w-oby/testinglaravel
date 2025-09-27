<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    
    <h1><strong>Planet: {{ $planet['name'] }}</strong></h1>

    <h3>Description</h3>
    <p>{{ $planet['description'] }}</p>
    <br>
    <br>

    <a href="/planets">Back to overview</a>

</body>
</html>