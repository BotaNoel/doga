<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('gifts.store') }}">
        @csrf
        <label for="name">Ajándék neve:</label>
        <input type="text" name="gift_name" id="name" required>
        <label for="price">Ár:</label>
        <input type="number" name="price" id="price" required>
        <label for="type">Típus:</label>
        <select name="gift_type_id" id="type" required>
            @foreach($giftTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>