<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="/img/fav.png" type="image/x-icon" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <title>Game Hub | Gaming Website 🎮| Download games for Free!</title>
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

                <a href="second.php"><i class="bx bxs-download bx-tada" id="download-icon"></i></a>
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
                    <li><a href="#trending-section" id="🔥 Trending Games">Trending</a></li>
                    <li><a href="#new-section" id="new container">Latest</a></li>
                    <li><a href="#contact_us">Contact Us</a></li>
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
                    <p>Could not Download your Game. Please Retry Again!</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section class="home container" id="home">
        <img src="home.png" alt="gaming" />
        <div class="home-text">
            <h1>CITY OF THE <br />FUTURE</h1>
            <a href="http://localhost/VSV/3.php" class="btn">Available Now!</a>
        </div>
    </section>

    <!-- Trending Section -->
    <section class="trending container" id="trending-section">
        <div class="heading">
            <h2>🔥 Trending Games</h2>
        </div>

        <!-- Trending Content -->
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="trending1.webp" alt="" />
                        <div class="box-text">
                            <h2>Cyberpunk 2077</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="http://localhost/VSV/3.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="trending2.jpg" alt="" />
                        <div class="box-text">
                            <h2>Battlefield 2042</h2>
                            <h3>Action, Weapon, Crime</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="http://localhost/VSV/5.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="trending3.jpg" alt="" />
                        <div class="box-text">
                            <h2>Assassin's Creed</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="http://localhost/VSV/4.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
<!-- Slide 4 -->
<div class="swiper-slide">
    <div class="box">
        <img src="trending4.jpg" alt="" />
        <div class="box-text">
            <h2>Ghost of Tsushima</h2>
            <h3>Action</h3>
            <div class="rating-download">
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                </div>
                <a href="http://localhost/VSV/6.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Slide 5 -->
<div class="swiper-slide">
    <div class="box">
        <img src="trending5.png" alt="" />
        <div class="box-text">
            <h2>GTA V</h2>
            <h3>Action, Crime, Mission</h3>
            <div class="rating-download">
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                </div>
                <a href="http://localhost/VSV/7.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Slide 6 -->
<div class="swiper-slide">
    <div class="box">
        <img src="trending6.jpg" alt="" />
        <div class="box-text">
            <h2>Dying Light 2</h2>
            <h3>Action</h3>
            <div class="rating-download">
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                </div>
                <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Slide 7 -->
<div class="swiper-slide">
    <div class="box">
        <img src="trending7.png" alt="" />
        <div class="box-text">
            <h2>HALO Infinite</h2>
            <h3>Action</h3>
            <div class="rating-download">
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                </div>
                <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Slide 8 -->
<div class="swiper-slide">
    <div class="box">
        <img src="trending8.png" alt="" />
        <div class="box-text">
            <h2>Resident Evil Village</h2>
            <h3>Action, Crime</h3>
            <div class="rating-download">
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                </div>
                <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

<!-- New Section -->
<!-- New Section -->
<section class="new container" id="new-section">
      <div class="heading">
        <h2>
          <?xml version="1.0" ?><!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.0//EN' 'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'>
          <svg
            enable-background="new 0 0 30.785 32.009"
            height="32.009"
            overflow="visible"
            viewBox="0 0 30.785 32.009"
            width="30.785"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            class="pacman-icon"
          >
            <g>
              <g id="Pacman_1_">
                <g id="Pacman">
                  <path
                    d="M30.785,22.127l-14.781-6.123l14.781-6.123        C27.404,1.717,18.045-2.16,9.881,1.222C1.717,4.604-2.159,13.963,1.222,22.127c3.381,8.164,12.74,12.041,20.905,8.659        C26.209,29.096,29.219,25.91,30.785,22.127z"
                    fill="#FED049"
                    id="Body"
                  />
                  <circle
                    cx="16.004"
                    cy="7.004"
                    fill="#F39C12"
                    id="Eye"
                    r="2"
                  />
                </g>
              </g>
            </g>
          </svg>
          New Games
        </h2>
      </div>
    <!-- New Content -->
    <div class="new-content">
        <!-- New 1 -->
        <div class="box">
            <img src="new1.jpg" alt="" />
            <div class="box-text">
                <h2>Subway Surfers</h2>
                <h3>Action, Mobile</h3>
                <div class="rating-download">
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <span>4.7</span>
                    </div>
                    <a href="http://localhost/VSV/second.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                </div>
            </div>
        </div>

        <!-- New 2 -->
        <div class="box">
            <img src="new2.jpg" alt="" />
            <div class="box-text">
                <h2>Call of Duty: Mobile</h2>
                <h3>Action, Mobile</h3>
                <div class="rating-download">
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <span>4.7</span>
                    </div>
                    <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                </div>
            </div>
        </div>

        <!-- New 3 -->
        <div class="box">
            <img src="new3.jpg" alt="" />
            <div class="box-text">
                <h2>Free Guy</h2>
                <h3>Action</h3>
                <div class="rating-download">
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <span>4.7</span>
                    </div>
                    <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                </div>
            </div>
        </div>

        <!-- New 4 -->
        <div class="box">
            <img src="new4.jpg" alt="" />
            <div class="box-text">
                <h2>Clash Royale</h2>
                <h3>Action</h3>
                <div class="rating-download">
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <span>4.7</span>
                    </div>
                    <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
                </div>
            </div>
        </div>
<!-- New 5 -->
<div class="box">
    <img src="new5.png" alt="" />
    <div class="box-text">
        <h2>Minecraft</h2>
        <h3>Action</h3>
        <div class="rating-download">
            <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
            </div>
            <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
        </div>
    </div>
</div>

<!-- New 6 -->
<div class="box">
    <img src="new6.png" alt="" />
    <div class="box-text">
        <h2>PUBG</h2>
        <h3>Action</h3>
        <div class="rating-download">
            <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
            </div>
            <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
        </div>
    </div>
</div>

<!-- New 7 -->
<div class="box">
    <img src="new7.png" alt="" />
    <div class="box-text">
        <h2>Fortnite</h2>
        <h3>Action</h3>
        <div class="rating-download">
            <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
            </div>
            <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
        </div>
    </div>
</div>

<!-- New 8 -->
<div class="box">
    <img src="new8.jpg" alt="" />
    <div class="box-text">
        <h2>Marvel of Champions</h2>
        <h3>Action</h3>
        <div class="rating-download">
            <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
            </div>
            <a href="http://localhost/VSV/third.php" class="box-btn"><i class="bx bx-down-arrow-alt bx-tada"></i></a>
        </div>
    </div>
</div>
</section>

<!-- Footer Section -->
<div class="copyright container">
    <a href="first.php" class="logo2">
        🎮Game<span>Hub</span>
    </a>
    <p>
        &#169; 2024 Game Hub. All rights reserved. <br>
        Designed by VSV :)
    </p>
</div>

<!-- Contact Us Section -->
<section id="contact_us" style="text-align: center; padding: 50px; background-color: #da9111; position: relative; bottom: 0; width: 100%;">
    <h1>Need Assistance? Contact SSS & Vivek!</h1>
    <p>Phone: <a href="tel:9876543210">9876543210</a></p>
    <p>Email: <a href="mailto:sss.vivek@example.com">sss.vivek@example.com</a></p>
</section>

<script src="swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
