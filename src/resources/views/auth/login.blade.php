<!DOCTYPE html>
 <html lang="ja">
 
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>ログイン</title>
     <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
 </head>
<body>
  <header>
<a href="{{ Auth::check() ? route('logoutmenu') : route('loginmenu') }}"><img src="{{ asset('storage/shop_logo.png') }}" alt="Logo"/></a>
 </header>
 
  @if ($errors->any())
  <div>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

<h2>ログイン</h2>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <dl class="form-list">
        <dd><input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}"></dd>
        <dd><input type="password" name="password" placeholder="パスワード"></dd>
        <button type="submit">ログイン</button>
      </form>
</body>
</html>
