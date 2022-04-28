<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-sc
  ale=1.0">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
  <title>Anjene</title>
</head>
<body class="body">
  <header>
    <nav class="nav">
      <div class="nav-container">
        <div class="burger-container">
          <div id="burger">
            <div class="bar topBar"></div>
            <div class="bar btmBar"></div>
          </div>   
        </div>
        <div id="logo">
          <a href="../index.php">Anjene</a>
        </div>
        <ul class="nav-categories">
          <li class="nav-item">
            <a href="../categories/electronic-devices.php" class="nav-link">Electronic Devices</a>
          </li>
          <li class="nav-item">
            <a href="../categories/health-and-beauty.php" class="nav-link">Health & Beauty</a>
          </li>
          <li class="nav-item">
            <a href="../categories/babies-and-toys.php" class="nav-link">Babies & Toys</a>
          </li>
          <li class="nav-item">
            <a href="../categories/groceries-and-pets.php" class="nav-link">Groceries & Pets</a>
          </li>
          <li class="nav-item">
            <a href="../categories/home-and-living.php" class="nav-link">Home & Living</a>
          </li>
          <li class="nav-item">
            <a href="../categories/fashion-accesories.php" class="nav-link">Fashion Accesories</a>
          </li>
        </ul>
        <div class="nav-profile">
          <div class="search">
            <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="15" height="88" viewBox="0 0 15 88"><rect width="15" height="15" fill="none"/><path d="M13.98,27.343l-3.5-3.5a5.436,5.436,0,1,0-.778.777l3.5,3.5a.55.55,0,1,0,.778-.778ZM1.959,20.418a4.319,4.319,0,1,1,4.319,4.32A4.323,4.323,0,0,1,1.959,20.418Z" fill="#1d1d1f"/></svg>
          </div>
          <div class="bag-container">
            <div class="bag">
              <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg>
            </div>
            <div class="bag-view-content">
              <div class="bag-added-item-container">Your bag is empty</div>
              <ul class="bag-view-container">
                <li class="bag-view-item">
                  <a href="../bag.php" class="bag-view-link">Bag</a>
                </li>
                <li class="bag-view-item">
                  <a href="" class="bag-view-link">Orders</a>
                </li>
                <li class="bag-view-item">
                  <a href="" class="bag-view-link">Account</a>
                </li>
                <li class="bag-view-item">
                  <a href="../login.php" class="bag-view-link">Sign in</a>
                </li>
              </ul>

              <div class="triangle-container">
                <div class="triangle">
                  <div class="inner-triangle"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="search-box">
      <div class="search-box-container">
        <div class="search-box-icon">
          <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="88" viewBox="0 0 20 88"><rect width="20" height="44" fill="none"/><path d="M13.98,27.343l-3.5-3.5a5.436,5.436,0,1,0-.778.777l3.5,3.5a.55.55,0,1,0,.778-.778ZM1.959,20.418a4.319,4.319,0,1,1,4.319,4.32A4.323,4.323,0,0,1,1.959,20.418Z" fill="gray"/></svg>
        </div>

        <!-- Search -->
        <form action="../search.php" class="search-form" method="GET" style="width: 100%; max-width: 700px;">
          <input type="text" name="search_query" class="search-input" placeholder="Search in Anjene" autocomplete="off">
          <button style="visibility: hidden; display: none; opacity: 0; pointer-events: none;"></button>
        </form>
        
        <div class="search-close-icon">
          <svg fill="gray" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 24px; height: 100%;"><g class="style-scope yt-icon"><path d="M12.7,12l6.6,6.6l-0.7,0.7L12,12.7l-6.6,6.6l-0.7-0.7l6.6-6.6L4.6,5.4l0.7-0.7l6.6,6.6l6.6-6.6l0.7,0.7L12.7,12z" class="style-scope yt-icon"></path></g></svg>
        </div>
      </div>
    </div>
    <div class="search-banner"></div>
    <div class="mobile-nav">
      <div class="mobile-nav-container">
        <div class="mobile-nav-search-input-container">
          <div class="mobile-search-wrapper">
            <div class="search-box-icon">
              <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="88" viewBox="0 0 20 88"><rect width="20" height="90" fill="none"/><path d="M13.98,27.343l-3.5-3.5a5.436,5.436,0,1,0-.778.777l3.5,3.5a.55.55,0,1,0,.778-.778ZM1.959,20.418a4.319,4.319,0,1,1,4.319,4.32A4.323,4.323,0,0,1,1.959,20.418Z" fill="gray"/></svg>
            </div>
            <form action="../search.php" class="search-form" method="GET" style="width: 100%; max-width: 700px;">
              <input type="text" class="mobile-nav-search-input" name="search_query" placeholder="Search in Anjene" autocomplete="off">
            </form>
          </div>
        </div>
        <ul class="mobile-nav-menu">
          <li class="mobile-nav-item">
            <a href="../categories/electronic-devices.php" class="mobile-nav-link">Electronic devices</a>
          </li>
          <li class="mobile-nav-item">
            <a href="../categories/health-and-beauty.php" class="mobile-nav-link">Health & beauty</a>
          </li>
          <li class="mobile-nav-item">
            <a href="../categories/babies-and-toys.php" class="mobile-nav-link">Babies & toys</a>
          </li>
          <li class="mobile-nav-item">
            <a href="../categories/groceries-and-pets.php" class="mobile-nav-link">Groceries & pets</a>
          </li>
          <li class="mobile-nav-item">
            <a href="../categories/home-and-living.php" class="mobile-nav-link">Home & living</a>
          </li>
          <li class="mobile-nav-item">
            <a href="../categories/fashion-accesories.php" class="mobile-nav-link">Fashion accesories</a>
          </li>
        </ul>
      </div>
    </div>
  </header>