<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supercars Auto Handel - Skorzystaj z naszej szerokiej oferty samochodów używanych i nowych. Znajdź swój wymarzony samochód po najlepszej cenie. Zaufaj naszemu doświadczeniu w branży.">
    <meta name="keywords" content="Auto handel, Samochody używane, Samochody nowe, Oferta samochodów, Najlepsze ceny, Wymarzony samochód, Zaufane źródło, Doświadczenie w branży, Szeroka oferta, Kupno samochodu">
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo.ico')}}"/>
    <title>Supercars - Najlepsze samochody na sprzedaż</title>

     @include('partials.head')
    </head>
    <body>
    </body>
    @include('partials.nav')
    <div class="gold-line"></div>
    <div class="container-fluid no-padding">
        <div class="row jumbotron jumbotron-fluid no-padding">
                <div class="container-baner-auto-handel section2 ">
                    <div class="banner-text">
                    <h1 class="display-4 main-title">Auto handel</h1>
                    <h1 class="display-4 bottom-text">Supercars</h1>
                    </div>
        </div>
        <div class="gold-line"></div>
        <div class="row">
                <p id="phone">510245386 <img src="{{asset('img/icons/cards/phone.png')}}" alt="icon-phone" id="iconPhone2"></p>
        </div>
        <div class="gold-line"></div>
    </div>
    </div>

        <div class="spacer1"></div>

        <div class="row">
            <div class="card-container">
                <div class="col card">
                    <div class="face face1">
                        <div class="container-text-card">
                            <p class="text-card">
                                Firma od 2018r specjalizuje się w sprowadzaniu samochodów osobowych jak i dostawczych z Niemiec oraz innych krajów Europy. Możliwość sprowadzenia samochodu na indywidualnie zamówienie.</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cover-border">
                            <div class="cover-icon">
                                <img src="{{asset('img/icons/cards/import.png')}}" alt="icon" class="icon">
                                <h2>Import samochodów z niemiec</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col card">
                    <div class="face face1">
                        <div class="container-text-card">
                            <p class="text-card">
                                Zajmujemy się również skupem samochodów na terenie całego kraju. W każdym stanie. Odbieraramy własnym transportem i płacimy od ręki. </p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cover-border">
                            <div class="cover-icon">
                                <img src="{{asset('img/icons/cards/skup.png')}}" alt="icon" class="icon">
                                <h2>Skup</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col card">
                    <div class="face face1">
                        <div class="container-text-card">
                            <p class="text-card">
                                W ofercie posiadamy samochody importowane jak i zarejestrowane w kraju. Sprzedajemy tylko sprawne i sprawdzone samochody tak Aby nowy właściciel był w pełni usatysfakcjonowany z zakupu.                            </p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cover-border">
                            <div class="cover-icon">
                                <img src="{{asset('img/icons/cards/sprzedaz.png')}}" alt="icon" class="icon">
                                <h2>Sprzedaż</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col card">
                    <div class="face face1">
                        <div class="container-text-card">
                            <p class="text-card">
                                Możliwość zamiany lub pozostawienia twojego starego samochodu w rozliczeniu. </p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cover-border">
                            <div class="cover-icon">
                                <img src="{{asset('img/icons/cards/zamiana.png')}}" alt="icon" class="icon">
                                <h2>Zamiana</h2>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col card">
                        <div class="face face1">
                            <div class="container-text-card">
                                <p class="text-card">
                                    Oferujemy usługę złomowania samochodów. Zapewniamy szybka wycenę . Darmowy odbiór lawetą oraz Gotówkę od ręki .  Wszystko legalnie I bezpiecznie. </p>

                            </div>
                        </div>
                        <div class="face face2">
                            <div class="cover-border">
                                <div class="cover-icon">
                                    <img src="{{asset('img/icons/cards/zlomowanie.png')}}" alt="icon" class="icon">
                                    <h2>Złomowanie samochodów</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col card">
                    <a href="https://supercars.otomoto.pl/">
                        <div class="face face3">
                            <div class="cover-border">
                                <div class="cover-icon2">
                                    <img src="{{asset('img/icons/cards/otomoto.png')}}" alt="otomoto" class="otomoto">
                                    <br>
                                    <img src="{{asset('img/icons/cards/otomoto1.png')}}" alt="otomoto" class="otomoto">
                                    <br>
                                    <img src="{{asset('img/icons/cards/otomoto2.png')}}" alt="otomoto" class="otomoto">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

<div class="spacer2"></div>

            @foreach($slider as $item)
                {!! $item !!}
            @endforeach

<div class="spacer3"></div>

<div class="row">
    <div class="jumbotron info">
        <div class="section gold-border-info-handel section-auto-handel">
            <div class="reveal-content black-background-info">
                <h1 class="revealUp reveal-up-info"> Supercars </h1>
                <div class="box-info">
                    <p class="lead info-text-air air-info">
                        Posiadamy wieloletnie doświadczenie w imporcie samochodów.  Kupujemy tylko i wyłącznie  bezwypadkowe samochody z oryginalnym przebiegiem, od prywatnych osób beż pośrednictwa komisów.                    </p>
                    <br>
                    <ul>
                        <li>Tu kupują państwo legalnie, otrzymują fakturę zakupu oraz niezbędne dokumenty do rejestracji</li>
                        <li>Całkowity koszt przygotowania auta do rejestracji, to tylko 156zł</li>
                        <li>100% satysfakcji podczas oględzin samochodu, na żywo auto prezentuje się jak na zdjęciach</li>
                        <li>Oferuję używane samochody, które posiadają normalne ślady użytkowania, jak na swój wiek</li>
                        <li>Ubezpieczenie na 30 dni gratis</li>
                    </ul>
                    <br>
                    <div class="spacer2"></div>
                    <p class="lead info-text-air air-info" style="display: inline-block">
                        KUPUJĄC AUTO W MOIM KOMISIE, MASZ MOŻLIWOŚĆ:
                    </p>
                    <div class="spacer2"></div>
                    <ul>
                        <li>Sprawdzenia auta na stacji diagnostycznej</li>
                        <li>Powrotu autem na kołach, bądz taniego transportu lawetą, pod wskazany adres</li>
                        <li>Pozostwaienia swojego auta w rozliczeniu</li>
                        <li>Sprawdzenia auta na stacji diagnostycznej</li>
                        <li>Sprawdzenia auta miernikiem lakieru</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="spacer3"></div>
    </div>
    <div class="handel-info-container">
        <h3>Samochody można obejrzeć w miejscowości Buk,
            pomiędzy miastami Wolbrom i Miechów.
        </h3>

        <div class="handel-info-button">
            <a class="handel-location" target="_blank" href="https://www.google.pl/maps/place/Buk+57A,+32-075+Buk/@50.3405948,19.8505105,17z/data=!3m1!4b1!4m6!3m5!1s0x4717013b62969d47:0x35769bca6993c71f!8m2!3d50.3405949!4d19.8549952!16s%2Fg%2F11tp9k5l83">
            <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 395.71 395.71" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738 c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388 C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191 c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z"></path> </g> </g></svg>
            <span>Sprawdź jak dojechać</span>
            </a>
        </div>

        <div class="spacer2"></div>
        <h3>
            Aktualna oferta aut, wraz ze zdjęciami:
        </h3>

            <div class="handel-info-button">
                <a class="handel-location" target="_blank" href="https://supercars.otomoto.pl/inventory">
                <svg fill="#ffffff" width="52px" height="52px" viewBox="0 -39.69 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 43.49" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M103.94,23.97c5.39,0,9.76,4.37,9.76,9.76c0,5.39-4.37,9.76-9.76,9.76c-5.39,0-9.76-4.37-9.76-9.76 C94.18,28.34,98.55,23.97,103.94,23.97L103.94,23.97z M23,29.07v3.51h3.51C26.09,30.86,24.73,29.49,23,29.07L23,29.07z M26.52,34.87H23v3.51C24.73,37.97,26.09,36.6,26.52,34.87L26.52,34.87z M20.71,38.39v-3.51H17.2 C17.62,36.6,18.99,37.96,20.71,38.39L20.71,38.39z M17.2,32.59h3.51v-3.51C18.99,29.49,17.62,30.86,17.2,32.59L17.2,32.59z M105.09,29.07v3.51h3.51C108.18,30.86,106.82,29.49,105.09,29.07L105.09,29.07z M108.6,34.87h-3.51v3.51 C106.82,37.97,108.18,36.6,108.6,34.87L108.6,34.87z M102.8,38.39v-3.51h-3.51C99.71,36.6,101.07,37.96,102.8,38.39L102.8,38.39z M99.28,32.59h3.51v-3.51C101.07,29.49,99.71,30.86,99.28,32.59L99.28,32.59z M49.29,12.79c-1.54-0.35-3.07-0.35-4.61-0.28 C56.73,6.18,61.46,2.07,75.57,2.9l-1.94,12.87L50.4,16.65c0.21-0.61,0.33-0.94,0.37-1.55C50.88,13.36,50.86,13.15,49.29,12.79 L49.29,12.79z M79.12,3.13L76.6,15.6l24.13-0.98c2.48-0.1,2.91-1.19,1.41-3.28c-0.68-0.95-1.44-1.89-2.31-2.82 C93.59,1.86,87.38,3.24,79.12,3.13L79.12,3.13z M0.46,27.28H1.2c0.46-2.04,1.37-3.88,2.71-5.53c2.94-3.66,4.28-3.2,8.65-3.99 l24.46-4.61c5.43-3.86,11.98-7.3,19.97-10.2C64.4,0.25,69.63-0.01,77.56,0c4.54,0.01,9.14,0.28,13.81,0.84 c2.37,0.15,4.69,0.47,6.97,0.93c2.73,0.55,5.41,1.31,8.04,2.21l9.8,5.66c2.89,1.67,3.51,3.62,3.88,6.81l1.38,11.78h1.43v6.51 c-0.2,2.19-1.06,2.52-2.88,2.52h-2.37c0.92-20.59-28.05-24.11-27.42,1.63H34.76c3.73-17.75-14.17-23.91-22.96-13.76 c-2.67,3.09-3.6,7.31-3.36,12.3H2.03c-0.51-0.24-0.91-0.57-1.21-0.98c-1.05-1.43-0.82-5.74-0.74-8.23 C0.09,27.55-0.12,27.28,0.46,27.28L0.46,27.28z M21.86,23.97c5.39,0,9.76,4.37,9.76,9.76c0,5.39-4.37,9.76-9.76,9.76 c-5.39,0-9.76-4.37-9.76-9.76C12.1,28.34,16.47,23.97,21.86,23.97L21.86,23.97z"></path> </g> </g></svg>
                    <span>Sprawdź aktualną ofertę</span>
                </a>
            </div>


        <div class="spacer2"></div>
        <h3>
            Więcej informacji pod nr tel.: <tel>510 245 386</tel>
        </h3>
        <h3>
            Zapraszam na oględziny i jazdę próbną.
        </h3>
    </div>
</div>
<div class="spacer4"></div>
<div class="row">
    <div class="spacer2"></div>
    <div class="row slider">
        <img class="d-block w-100" src="{{asset('img/slider/slider1.jpg')}}" alt="First slide">
    </div>
</div>
</div>
<div class="spacer2"></div>
{{--<div class="jumbotron info">--}}
{{--    <div class="spacer3"></div>--}}
{{--    <h1 class="display-4 info-text">Tanio, szybko, dobrze.</h1>--}}
{{--    <p class="lead info-text-content">--}}
{{--                Nasza firma zapewnia konkurencyjność cen na rynku oraz bezproblemowe postępowanie w szybkim odbiorze samochodów przy jednoczesnym dołożeniu wszelkich starań, aby sytuacja została rozwiązana w poprawny sposób.--}}
{{--    </p>--}}
{{--    <hr class="my-4">--}}
{{--    <p>Skontaktuj się z nami</p>--}}
{{--    <p class="lead">--}}
{{--                    <a class="contact-button btn btn-primary btn-lg "nav-link @if (Request::path() == 'kontakt') active @endif" href="/kontakt">Kontakt</a>--}}
{{--    </p>--}}
{{--</div>--}}
{{--<div class="spacer3"></div>--}}
</div>
@include('partials.footer')
</body>
</html>
