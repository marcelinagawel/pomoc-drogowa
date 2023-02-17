<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supercars Serwis Klimatyzacji - Zapewnij sobie komfort w aucie przez cały rok. Skorzystaj z naszych usług naprawy i konserwacji klimatyzacji. Profesjonalne podejście i szybka realizacja.">
    <meta name="keywords" content="Serwis klimatyzacji, Naprawa klimatyzacji, Konserwacja klimatyzacji, Profesjonalne podejście, Klimatyzacja samochodowa, Ekspertyza klimatyzacji">
    <title>Supercars - Serwis klimatyzacji dla Twojego samochodu</title>

     @include('partials.head')
    </head>
    <body>
    </body>
    @include('partials.nav')

<div class="gold-line"></div>
<div class="container-fluid no-padding">
    <div class="row jumbotron jumbotron-fluid no-padding">
        <div class="container-baner-air-conditioning section2">
            <div class="banner-text">
                <h1 class="display-4 main-title">Serwis klimatyzacji</h1>
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
    <h1 class="display-4 info-text">Sprawdź swoją klimatyzację</h1>
    <p class="lead info-text-content">
        I nie bój się oddychać pełną piersią
    </p>
    <div class="spacer3"></div>
    <div class="row">
        <div class="jumbotron info">
            <div class="section gold-border-info">
                <div class="reveal-content black-background-info">
                    <h1 class="revealUp reveal-up-info"> Szczelność klimatyzacji </h1>
                    <div class="box-info">
                        <p class="lead info-text-air air-info">
                            Oferujemy kompleksowe sprawdzenie szczelności układów klimatyzacyjnych. Po zdiagnozowaniu problemów szybko i wygodnie naprawimy Państwa nieszczelności od ręki.
                        </p>
                    </div>
                </div>
            </div>
            <div class="spacer3"></div>
        </div>
        <div class="spacer3"></div>
        <div class="jumbotron info">
            <div class="section gold-border-info">
                <div class="reveal-content black-background-info">
                    <h1 class="revealUp reveal-up-info"> Naprawa systemów </h1>
                    <div class="box-info">
                        <p class="lead info-text-content air-info">
                            Zapewniamy całkowitą diagnostykę oraz napełnianie układów klimatyzacji. W całym procesie dbamy o kontrolę i wymianę niezbędnych podzespołów tj. sprężarek, skraplaczy oraz osuszaczy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="spacer3"></div>
        </div>
        <div class="spacer3"></div>
        <div class="jumbotron info">
            <div class="section gold-border-info">
                <div class="reveal-content black-background-info">
                    <h1 class="revealUp reveal-up-info"> Nabicie klimatyzacji </h1>
                    <div class="box-info">
                        <p class="lead info-text-content air-info">
                            Pracujemy na najnowszym sprzęcie który napełnia układ klimatyzacji gazami o oznaczeniu R134a R1234yf.
                        </p>
                    </div>
                </div>
            </div>
            <div class="spacer3"></div>
        </div>
        <div class="spacer3"></div>
        <div class="jumbotron info">
            <div class="section gold-border-info">
                <div class="reveal-content black-background-info">
                    <h1 class="revealUp reveal-up-info"> Dezynfekcja </h1>
                    <div class="box-info">
                        <p class="lead info-text-content air-info">
                            Aby móc oddychać wartościowym powietrzem warto zadbać, aby klimatyzacja została poprawnie odgrzybiona. Zachęciamy również w tym procesie do skorzystania z ozonowania wnętrza klimatyzacji.
                        </p>
                    </div>
                </div>
                <div class="spacer3"></div>
            </div>
            <div class="spacer3"></div>
        </div>
    </div>


</div>

<div class="jumbotron info">
    <div class="spacer3"></div>
    <h1 class="display-4 info-text">Odśwież swoje wnętrze.</h1>
    <p class="lead info-text-content">
        Po konserwacji klimatyzacji może pora na odświeżenie wnętrza bądź nabłyszczenie lakieru? Zachęcamy do zapoznania się z naszą ofertą detailingową.
    </p>
    <hr class="my-4">
    <p>Sprawdź naszą ofertę</p>
    <p class="lead">
        <a class="contact-button btn btn-primary btn-lg "nav-link @if (Request::path() == 'auto-detailing') active @endif" href="/auto-detailing">Auto Detailing</a>
    </p>
</div>
</div>
<div class="spacer3"></div>
</div>


@include('partials.footer')

</body>
</html>
