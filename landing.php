<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passionate</title>
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <!--------------------------------------------------------------------------->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">Passionate</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Services</a>
                </li>
                <li class="navbar__btn">
                    <a href="#Sign Up" class="button" id="sign-up">Sign Up</a>
                </li>
            </ul>

        </div>
    </nav>

    <!----------------------------------------------------------------------------->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Welcome to <span><br><AuroFLow>Passionate</AuroFLow></span></h1>
        </div>
    </div>

    <!-------------------------------------------------------------------------->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
            </div>
            <div class="main__content">
                <h1>What is Passionate</h1>
                <h2>Passionate is a social media website</h2>
                <p>Sign in and upload your passion</p>
                <button class="main__btn">
                    <a href="#Sign Up">Sign in</a>
                </button>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------->
    <div class="services" id="services">
        <h1>Content</h1>
        <div class="services__wrapper">
            <div class="services__card">
                <h2>Cricket</h2>
                <p><b>Numerous videos are uploaded</b></p>
                <div class="services__btn"><a href="#Sign Up"><button>Get Started</button></a></div>
            </div>
            <div class="services__card">
                <h2>Football</h2>
                <p><b>Get liked and comment by professional footballers</b></p>
                <div class="services__btn"><a href="#Sign Up"><button>Get Started</button></a></div>
            </div>
            <div class="services__card">
                <h2>Dancing</h2>
                <p><b>Show us some moves</b></p>
                <div class="services__btn"><a href="#Sign Up"><button>Get Started</button></a></div>
            </div>
            <div class="services__card">
                <h2>Singing</h2>
                <p><b>Show us your passion</b></p>
                <div class="services__btn"><a href="#Sign Up"><button>Get Started</button></a></div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------->
    <div class="main" id="Sign Up">
        <div class="main__container">
            <div class="main__content">
                <h1>JOIN US</h1>
                <h2 class="new">Consider Signing Up</h2>
                <button class="main__btn">
                    <a href="register.php">Sign Up</a>
                </button>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2"><i class="fas fa-users"></i></div>
            </div>

        </div>
    </div>
    <!--  -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2 id="h2">About Us</h2>
                    <a href="/">How it works</a>
                    <a href="/">Careers</a> <a href="/">Terms of Service</a>
                </div>
                <div class="footer__link--items">
                    <h2 id="h2">Contact Us</h2>
                    <a href="/">Contact</a> <a href="/">Support</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2 id="h2">Videos</h2>
                    <a href="/">Submit Video</a>
                </div>
                <div class="footer__link--items">
                    <h2 id="h2">Social Media</h2>
                    <a href="/">Instagram</a> <a href="/">Facebook</a>
                    <a href="/">Youtube</a> <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo">Passionate</a>
                </div>
                <p class="website__rights">
                    © Passionate 2022. <br>All rights reserved.
                </p>
                <div class="social__icons">
                    <a href="https://www.facebook.com" class="social__icon--link" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>

            </div>
        </section>
    </div>
    <script src="assets/js/index.js"></script>
</body>

</html>
