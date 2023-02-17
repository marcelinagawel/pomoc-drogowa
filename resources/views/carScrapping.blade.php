<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supercars Samochód Zastępczy - Nie pozwól, aby nieplanowane sytuacje psuły Ci dzień. Skorzystaj z naszej oferty samochodów zastępczych i ciesz się swobodą podróżowania. Szybka wypożyczalnia, atrakcyjne ceny i szeroki wybór.">
    <meta name="keywords" content="Samochód zastępczy, wypożyczalnia samochodów, nieplanowane sytuacje, swoboda podróżowania, szybka wypożyczalnia, atrakcyjne ceny, szeroki wybór, samochody na wynajem, samochody zastępcze na wypadek awarii">
    <title>Supercars - Samochód zastępczy w nagłych wypadkach</title>

    @include('partials.head')
</head>
<body>
@include('partials.nav')

<div class="gold-line"></div>
<div class="container-fluid no-padding">
    <div class="row jumbotron jumbotron-fluid no-padding">
        <div class="container-baner-scrapping-car section2">
            <div class="banner-text">
                <h1 class="display-4 main-title">Skup i złomowanie samochodów</h1>
                <h1 class="display-4 bottom-text">Supercars</h1>
            </div>
        </div>
        <div class="gold-line"></div>
        <div class="row">
            <p id="phone">510245386 <img src="{{asset('img/icons/cards/phone.png')}}" alt="icon-phone" id="iconPhone2"></p>
        </div>
        <div class="gold-line"></div>

    </div>

    <div class="spacer3"></div>

    <div class="row">
        <div class="jumbotron info">
            <div class="section gold-border-info-handel section-auto-handel">
                <div class="reveal-content black-background-info">
{{--                    <h1 class="revealUp reveal-up-info"> Supercars </h1>--}}
                    <div class="box-info">
                        <p class="lead info-text-air air-info" style="font-weight: bold; font-size: 25px">
                            Jesteśmy profesjonalną firmą zajmującą się skupem i złomowaniem samochodów. Oferujemy szybką i bezpieczną obsługę w celu pozbycia się niepotrzebnych pojazdów.                        <br>
                        <ul>
                            <li>Osobowe</li>
                            <li>Dostawcze</li>
                            <li>Całe i uszkodzone</li>
                            <li>Bez OC i przeglądu</li>
                            <li>Z przeznaczeniem na częsci</li>
                            <li>Z przeznaczeniem na złom</li>
                            <li>Skorodowane</li>
                            <li>Niekompletne</li>
                            <li>Angliki</li>
                            <li>Niezarejestrowane w kraju</li>
                        </ul>
                        <div class="spacer2"></div>
                        <p class="lead info-text-air air-info" style="display: inline-block; font-weight: bold; font-size: 25px">
                        ZAPEWNIAM
                        </p>
                        <div class="spacer2"></div>
                        <ul>
                           <li>Gotówkę od ręki</li>
                            <li>Darmowoą wycenę</li>
                            <li>Darmowy odbiór lawetą</li>
                            <li>Bez zbędnych formalności i bez wychodzenia z domu</li>
                            <li>Zaświadczenie o wyzłomowaniu</li>
                            <li>Wszystko legalnie i bezpiecznie</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="spacer3"></div>
        </div>
    </div>


        <div class="spacer3"></div>
    </div>
</div>

@include('partials.footer')

</body>

</html>
