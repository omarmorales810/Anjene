<?php session_start(); ?>

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
            <div class="item-counter"></div>
            <div class="bag">
              <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg>
            </div>
            <div class="bag-view-content">
              <div class="bag-added-item-container"></div>
              <div class="bag-more-item"></div>
              <ul class="bag-view-container">
                <li class="bag-view-item">
                  <span class="view-content-svg-container">
                    <svg width="20" height="20"  class="view-content-bag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <g>
                        <rect width="21" height="21" fill="none"/>
                        <path d="M14.934,5.017H13.828A3.413,3.413,0,0,0,10.5,2,3.413,3.413,0,0,0,7.172,5.017H6.066A2.058,2.058,0,0,0,4.011,7.072v7.865a2.058,2.058,0,0,0,2.056,2.055h8.867a2.058,2.058,0,0,0,2.056-2.055V7.072A2.058,2.058,0,0,0,14.934,5.017ZM10.5,3a2.413,2.413,0,0,1,2.328,2.017H8.172A2.413,2.413,0,0,1,10.5,3Zm5.511,11.938a1.079,1.079,0,0,1-1.077,1.078H6.066a1.079,1.079,0,0,1-1.077-1.078V7.072A1.079,1.079,0,0,1,6.066,5.995h8.867a1.079,1.079,0,0,1,1.077,1.078Z" fill="#06c"/>
                      </g>
                    </svg>
                  </span>
                  <a href="../bag.php" class="bag-view-link">Bag</a>
                </li>
                <li class="bag-view-item">
                  <span class="view-content-svg-container">
                    <svg width="20" height="20"  class="view-content-bag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <title>cube.box_tiny@1x</title>
                      <g>
                        <rect width="25" height="25" fill="none"/>
                        <path d="M16.895,5.638l-5.5-2.75a2.008,2.008,0,0,0-1.789,0l-5.5,2.75A1.989,1.989,0,0,0,3,7.427v6.146a1.989,1.989,0,0,0,1.105,1.789l5.5,2.75a2.011,2.011,0,0,0,1.789,0l5.5-2.75A1.989,1.989,0,0,0,18,13.573V7.427A1.989,1.989,0,0,0,16.895,5.638ZM10.053,3.783a1.005,1.005,0,0,1,.895,0L16.441,6.53,13.9,7.98,8.189,4.714ZM10.5,9.925,4.559,6.53,7.115,5.252l5.781,3.3ZM4.553,14.467A1,1,0,0,1,4,13.573V7.427c0-.021.007-.04.008-.061L10,10.791v6.4ZM17,13.573a1,1,0,0,1-.553.895L11,17.191v-6.4l5.992-3.424c0,.021.008.04.008.061Z" fill="#06c"/>
                      </g>
                    </svg>
                  </span>
                  <a href="../order.php" class="bag-view-link">Orders</a>
                </li>
                <li class="bag-view-item">
                  <span class="view-content-svg-container">
                    <svg width="20" height="20"  class="view-content-bag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><rect width="25" height="25" fill="none"/><path d="M17.7773,10.1221,17.123,9.868a6.5933,6.5933,0,0,0-.1787-1.023l.5274-.46a.4175.4175,0,0,0-.2656-.7321l-.6988-.0147c-.0742-.1559-.1489-.3117-.2368-.4639V7.1743c-.0879-.1522-.1851-.2953-.2827-.4378l.3374-.6116a.4177.4177,0,0,0-.5-.5969l-.6616.2255a6.586,6.586,0,0,0-.7959-.6673l.1084-.6936a.4174.4174,0,0,0-.6743-.39l-.5489.4421a6.7357,6.7357,0,0,0-.97-.3559l-.1357-.6918A.4175.4175,0,0,0,11.38,3.262l-.3643.6029a6.6677,6.6677,0,0,0-1.0278.0041L9.62,3.259a.4177.4177,0,0,0-.7676.135l-.1367.6982a6.58,6.58,0,0,0-.9673.3451L7.2,3.9935a.4173.4173,0,0,0-.6748.389l.1089.6969a6.5584,6.5584,0,0,0-.7842.6639l-.6724-.2312a.4176.4176,0,0,0-.5014.5963l.3432.6231A6.6544,6.6544,0,0,0,4.5,7.62l-.7036.0126a.4176.4176,0,0,0-.2676.7316l.5308.4642a6.6389,6.6389,0,0,0-.1783,1.0176l-.6577.2531a.4175.4175,0,0,0-.0009.779l.6543.254a6.5946,6.5946,0,0,0,.1787,1.0231l-.5274.4594a.4176.4176,0,0,0,.2656.7322l.6988.0147c.0742.1561.1489.3121.2368.4644s.19.2871.2876.4289l-.3423.62a.4176.4176,0,0,0,.5.5969l.6543-.223a6.5871,6.5871,0,0,0,.8037.6621l-.1089.6964a.4174.4174,0,0,0,.6743.39l.5542-.4461a6.6757,6.6757,0,0,0,.9639.3564l.1362.6953a.4175.4175,0,0,0,.7671.1353l.3706-.6134c.1734.0136.3462.0337.521.0337.166,0,.3321-.0194.4981-.0319l.37.6147a.4177.4177,0,0,0,.7676-.135l.1362-.6944a6.6363,6.6363,0,0,0,.96-.3558l.5571.4507a.4173.4173,0,0,0,.6748-.3891l-.1089-.6968a6.5677,6.5677,0,0,0,.7842-.6639l.6724.2312a.4176.4176,0,0,0,.5014-.5964l-.3432-.623A6.667,6.667,0,0,0,16.5,13.38l.7036-.0126a.4176.4176,0,0,0,.2676-.7317l-.5308-.4641a6.641,6.641,0,0,0,.1783-1.0176l.6577-.2532A.4174.4174,0,0,0,17.7773,10.1221ZM10.49,4.9414a5.5376,5.5376,0,0,1,5.541,5.063l-3.644-.0031a1.9186,1.9186,0,0,0-.189-.48,1.9579,1.9579,0,0,0-2.207-.9065L8.1738,5.462A5.52,5.52,0,0,1,10.49,4.9414Zm-.2138,6.3894A.86.86,0,0,1,10.499,9.64a.8667.8667,0,0,1,.2246.03.8607.8607,0,0,1,.2061,1.576A.8626.8626,0,0,1,10.2764,11.3308ZM7.3027,5.9547l1.8213,3.16a1.9476,1.9476,0,0,0-.0053,2.7745L7.2979,15.0379a5.5444,5.5444,0,0,1,.0048-9.0832Zm5.9737,9.3622a5.5585,5.5585,0,0,1-5.1128.2215l1.8218-3.15a1.9527,1.9527,0,0,0,2.4082-1.3866l3.6372.0031A5.5522,5.5522,0,0,1,13.2764,15.3169Z" fill="#06c"/></svg>
                  </span>
                  <a href="../account.php" class="bag-view-link">Account</a>
                </li>
                <li class="bag-view-item bag-view-item-user-sign-in">
                  <?php if (isset($_SESSION["user"])) { ?>
                    <span class="view-content-svg-container">
                      <i class="fas fa-sign-out"></i>
                    </span>
                    <a href="../php/logout.php" class="bag-view-link">Sign out</a>
                  <?php } else { ?>
                    <span class="view-content-svg-container">
                      <svg width="20" height="20"  class="view-content-bag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <g>
                          <rect x="0.01" width="25" height="25" fill="none"/>
                          <g>
                            <path d="M10.5,3.5a7,7,0,1,0,7,7A7,7,0,0,0,10.5,3.5Zm4.443,11.018c-.469-.935-2.275-1.75-4.443-1.75s-3.974.815-4.443,1.75a6,6,0,1,1,8.886,0Z" fill="#06c"/>
                            <ellipse cx="10.5" cy="9" rx="2.375" ry="2.5" fill="#06c"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                    <a href="../login.php" class="bag-view-link">Sign in</a>
                  <?php } ?>
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

        <form action="../result.php" class="search-form" method="GET" style="width: 100%; max-width: 700px;">
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
            <form action="../result.php" class="search-form" method="GET" style="width: 100%; max-width: 700px;">
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

  <script src="../js/bagItemCounter.js"></script>
  <script src="../js/bagDisplayAddedItems.js"></script>
  <script src="../js/bagMoreItemText.js"></script>