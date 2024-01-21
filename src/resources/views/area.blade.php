<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エリア登録</title>
</head>

<body>
    <form action="{{ route('area.store') }}" method="post">
        @csrf
        <label for="name">エリア名:</label>
        <input type="text" name="name" required>
        <button type="submit">登録</button>
    </form>
</body>

</html>