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

    <form class="search-form" action="{{ route('shops.search') }}" method="get">
            @csrf
            <div class="search-form__item">
                <select class="search-form__item-select" name="area">
                    <option value="all" selected>All</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->area }}">{{ $area->area }}</option>
                    @endforeach
                </select>
            </div>

            <div class="search-form__item">
                <select class="search-form__item-select" name="genre">
                    <option value="all" selected>All</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <input type="text" id="searchInput" name="keyword" placeholder="Search...">
                <button type="submit">検索</button>
            </div>
        </form>
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
</body>
</html> 