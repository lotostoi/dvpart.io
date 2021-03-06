<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVRART</title>
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {

           grecaptcha . reset();

           document.querySelector('#send').click();
       }
     </script>
</head>

<body>
    <section class="waite_load">
     <svg class="filter" version="1.1">
                <defs>
                    <filter id="gooeyness">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10"
                            result="gooeyness" />
                        <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <div class="dots">
                <div class="dot mainDot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
    </section>
    <section class="modelWin">
        <div class="good">
            <span>X</span>
            <p>Ваше сообщение успешно отправлено!</p>
        </div>
        <div class="error">
            <span>X</span>
            <p> Ошибка соеденения(404) - попробуйте позже</p>
        </div>
        <div class="wite">
              <div class='sk-circle-bounce'>
                    <div class='sk-child sk-circle-1'></div>
                    <div class='sk-child sk-circle-2'></div>
                    <div class='sk-child sk-circle-3'></div>
                    <div class='sk-child sk-circle-4'></div>
                    <div class='sk-child sk-circle-5'></div>
                    <div class='sk-child sk-circle-6'></div>
                    <div class='sk-child sk-circle-7'></div>
                    <div class='sk-child sk-circle-8'></div>
                    <div class='sk-child sk-circle-9'></div>
                    <div class='sk-child sk-circle-10'></div>
                    <div class='sk-child sk-circle-11'></div>
                    <div class='sk-child sk-circle-12'></div>
                </div>
        </div>
    </section>
    <div class="contener">
        <header id="main">
            <div class="bodyheader">
                <div class="logoandmenu">
                    <a href="index.php" class="logo">Dvpart</a>
                    <nav class="nav">
                        <div class="menu">
                            <i class="icon-list-bullet"></i>
                            <span>X</span>
                        </div>
                        <ul>
                            <li><a href="#main">Главная</a></li>
                            <li><a href="#about">О нас</a> </li>
                            <li><a href="#writetous">Написать нам</a> </li>
                            <li><a href="#contacts">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="title">
                    <h1>DVpart</h1>
                    <p>Поиск запчастей Владивосток, Хабаровск</p>
                </div>
                <form action="" class="search">
                    <label for="">Поиск</label>
                    <div>
                        <input type="search" name="text" id="#search" placeholder="Введите номер или название детали">
                        <button type="submit">
                            <span>Найти</span>
                            <svg width="12.648" height="13.639" viewBox="0 0 12.648 13.639">
                                <g transform="translate(1.477 1.414)">
                                    <line class="arrow" x2="10" transform="translate(-0.477 5.405)" />
                                    <path class="arrow" d="M12,5l5.405,5.405L12,15.811"
                                        transform="translate(-7.234 -5)" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

        </header>
        <main>
            <p class="main_1" id="about">О нас</p>
            <p class="main_2">Trust and quality are our atuus</p>
            <p class="main_3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            <p class="main_4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            <p class="main_5" id = "writetous">Форма обратной связи</p>
            <p class="main_6">Есть вопрос? Напишите нам:</p>
            <form action="#" class='feedback'>
                 <div class="cont_input">
                    <textarea name="text" id="text" data-fillin="yes" placeholder="Текс сообщения"></textarea>
                    <p class="required_field">Это поле обязательно для заполнения</p>
                </div>
                <div>
                    <div class="cont_input">
                        <input type="text" name="theme" id="theme" data-fillin="yes" placeholder="Тема сообщения">
                        <p class="required_field">Это поле обязательно для заполнения</p>
                    </div>
                    <div class='cont_input'>
                        <input type="text" name="name" id="name" data-fillin="yes" placeholder="Имя">
                        <p class="required_field">Это поле обязательно для заполнения</p>
                    </div>
                    <div class="cont_input">
                        <input type="tel" name="phone" id="phone" data-fillin="yes" placeholder="Tелефон">
                        <p class="required_field">Это поле обязательно для заполнения</p>
                    </div>
                    <div class="cont_input">
                        <input type="email" name="email" id="email" data-fillin="yes" placeholder="Email">
                        <p class="required_field">Это поле обязательно для заполнения</p>
                    </div>
                    <input type="submit" value="send" id="send" data-fillin="yes" style="display: none">
                    <button id="sendData" class="g-recaptcha" data-sitekey="6Lc7a-4UAAAAALTUtwAlCGLog5sTj1HomExsmZdR" data-callback='onSubmit'  style="display: none"></button>
                    <button id="valid">
                        <span>Отправить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.986" height="18.414"
                            viewBox="0 0 17.986 18.414">
                            <g transform="translate(1 1.414)">
                                <line class="arrowup" x1="9" y2="9" transform="translate(6.572)" />
                                <path class="arrowup" d="M17.818,2,12.282,17.818,9.118,10.7,2,7.536Z"
                                    transform="translate(-2 -1.818)" />
                            </g>
                        </svg>
                    </button>
                </div>
            </form>
        </main>
        <footer>
            <section class="bodyFooter">
                <div class="blok_1">
                    <h3>Zetta Hotels</h3>
                    <p class="text">Our hotel is an image of quality and profesionalism combined with hard work and
                        precision. You
                        can expect only the best
                        services from our staff.</p>
                    <div>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                <circle class="fa" cx="17.5" cy="17.5" r="17.5" transform="translate(0 0)" />
                                <path class="fb"
                                    d="M47.87,33.107H44.761V44.494H40.052V33.107h-2.24v-4h2.24v-2.59c0-1.852.88-4.752,4.751-4.752l3.488.015v3.885H45.761a.959.959,0,0,0-1,1.091v2.355h3.52Z"
                                    transform="translate(-25.993 -14.916)" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                <g transform="translate(-0.001)">
                                    <circle class="ta" cx="17.5" cy="17.5" r="17.5" transform="translate(0.001 0)" />
                                    <g transform="translate(7.857 10.637)">
                                        <path class="tb"
                                            d="M45.444,35.985a8.326,8.326,0,0,1-2.4.656,4.185,4.185,0,0,0,1.835-2.308,8.354,8.354,0,0,1-2.65,1.012,4.177,4.177,0,0,0-7.112,3.807,11.847,11.847,0,0,1-8.6-4.361,4.178,4.178,0,0,0,1.291,5.572,4.144,4.144,0,0,1-1.89-.523c0,.018,0,.035,0,.053a4.176,4.176,0,0,0,3.348,4.092,4.19,4.19,0,0,1-1.885.072,4.178,4.178,0,0,0,3.9,2.9A8.425,8.425,0,0,1,25.1,48.684a11.868,11.868,0,0,0,18.271-10c0-.181,0-.361-.012-.54a8.463,8.463,0,0,0,2.083-2.16Z"
                                            transform="translate(-25.103 -34.028)" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                <g transform="translate(0 0.001)">
                                    <g transform="translate(0 -0.001)">
                                        <circle class="ga" cx="17.5" cy="17.5" r="17.5" transform="translate(0 0)" />
                                    </g>
                                    <g transform="translate(5.77 10.841)">
                                        <path class="ga"
                                            d="M19.521,42.882A7.422,7.422,0,0,0,24.528,49.9a7.325,7.325,0,0,0,8.006-2.134,8.4,8.4,0,0,0,1.5-5.939c-2.369-.021-4.737-.014-7.1-.011,0,.844,0,1.684,0,2.528,1.418.039,2.837.021,4.255.05a4.1,4.1,0,0,1-2.411,2.812,4.691,4.691,0,1,1-3.159-8.825,5.216,5.216,0,0,1,4.39.858c.659-.617,1.277-1.277,1.883-1.943a7.466,7.466,0,0,0-12.375,5.584Z"
                                            transform="translate(-19.517 -35.446)" />
                                        <path class="ga"
                                            d="M74.58,48.668c-.007.706-.014,1.415-.018,2.12-.709.007-1.415.011-2.12.014v2.113c.706,0,1.415.007,2.12.014.007.706.007,1.411.014,2.12.7,0,1.408,0,2.113,0,0-.709.007-1.415.014-2.124l2.12-.011V50.8c-.705,0-1.415-.007-2.12-.014,0-.706-.011-1.415-.014-2.12Z"
                                            transform="translate(-55.449 -44.422)" />
                                        <path class="gb"
                                            d="M19.521,42.882A7.465,7.465,0,0,1,31.9,37.3c-.606.667-1.224,1.326-1.883,1.943a5.216,5.216,0,0,0-4.39-.858,4.691,4.691,0,1,0,3.159,8.826A4.1,4.1,0,0,0,31.194,44.4c-1.418-.028-2.837-.011-4.255-.05,0-.844-.007-1.684,0-2.528,2.365,0,4.733-.011,7.1.011a8.392,8.392,0,0,1-1.5,5.939A7.325,7.325,0,0,1,24.528,49.9,7.422,7.422,0,0,1,19.521,42.882Z"
                                            transform="translate(-19.517 -35.445)" />
                                        <path class="gb"
                                            d="M74.58,48.668H76.69c0,.706.011,1.415.014,2.12.705.007,1.415.011,2.12.014v2.113l-2.12.011c-.007.709-.011,1.415-.014,2.124-.705,0-1.411,0-2.113,0-.007-.709-.007-1.415-.014-2.12-.705-.007-1.415-.011-2.12-.014V50.8q1.059-.005,2.12-.014C74.566,50.083,74.573,49.374,74.58,48.668Z"
                                            transform="translate(-55.449 -44.422)" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <p class="copyright">Copyright ©2020 All rights reserved | Dvpart <a href="#">Marian</a></p>
                </div>
                <div class="blok_2">
                    <h4>Privacy</h4>
                    <a href="#">Career</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Services</a>
                </div>
                <div class="blok_3" id="contacts">
                    <h4>Контакты Хабаровск</h4>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.829" height="14.834"
                            viewBox="0 0 18.829 14.834">
                            <g transform="translate(-0.607 -3)">
                                <path class="a"
                                    d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z" />
                                <path class="a" d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)" />
                            </g>
                        </svg>
                        <span>v.parts@atlantic-khv.ru</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.044" height="18.077"
                            viewBox="0 0 18.044 18.077">
                            <path class="a"
                                d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z"
                                transform="translate(-1.111 -1)" />
                        </svg>
                        <span>+0 320 422 4254</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.128" height="18.045"
                            viewBox="0 0 15.128 18.045">
                            <g transform="translate(-2)">
                                <path class="a"
                                    d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z" />
                                <circle class="a" cx="2.5" cy="2.5" r="2.5" transform="translate(7 5.046)" />
                            </g>
                        </svg>
                        <span>Main Str Chicago Ilinois</span>
                    </p>
                    <p>Created by <a href="https://www.3dmark.info/index.php/ru/">www.3dmark.info</a> </p>
                </div>
            </section>
        </footer>
    </div>
    <script src="js/main.js"></script>
    <script>
         window.onload = () => {
            setTimeout(() => {
                document.querySelector('.waite_load').classList.add('waite_load-off')
                /*    let VForm = new ValidForm('.feedback', '#send', 'error')
                   VForm.init() */
            }, 1500)
        }
    </script>

</body>

</html>
