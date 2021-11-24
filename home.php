<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles-home.css">

        <title>SMMUT</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
					<a href="#" class="nav__logo">SMMUT</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="profile.php" class="nav__link">Profile</a></li>
                        <li class="nav__item"><a href="#friends" class="nav__link">Friends</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
			<div class="home__container bd-container">
				<fieldset>
				<h3>Post Message</h3>
				<form action="" method="">
					<textarea type="text" name="message"></textarea>
					<input type="submit" name="submit" value="Post"/>
				</form>
				</fieldset>
			</div>
			<div class="home__container bd-container">
				<p>lalala</p>
			</div>
		</main>
		
		<!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">
                        <a href="#" class="footer__logo">SMMUT</a>
                    </h3>
                    <p class="footer__description">Menghubungkan Para Mahasiswa.</p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Layanan Lain</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Chatting </a></li>
                        <li><a href="#" class="footer__link">Images </a></li>
                        <li><a href="#" class="footer__link">Comments </a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Tentang</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Blog</a></li>
                        <li><a href="#" class="footer__link">Tentang Kami</a></li>
                        <li><a href="#" class="footer__link">Kedepan</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Sosial</h3>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021. All right reserved</p>
        </footer>
		
	</body>
	</html>