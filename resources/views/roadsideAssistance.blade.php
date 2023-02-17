<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supercars Pomoc Drogowa - Nie pozwól, aby nieoczekiwane sytuacje na drodze zrujnowały Twój dzień. Skorzystaj z naszej profesjonalnej pomocy drogowej i ciesz się spokojem na drodze. Szybka i skuteczna pomoc, 24 godziny na dobę">
    <meta name="keywords" content="Pomoc drogowa, Kraków, Miechów, Buk, nieoczekiwane sytuacje, profesjonalna pomoc, szybka pomoc, 24 godziny na dobę, skuteczna pomoc, pomoc na drodze, pomoc drogowa w okolicach Krakowa, Miechowa i Buk">
    <title>Supercars - Skuteczna i szybka pomoc drogowa</title>

     @include('partials.head')
    </head>
    <body>
    </body>
    @include('partials.nav')
<div class="gold-line"></div>
<div class="container-fluid no-padding">
    <div class="row jumbotron jumbotron-fluid no-padding">
        <div class="container-baner-roadside-assistance section2">
            <div class="banner-text">
                <h1 class="display-4 main-title">Pomoc drogowa</h1>
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
<div class="spacer3"></div>
<div class="row info">
    <h1 class="display-4 info-text">Problem w trasie?</h1>
    <p class="lead info-text-content">
        Zapewniamy w naszej ofercie:
    </p>
    <div class="spacer3"></div>
    <table class="module-border-wrap">
        <tr>
            <td class="assistance-icon-tr">
                <div class="module2">
                    <div class="module-text">
                    <img src="{{asset('img/icons/pomoc-drogowa/transport.png')}}" alt="roadside-assistance" class="assistance-icon">
                    </div>
                    </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    <div class="module-text">Transport samochodów osobowych</div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Transport motocykli i quadów
                </div>
            </td>
        <tr>
            <td>
                <div class="module">
                    Transport maszyn rolniczych i sprzętu budowlanego
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Transport nietypowych przedmiotów do 2t
                </div>
            </td>
        <tr>
    </table>
    <table class="module-border-wrap">
        <td class="assistance-icon-tr">
            <div class="module2">
                <div class="module-text">
                    <img src="{{asset('img/icons/pomoc-drogowa/pomoc.png')}}" alt="roadside-assistance" class="assistance-icon">
                </div>
            </div>
        </td>
        <tr>
            <td>
                <div class="module">
                    Holowanie z OC sprawcy
                </div>
            </td>
            <tr>
            <td>
                <div class="module">
                    Wyciąganie z rowu, błota, śniegu
                </div>
            </td>
        </tr>
            <td>
                <div class="module">
                    Pomoc drogowa
                </div>
            </td>

        </tr>
        <tr>
            <td>
                <div class="module">
                    Parking strzeżony
                </div>
            </td>
        </tr>
        </tr>
    </table>

    <div class="spacer3"></div>
    <table class="module-border-wrap">
        <tr>
            <td class="assistance-icon-tr">
                <div class="module2">
                    <div class="module-text">
                        <img src="{{asset('img/icons/pomoc-drogowa/wymiana.png')}}" alt="roadside-assistance" class="assistance-icon">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Wymiana koła
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Diagnostyka komputerowa
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Awaryjne odpalenie
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Auto zastępcze
                </div>
            </td>
        </tr>
    </table>
    <table class="module-border-wrap empty-module">
        <tr>
            <td class="assistance-icon-tr">
                <div class="module2">
                    <div class="module-text">
                        <img src="{{asset('img/icons/pomoc-drogowa/paliwo.png')}}" alt="roadside-assistance" class="assistance-icon">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="module">
                    Dowóz paliwa
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="module">
                    Wypompowanie źle zatankowanego paliwa
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="module">
                    Drobne naprawy na drodze
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="spacer4"></div>

    @foreach($gallery as $item)
        {!! $item !!}
    @endforeach

<div class="spacer4"></div>
<div class="row">
    <div class="jumbotron info">
        <div class="section gold-border-info-road">
            <div class="reveal-content black-background-info">
                <h1 class="revealUp reveal-up-info"> Rozliczenie </h1>
                <div class="box-info">
                    <p class="lead info-text-air air-info">
                        Dbając o Państwa wygodę jesteśmy przygotowani na różnorodne metody płatności.
                        Akceptujemy zarówno gotówkę, karty, przelewy jak i blika.                    </p>
                </div>
            </div>
        </div>
        <div class="spacer3"></div>
        <div class="section gold-border-info-road">
            <div class="reveal-content black-background-info">
                <h1 class="revealUp reveal-up-info"> Dokumentacja </h1>
                <div class="box-info">
                    <p class="lead info-text-air air-info">
                        Posiadamy wieloletnie doświadczenie oraz odpowiednie uprawnienia. Wystawiamy paragon lub fakturę VAT.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer5"></div>
<div class="roadside-assistance-terrain">
    <h2 class="terrain-title">Obszar działania</h2>

    <p>Wolbrom, Miechów, Skała, Słomniki, Pilica, Charsznica, Kozłów, Trasa S7 I pobliskie miejscowosci</p>
</div>
<div class="spacer2"></div>
<div class="jumbotron info">
    <div class="spacer3"></div>
    <h1 class="display-4 info-text">Potrzebne auto zastępcze?</h1>
    <p class="lead info-text-content">
        Wiemy jak brak samochodu potrafi pokrzyżować plany, dlatego w trosce o Państwa dobro i wygodę gwarantujemy możliwość wynajęcia samochodu zastępczego.
    </p>
    <hr class="my-4">
    <p>Sprawdź naszą ofertę</p>
    <p class="lead">
        <a class="contact-button btn btn-primary btn-lg "nav-link @if (Request::path() == 'samochod-zastepczy') active @endif" href="/samochod-zastepczy">Samochód zastępczy</a>
    </p>
</div>
</div>
<div class="spacer3"></div>
</div>
@include('partials.footer')
</body>
</html>
