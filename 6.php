<?php
// You can add dynamic PHP code here if needed in the future
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="/img/fav.png" type="image/x-icon" />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <title>Download Page</title>
  </head>
  <body>
    <!-- Custom Scrollbar -->
    <div class="progress">
      <div class="progress-bar" id="scroll-bar"></div>
    </div>
    <!-- Header Section -->
    <header>
      <div class="nav container">
        <a href="first.php" class="logo">
          🎮Game
          <span>Hub</span>
        </a>
        <div class="nav-icons">
          <i class="bx bx-bell bx-tada" id="bell-icon"><span></span></i>
          <i class="bx bxs-download bx-tada" id="download-icon"></i>
          <div class="menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </div>
        <!-- Menu -->
        <div class="menu">
          <img src="menu.png" alt="Menu Image" />
          <div class="navbar">
            <li><a href="first.php">Home</a></li>
            <li><a href="#trending" id="trending-section">Trending</a></li>
            <li><a href="#latest" id="new-section">Latest</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#action_games" id="new-section">Action Games</a></li>
            <li><a href="#contact_us">Contact Us</a></li>
          </div>
        </div>
      </div>
      <!-- Notification -->
      <div class="notification">
        <div class="notification-box">
          <span>✔️</span>
          <p>Congratulations! Your Game has been Downloaded</p>
        </div>
        <div class="notification-box box-color">
          <span>❌</span>
          <p>Could not Download your Game Plz Retry Again!</p>
        </div>
      </div>
    </header>

    <!-- Game Heading Section -->
    <div class="game-heading container">
      <h1><img class="s-icon" src="menu.png" type="x-icon" alt="icon" />ghost-of-tsushima</h1>
      <!-- Cyberpunk Image -->
      <img src="trending4.jpg" alt="ghost-of-tsushima" class="game-image">
    </div>

    <!-- About Section -->
    <div class="about container">
      <h2>
        <?xml version="1.0" ?><svg class="about-icon" id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.158,26.134C6.066,23.557,5,21,5,21l7,2c0,0-3.663,3.721-8.417,3.99L3.158,26.134z" fill="#322f40"/><circle cx="3.5" cy="26.5" r="0.5"/><path d="M15,3C7.82,3,2,7.925,2,14s5.82,11,13,11s13-4.925,13-11S22.18,3,15,3z M16,20h-2v-7h2V20z M15,10.5  c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,10.5,15,10.5z" fill="#322f40"/>
      <svg class="about-icon" id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.158,26.134C6.066,23.557,5,21,5,21l7,2c0,0-3.663,3.721-8.417,3.99L3.158,26.134z" fill="#322f40"/><circle cx="3.5" cy="26.5" r="0.5"/><path d="M15,3C7.82,3,2,7.925,2,14s5.82,11,13,11s13-4.925,13-11S22.18,3,15,3z M16,20h-2v-7h2V20z M15,10.5  c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,10.5,15,10.5z" fill="#322f40"/>
        <svg class="about-icon" id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.158,26.134C6.066,23.557,5,21,5,21l7,2c0,0-3.663,3.721-8.417,3.99L3.158,26.134z" fill="#322f40"/><circle cx="3.5" cy="26.5" r="0.5"/><path d="M15,3C7.82,3,2,7.925,2,14s5.82,11,13,11s13-4.925,13-11S22.18,3,15,3z M16,20h-2v-7h2V20z M15,10.5  c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,10.5,15,10.5z" fill="#322f40"/>
        <svg class="about-icon" id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.158,26.134C6.066,23.557,5,21,5,21l7,2c0,0-3.663,3.721-8.417,3.99L3.158,26.134z" fill="#322f40"/><circle cx="3.5" cy="26.5" r="0.5"/><path d="M15,3C7.82,3,2,7.925,2,14s5.82,11,13,11s13-4.925,13-11S22.18,3,15,3z M16,20h-2v-7h2V20z M15,10.5  c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,10.5,15,10.5z" fill="#322f40"/>
          </svg>
        <h2>About Ghost of Tsushima</h2>
        <p>
        <ul>
        <ol>Welcome to the world of *Ghost of Tsushima*, an open-world action-adventure game set in feudal Japan!</ol>
        <br/>
        In *Ghost of Tsushima*, you play as Jin Sakai, a samurai warrior struggling to defend his homeland, Tsushima Island, from the Mongol invasion. Embark on a journey filled with epic battles, stealthy tactics, and personal sacrifice as you navigate Jin’s transformation from samurai to the "Ghost" who will do whatever it takes to save his people.
        <br/><br/>
        <ol>★ Explore a beautifully crafted open world, from lush forests to vast plains and iconic landmarks!</ol>
        <ol>★ Master the art of combat with katana swordplay and stealth tactics!</ol>
        <ol>★ Unleash the power of Jin’s transformation into the Ghost to defeat Mongol forces!</ol>
        <ol>★ Engage in heart-pounding battles against a variety of Mongol warlords and their armies!</ol>
        <ol>★ Enjoy side quests that delve into the lives of Tsushima’s people, uncovering stories of honor, sacrifice, and revenge!</ol>
        <br/>
        <ol>Join Jin Sakai in his fight for his homeland in the world of *Ghost of Tsushima*!</ol>
        </ul>
        </p>
      </div>

    <!-- Download Section -->
    <div class="download">
      <h2><i class="bx bxs-download"></i></h2>
      <a href="https://ghost-of-tsushima-directors-cut.en.softonic.com/download" download class="download-button">
          <i class="bx bxs-download bx-fade-down"></i> ghost-of-tsushima for Windows
      </a>
    </div>

    <!-- Scroll to Top Section -->
    <div class="up-page">
      <a href="6.php"><i class="bx bxs-chevrons-up bx-fade-up"></i></a>
    </div>

    <!-- Footer Section -->
    <div class="copyright container">
      <a href="first.php" class="logo2">
          🎮Game<span>Hub</span>
      </a>
      <p>
          &#169; 2024 Game Hub. All rights reserved. <br>
          Designed by VSV:)
      </p>
    </div>

    <!-- Add the necessary scripts -->
    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>

<!-- CSS for Image and Button -->
<style>
  .game-image {
    width: 80%; /* Adjust the size as needed */
    max-width: 700px; /* Optional: Set a maximum size */
    margin: 20px auto; /* Centers the image horizontally and adds margin */
    display: block; /* Ensures the image is block-level */
    border-radius: 10px; /* Optional: Add rounded corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Optional: Add a shadow effect */
  }

  .download-button {
    display: inline-block;
    background: linear-gradient(to right, #ff7e5f, #feb47b); /* Colorful gradient */
    color: white;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 50px;
    text-decoration: none;
    text-align: center;
    transition: background 0.3s ease, transform 0.3s ease;
  }

  .download-button i {
    margin-right: 10px;
  }

  .download-button:hover {
    background: linear-gradient(to right, #ff6a00, #ff9e00); /* Lighter gradient on hover */
    transform: scale(1.05); /* Slight scale-up effect */
  }
</style>
