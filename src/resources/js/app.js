require('./bootstrap');


function searchShops() {
    const area = document.getElementById('areaSelect').value;
    const genre = document.getElementById('genreSelect').value;
    const keyword = document.getElementById('searchInput').value;

    fetch(`/shops/search?area=${area}&genre=${genre}&keyword=${keyword}`)
        .then(response => response.json())
        .then(data => displaySearchResults(data.shops));
}

function displaySearchResults(shops) {
    const searchResultsContainer = document.getElementById('searchResults');
    searchResultsContainer.innerHTML = ''; // 検索結果を初期化

    shops.forEach(shop => {
        const shopCard = document.createElement('div');
        shopCard.className = 'shop__card';

        const imageContainer = document.createElement('div');
        imageContainer.className = 'image_path';
        

        const shopContent = document.createElement('div');
        shopContent.className = 'shop__content';

        const shopName = document.createElement('h1');
        shopName.className = 'shop__name';
        shopName.textContent = shop.name;

        const tagContainer = document.createElement('div');
        tagContainer.className = 'tag';

        const areaTag = document.createElement('p');
        areaTag.className = 'area__tag';
        areaTag.textContent = `#${shop.area}`;

        const genreTag = document.createElement('p');
        genreTag.className = 'genre__tag';
        genreTag.textContent = `#${shop.genre}`;

        const catButton = document.createElement('div');
        catButton.className = 'card__cat';
        catButton.textContent = '詳しくみる';

        tagContainer.appendChild(areaTag);
        tagContainer.appendChild(genreTag);

        shopContent.appendChild(shopName);
        shopContent.appendChild(tagContainer);
        shopContent.appendChild(catButton);

        shopCard.appendChild(imageContainer);
        shopCard.appendChild(shopContent);

        searchResultsContainer.appendChild(shopCard);
    });
}

