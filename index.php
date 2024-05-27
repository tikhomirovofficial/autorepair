<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/lib/tikstyles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta name="description" content="'AutoRepair' – лучший сервис по ремонту автомобилей.">
    <meta property="og:title" content="'AutoRepair' – лучший ремонт авто." />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="AutoRepair' – лучший сервис по ремонту автомобилей." />
    <meta property="og:site_name" content="'AutoRepair' – ллучший ремонт авто." />
    <meta name="keywords" content="ремонт, автомобиль, шиномонтаж, AutoRepair">
    <meta name="author" content="AutoRepair">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/lib/tiklib.js"></script>
    <title>AutoRepair - лучший сервис по ремонту автомобилей</title>
</head>

<body>
    <header>
        <div class="big-wrapper">
            <div class="header__block f-row-betw">
                <a href="/"> <img width="150" src="assets/img/vectors/logo.svg" alt="">
                </a>
                <nav class="d-f gap-30 header__desktop">
                    <a class="fade-scroll" href="#about">О нас</a>
                    <a class="fade-scroll" href="#services">Услуги</a>
                    <a class="fade-scroll" href="#contacts">Контакты</a>
                </nav>
                <div class="header__works header__desktop">
                    Пн-Вс: 10:00 — 21:00
                </div>
                <div class="menu p-rel">
                    <div id="menu-btn" class="menu__btn">
                        <img width="34" src="assets/img/vectors/burger.svg" alt="">
                    </div>
                    <div id="menu-block" class="menu__block f-column gap-10 p-abs">
                        <div class="d-f jc-end">
                            <div id="menu-close">
                                <img style="transform: rotateZ(45deg);" height="24" src="assets/img/vectors/plus.svg"
                                    alt="">
                            </div>

                        </div>
                        <a class="fade-scroll" href="#about">О нас</a>
                        <a class="fade-scroll" href="#services">Услуги</a>
                        <a class="fade-scroll" href="#contacts">Контакты</a>

                    </div>
                </div>

            </div>
        </div>
    </header>
    <section class="welcome p-rel">
        <div class="swiper-wrapper">
            <div style="background-image: url('./assets/img/png/slider_1.png');"
                class="welcome__slide swiper-slide bg-cover h-100p w-100p p-rel">
                <div class="blur-shadow h-100p w-100p p-abs">

                </div>
                <div class="welcome__slide_content h-100p p-rel">
                    <div class="mini-wrapper h-100p f-c-col">
                        <div class="welcome__slide_content_block section h-100p f-c-col gap-40">
                            <h2 class="txt-center">АВТО ТЕХЦЕНТР В ЧЕРЕПОВЦЕ, ДОБРО ПОЖАЛОВАТЬ!</h2>
                            <p class="txt-center text">Почти у каждого человека есть автомобиль. А автомобили в свою
                                очередь могут выдавать сбои или вообще сломаться. Специально для этого
                                существуем мы!</p>
                            <a href="#order" class="welcome__slide_btn fade-scroll">Онлайн-запись</a>
                        </div>

                    </div>

                </div>
            </div>
            <div style="background-image: url('./assets/img/png/slider_1.png');"
                class="welcome__slide swiper-slide bg-cover h-100p w-100p p-rel">
                <div class="blur-shadow h-100p w-100p p-abs">

                </div>
                <div class="welcome__slide_content h-100p p-rel">
                    <div class="mini-wrapper h-100p f-c-col">
                        <div class="welcome__slide_content_block section h-100p f-c-col gap-40">
                            <h2 class="txt-center">АВТО ТЕХЦЕНТРs В ЧЕРЕПОВЦЕ, ДОБРО ПОЖАЛОВАТЬ!</h2>
                            <p class="txt-center text">Почти у каждого человека есть автомобиль. А автомобили в свою
                                очередь могут выдавать сбои или вообще сломаться. Специально для этого
                                существуем мы!</p>
                            <a href="#order" class="welcome__slide_btn fade-scroll">Онлайн-запись</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="prev slider-btn f-c-col">
            <img style="transform: rotateZ(180deg);" width="18" height="18" src="assets/img/vectors/arrow-left.svg"
                alt="">
        </div>
        <div class="next slider-btn f-c-col">
            <img width="18" height="18" src="assets/img/vectors/arrow-right.svg" alt="">
        </div>
    </section>
    <section id="about" class="about-work section">
        <div class="mini-wrapper">
            <div class="about-work__block f-column gap-50">
                <h2 class="title txt-center">
                    Как мы работаем?
                </h2>
                <div class="f-column gap-40">
                    <p class="text">
                        Мы делаем полный спектр ремонтных работ, от электронной диагностики автомобиля до замены любой
                        его запчасти. Вы всегда получаете гарантированно качественную работу от наших профессионалов, и
                        всегда можете быть уверенными в надежной работе своего автомобиля. Вы получите полную гарантию
                        на все виды работ.
                        В комплексных работах участвуют несколько специалистов, каждый из которых отвечает за свою часть
                        работы.
                    </p>
                    <p class="text">
                        Специалисты узкого профиля повышают работоспособность сервиса и качество выполнения работ.
                        Обслуживание автомобиля организовано согласно требованиям заводов-изготовителей. Оборудование
                        техцентра соответствует всем современным требованиям.
                    </p>
                    <p class="text">
                        Мы ремонтируем марки автомобилей: <b>
                            Toyota, Honda, Subaru, Nissan, Suzuki, Mazda, Mitsubishi

                        </b></p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services section">
        <div class="mini-wrapper">
            <div class="about-work__block f-column gap-50">
                <div class="f-column gap-30">
                    <h2 class="title txt-center">
                        Наши услуги
                    </h2>
                    <div class="text txt-center">Наш автосервис оснащен современным оборудованием для диагностики и
                        ремонта автомобилей японских марок</div>
                </div>

                <div class="f-column gap-10">
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-1" aria-expanded="false" aria-controls="s-1">

                            <div class="service__item_title">Кузовной цех</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>

                        </button>
                        <div class="collapse" id="s-1">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_1.jpg" alt="">
                                <ul class="service__list">
                                    <li>Замена масла и масляного фильтра — 500 руб.</li>
                                    <li>Проверка масла в АКПП, при необходимости доливка — 100 руб.</li>
                                    <li>Проверка уровня тормозной жидкости — 20 руб.</li>
                                    <li>Проверка уровня электролита АКБ — 100 руб.</li>
                                    <li>Проверка уровна масла в коробке переключения передач МКПП — 100 руб.</li>
                                    <li>Проверка тормозных колодок и дисков — 100 руб.</li>
                                    <li>Проверка/регулировка стояночного тормоза — 150 руб.</li>
                                    <li>Проверка наружного/внутреннего освещения — 100 руб.</li>
                                    <li>Проверка отопителя/системы кондиционирования воздуха — 100 руб.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-2" aria-expanded="false" aria-controls="s-2">

                            <div class="service__item_title">Слесарный цех</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>

                        </button>
                        <div class="collapse" id="s-2">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_2.jpg" alt="">
                                <ul class="service__list">
                                    <li>Замена бампера 01-07 — 1000 руб.</li>
                                    <li>Замена бампера 08-09 — 1000 руб.</li>
                                    <li>Замена бампера 211 — 1000 руб.</li>
                                    <li>Сборка и разборка двери — 700 руб.</li>
                                    <li>Ремонт замка двери от — 500 руб.</li>
                                    <li>Замена привода стеклоподъемника двери с разборкой — 700 руб.</li>
                                    <li>Замена привода стеклоподъемника двери с разборкой — 600 руб..</li>
                                    <li>Замена радиатора печки со снятием торпеды Классика — 660 руб.</li>
                                    <li>Замена радиатора печки со снятием торпеды — 1500 руб.</li>
                                    <li>Снять, установить торпеду — 1000 руб.</li>
                                    <li>Снять, установить торпеду Классика — от 1500 руб.</li>
                                    <li>Установка защиты картера — 200 руб.</li>
                                    <li>Установка шторок все модели — 270 руб.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-3" aria-expanded="false" aria-controls="s-3">
                            <div class="service__item_title">Диагностика автомобиля</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>
                        </button>
                        <div class="collapse" id="s-3">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_3.jpg" alt="">
                                <ul class="service__list">
                                    <li>Компьютерная диагностика – стоимость услуги 1 тыс. рублей,</li>
                                    <li>Ремонт электроники любых видов сложности</li>
                                    <li>Проверка наличия утечки электричества</li>
                                    <li>Ремонт любых ЭБУ автомобиля</li>
                                    <li>Ремонт роботизированных КПП (Easytronic)</li>
                                    <li>Ремонт блоков ABS</li>
                                    <li>Обнуление блоков SRS (после ДТП)</li>
                                    <li>Корректировка показаний спидометра</li>
                                    <li>Раскодировка штатных магнитол</li>
                                    <li>Программирование чип ключей</li>
                                    <li>Восстановление проводки после ДТП, возгорания</li>
                                    <li>Ремонт отопителей штатных не штатных</li>
                                    <li>Сброс сервисных интервалов</li>
                                    <li>Диагностика и ремонт пневмо и гидроподвески, блоков клапанов и управления</li>
                                    <li>Адаптация электронных блоков, датчиков и т.д.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-4" aria-expanded="false" aria-controls="s-4">
                            <div class="service__item_title">Ремонт двигателя</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>
                        </button>
                        <div class="collapse" id="s-4">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_4.jpg" alt="">
                                <ul class="service__list">
                                    <li>Полная переборка со снятием — от 9500 руб</li>
                                    <li>Прокладка головки блока цилиндра — замена 3000 руб</li>
                                    <li>Коллекторной прокладки замена — 1500 руб</li>
                                    <li>Прокладка поддона — 1200 руб</li>
                                    <li>Цепь-ремень замена — 1800 руб</li>
                                    <li>Замена маслосъемных колпачков — 1800 руб</li>
                                    <li>Ремонт головки блока — 5000 руб</li>
                                    <li>Регулировка клапанов — 800 руб</li>
                                    <li>Замена сальников заднего коленвала — 2500 руб</li>
                                    <li>Подтяжка цепи — 3800 руб</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-5" aria-expanded="false" aria-controls="s-5">
                            <div class="service__item_title">Техническое обслуживание</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>
                        </button>
                        <div class="collapse" id="s-5">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_5.jpg" alt="">
                                <ul class="service__list">
                                    <li>Замена дисковых тормозных колодок — 500/700 руб.</li>
                                    <li>Замена барабанных тормозных колодок — 800/950 руб.</li>
                                    <li>Замена колодок стояночного тормоза — 1000/1250 руб.</li>
                                    <li>Замена салонного фильтра 500-1200 руб.</li>
                                    <li>Замена топливного фильтра под днищем 500 руб.</li>
                                    <li>Замена топливного фильтра в моторном отсеке 750-1250 руб.</li>
                                    <li>Замена топливного фильтра(бензонасоса) в баке с доступом из салона от 1500 руб.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse__block">
                        <button class="service__item f-row-betw w-100p" type="button" data-bs-toggle="collapse"
                            data-bs-target="#s-6" aria-expanded="false" aria-controls="s-6">
                            <div class="service__item_title">Шиномонтажный цех</div>
                            <div class="service__item_btn f-c-col">
                                <img height="24" src="assets/img/vectors/plus.svg" alt="">
                            </div>
                        </button>
                        <div class="collapse" id="s-6">
                            <div class="service__item_content f-column gap-20">
                                <img class="service__img" src="assets/img/jpg/s_6.jpg" alt="">
                                <ul class="service__list">
                                    <li>Комплекс работ на 4 колеса (снятие/установка, мойка, балансировка) — 560 руб.
                                    </li>
                                    <li>Комплекс работ на 4 колеса (снятие/установка, мойка, демонтаж/монтаж резины,
                                        балансировка) — 960 руб.</li>
                                    <li>Комплекс работ на 4 колеса (снятие/установка, мойка, демонтаж/монтаж,
                                        балансировка) — 1840 руб.</li>
                                    <li>Снятие/установка колеса — 50 руб.</li>
                                    <li>Мойка колеса (технологическая) — 40 руб.</li>
                                    <li>Демонтаж колеса — 50 руб.</li>
                                    <li>Монтаж колеса — 50 руб.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery ">
        <div class="gallery__block d-f flex-wrap">
            <div style="background-image: url('assets/img/png/g_2.png');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/png/g_3.png');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/png/g_4.png');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/png/g_5.png');" class="gallery__item_block">

            </div>
        </div>
        <div class="gallery__block d-f flex-wrap">
            <div style="background-image: url('assets/img/png/g_6.png');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/png/promo_2.png');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/jpg/s_3.jpg');" class="gallery__item_block">

            </div>
            <div style="background-image: url('assets/img/jpg/s_5.jpg');" class="gallery__item_block">

            </div>
        </div>
    </section>
    <section class="features section">
        <div class="wrapper">
            <div class="features__block f-column gap-40">
                <div class="f-column gap-30">
                    <h2 class="title txt-center">
                        Комфортное ожидание
                    </h2>
                    <div class="text txt-center">Время ремонтных работ вы можете провести в зале ожидания нашего сервиса
                    </div>
                </div>
                <div class="features__list f-row-betw">
                    <div class="feature__item f-c-col gap-20 ">
                        <img width="60" src="assets/img/vectors/cup.svg" alt="">
                        <h3 class="txt-center">Чай и Кофе</h3>
                        <p class="txt-center">
                            Чай, кофе и закуски для наших клиентов бесплатно
                        </p>
                    </div>
                    <div class="feature__item f-c-col gap-20 ">
                        <img width="60" src="assets/img/vectors/wifi.svg" alt="">
                        <h3 class="txt-center">Wi-Fi</h3>
                        <p class="txt-center">
                            Чай, кофе и закуски для наших клиентов бесплатно
                        </p>
                    </div>
                    <div class="feature__item f-c-col gap-20 ">
                        <img width="60" src="assets/img/vectors/tv.svg" alt="">
                        <h3 class="txt-center">Телевиденье</h3>
                        <p class="txt-center">
                            В зале ожидание есть работающий телевизор
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promo section">
        <div class="wrapper">
            <div class="promo__block f-column gap-50">
                <h2 class="title txt-center">
                    Акции
                </h2>
                <div class="f-column gap-40">
                    <p class="text txt-center">
                        Следите за новостями и акциями нашего салона
                    </p>
                </div>
                <div class="f-column gap-40 al-center w-100p">
                    <div class="promo__item d-f">
                        <div style="background-image: url('assets/img/jpg/promo_1.webp');" class="promo__img"></div>
                        <div class="promo__item_content jc-center f-column gap-10">
                            <div class="promo__dates">
                                15–31 ИЮНЯ
                            </div>
                            <div class="promo__title">
                                Акция «Осенний шиномонтаж»
                            </div>
                            <div class="promo__text text">
                                Акция на замену шин в Тех.Центре "Service" Поменяйте шины в окябре с 15 по 31 число и
                                получите скидку 30%
                            </div>
                        </div>
                    </div>
                    <div class="promo__item d-f">
                        <div style="background-image: url('assets/img/png/promo_2.png');" class="promo__img"></div>
                        <div class="promo__item_content jc-center f-column gap-10">
                            <div class="promo__dates">
                                15–31 ИЮНЯ
                            </div>
                            <div class="promo__title">
                                Акция «Осенний шиномонтаж»
                            </div>
                            <div class="promo__text text">
                                Акция на замену шин в Тех.Центре "Service" Поменяйте шины в окябре с 15 по 31 число и
                                получите скидку 30%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="order" class="order">
        <div class="mini-wrapper">
            <form method="post" action="mailer.php" id="orderForm" class="order__block f-column gap-30">
                <div class="f-column gap-50">
                    <h2 class="title txt-center">
                        Запись на ремонт
                    </h2>
                    <div class="text txt-center">Время ремонтных работ вы можете провести в зале ожидания нашего сервиса
                    </div>
                </div>
                <div class="f-column gap-40">
                    <input name="phone" class="order__input" type="text" placeholder="Ваш телефон">
                    <input name="email" class="order__input" type="text" placeholder="Ваше e-mail">
                    <input name="name" class="order__input" type="text" placeholder="Ваше имя">
                    <div class="f-column gap-20">
                        <h4>Модель автомобиля:</h4>
                        <select name="car" class="order__input" type="text" placeholder="fdsfsdfsd">
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                        </select>
                    </div>

                    <div class="f-c-col">
                        <button class="order__btn">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="mini-wrapper">
            <div class="contacts__block f-column gap-30">
                <h2 class="title txt-center">
                    Наш телефон: +79005001849
                </h2>
                <div class="f-column gap-40">
                    <p class="text txt-center">
                        г. Череповец, ул. Ленина 1 <br>
                        Мы находимся в большом ангарном помещении на северо-западе города. Подъезд со стороны Зеленой
                        улицы.</p>
                    <p class="text txt-center">

                        Пн-Вс: 10:00–21:00
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="map f-column">
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A1bb9847573fb042eb8ec9213ae4f6fa5ada426f4c6bd3fc063f15cc9ac036d36&amp;source=constructor"
            width="100%" height="400" frameborder="0"></iframe>

    </section>
    <footer>
        <div class="big-wrapper">
            <div class="footer__block f-row-betw">
                <div class="f-column w-100p gap-20">
                    <div class="f-row-betw footer__top flex-wrap gap-40">
                        <a href="/"> <img width="150" src="assets/img/vectors/logo_light.svg" alt="">
                        </a>
                        <nav class="d-f gap-30 flex-wrap">
                            <a class="fade-scroll" href="#about">О нас</a>
                            <a class="fade-scroll" href="#services">Услуги</a>
                            <a class="fade-scroll" href="#contacts">Контакты</a>
                        </nav>
                        <div class="header__works">
                            Пн-Вс: 10:00 — 21:00
                        </div>
                    </div>
                    <div class="f-c-col w-100p">
                        <h5 class="w-100p fw-4">ИП Трепов. © 2024 Все права защищены.</h5>
                    </div>

                </div>

            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/collapses.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/fadeScroll.js"></script>


</html>