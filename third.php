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
    <title></title>
  </head>
  <body>
  
      <div class="game-list">

        <!-- Dying Light 2 -->
        <div class="game-item">
          <h3>Dying Light 2</h3>
          <a href="https://gamingbeasts.com/dying-light-2-stay-human-free-pc-game-download/" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Dying Light 2
          </a>
        </div>

        <!-- Call of Duty -->
        <div class="game-item">
          <h3>Call of Duty</h3>
          <a href="https://call-of-duty-mobile-for-pc.en.softonic.com/download" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Call of Duty
          </a>
        </div>

        <!-- Free Guy -->
        <div class="game-item">
          <h3>Free Guy</h3>
          <a href="https://www.microsoft.com/en-us/p/free-guy/8d6kgwxn4l7c?activetab=pivot%3aoverviewtab" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Free Guy
          </a>
        </div>

        <!-- Clash Royale -->
        <div class="game-item">
          <h3>Clash Royale</h3>
          <a href="https://clash-royale.en.softonic.com/download" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Clash Royale
          </a>
        </div>

        <!-- Minecraft -->
        <div class="game-item">
          <h3>Minecraft</h3>
          <a href="https://www.minecraft.net/en-us/download" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Minecraft
          </a>
        </div>

        <!-- PUBG -->
        <div class="game-item">
          <h3>PUBG</h3>
          <a href="https://pubg.com/en/events/2024goldenegg" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download PUBG
          </a>
        </div>

        <!-- Fortnite -->
        <div class="game-item">
          <h3>Fortnite</h3>
          <a href="https://fortnite.en.softonic.com/download" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Fortnite
          </a>
        </div>

        <!-- Marvel Champions -->
        <div class="game-item">
          <h3>Marvel Champions</h3>
          <a href="https://www.gameloop.com/game/action/marvel-contest-of-champions-on-pc" download class="download-button">
            <i class='bx bxs-download bx-fade-down'></i> Download Marvel Champions
          </a>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <footer class="copyright container">
      <a href="first.php" class="logo2">
        🎮Game<span>Hub</span>
      </a>
      <p>&#169; 2024 Game Hub. All rights reserved. <br> Designed by VSV :) </p>
    </footer>

    <!-- Add this CSS for the download buttons and page structure -->
    <style>
      .game-list {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
        margin-top: 20px;
      }

      .game-item {
        background-color: #e9aa18;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .download-button {
        display: inline-block;
        background: linear-gradient(to right, #ff7e5f, #feb47b); /* Colorful gradient */
        color: rgb(28, 137, 135);
        padding: 15px 30px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 50px;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.3s ease;
        margin-top: 10px;
      }

      .download-button:hover {
        background: linear-gradient(to right, #ff6a00, #ff9e00); /* Lighter gradient on hover */
        transform: scale(1.05); /* Slight scale-up effect */
      }

      footer {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: white;
      }
    </style>
  </body>
</html>
