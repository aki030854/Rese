<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ジャンル登録</title>
</head>

<body>
    <form action="{{ route('genre.store') }}" method="post">
        @csrf
        <label for="name">ジャンル名:</label>
        <input type="text" name="name" required>
        <button type="submit">登録</button>
    </form>
</body>

</html>