<?php
session_start();

if (!isset($_SESSION['isAuthenticated']) || !$_SESSION['isAuthenticated']) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GAMING BETTER</title>

  
  <link rel="shortcut icon" href="./gamingbetter.png.png" type="image/svg+xml">


  <link rel="stylesheet" href="./assets/css/style.css.css">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

      <a href="#" class="logo">
        <img src="./assets/images/gamingbetter.png.png" alt="Casmart logo" width="130" height="31">
      </a>

      <div class="header-actions">
        <a href="logout.php">
        <button  class="header-action-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
          <p class="header-action-label">logout</p>
        </button>
      </a>
        <button class="header-action-btn">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Search</p>
        </button>

        <button class="header-action-btn">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Cart</p>

          <div class="btn-badge green" aria-hidden="true">3</div>
        </button>

        <button class="header-action-btn">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Wishlisht</p>

          <div class="btn-badge" aria-hidden="true">2</div>
        </button>

      </div>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="about.html" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="contactus.html" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
  <main>
    <article>

      <section class="hero" id="home" style="background-image: url('./assets/images/Gaming_room_setup_with_purple_lights.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Gaming Everyday</p>

            <h2 class="h1 hero-title">Unrivalled Gaming Experience</h2>

            <button class="btn btn-primary">Shop Now</button>

          </div>

        </div>
      </section>

      <section class="service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>

                <p class="service-item-text">On All Order Over $175</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>

                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>

                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>

                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/razorheadsets.webp" alt="head sets razor" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">razor headsets</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/gamingchair.png" alt="gaming chairs" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Gaming chairs</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/gamingkeyboard.webp" alt="gaming keyboard" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">logitech gaming keyboards</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/ledlights.jpg" alt="LED lights" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">LED lights</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/gamingmouses.jpg" alt="gaming mouses" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">gaming mouses</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/dualsense-edge-vs-xbox-elite-series-2-controller_6192900.jpg" alt="controllers" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">controllers</a>
            </li>

          </ul>

        </div>
      </section>

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Products</h2>


          <ul class="product-list">

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/nacon.webp" alt="nacon revolution playstation controller" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge red"> -25%</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Nacon revolution controller</a>
                  </h3>

                  <div class="card-price">
                    <data value="202.5">&dollar;202.5</data>

                    <data value="270">&dollar;270</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/dxracing.jpg" alt="dx racing gaming chairs" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green"> New</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">DX Racer  Gaming Chair</a>
                  </h3>

                  <div class="card-price">
                    <data value="180">&dollar;180</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/mousepad.jpg" alt="Razor RGB gaming mousepad " loading="lazy"
                      width="800" height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Razor RGB GAMING Mousepad</a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&dollar;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/lgmonitor.jpg" alt="lg gaming monitor 144hz Nvidia" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">LG ultragear 45</a>
                  </h3>

                  <div class="card-price">
                    <data value="84.00">&dollar;500</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/controller3.jpg" alt="xbox playstation 5 " loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">PlayStation 5 or Xbox controller</a>
                  </h3>

                  <div class="card-price">
                    <data value="50.00">&dollar;55.00</data>
                  </div>
                </div>

              </div>
            </li>
      </section>

      </section>
      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">

            <h2 class="card-title">Subscribe Newsletter</h2>

            <p class="card-text">
              Enter your email below to be the first to know about new collections and product launches.
            </p>

            <form action="" class="card-form">

              <div class="input-wrapper">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
              </div>

              <button type="submit" class="btn btn-primary w-100">
                <span>Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/gamingbetter.png.png" alt="gaming better logo">
          </a>

          <p class="footer-text">
            Welcome to our gaming gadgets store, where passion and technology collide to bring you
             the ultimate gaming experience!
             Our store is a haven for gamers,
              whether you're a casual player or a hardcore enthusiast.
               We take pride in curating a diverse range of cutting-edge gaming gadgets
              that cater to all your gaming needs.
          </p>

          <ul class="social-list">
            <li>
              <a href="https://www.instagram.com/gaming/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>      
          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Payment Type</a>
          </li>

          <li>
            <a href="#" class="footer-link">Awards Winning</a>
          </li>

          <li>
            <a href="#" class="footer-link">World Media Partner</a>
          </li>

          <li>
            <a href="#" class="footer-link">Become an Agent</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p href=" "class="footer-list-title">Help & Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Dealers & Agents</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Return Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping & Delivery</a>
          </li>

          <li>
            <a href="#" class="footer-link">Order Tranking</a>
          </li>
        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">done by qasem</a>. All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

        </ul>

        <div class="payment">
          <p class="payment-title">We Support</p>

          <img src="./assets/images/payment-img.png" alt="Online payment logos" class="payment-img">
        </div>

      </div>
    </div>

  </footer>
  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>