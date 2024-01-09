<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗登録</title>
    <!-- 必要なCSSやスタイルを追加 -->
</head>

<body>
    <form action="{{ route('shop.register') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">店舗名:</label>
        <input type="text" name="name" required>

        <label for="description">店舗説明:</label>
        <textarea name="description" required></textarea>

        <label for="area">エリア:</label>
        <input type="text" name="area" required>

        <label for="genre">ジャンル:</label>
        <input type="text" name="genre" required>

        <label for="image_path">画像パス:</label>
        <input type="file" name="image_path" accept="image/*" required>

        <button type="submit">登録</button>
    </form>
</body>

</html>

