<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Создание, разработка сайтов <?php echo isset($city['locative']) ? $city['locative'] : "в Москве"; ?> и интернет магазинов на базе 1C Битрикс, bitrix, цена, стоимость.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description"
          content="Заказать создание сайта на Битрикс, разработку дизайна любой сложности в соответствии с пожеланиями клиента, поисковое продвижение, техническую поддержку сайта<?php echo isset($city['locative']) ? $city['locative'] : "в Москве"; ?> или просто перенос сайта на битрикс по приемлимым ценам. Гарантия 12 месяцев"/>
    <meta name="keywords"
          content="Создание сайтов <?php echo isset($city['locative']) ? $city['locative'] : "в Москве"; ?>на 1C Битрикс, создание сайтов на Битрикс, разработка сайтов на битрикс, разработка сайтов на 1С битрикс, bitrix, цены, стоимость"/>
    <!--стили бутстрапа-->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--стили ишачка-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="../node_modules/angular/angular.js"></script>
    <script src="../node_modules/angular-route/angular-route.js"></script>


    <script src="../js/article.js"></script>

    <link rel="stylesheet" href="css/finalcss/main.css">

    <!--тут будут стили шапки-->


</head>
<body>
<section class="section_1">
    <div class="container-fluide">
        <header>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="leftHeader col-md-4 col-sm-3 col-xs-6">
                            <div class="logo">
                                <a href="/"><img style="display:inline;" class="img-responsive" alt="NLSITE" title="NLSITE"
                                                 src="img/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 phoneHeader">
                            <p><a href="tel:+79852452405">+7 985 245 24 05</a></p>
                        </div>
                        <button class="navbar-toggle col-md-2 col-sm-3 col-xs-2" type="button" data-toggle="collapse"
                                data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbar-main">
                            <ul class="nav navbar-nav navbar-right">
                                <li style="padding: 0 10px 0 20px;"><strong
                                        style="font-size: 16pt;"><?php echo isset($city['nominative']) ? $city['nominative'] : "Москва"; ?></strong>
                                </li>
                                <li><a href="http://vk.com/nl_digital" target="_blank"><i class="icon icon-vk"></i></a></li>
                                <li><a href="https://www.facebook.com/groups/nl.digital/" target="_blank"><i
                                            class="icon icon-fb"></i></a></li>
                                <li><a href="http://ok.ru/group/52650818076858" target="_blank"><i
                                            class="icon icon-twitter"></i></a>
                                </li>
                                <li><a href="https://plus.google.com/communities/114102265379721533821" target="_blank"><i
                                            class="icon icon-google"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</section>

<section class="section_2">
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-5 orderForm">
                    <div class="orderForm">
                        <form id="order" action="mail.php" method="post">
                            <fieldset>
                                <p><label for="name">Имя</label></p>

                                <p><input type="text" name="name" id="name" minlength="3" required></p>

                                <p><label for="email">E-mail</label></p>

                                <p><input type="text" name="email" id="email" required></p>

                                <p><label for="phone">Телефон</label>

                                <p><input type="text" name="phone" id="phone" required></p>

                                <p><b>До конца акции осталось:</b></p>

                                <div class="wrapper">
                                    <div id="days_remain">5</div>
                                    <div id="hours_remain">8</div>
                                    <div id="minutes_remain">1</div>
                                    <div id="seconds_remain">49</div>

                                    <span>дней &nbsp;&nbsp;&nbsp;&nbsp; часов &nbsp;&nbsp;&nbsp;&nbsp; минут &nbsp;&nbsp; секунд</span>
                                </div>
                                <p><b style="margin-bottom:0;">Закажи сайт сейчас &nbsp;&nbsp;<br/> и получи скидку
                                        <span>20%</span></b></p>

                                <button data-target="#myModal" data-toggle="modal"
                                        class="btn btn-primary modalOrder portfBtn">Заказать сайт
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 bigInfo">
                    <h1>Создание сайтов <?php echo isset($city['locative']) ? $city['locative'] : "в Москве"; ?></h1>

                    <p>Создание интернет-магазинов<br/>(на 1С Битриксе)</p>

                    <div class="presentation"><a
                            href="http://www.nlsite.ru/files/kp.pdf">cкачать коммерческое предложение</a><span
                            class="pdf"><img src="img/pdf-icon.png" alt=""></span></div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="article-section">
    <div class="container" ng-app="articles">
        <div class="row">

            <div class="rigth-sidebar col-md-4">
                <span class="link-articles">Статьи</span>
                <!--                    <ul ng-repeat="page in pages">-->
                <ul>
                    <!--                    	<li><a href="{{page.href}}">{{page.name}}</a></li>-->
                    <li><a href="#/seo1">Низкочастотное продвижение сайтов</a></li>
                    <li><a href="#/seo2">Этапы SEO Стратегии продвижения сайтов</a></li>
                    <li><a href="#/seo3">Правильная SEO стратегия ссылочного произведения</a></li>
                    <li><a href="#/seo4">Серые методы оптимизации сайта.</a></li>
                    <li><a href="#/seo5">Подбор ключевых слов при SEO продвижении</a></li>
                    <li><a href="#/seo6">Поисковая SEO оптимизация, как ускорить индексацию</a></li>
                    <li><a href="#/seo7">Продвижение сайта с помощью статей</a></li>
                    <li><a href="#/seo8">Продвижение сайта, что такое внутренняя оптимизация</a></li>
                    <li><a href="#/seo9">Начальный этап продвижения сайта</a></li>
                    <li><a href="#/seo10">Основные способы продвижения сайта</a></li>
                    <li><a href="#/seo11">SEO способы продвижения сайтов</a></li>
                    <li><a href="#/seo12">Черные методы продвижения сайта</a></li>

                </ul>
            </div>
            <div class="article col-md-8" >
                <div class="article-wrap">
                    <ng-view></ng-view>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_3">
    <div class="container">

        <div class="row">
            <h2>Наши услуги</h2>
        </div>

        <div class="services row">
            <div class="col-md-4 wow bounceInLeft">
                <img src="img/tz.png" class="svcimg" title="Техническое задание"/>

                <h3>Техническое задание</h3>

                <p>Разработка понятной и последовательной структуры сайта, чтобы каждый пользователь понимал логику вашего бизнес процесса. Понятная логика вашего бизнеса увеличивает доверие к вашей компании, что приводит к увеличению роста потенциальных клиентов.</p>
            </div>
            <div class="col-md-4 wow bounceInDown">
                <img src="img/marketing.png" class="svcimg" title="Маркетинг"/>

                <h3>Маркетинг</h3>

                <p>Создание нового продукта для производящей компании начинается с маркетингового исследования конкурентных продуктов, его потребительских свойств и цены.</p>
            </div>
            <div class="col-md-4 wow bounceInRight">
                <img src="img/design.png" class="svcimg" title="Дизайн"/>

                <h3>Дизайн</h3>

                <p>Выбор идеального шаблона дизайна для вашего сайта. Мы подбираем только адаптивные и продающие интерфейсы для вашего сайта. В наших шаблонах продуманное оформление, где каждый элемент находиться на своем месте. Мы отсекаем все лишнее. Вам предоставляются все исходные файлы, где все слои дизайна и файлы удобно разложены по папкам и сгруппированы.</p>
            </div>
        </div>

        <div class="services row">
            <div class="col-md-4 wow bounceIn">
                <img src="img/bitrix.png" class="svcimg" title="1С Битрикс"/>

                <h3>1С Битрикс</h3>

                <p>Чтобы Ваши проекты были успешными, наши сотрудники постоянно осваивают новые технологии, проходят платные курсы повышения квалификации, это позволяет держать руку на пульсе Интернет-технологий и производить для Вас отличные, продающие и красивые сайты на базе 1С Битриксе, которые быстро грузятся и нравятся Вашим клиентам!</p>
            </div>
            <div class="col-md-4 wow bounceIn">
                <img src="img/filling.png" class="svcimg" title="Наполнение"/>

                <h3>Наполнение</h3>

                <p>Наполнение сайта контентом. Наши профессиональные SEO копирайтеры адаптируют текст под поисковые системы и для ваших пользователей. Пользователям будет интересно читать ваш сайт и знакомиться с новинами на вашем рынке. Т.к. перед наполнением вашего сайта мы анализируем контент вашей стратегической группы (изучаем ваш рынок и ваших ближайших конкурентов).</p>
            </div>
            <div class="col-md-4 wow bounceIn">
                <img src="img/optimization.png" class="svcimg" title="Оптимизация сайтов"/>

                <h3>Оптимизация сайтов</h3>

                <p>Выбор идеального шаблона дизайна для вашего сайта. Мы подбираем только адаптивные и продающие интерфейсы для вашего сайта. В наших шаблонах продуманное оформление, где каждый элемент находиться на своем месте. Мы отсекаем все лишнее. Вам предоставляются все исходные файлы, где все слои дизайна и файлы удобно разложены по папкам и сгруппированы.</p>
            </div>
        </div>
    </div>
</section>
<section class="section_4">


    <div class="container-fluid">

        <div class="prtf">
            <div class="row">
                <h2>Наше портфолио</h2>
            </div>

            <div class="row">
                <ul>

                    <li class="li-wrap">
                        <a href="http://www.bellapotemkina.com/" target="_blank">
                            <div class="wrap-img">

                                <img src="img/portfolio/bella_potemkina.png" alt="Бутик Bella Potemkina"
                                     title="Бутик Bella Potemkina">

                            </div>
                        </a>
                    </li>

                    <li class="li-wrap">
                        <a href="http://mgsystem.net/" target="_blank">
                            <div class="wrap-img">

                                <img src="img/portfolio/mgs.png"
                                     alt="Компания MGSystem" title="Компания MGSystem">

                            </div>
                        </a>
                    </li>

                    <li class="li-wrap">
                        <a href="http://yugall.ru/" target="_blank">
                            <div class="wrap-img">

                                <img src="img/portfolio/yugal.png"
                                     alt="Корпорация Южный Альянс"
                                     title="Корпорация Южный Альянс">

                            </div>
                        </a>
                    </li>

                    <li class="li-wrap">
                        <a href="http://eurobetonplus.ru/" target="_blank">
                            <div class="wrap-img">

                                <img src="img/portfolio/eurobetonplus.png"
                                     alt="Компания ЕвробетонПлюс"
                                     title="Компания ЕвробетонПлюс"" />

                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <ul>

                    <li class="li-wrap">
                        <a href="http://www.union.ru/" target="_blank">
                            <div class="wrap-img">

                                <img src="img/portfolio/union_porte.png" alt="Сайт-каталог Union.ru"
                                     title="Сайт-каталог Union.ru">

                            </div>
                        </a>
                    </li>

                    <li class="li-wrap">
                        <a href="http://profstroy.pro/" target="_blank">
                            <div class="wrap-img">

                                <img
                                    src="img/portfolio/profstroysite.png" alt="Компания ПрофСтрой"
                                    title="Компания ПрофСтрой">

                            </div>
                        </a>
                    </li>

                    <li class="li-wrap">
                        <a href="http://imex-broker-moscow.ru/" target="_blank">
                            <div class="wrap-img">

                                <img
                                    src="img/portfolio/imex.png" alt="Компания ИМЭКС" title="Компания ИМЭКС">
                            </div>
                        </a>
                    </li>
                </ul>
                <p>
                    <button data-target="#myModal" data-toggle="modal"
                            class="btn btn-primary modalOrder portfButton">Заказать сайт
                    </button>
                </p>
            </div>
        </div>
    </div>

</section>
<section class="section_5">
    <div class="container">
        <div class="row">
            <h2 id="tarifs">Наши тарифы</h2>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 tarif-control">
                <div class="priceWrapper">
                    <div class="priceHead landingHead" title="Лендинг">
                        <h6>Лендинг</h6>
                    </div>
                    <p class="ok">Выбор адаптивного шаблона сайта</p>

                    <p class="ok">Заведение доменного имени</p>

                    <p class="ok">Размещение на хостинге</p>

                    <p class="ok">Навигация по сайту</p>

                    <p class="none">Копирайтинг</p>

                    <p class="none">Веб-аналитика сайта</p>

                    <p class="none">Составление отчета</p>

                    <p class="none">Продвижение в социальных сетях: Vk, Facebook, Instagram, Twitter, Ok, YouTube, Google+</p>

                    <p class="none">Наполнение сайта товарами</p>

                    <p><span class="oldprice">60 000 рублей</span></p>

                    <p><span class="price">от 50 000 рублей</span></p>

                    <p>
                        <button data-target="#myModal" data-tariff="Лендинг" data-price="50 000 рублей" data-toggle="modal"
                                data-toggle="modal" class="btn btn-primary modalOrder tarifButton">Заказать
                        </button>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tarif-control">
                <div class="priceWrapper">
                    <div class="priceHead corpHead" title="Корпоративный сайт">
                        <h6>Корпоративный сайт</h6>
                    </div>
                    <p class="ok">Выбор адаптивного шаблона сайта</p>

                    <p class="ok">Заведение доменного имени</p>

                    <p class="ok">Размещение на хостинге</p>

                    <p class="ok">Навигация по сайту</p>

                    <p class="ok">Копирайтинг</p>

                    <p class="ok">Веб-аналитика сайта</p>

                    <p class="ok">Составление отчета</p>

                    <p class="none">Продвижение в социальных сетях: Vk, Facebook, Instagram, Twitter, Ok, YouTube, Google+</p>

                    <p class="none">Наполнение сайта товарами</p>

                    <p><span class="oldprice">90 000 рублей</span></p>

                    <p><span class="price">от 75 000 рублей</span></p>

                    <p>
                        <button data-target="#myModal" data-tariff="Корпоративный сайт" data-price="75 000 рублей"
                                data-toggle="modal" data-toggle="modal"
                                class="btn btn-primary modalOrder tarifButton">Заказать
                        </button>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tarif-control">
                <div class="priceWrapper">
                    <div class="priceHead shopHead" title="Интернет-магазин">
                        <h6>Интернет-магазин</h6>
                    </div>
                    <p class="ok">Выбор адаптивного шаблона сайта</p>

                    <p class="ok">Заведение доменного имени</p>

                    <p class="ok">Размещение на хостинге</p>

                    <p class="ok">Навигация по сайту</p>

                    <p class="ok">Копирайтинг</p>

                    <p class="ok">Веб-аналитика сайта</p>

                    <p class="ok">Составление отчета</p>

                    <p class="ok">Продвижение в социальных сетях: Vk, Facebook, Instagram, Twitter, Ok, YouTube, Google+</p>

                    <p class="ok">Наполнение сайта товарами</p>

                    <p><span class="oldprice">125 000 рублей</span></p>

                    <p><span class="price">от 100 000 рублей</span></p>

                    <p>
                        <button data-target="#myModal" data-tariff="Интернет-магазин" data-price="100 000 рублей"
                                data-toggle="modal" data-toggle="modal"
                                class="btn btn-primary modalOrder tarifButton">Заказать
                        </button>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tarif-control">
                <div class="priceWrapper">
                    <div class="priceHead portalHead" title="Портал">
                        <h6>Портал</h6>
                    </div>
                    <p class="ok">Выбор адаптивного шаблона сайта</p>

                    <p class="ok">Заведение доменного имени</p>

                    <p class="ok">Размещение на хостинге</p>

                    <p class="ok">Навигация по сайту</p>

                    <p class="ok">Копирайтинг</p>

                    <p class="ok">Веб-аналитика сайта</p>

                    <p class="ok">Составление отчета</p>

                    <p class="none">Продвижение в социальных сетях: Vk, Facebook, Instagram, Twitter, Ok, YouTube, Google+</p>

                    <p class="none">Наполнение сайта товарами</p>

                    <p><span class="oldprice">155 000 рублей</span></p>

                    <p><span class="price">от 125 000 рублей</span></p>

                    <p>
                        <button data-target="#myModal" data-price="125 000 рублей" data-tariff="Портал" data-toggle="modal"
                                data-toggle="modal" class="btn btn-primary modalOrder tarifButton">Заказать
                        </button>
                    </p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="contact" name="contact" method="post" action="mail.php">

                            <p><label for="name">Имя*</label></p>

                            <p><input type="text" name="name" id="name" minlength="3" required></p>

                            <p><label for="email">E-mail*</label></p>

                            <p><input type="text" name="email" id="email" required></p>

                            <p><label for="phone">Телефон*</label>

                            <p><input type="text" name="phone" id="phone" required></p>

                            <p><label for="tariff">Тариф</label></p>

                            <p><select name="tariff" class="tariff" id="tariff">
                                    <option disabled>Выберите тариф</option>
                                    <option value="Лендинг">Лендинг</option>
                                    <option value="Корпоративный сайт">Корпоративный сайт</option>
                                    <option value="Интернет-магазин">Интернет-магазин</option>
                                    <option value="Портал">Портал</option>
                                </select></p>
                            <button type="button submit" class="btn btn-primary">Заказать сайт</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <a name="opinions"></a><br/><br/>

    </div>
</section>

<section class="section_6">
    <div class="container">
        <div class="row">
            <h2 id="white">Отзывы</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class=" wrap col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <blockquote>В 2010 году мы задались вопросом создания сайта. Обращались в разные Интернет компании, но решили доверить создания своего проекта в компании BRAND-MAKER. Данную компанию нам посоветовал наш IT знакомый. Нам понравилось, что нам была сделана мобильная версия сайта бонусом, т.е. абсолютно бесплатно (http://m.imex-broker-moscow.ru/), за что огромное спасибо руководителю компании Игорю Носову. Желаем успехов и развития этой компании в будущем и будем все своим знакомым рекомендовать данную компанию.
                                <h5>Мостовой Антон Сергеевич - <a target="_blank"
                                                                  href="http://imex-broker-moscow.ru/">imex-broker-moscow.ru</a>
                                </h5>

                            </blockquote>

                        </div>
                        <div class="item">
                            <blockquote>Мы решили обратиться в данную компанию по совету знакомых. И ничуть не пожалели. Создание сайта, было выполнено точно по техническому заданию и в соответствии с календарным планом. Процесс завершения проекта оттягивался только из-за нас. Мы получили новый сайт с адаптивным дизайном, обновленный прайс-лист и каталог продукции. Очень приятно было, что компания полностью вникла в наш бизнес.
                                <h5>Зуев Сергей Васильевич - <a target="_blank" href="http://www.yugall.ru/">yugall.ru</a>
                                </h5>
                            </blockquote>

                        </div>
                        <div class="item">
                            <blockquote>Выражаю огромное СПАСИБО сотрудникам компании BRAND-MAKER, которые смогли глубоко вникнуть в стоящую перед нашим бизнесом задачу по созданию представленности бренда DoorHan в сети Интернет. На начало сотрудничества, компания DoorHan была представлена в регионах России и СНГ гео-ориентированными интернет ресурсами в социальных сетях, но эти ресурсы не присутствовали в ТОПах на первых страницах органической выдачи поисковиков Яндекс и Google.
                                <h5>Печёнов Николай Борисович - <a target="_blank"
                                                                   href="http://www.doorhan.ru/">doorhan.ru</a>
                                </h5>
                            </blockquote>


                        </div>
                        <div class="item">
                            <blockquote>Давно хотел расширить свой бизнес, но цены от ведущих Web-студий меня пугали. Я решился обратиться в компанию Brand-Maker и не пожалел. Дизайн и качественное выполнение работы стоили тех денег. Спасибо ребята, я очень доволен.
                                <h5>Зулпукаров Нурбек Исаевич - <a target="_blank"
                                                                   href="http://profstroy.ru/">profstroy.ru</a>
                                </h5>

                            </blockquote>

                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_7">
    <div class="container">
        <div class="row">
            <div class="googleMap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.9683613084076!2d37.71008590000001!3d55.72430200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab5305b39c031%3A0x5abd07d7039116c7!2z0JDQstGC0L7QvNC-0LHQuNC70YzQvdGL0Lkg0L_RgC3QtCwgMTDRgTcsINCc0L7RgdC60LLQsCwgMTA5MDUy!5e0!3m2!1sru!2sru!4v1429690534699"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="section_8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne">Мы в регионах</a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="citycol">
                                    <a class="city" target="_blank" href="http://nlsite.ru/">Москва</a><br/>
                                    <a class="city" target="_blank" href="http://aprelevka.nlsite.ru/">Апрелевка</a><br/>
                                    <a class="city" target="_blank" href="http://balashiha.nlsite.ru/">Балашиха</a><br/>
                                    <a class="city" target="_blank" href="http://bronnicy.nlsite.ru/">Бронницы</a><br/>
                                    <a class="city" target="_blank" href="http://vidnoe.nlsite.ru/">Видное</a><br/>
                                    <a class="city" target="_blank" href="http://volokolamsk.nlsite.ru/">Волоколамск</a><br/>
                                    <a class="city" target="_blank" href="http://voskresensk.nlsite.ru/">Воскресенск</a><br/>
                                    <a class="city" target="_blank" href="http://dedovsk.nlsite.ru/">Дедовск</a><br/>
                                    <a class="city" target="_blank" href="http://dmitrov.nlsite.ru/">Дмитров</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://dolgoprudny.nlsite.ru/">Долгопрудный</a><br/>
                                    <a class="city" target="_blank" href="http://domodedovo.nlsite.ru/">Домодедово</a><br/>
                                    <a class="city" target="_blank" href="http://dzerzhinsky.nlsite.ru/">Дзержинский</a><br/>
                                    <a class="city" target="_blank" href="http://dubna.nlsite.ru/">Дубна</a><br/>
                                    <a class="city" target="_blank" href="http://egorevsk.nlsite.ru/">Егорьевск</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://zheleznodorozhny.nlsite.ru/">Железнодорожный</a><br/>
                                    <a class="city" target="_blank" href="http://zhukovsky.nlsite.ru/">Жуковский</a><br/>
                                    <a class="city" target="_blank" href="http://zaraysk.nlsite.ru/">Зарайск</a><br/>
                                </div>
                                <div class="citycol">
                                    <a class="city" target="_blank" href="http://zvenigorod.nlsite.ru/">Звенигород</a><br/>
                                    <a class="city" target="_blank" href="http://ivanteevka.nlsite.ru/">Ивантеевка</a><br/>
                                    <a class="city" target="_blank" href="http://istra.nlsite.ru/">Истра</a><br/>
                                    <a class="city" target="_blank" href="http://kaluga.nlsite.ru/">Калуга</a><br/>
                                    <a class="city" target="_blank" href="http://kashira.nlsite.ru/">Кашира</a><br/>
                                    <a class="city" target="_blank" href="http://klimovsk.nlsite.ru/">Климовск</a><br/>
                                    <a class="city" target="_blank" href="http://klin.nlsite.ru/">Клин</a><br/>
                                    <a class="city" target="_blank" href="http://kolomna.nlsite.ru/">Коломна</a><br/>
                                    <a class="city" target="_blank" href="http://korolev.nlsite.ru/">Королёв</a><br/>
                                    <a class="city" target="_blank" href="http://kotelniki.nlsite.ru/">Котельники</a><br/>
                                    <a class="city" target="_blank" href="http://krasnogorsk.nlsite.ru/">Красногорск</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://krasnoarmeysk.nlsite.ru/">Красноармейск</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://krasnoznamensk.nlsite.ru/">Краснознаменск</a><br/>
                                    <a class="city" target="_blank" href="http://kubinka.nlsite.ru/">Кубинка</a><br/>
                                    <a class="city" target="_blank" href="http://kurovskoe.nlsite.ru/">Куровское</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://likinodulovo.nlsite.ru/">Ликино-Дулёво</a><br/>
                                    <a class="city" target="_blank" href="http://lobnya.nlsite.ru/">Лобня</a><br/>
                                </div>
                                <div class="citycol">
                                    <a class="city" target="_blank"
                                       href="http://losinopetrovskiy.nlsite.ru/">Лосино-Петровский</a><br/>
                                    <a class="city" target="_blank" href="http://luhovicy.nlsite.ru/">Луховицы</a><br/>
                                    <a class="city" target="_blank" href="http://lytkarino.nlsite.ru/">Лыткарино</a><br/>
                                    <a class="city" target="_blank" href="http://lubercy.nlsite.ru/">Люберцы</a><br/>
                                    <a class="city" target="_blank" href="http://mozhaysk.nlsite.ru/">Можайск</a><br/>
                                    <a class="city" target="_blank" href="http://mytishi.nlsite.ru/">Мытищи</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://narofominsk.nlsite.ru/">Наро-Фоминск</a><br/>
                                    <a class="city" target="_blank" href="http://noginsk.nlsite.ru/">Ногинск</a><br/>
                                    <a class="city" target="_blank" href="http://odintsovo.nlsite.ru/">Одинцово</a><br/>
                                    <a class="city" target="_blank" href="http://ozory.nlsite.ru/">Озёры</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://orehovozuevo.nlsite.ru/">Орехово-Зуево</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://pavlovskiyposad.nlsite.ru">Павловский Посад</a><br/>
                                    <a class="city" target="_blank" href="http://podolsk.nlsite.ru/">Подольск</a><br/>
                                    <a class="city" target="_blank" href="http://protvino.nlsite.ru/">Протвино</a><br/>
                                    <a class="city" target="_blank" href="http://pushkino.nlsite.ru/">Пушкино</a><br/>
                                    <a class="city" target="_blank" href="http://pushino.nlsite.ru/">Пущино</a><br/>
                                    <a class="city" target="_blank" href="http://ramenskoe.nlsite.ru/">Раменское</a><br/>
                                </div>
                                <div class="citycol">
                                    <a class="city" target="_blank" href="http://reutov.nlsite.ru/">Реутов</a><br/>
                                    <a class="city" target="_blank" href="http://roshal.nlsite.ru/">Рошаль</a><br/>
                                    <a class="city" target="_blank" href="http://ruza.nlsite.ru/">Руза</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://sergiev-posad.nlsite.ru/">Сергиев Посад</a><br/>
                                    <a class="city" target="_blank" href="http://serpuhov.nlsite.ru/">Серпухов</a><br/>
                                    <a class="city" target="_blank" href="http://solnechnogorsk.nlsite.ru/">Солнечногорск</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://starayakupavna.nlsite.ru/">Старая Купавна</a><br/>
                                    <a class="city" target="_blank" href="http://stupino.nlsite.ru/">Ступино</a><br/>
                                    <a class="city" target="_blank" href="http://fryazino.nlsite.ru/">Фрязино</a><br/>
                                    <a class="city" target="_blank" href="http://himki.nlsite.ru/">Химки</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://chernogolovka.nlsite.ru/">Черноголовка</a><br/>
                                    <a class="city" target="_blank" href="http://chehov.nlsite.ru/">Чехов</a><br/>
                                    <a class="city" target="_blank" href="http://shatura.nlsite.ru/">Шатура</a><br/>
                                    <a class="city" target="_blank" href="http://sholkovo.nlsite.ru/">Щёлково</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://elektrogorsk.nlsite.ru/">Электрогорск</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://elektrostal.nlsite.ru/">Электросталь</a><br/>
                                    <a class="city" target="_blank"
                                       href="http://elektrougli.nlsite.ru/">Электроугли </a><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_9">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <footer>
                    <div class="footer_menu col-md-4 col-sm-8 col-lg-5">
                        <ul>
                            <li><a href="#our_services">Наши услуги</a></li>
                            <li><a href="#portfolio">Наше портфолио</a></li>
                            <li><a href="#tarifs">Наши тарифы</a></li>
                            <li><a href="#opinions">Отзывы</a></li>
                        </ul>
                    </div>

                    <div class="metrika col-md-3 col-lg-3">
                        <!-- Yandex.Metrika informer -->
                        <a href="https://metrika.yandex.ru/stat/?id=32553710&amp;from=informer"
                           target="_blank" rel="nofollow"><img
                                src="//informer.yandex.ru/informer/32553710/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                                title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                                onclick="try{Ya.Metrika.informer({i:this,id:32553710,lang:'ru'});return false}catch(e){}"/></a>
                        <!-- /Yandex.Metrika informer -->
                        <!-- Yandex.Metrika counter -->
                        <script type="text/javascript">
                            (function (d, w, c) {
                                (w[c] = w[c] || []).push(function () {
                                    try {
                                        w.yaCounter32553710 = new Ya.Metrika({
                                            id: 32553710,
                                            clickmap: true
                                        });
                                    } catch (e) {
                                    }
                                });

                                var n = d.getElementsByTagName("script")[0],
                                    s = d.createElement("script"),
                                    f = function () {
                                        n.parentNode.insertBefore(s, n);
                                    };
                                s.type = "text/javascript";
                                s.async = true;
                                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                                if (w.opera == "[object Opera]") {
                                    d.addEventListener("DOMContentLoaded", f, false);
                                } else {
                                    f();
                                }
                            })(document, window, "yandex_metrika_callbacks");
                        </script>
                        <noscript>
                            <div><img src="//mc.yandex.ru/watch/32553710" style="position:absolute; left:-9999px;" alt=""/>
                            </div>
                        </noscript>
                        <!-- /Yandex.Metrika counter -->
                    </div>
                    <div class='SEO' style="float: right;">
                        <p style="text-align:center;"><a
                                href="http://<?php echo isset($city['next_url']) ? $city['next_url'] : "aprelevka"; ?>.nlsite.ru/"
                                target="_blank">Продвижение сайтов <?php echo isset($city['next']) ? $city['next'] : "в Апрелевке"; ?></a>
                        </p>
                    </div>


                </footer>
            </div>
        </div>
    </div>
</section>
<section class="section_10">
    <div class="container">
        <div class="row">
            <div id="popupform">
                <div class="feedback_text">
                    <h2>У Вас есть вопросы?</h2>

                    <div class="comment">Укажите Ваш номер телефона и мы перезвоним Вам в самое ближайшее время.</div>
                </div>
                <form method="post" id="form-feedback">
                    <input type="text" placeholder="Ваше имя?" name="client_name" id="client_name" class="input_text"
                           autofocus/>

                    <div class="phone_number">
                        <input type="text" placeholder="Ваш телефон?" name="client_phone" id="client_phone"
                               class="input_text"/>
                    </div>
                    <input class="button" type="submit" value="Жду звонка"/><br/>

                    <div id="bthrow_error_name"></div>
                    <div id="bthrow_error_phone"></div>
                    <div class="throw_error"></div>
                </form>
            </div>
            <a href="#popupform" id="popupbutton"><img id="phoneimg" src="feedback-form/img/phone-logo.png"/></a>
        </div>
    </div>

</section>

<!---->
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="feedback-form/js/jquery.mask.min.js"></script>-->
<!--<script type="text/javascript" src="feedback-form/js/jquery.fancybox.pack.js"></script>-->
<!--<script type="text/javascript" src="feedback-form/js/script.js"></script>-->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="js/isotope.js"></script>-->
<!--<script type="text/javascript" src="js/wow.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.countupcircle.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>-->
<!--<script type="text/javascript" src="js/messages_ru.js"></script>-->
<!---->
<!---->
<!--<script src="js/main.js"></script>-->
<script src="finaljs/all-min.js"></script>
<script src="../js/article.js"></script>


<script>

</script>


</body>
</html>