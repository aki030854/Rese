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
<h1>Atte</h1>
</header>
<main>
 
  @if ($errors->any())
  <div>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

<div class="log-form">
      <h2>Login</h2>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit"class="btn">ログイン</button>
      </form>
</div>
<p>会員登録は<a href="register">こちら</a></p>
</main>
</body>
</body>
<footer>
<small>Atte,ict.</small>
</footer>
</html>
</html>
