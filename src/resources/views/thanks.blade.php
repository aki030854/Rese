<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>登録完了</title>
     <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
 </head>
 <body>
<header>
    <div class="header">
      <a href="{{ Auth::check() ? route('logoutmenu') : route('loginmenu') }}"><img src="{{ asset('storage/shop_logo.png') }}" alt="Logo"/></a>
    </div>
</header>
<main>
    <div class=thanks>
        <h2>ご登録ありがとうございました</h2>
    </div>
</main>
</body>
</html>