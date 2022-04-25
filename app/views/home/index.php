<?php 
	$movies = $data['movies'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Roku Flashback</title>
</head>
<body>
    <header id="header">
            <div class="logo">
              <a href="index.html">
                <img src="./dist/roku-logo-svg2.svg" alt="Roku Logo">
              </a>
            </div>
  
              <div class="menu-btn">
                <span class="menu-btn__burger"></span>
              </div>
          
              <nav class="nav-mobile">
                <h2 class="hidden">Nav - mobile</h2>
                <ul class="menu-nav">
                  <li class="menu-nav__item">
                    <a href="index.html" class="menu-nav__link">
                      Home
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <a href="" class="menu-nav__link">
                      TV Shows
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <a href="" class="menu-nav__link">
                      Musics
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <a href="" class="menu-nav__link">
                      Movies
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <a href="" class="menu-nav__link">
                      Kids
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <a href="" class="menu-nav__link">
                      Profile
                    </a>
                  </li>
                  <li class="menu-nav__item">
                    <div class="social_media">
                      <img src="images/facebook_menu.svg" alt="">
                      <img src="images/instagram_menu.svg" alt="">
                      <img src="images/youtube_menu.svg" alt="">
                    </div>
                  </li>
                  <li class="menu-nav__item">
                    <div class="copyright_mobile">
                      <img src="images/copyright_menu.svg" alt="">
                      <p>2008-2021 All rights reserved.</p>
                    </div>
                  </li>
                </ul>
              </div>
              
              </nav>
  
              <nav class="nav-desktop">
                <h2 class="hidden">Nav - Desktop</h2>
                <ul class="menu-nav-desktop">
                    <li class="menu-nav__item">
                        <a href="index.html" class="menu-nav__link">
                          Home
                        </a>
                      </li>
                      <li class="menu-nav__item">
                        <a href="" class="menu-nav__link">
                          TV Shows
                        </a>
                      </li>
                      <li class="menu-nav__item">
                        <a href="" class="menu-nav__link">
                          Musics
                        </a>
                      </li>
                      <li class="menu-nav__item">
                        <a href="" class="menu-nav__link">
                          Movies
                        </a>
                      </li>
                </ul>
              </div>
              
              </nav>
    </header>
 
    <section class="promo">
        <img src="dist/got.jpg" alt="promo-parents">
    </section>

    <section class="recommend">
        <h2>RECOMMENDED</h2>
        <div class="" style="display: flex; flex-direction: row;flex-wrap: wrap;">
            <?php
            	for($i = 0; $i < count($movies); $i++){
            		echo "<div style=\"width: 33%;margin-top: 10px;\">
            	<img style=\"width: 99%;\" src=\"https://s7.gifyu.com/images/" . $movies[$i]['movies_cover'] . "\">
				<p>" . $movies[$i]['movies_title'] . "</p>

            	</div>";
            	}
             ?>
        </div>
    </section>
    <footer id="footer">
        <div class="logo">
            <a href="index.html">
              <img src="dist/roku-logo-svg2.svg" style="margin-top: 10px;" alt="Roku Logo">
            </a>
           <div class="copyright">
               <img src="dist/copyright.svg" alt="copyright">
            <p>2008-2021 All rights reserved.</p>
        </div> 
       </div>
       <section class="followUs">
           <p>Follow us:</p>
           <a href="https://www.facebook.com">
           <img src="dist/facebook.svg" alt="facebook">
          </a>
          <a href="https://www.instagram.com">
           <img src="dist/instagram.svg" alt="instagram">
          </a>
          <a href="https://www.youtube.com">
           <img src="dist/youtube.svg" alt="youtube">
          </a>
       </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>
