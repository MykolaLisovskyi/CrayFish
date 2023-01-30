
<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Вкуснейшие роллы и суши с доставкой">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/fancy.css">
</head>

<body>
    <div class="showCart" id="showCart">
    <img src="img/cart/count.svg" alt="" id="">

        <div class="showCart_count" id="showCartCount">
            1
        </div>
    </div>
    <div class="cart" id="cart">
        <div class="cart_content">
            <div class="exit">
                <a onclick=exit()>
                    <svg role="presentation"
                        class="t-popup__close-icon t-popup__close-icon_cross" width="23px" height="23px" viewBox="0 0 23 23"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd">
                            <rect
                                transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            <rect
                                transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        </g>
                    </svg>
                </a>
            </div>            <p class="cart_content_header">Ваш заказ</p>
            <div class="cart_content_item" id="cartItem">
              
            </div>
             <form method="POST"  class="promo" id="discount"> 
                <a id="promoQuestion">У вас есть промокод?</a>
                <div class="promo_content" id="promoContent">
                    <input type="text" name="discount" id="discountName" placeholder="Введите промокод">
                    <button type="submit" style="">Ввести</button>
                    <p class="discount" id="discountInfo" name="discountInfo" > </p>
                </div>
             </form> 
             <p class="price" id="price"></p>
             <form action="" id="form1" class="form1">
                <div>
                    <p>Ваше имя</p>
                    <input type="text" name="name" id="formName" required>
                </div>
                <div>
                    <p>Ваш Email</p>
                    <input type="text" name="email" id="formEmail" required>
                    <p style="color:red; display: none;" id="emailError">Введите корректный email</p>
                </div>
                <div>
                    <p>Ваш телефон</p>
                    <input type="text" name="phone" id="formPhone" required>
                </div>
                <div>
                    <p>Ваше адрес</p>
                    <input type="text" name="name" id="formAddress" required>
                </div>
                <div class="hidden" style="display: none;">
                    <input type="text" name="hidden1" value="">
                    <input type="text" name="hidden2" value="">
                    <input type="text" name="hidden3" value="">
                </div>
                
                <button type="submit">Отправить</button>
             </form>
             
        </div>
    </div>
    <div class="cart" id="cartThanks">

    <div class="cart_content">
            <div class="exit">
                <a onclick=exthanks()>
                    <svg role="presentation"
                        class="t-popup__close-icon t-popup__close-icon_cross" width="23px" height="23px" viewBox="0 0 23 23"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd">
                            <rect
                                transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            <rect
                                transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        </g>
                    </svg>
                </a>
            </div>            <p class="cart_content_header">Ваш заказ</p>
            <p class="thanks">Спасибо! Данные успешно отправлены. </p>
</div>
</div>
    <div class="store_card" id="storeCard">
        <div class="exit">
            <a onclick="document.getElementById('storeCard').style.display='none', document.querySelector(`#showCart`).style.display=`flex`     ">
                <svg role="presentation"
                    class="t-popup__close-icon t-popup__close-icon_cross" width="23px" height="23px" viewBox="0 0 23 23"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd">
                        <rect
                            transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        <rect
                            transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                    </g>
                </svg>
            </a>
        </div>
        <div class="store_card_item" id="cardItem" data-id="">
            <img src="img/lifeSmallCrayfish.jpeg" alt="" id="cardItemImg">
            <div class="store_card_item_info">
                <p class="name" id="cardItemName">Классические</p>
                <p class="price" id="cardItemPrice">1150</p>
                <p class="forSelect">Размер</p>
                <select name="" id="cardItemSelect">
                    <option value="">XS</option>
                </select>
                <a  id="cardBuy" class="buy" data-ids="">купить</a>
                <p class="full_info" id="cardItemDetal">Самый простой и самый распространенный рецепт приготовления
                    речных раков - раки на укропе. Ничего лишнего, только вкусные раки.</p>
            </div>
        </div>
    </div>
    <header>
        <div class="header_content">
            <div class="header_content_logo">
                <img src="img/logo.svg" alt="">
            </div>
            <nav class="header_content_nav">
                <a href="#lifeCrayFish1">Живые раки</a>
                <a href="#boiledCrayFish1">Вареные раки</a>
                <a href="#friedCrayFish1">Жареные раки</a>
                <a href="#lobster">Лобстер</a>
                <a href="#reviews">Отзывы</a>
                <a href="#stock2">Акции</a>
                <a href="#contact">Контакты</a>
            </nav>
            <div class="header_content_contact">
                <a href="tel:+380 68 32 60 699">+380 68 32 60 699</a>
                <p>Красивый переулок, 3с1
                </p>
            </div>
            <div class="menu">
                <content>
                    <input id="hamburger" class="hamburger" type="checkbox" />
                    <label class="hamburger" for="hamburger">
                        <i></i>
                        <text>
                        </text>
                    </label>
                    <section class="drawer-list" id="menu2">
                        <ul><input id="hamburger" class="hamburger" type="checkbox" />
                            <li>
                                <div class="header_content_logo_mob">
                                    <img src="img/logo.svg" alt="">
                                </div>
                            </li>

                            <li> <a id="yakor" href="#lifeCrayFish1">Живые раки</a></li>
                            <li> <a id="yakor" href="#boiledCrayFish1">Вареные раки</a></li>
                            <li> <a id="yakor" href="#friedCrayFish1">Жареные раки</a></li>
                            <li> <a id="yakor" href="#lobster">Лобстер</a></li>
                            <li> <a id="yakor" href="#reviews">Отзывы</a></li>
                            <li> <a id="yakor" href="#stock2">Акции</a></li>
                            <li> <a id="yakor" href="#contact">Контакты</a></li>
                            <li>
                                <div class="header_content_contact_mob">
                                    <a href="tel:+1 123 456 78 90">+1 123 456 78 90</a>
                                    <p>Красивый переулок, 3с1
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </section>
                </content>
            </div>
        </div>
    </header>
    <main>
        <section id="about">
            <div class="about">
                <div class="about_info">
                    <div class="about_info_top">
                        <p>Готовим вкусные</p>
                        <p>РАКИ</p>
                        <p>уже 5 лет!</p>
                    </div>
                    <div class="about_info_bottom">
                        <p>По фирменным рецептам с круглосуточной доставкой
                        </p>
                        <p>по <span>Городу</span> <span>в течение 90 минут!</span></p>
                    </div>
                    <div class="arrow" id="scroll">
                        <svg role="presentation" class="t-cover__arrow-svg" style="fill:#ffffff;" x="0px" y="0px"
                            width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592">
                            <g>
                                <path
                                    d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z">
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="lifeCrayFish" id="lifeCrayFish1">
            <div class="lifeCrayFish_info">
                <h2>Живые раки
                </h2>
                <h3 class="descriptionCrayFish">Свежайшие отобранные речные раки, промытые и очищенные под проточной
                    водой
                </h3>
            </div>
            <div class="lifeCrayFish_content" id="lifeCrayFish">
            </div>

        </section>


        <div class="ticker">
            <div class="ticker__list">
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
                <div class="ticker__item"> <svg role="presentation" width="6" height="6" viewBox="0 0 10 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="5.11351" cy="4" rx="4.16918" ry="4" fill="#ffffff"></ellipse>
                    </svg> Если у вас аллергия на определенные продукты - обязательно сообщите нашему менджеру </div>
            </div>

        </div>

        <section id="boiledCrayFish1">
            <div class="boiledCrayFish">
                <div class="boiledCrayFish_info">
                    <h2>Вареные раки
                    </h2>
                    <h3 class="descriptionCrayFish">Только свежие раки и оригинальные рецепты в которые невозможно не
                        влюбиться
                    </h3>
                </div>
            </div>
            <div class="boiledCrayFish_content" id="boiledCrayFish">


            </div>
        </section>

        <section id="friedCrayFish1">
            <div class="friedCrayFish">
                <div class="friedCrayFish_info">
                    <h2>Жареные раки

                    </h2>
                    <h3 class="descriptionCrayFish">Предварительно отваренные раки с обжаркой на чугунной сковороде по
                        лучшим рецептам

                    </h3>
                </div>
            </div>
            <div class="friedCrayFish_content" id="friedCrayFish"> </div>
        </section>


        <section id="lobster">
            <div class="stock" id="lobster">
                <div class="stock_content">
                    <div class="stock_content_info desk_stock">
                        <p id="lobsterName" >Вареный лобстер
                        </p>
                        <img src="/img/stock.jpeg" alt="" style="display:none" id="lobsterImg">
                        <p>СТОИМОСТЬ ЗА ПОРЦИЮ
                        </p>
                        <p> <span id="lobsterPrice">7800</span> грн. <span class="oldLobster">8500 грн.</span></p>
                        <a  onclick=lobster() class="buy" id="lobsterBuy">Заказать</a>
                        <p class="stock_info">Цельный свежий лобстер весом от 800 грамм по классическому рецепту. <br>
                            Подается с масло-чесночным соусом и свежими лимонами.
                        </p>
                    </div>
                </div>
            </div>
            <div class="stock_content_info mob_stock">
                <p>ВАРЁНЫЙ ЛОБСТЕР
                </p>
                <p>СТОИМОСТЬ ЗА ПОРЦИЮ
                </p>
                <p> 7800 грн. <span class="oldLobster">8500 грн.</span></p>
                <a href="" class="buy">Заказать</a>
                <p class="stock_info">Цельный свежий лобстер весом от 800 грамм по классическому рецепту. <br>
                    Подается с масло-чесночным соусом и свежими лимонами.
                </p>
            </div>
        </section>

        <section id="reviews">
            <div class="reviews">
                <div class="reviews_info">
                    <h2>Отзывы


                    </h2>
                    <h3 class="reviews">Мы гарантируем качество и свежесть наших продуктов. Наши клиенты подтвердят.


                    </h3>
                </div>
                <div class="reviews_img">
                    <a class='fancybox' href="img/reviews1.jpg" data-fancybox="gallery">
                        <img src="img/reviews1.jpg" alt="picture 1">
                    </a>
                    <a class='fancybox' href="img/reviews2.jpg" data-fancybox="gallery">
                        <img src="img/reviews2.jpg" alt="picture 1">
                    </a>
                    <a class='fancybox' href="img/reviews3.jpg" data-fancybox="gallery">
                        <img src="img/reviews3.jpg" alt="picture 1">
                    </a>
                    <a class='fancybox' href="img/reviews4.jpg" data-fancybox="gallery">
                        <img src="img/reviews4.jpg" alt="picture 1">
                    </a>
                    <a class='fancybox' href="img/reviews5.jpg" data-fancybox="gallery">
                        <img src="img/reviews5.jpg" alt="picture 1">
                    </a>


                </div>
            </div>
        </section>

        <section id="stock2">
            <div class="stock2">
                <div class="stock2_info">
                    <h2>Акции


                    </h2>
                    <h3 class="reviews">Постоянные и сезонные акции со скидками и бонусами. Следите за обновлениями!


                    </h3>
                </div>
                <div class="for_stock2">
                    <div class="stock2_slider slider single-item">
                        <div class="stock2_slider_item ">
                            <img src="img/stock2.jpg" alt="">
                            <div>
                                <p>Доставка зимой бесплатно!
                                </p>
                                <p>Наша ежегодная акция продолжается и этой зимой она распространяется на все меню и
                                    действует с
                                    01.12.2022 до 28.02.2023 круглосуточно.
                                </p>
                            </div>
                        </div>
                        <div class="stock2_slider_item ">
                            <img src="img/stock2.jpg" alt="">
                            <div>
                                <p>Доставка зимой бесплатно!
                                </p>
                                <p>Наша ежегодная акция продолжается и этой зимой она распространяется на все меню и
                                    действует с
                                    01.12.2022 до 28.02.2023 круглосуточно.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="contact">
            <div class="contact">
                <div class="contact_info">
                    <h2>Контакты</h2>
                    <h3 class="">Заказы принимаются круглосуточно. <br> Доставляем в течение 90 минут!
                    </h3>
                </div>
                <div class="contact_content">
                    <div class="contact_content_item">
                        <img src="img/contact1.svg" alt="">
                        <p>Контакты</p>
                        <a href="tel:+380 68 32 60 699">+380 68 32 60 699</a>
                        <a href="mailto:hello@company.com">hello@company.com
                        </a>
                    </div>
                    <div class="contact_content_item">
                        <img src="img/contact2.svg" alt="">
                        <p>Адрес
                        </p>
                        <p>Город, Красивый переулок, 3с1,
                        </p>
                        <p>вход со двора
                        </p>
                    </div>
                    <div class="contact_content_item">
                        <img src="img/contact3.svg" alt="">
                        <p>Время работы
                        </p>
                        <p>Ежедневно</p>
                        <p>с 00.00 до 24.00
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>

    </footer>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(".single-item").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    </script>
    <script src="js/cray.js"></script>
    <script src="js/main.js"></script>
</body>


</html>
