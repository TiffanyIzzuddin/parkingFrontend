<!DOCTYPE html>
<html>

<head>
    <title>Message from Node.js</title>
</head>

<body>
    @foreach ($genres as $genre)
        <li>ID: {{ $genre['id'] }}, Genre Name: {{ $genre['genre_name'] }}</li>
    @endforeach
</body>

</html>
