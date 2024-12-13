<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    
    <h1>Ajándék típusok</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Típus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($giftTypes as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    </body>
</html>