<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('gift_types.store') }}">
        @csrf
        <label for="type">Ajándék típus:</label>
        <input type="text" name="type" id="type" required>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>