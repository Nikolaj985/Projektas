<?php require __DIR__.'/app/src/app.php';
//REMOVING RESUBMITTION and SAME ALERT
  if(isset($_GET['gerai']) && isset($_COOKIE["form_submitted"])){
    setcookie("form_submitted", "", time() - 3600, "/");
    echo "<script>alert('Dekui, duomenys užregistruoti.')</script>";
  }
?>
<!DOCTYPE html>
<head>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=PT+Sans:wght@400;700&family=Roboto:wght@300;400&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <div class="navigation flex-space-between">
    <div class="logo"><a href="#"><img src="assets/logo.png" alt="logo.png" /></a></div>
    <div class="top-menu flex-space-between font-roboto-light">
      <div class="menu-item"><a href="#">Home</a></div>
      <div class="menu-item"><a href="#">Mega Menu</a></div>
      <div class="menu-item"><a href="#">About</a></div>
      <div class="menu-item"><a href="#">Blog</a></div>
      <div class="menu-item"><a href="#">Contact</a></div>
      <div class="menu-button">
        <a class="button" href="#">Get Webify Today</a>
      </div>
      <div class="menu-button-hidden">
        <a class="button" href="#">Menu</a>
        <ul class="menu-button-hidden-dropdown">
          <li class="drop"><a class="button" href="#">Mega Menu</a></li>
          <li class="drop"><a class="button" href="#">About</a></li>
          <li class="drop"><a class="button" href="#">Blog</a></li>
          <li class="drop"><a class="button" href="#">Contact</a></li>
          <li class="drop"><a class="button" href="#">Get Webify Today</a></li>  
          <li class="drop"><a class="button" href="#">Home</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="hero">
    <div class="hero-container flex-space-around">
      <div class="hero-texts">
        <div class="hero-main">
          <h1>Organic & natural healthy lifestyle</h1>
        </div>
        <div class="hero-description">
          <p>
            Performance review synergize productive mindfulness for downselect
            and horsehead offer.
          </p>
        </div>
        <div class="hero-button">
          <a class="button-green" href="#">Discover More</a>
        </div>
      </div>
      <div class="hero-image">
        <img src="assets/hero.png" alt="hero.png" />
      </div>
    </div>
  </div>
  <div class="links">
    <div class="links-container flex-space-around">
      <div class="link">
        <a href="#"><img src="assets/client-1.png" alt="client-1.png" /></a>
      </div>
      <div class="link">
        <a href="#"><img src="assets/client-2.png" alt="client-2.png" /></a>
      </div>
      <div class="link">
        <a href="#"><img src="assets/client-3.png" alt="client-3.png" /></a>
      </div>
      <div class="link">
        <a href="#"><img src="assets/client-4.png" alt="client-4.png" /></a>
      </div>
      <div class="link">
        <a href="#"><img src="assets/client-5.png" alt="client-5.png" /></a>
      </div>
    </div>
  </div>
  <!--Praleista sekcija-->
  <div class="slider">
    <div class="slider-container font-roboto-regular">
      <div class="top-text font-roboto-regular"><h3>Organic Business Features</h3></div>
      <div class="middle-text font-pt-sans-regular"><h2>Our Unique Features</h2></div>
      <div class="objects flex-space-between">
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #1</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #2</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #3</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #4</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #5</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #6</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #7</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #8</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #9</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #10</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #11</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
        <div class="object fade">
          <div class="slider-image">
            <img src="assets/leaf.png" alt="leaf.png" />
          </div>
          <div class="slider-toptext">100% Organic #12</div>
          <div class="slider-text font-roboto-regular">
            Cobbler's pose, bound angle pose staff pose bow.
          </div>
          <div class="slider-link font-roboto-regular">
            <a href="#">Learn More</a>
          </div>
        </div>
      </div>
      <div class="slider-buttons flex-space-around">
        <div class="slider-selector" onclick="currentSlide(0)"></div>
        <div class="slider-selector" onclick="currentSlide(1)"></div>
        <div class="slider-selector" onclick="currentSlide(2)"></div>
      </div>
    </div>
  </div>

  <!--Product page-->
  <div class="product">
    <div class="product-blur">
      <div class="product-container flex-space-around">
        <div class="product-container-text">
          <div class="top-line font-roboto-regular">
            <h3>Set up your website in minutes and bring your brand to life.</h3>
          </div>
          <div class="center-line font-pt-sans-regular">
            <h2>Organic. Fresh. Natural. Everything you ever need.</h2>
          </div>
          <div class="bottom-container flex-space-between">
            <div class="bottom-container-add">
              <div class="add-image">
                <img src="assets/leaf2.png" alt="leaf2.png" />
              </div>
              <div class="add-toptext font-open-sans-regular">100% Organic</div>
              <div class="add-text font-roboto-regular">
                Cobbler's pose, bound angle pose staff pose bow.
              </div>
            </div>
            <div class="bottom-container-add">
              <div class="add-image">
                <img src="assets/leaf2.png" alt="leaf2.png" />
              </div>
              <div class="add-toptext font-open-sans-regular">100% Organic</div>
              <div class="add-text font-roboto-regular">
                Cobbler's pose, bound angle pose staff pose bow.
              </div>
            </div>
            <div class="bottom-container-add">
              <div class="add-image">
                <img src="assets/leaf2.png" alt="leaf2.png" />
              </div>
              <div class="add-toptext font-open-sans-regular">100% Organic</div>
              <div class="add-text font-roboto-regular">
                Cobbler's pose, bound angle pose staff pose bow.
              </div>
            </div>
          </div>
        </div>
        <div class="product-container-image">
          <img src="assets/hero-2.png" alt="hero-2.png" />
        </div>
      </div>
    </div>
  </div>
  <div class="contact-us">
    <div class="contact-us-container">
      <div class="contact-us-title font-open-sans-regular">
        <h2>Our Handpicked Products</h2>
      </div>
      <div class="contact-us-form font-pt-sans-regular">
        <form action="index.php" method="post">
          <label for="yname">Your name</label>
          <input type="text" id="yname" name="vardas" />

          <label for="email">Your email</label>
          <input type="email" id="email" name="email" />
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>

          <input type="submit" name="submit" value="Send"/>
        </form>
      </div>
    </div>
  </div>
  <div class="product">
    <div class="product-blur">
      <div class="product-bottom-container">
        <div class="product-bottom-ttext font-roboto-regular">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor
        </div>
        <div class="product-bottom-mtext font-open-sans-regular">
          <h2>The convenient & affordable Organic solution.</h2>
        </div>
        <div class="product-bottom-button">
          <a class="button-green" href="#">Get Organic</a>
        </div>
      </div>
    </div>
  </div>

  <div class="blog">
    <div class="blog-container">
      <div class="blog-container-top-text font-roboto-light">
        <h3>Daily Blog journal</h3>
      </div>
      <div class="blog-container-middle-text font-open-sans-regular">
        <h2>Organic Food Blog</h2>
      </div>
      <div class="blog-container-adds flex-space-between">
        <div class="blog-container-add">
          <div class="blog-container-image">
            <img src="assets/feature-1.png" alt="feature-1.png" />
          </div>
          <div class="blog-container-text font-open-sans-regular">
            8 Easy Pieces I’ve Worn Over & Over to Have it All
          </div>
          <div class="blog-container-author font-roboto-light">
            <div class="name">David Beck</div>
            <div class="date">April 13, 2019</div>
          </div>
        </div>
        <div class="blog-container-add">
          <div class="blog-container-image">
            <img src="assets/feature-2.png" alt="feature-2.png" />
          </div>
          <div class="blog-container-text font-open-sans-regular">
            8 Easy Pieces I’ve Worn Over & Over to Have it All
          </div>
          <div class="blog-container-author font-roboto-light">
            <div class="name">David Beck</div>
            <div class="date">April 13, 2019</div>
          </div>
        </div>
        <div class="blog-container-add">
          <div class="blog-container-image">
            <img src="assets/feature-3.png" alt="feature-3.png" />
          </div>
          <div class="blog-container-text font-open-sans-regular">
            8 Easy Pieces I’ve Worn Over & Over to Have it All
          </div>
          <div class="blog-container-author font-roboto-light">
            <div class="name">David Beck</div>
            <div class="date">April 13, 2019</div>
          </div>
        </div>
        <div class="blog-container-add">
          <div class="blog-container-image">
            <img src="assets/feature-4.png" alt="feature-4.png" />
          </div>
          <div class="blog-container-text font-open-sans-regular">
            8 Easy Pieces I’ve Worn Over & Over to Have it All
          </div>
          <div class="blog-container-author font-roboto-light">
            <div class="name">David Beck</div>
            <div class="date">April 13, 2019</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer font-roboto-regular">
    <div class="footer-container">
      <div class="footer-columns flex-space-between">
        <div class="footer-column footer-cone">
          <div class="footer-top-text font-roboto-light">Resources</div>
          <div class="footer-btext">
            <a href="#">About Us</a><a href="#">Contact</a
            ><a href="#">Terms & Conditions</a>
          </div>
        </div>
        <div class="footer-column">
          <div class="footer-top-text font-roboto-light">Social Media</div>
          <div class="footer-btext">
            <div class="flex-space-between">
              <img src="assets/social-1.png" alt="facebook.jpg" />
              <div class="text-container"><a href="#">Facebook </a></div>
            </div>
            <div class="flex-space-between">
              <img src="assets/social-2.png" alt="twitter.jpg" />
              <div class="text-container"><a href="#">Twitter</a></div>
            </div>
            <div class="flex-space-between">
              <img src="assets/social-3.png" alt="instagram.jpg" />
              <div class="text-container"><a href="#">Instagram</a></div>
            </div>
          </div>
        </div>
        <div class="footer-column">
          <div class="footer-top-text font-roboto-light">Address</div>
          <div class="footer-btext">
            <div>497 Evergreen Rd. Roseville, CA 95673</div>
            <div>+44 345 678 903</div>
            <a href="mailto:adobexd@mail.com">adobexd@mail.com</a>
          </div>
        </div>
        <div class="footer-column fake">
          <div class="footer-ttext"></div>
          <div class="footer-btext"></div>
        </div>
      </div>
      <div class="footer-trademark font-roboto-light">
        &copy; Built with pride and caffeine. All rights reserved.
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>
