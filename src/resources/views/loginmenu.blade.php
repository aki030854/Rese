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
	<li><a class="active" href="#home">Home</a></li>
	<li><a href="#registration">Registrat</a></li>
	<li><a href="#login">Login</a></li>
 </ul>
     <script>
        function closePage() {
            window.close();
        }
    </script>
</main>
</html>