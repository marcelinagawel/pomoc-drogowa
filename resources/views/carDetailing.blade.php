<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supercars Car Detailing - Daj swojemu samochodowi zasłużoną uwagę i wyjątkowy wygląd. Skorzystaj z naszych usług car detailing i ciesz się jego perfekcyjnym stanem przez długi czas. Profesjonalizm i jakość gwarantowane.">
    <meta name="keywords" content="Car detailing, usługi car detailing, perfekcyjny stan samochodu, profesjonalizm, jakość, długi czas, uwaga, wyjątkowy wygląd, kompleksowa pielęgnacja samochodu, skuteczne czyszczenie">
    <title>Supercars - Profesjonalne usługi car detailingowe</title>

     @include('partials.head')
    </head>
    <body>
    @include('partials.nav')

<div class="gold-line"></div>
<div class="container-fluid no-padding">
    <div class="row jumbotron jumbotron-fluid no-padding">
        <div class="container-baner-car-detailing section2">
            <div class="banner-text">
                <h1 class="display-4 main-title">Auto detailing</h1>
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
    <div class="row info">
        <h1 class="display-4 info-text">Potrzeba odświeżenia?</h1>
        <p class="lead info-text-content">
            Zapewniamy w naszej ofercie:
        </p>
        <div class="spacer3"></div>
        <div class="row">
            <div class="jumbotron info">
                <div class="section gold-border-info">
                    <div class="reveal-content black-background-info">
                        <h1 class="revealUp reveal-up-info"> Detailing wnętrza  </h1>
                        <div class="box-info">
                        <p class="lead info-text-content content-info">
                            -Pranie tapicerki samochodowej
                        </p>
                        <p class="lead info-text-content content-info">
                            -Dokładne odkurzanie samochodu (wnętrze i bagażnik)
                        </p>
                        <p class="lead info-text-content content-info">
                            -Mycie i czyszczenie elementów plastikowych
                        </p>
                        <p class="lead info-text-content content-info">
                            -Impregnacja i zabezpieczenie elementów plastikowych
                        </p>
                        <p class="lead info-text-content content-info">
                            -Mycie i impregnacja elementów skórzanych
                        </p>
                        <p class="lead info-text-content content-info">
                            -Mycie okien
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
                        <h1 class="revealUp reveal-up-info"> Mycie detailingowe </h1>
                        <div class="box-info">
                            <p class="lead info-text-content content-info">
                                -Dokładne mycie samochodu wraz z wnękami
                            </p>
                            <p class="lead info-text-content content-info">
                                -Mycie komory silnika (impregnacja plastików)
                            </p>
                            <p class="lead info-text-content content-info">
                                -Mycie felg i impregnacja opon
                            </p>
                            <p class="lead info-text-content content-info">
                                -Aplikacja twardego wosku
                            </p>
                            <p class="lead info-text-content content-info">
                                -Impregnacja elementów plastikowych  na samochodzie
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
                        <h1 class="revealUp reveal-up-info"> Dodatkowo </h1>
                        <div class="box-info">
                            <p class="lead info-text-content content-info">
                                -Kompleksowe przygotowanie samochodu do sprzedaży
                            </p>
                            <p class="lead info-text-content content-info">
                                -Regeneracja reflektorów
                            </p>
                            <p class="lead info-text-content content-info">
                                -Polerowanie lakieru
                            </p>
                            <p class="lead info-text-content content-info">
                                -Przygotowanie oferty sprzedażowej (zdjęcia oraz przygotowanie ogłoszenia)
                            </p>
                            <p class="lead info-text-content content-info">
                                -Ozonowanie wnętrza
                            </p>
                        </div>
                    </div>
                    <div class="spacer3"></div>
                </div>
                <div class="spacer3"></div>
            </div>
        </div>


    </div>
    <div class="spacer4"></div>


        @foreach($carDetailing as $item)
            {!! $item !!}
        @endforeach


{{--<div class="parent">--}}
{{--<div class="div1">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/1.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--<div class="div2">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/1_po.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--<div class="div3">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/3.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--<div class="div4">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/4.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--<div class="div5">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/5.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--<div class="div6">--}}
{{--    <img class="img-detailing" src="{{asset('img/carDetailing/6.jpg')}}" alt="auto detailing">--}}
{{--</div>--}}
{{--</div>--}}
{{--    <div class="detal" style="margin: auto">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-lg-6">--}}
{{--                <img class="img-detailing" style="float: right" src="{{asset('img/carDetailing/1.jpg')}}" alt="auto detailing"/>--}}
{{--            </div>--}}
{{--            <div class="col-md-12 col-lg-6">--}}
{{--                <img class="img-detailing" src="{{asset('img/carDetailing/1_po.jpg')}}" alt="auto detailing"/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-lg-6">--}}
{{--                <img class="img-detailing" style="float: right" src="{{asset('img/carDetailing/1.jpg')}}" alt="auto detailing"/>--}}
{{--            </div>--}}
{{--            <div class="col-md-12 col-lg-6">--}}
{{--                <img class="img-detailing" src="{{asset('img/carDetailing/1_po.jpg')}}" alt="auto detailing"/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="jumbotron info">
    <div class="spacer3"></div>
    <h1 class="display-4 info-text">Przyszła pora odświeżyć klimatyzację?</h1>
    <p class="lead info-text-content">
        Po udanym detalingu zachęcamy również do zadbania o swój samochód nie tylko wizualnie.
        Sprawdź stan swojego powietrza w samochodzie przeprowadzając u nas właściwą kontrolę.
    </p>
    <hr class="my-4">
    <p>Sprawdź naszą ofertę</p>
    <p class="lead">
        <a class="contact-button btn btn-primary btn-lg "nav-link @if (Request::path() == 'serwis-klimatyzacji') active @endif" href="/serwis-klimatyzacji">Serwis klimatyzacji</a>
    </p>
</div>
</div>
<div class="spacer3"></div>


@include('partials.footer')

</body>
</html>
