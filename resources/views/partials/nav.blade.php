{{--<nav class="menu navbar navbar-expand-lg navbar-dark bg-dark custom-color">--}}

{{--        <a class="navbar-brand" href="#">--}}
{{--            <a class="logo nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">--}}
{{--                <img src="{{asset('img/logo.jpg')}}" alt="logo" id="logo">--}}
{{--            </a>--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse open-navbar" id="navbarNav">--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">Auto handel</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == 'pomoc-drogowa') active @endif" href="/pomoc-drogowa">Pomoc drogowa</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == 'auto-detailing') active @endif" href="/auto-detailing">Auto detailing</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == 'serwis-klimatyzacji') active @endif" href="/serwis-klimatyzacji">Serwis klimatyzacji</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == 'samochod-zastepczy') active @endif" href="/samochod-zastepczy">Samochód zastępczy</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if (Request::path() == 'kontakt') active @endif" href="/kontakt">Kontakt</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--</nav>--}}

<nav class="menu navbar navbar-expand-lg navbar-dark bg-dark custom-color">
    <a class="navbar-brand" href="#">
        <a class="logo nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">
            <img src="{{asset('img/logo.webp')}}" alt="logo" id="logo">
        </a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse open-navbar" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">Auto handel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'pomoc-drogowa') active @endif" href="/pomoc-drogowa">Pomoc drogowa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'auto-detailing') active @endif" href="/auto-detailing">Auto detailing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'serwis-klimatyzacji') active @endif" href="/serwis-klimatyzacji">Serwis klimatyzacji</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'samochod-zastepczy') active @endif" href="/samochod-zastepczy">Samochód zastępczy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'zlomowanie') active @endif" href="/zlomowanie">Skup i złomowanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::path() == 'kontakt') active @endif" href="/kontakt">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>
<div class="spacer2"></div>
