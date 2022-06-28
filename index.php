<?php
require 'php/comments.php';
    if(empty($_POST['submit'])){
        $info = [];
        $query = $conn->query("SELECT * FROM `comments`");
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" title="theme" href="css/themes/dark.css">
    <link rel="shortcut icon" href="img/Logo/icon.svg">
    <title>Prosfistion - Нужен сайт не проблема?</title>
</head>
<body>
    <header class="header">
        <div class="header__container">
            <a href="/" class="header__logo logo-header">
                <img src="img/Logo/icon.svg" alt="Логотип" class="logo-header__icon">
                <img src="img/Logo/icon-text.svg" alt="Логотип" class="logo-header__text">
            </a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="#about-us">О нас</a></li>
                    <li class="menu__item"><a href="#help">Помощь</a></li>
                    <li class="menu__item"><a href="#order">Заказать</a></li>
                </ul>
            </nav>
            <div class="header__buttons buttons-header">
                <a href="#" class="button-header buttons-header__login">Log in</a>
                <a href="#" class="button-header buttons-header__register">Register</a>
            </div>

            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="theme">
                <i class="fa-solid fa-toggle-on change-theme" data-theme="dark"></i>
                <i class="fa-solid fa-toggle-off change-theme" data-theme="light"></i>
            </div>
            
        </div>
    </header>

    <main class="main">

        <section class="about-us background" id="about-us">
            <div class="about-us__container">
                <div class="about-us__title title">Мы делаем сайты.</div>
                <div class="about-us__title about-us__title--ourWorks">Наши работы</div>

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <div class="slide-left">
                                <div class="slide-left__name-site name-site">Beeline</div>
                                <div class="slide-left__description-site description-site">«Била́йн» — торговая марка компании ВымпелКом, под которой её дочерние компании оказывают телекоммуникационные услуги в России и странах СНГ.</div>
                                <div class="slide-left__button button">Подробнее</div>
                            </div>
                            <div class="slide-right">
                                <div class="slide-right__images">
                                    <img src="img/about-us/slider/beeline/beeline.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide">
                            <div class="slide-left">
                                <div class="slide-left__name-site name-site">Kyivstar</div>
                                <div class="slide-left__description-site description-site">«Киевстáр» — украинская телекоммуникационная компания, предоставляющая услуги связи и передачи данных.</div>
                                <div class="slide-left__button button">Подробнее</div>
                            </div>
                            <div class="slide-right">
                                <div class="slide-right__images">
                                    <img src="img/about-us/slider/kiyvstar/kiyvstar.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide">
                            <div class="slide-left">
                                <div class="slide-left__name-site name-site">Lifecell</div>
                                <div class="slide-left__description-site description-site">lifeсell — торговая марка, под которой украинский оператор мобильной связи ООО «Лайфселл»</div>
                                <div class="slide-left__button button">Подробнее</div>
                            </div>
                            <div class="slide-right">
                                <div class="slide-right__images">
                                    <img src="img/about-us/slider/Lifecell/lifecell.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>
            </div>
        </section>
        
        <section class="connect-witch-us background"  id="help">
            <div class="connect-witch-us__container">
                <p class="connect-witch-us__title title">сообщить о проблеме:</p>
                <div class="connect-witch-us__items">
                    <div class="connect-witch-us__item">
                        <p class="connect-witch-us__status">Веб-разработчик</p>
                        <p class="connect-witch-us__name">gazes12#1950</p>
                    </div>
                    <a href="https://discord.gg/bxqxuxJt" target="_blank" class="connect-witch-us__icon"><i class="fa-brands fa-discord"></i></a>
                    <div class="connect-witch-us__item">
                        <p class="connect-witch-us__status">Веб-дизайнер</p>
                        <p class="connect-witch-us__name">zxcawsd#2177</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="order background"  id="order">
            <div class="order__container">
                <a href="#" class="order__button order-button">
                    <div class="order-button__line order-button__line--left"></div>
                    <div class="order-button__line order-button__line--right"></div>
                    <div class="order-button__line order-button__line--top"></div>
                    <div class="order-button__line order-button__line--bottom"></div>

                    <div class="order-button__text">Заказать</div>
                </a>
            </div>
        </section>

        <section id="comments" class="comments background">
            <div class="comments__title title">Комментарии</div>

            <?php
                if(isset($_GET['error'])){
                    ?>
                        <div class="comments-result comments__error">
                            <?php
                                echo $_GET['error'];
                            ?>    
                        </div>
                    <?php
                }else if(isset($_GET['succ'])){
                    ?>
                        <div class="comments-result comments__succ">
                            <?php
                                echo 'Ваш комментарий добавлен!';
                            ?>    
                        </div>
                    <?php                                
                }
            ?>

            <div class="create-comments__container">
                <div class="create-comments">
                    <form method="post" action="php/comments.php" class="create-comments__form">
                    <input type="text" placeholder="Имя" class="create-comments__input" name="name" value="<?= $_COOKIE['name'] ?>">
                        <input type="text" placeholder="Фамилия" class="create-comments__input" name="surname" value="<?= $_COOKIE['surname'] ?>">
                        <input type="text" placeholder="Сообщение" class="create-comments__input" name="message" value="<?= $_COOKIE['message'] ?>">

                        <input type="submit" name="submit" class="create-comments__button"> 
                    </form>                   
                </div>
            </div>

            <div class="comments__container">
                <div  class="comments__body">
                    <?php foreach($info as $data): ?>
                        <div class="comments__item">
                            <div class="comments__people">
                                <div class="comments__name"><?= $data['name']?></div>
                                <div class="comments__surname"><?= $data['surname']?></div>
                            </div>
                            <div class="comments__message"><?= $data['message']?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </main>

    <div class="popup-checkSiteContent">
        <div class="popup-checkSiteContent__canvas">
            <div class="popup-checkSiteContent__title">Подробнее о работе</div>
            <i class="fa-solid fa-circle-xmark popup-checkSiteContent__close"></i>
            <div class="popup-checkSiteContent__contentSite contentSite">
                <div class="contentSite__name"></div>
                <div class="contentSite__description"></div>
                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/about-us/slider/beeline/beeline.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/about-us/slider/kiyvstar/kiyvstar.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/about-us/slider/Lifecell/lifecell.png" alt="">
                        </div>
                    </div>
                    
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>
            </div>
            <a href="" class="popup-checkSiteContent__button button">Посмотреть</a>
        </div>
    </div>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/switcher.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/smoothScroll.js"></script>
    <script src="js/header.js"></script>
</body>
</html>