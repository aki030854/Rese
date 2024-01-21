<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ログインメニュー</title>
     <link rel="stylesheet" href="{{ asset('css/loginmenu.css') }}" />
</head>

<body>
 
  <header>
        <span class="close-button" onclick="closePage()">x</span>
    </header>
 
 <main>
 <ul>
	<li><a class="active" href="/">Home</a></li>
	<li>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
       Logout
    </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
	<li><a href="my_page">Mypage</a></li>
 </ul>
 <script>
        function closePage() {
            window.close();
        }
    </script>
</main>
</html>