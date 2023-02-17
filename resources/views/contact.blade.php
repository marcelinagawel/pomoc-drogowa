<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kontakt z Supercars">
    <title>Supercars</title>

     @include('partials.head')
    </head>
    <body>
    </body>
    @include('partials.nav')

<div class="gold-line"></div>
<div class="container-fluid no-padding">
    <div class="row jumbotron jumbotron-fluid no-padding">
        <div class="container-baner-contact section2">
            <div class="banner-text">
                <h1 class="display-4 main-title">Kontakt</h1>
                <h1 class="display-4 bottom-text">Supercar</h1>
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
<div class="container-contact cover-contact-border">
    <div class="break"></div>
    <div class="contact-inside">
            <div class="row p-3">
                <div class="col-lg-5 col-md-12 mb-4 mb-md-3">
                    <h5 class="text-uppercase mb-4 title-footer">Adres</h5>
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=Buk 57a 32-075 Gołcza&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.gachacute.com/">Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>                </div>
                    <div class="col-sm-11 col-lg-3 col-md-5 mb-4 mb-md-0">
                    <ul class="footer-list">
                        <h5 class="text-uppercase mb-4 pb-1 contact-footer title-footer">Kontakt</h5>

                        <li class="float-list">
                            <img src="{{asset('img/icons/footer/localization-contact.png')}}" alt="footer-icon" class="footer-icon">
                            <span class="ms-2">Buk 57a 32-075 Gołcza</span>
                        </li>
                        <br>
                        <li class="float-list">
                            <img src="{{asset('img/icons/footer/email-contact.png')}}" alt="footer-icon" class="footer-icon">
                            <span class="ms-2">supercarsss@wp.pl</span>
                        </li>
                        <br>
                        <li class="float-list">
                            <img src="{{asset('img/icons/footer/facebook-contact.png')}}" alt="footer-icon" class="footer-icon">
                            <a href="https://www.facebook.com/fbsupercars" style="color: white"><span class="ms-2">Supercars Łukasz Gajos</span></a>
                        </li>
                        <br>
                        <li class="float-list">
                            <img src="{{asset('img/icons/footer/phone-contact.png')}}" alt="footer-icon" class="footer-icon">
                            <span class="ms-2">+ 48 510 245 386</span>
                        </li>
                        <br>
                        <li class="float-list">
                            <img src="{{asset('img/icons/footer/whatsupp-contact.png')}}" alt="footer-icon" class="footer-icon">
                            <span class="ms-2">+ 48 510 245 386</span>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-11 col-lg-3 col-md-5 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 title-footer">Godziny otwarcia</h5>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                        <tr>
                            <td>Pon - Pt:</td>
                            <td>8:00 - 22:00</td>
                        </tr>
                        <tr>
                            <td>Sobota:</td>
                            <td>8:00 - 22:00</td>
                        </tr>
                        <tr>
                            <td>Niedziela:</td>
                            <td>8:00 - 22:00</td>
                        </tr>
                        <tr>
                            <td>Pomoc drogowa</td>
                            <td>24/7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    <div class="break"></div>
</div>
<div class="spacer3"></div>



@include('partials.footer')

</body>
</html>
