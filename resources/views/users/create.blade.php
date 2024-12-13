<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <label for="name">Név:</label>
        <input type="text" name="person_name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>