<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>店舗一覧</title>
     <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
 </head>
 <body>
<header>
    <div class="header">
      <a href="{{ Auth::check() ? route('logoutmenu') : route('loginmenu') }}"><img src="{{ asset('storage/shop_logo.png') }}" alt="Logo"/></a>
    <div>
        <select id="areaSelect">
            <option value="all" selected>All</option>
            <option value="area1">東京都</option>
            <option value="area2">大阪府</option>
            <option value="area1">福岡県</option>
        </select>
    </div>
    <div>
        <select id="genreSelect">
            <option value="all" selected>All</option>
            <option value="genre1">居酒屋</option>
            <option value="genre2">イタリアン</option>
            <option value="genre2">寿司</option>
            <option value="genre2">焼肉</option>
            <option value="genre2">ラーメン</option>
        </select>
    </div>
  <div>
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="search()">検索</button>
    </div>
  </div>
</header>
 <div class="container">
      <div class="row">
        @foreach($shops ?? [] as $shop)
          <div class="col-md-4 mb-4">
            <div class="shop__card">
              <div class="image_path">
                <img src="{{ $shop->image_path }}" alt="{{ $shop->name }}" />
                  </div>
                    <div class="shop__content">
                      <h1 class="shop__name">{{ $shop->name }}</h1>
                        <div class="tag">
                          <p class="area__tag">#{{ $shop->area }}</p>
                          <p class="genre__tag">#{{ $shop->genre }}</p>
                        </div>
                        <div class="card__cat">
                          <a href="{{ route('shop.show', $shop->id) }}">詳しくみる</a>
                        </div>
                     </div>
               </div>
           </div>
        @endforeach
    </div>
</div>
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 