<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('components.head')
       <title>Harmony Essentials</title>
    </head>
    <body>
       
        <header>
            @include('components.navbar')
            <div class="container">
                <div class="row">
                    <div class="title-header">
                        <h1 class="bold">¡Descubre la mejor opción para darle vida a tu hogar!</h1>
                        <p>No te conformes con lo ordinario, elige calidad y diseño exclusivo para cada rincón de tu hogar. </p>
                    </div>
                    <hr/>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="title-second-section">
                    <h2>¡Bienvenido a Harmony Essentials! </h2>
                    <p>
                        Tu destino principal para la decoración interior que transformará tu hogar en un espacio de armonía y estilo. Descubre nuestra amplia gama de productos cuidadosamente seleccionados para satisfacer tus necesidades de diseño. Explora ahora y encuentra la esencia de tu decoración interior.
                    </p>
                </div>
            </div>
            <!-- Add images or video about the courtains-->
            <div class="row">
                <div class="about-us row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <h3> Sobre Nosotros</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <p>
                            En Harmony Essentials, nos dedicamos a ofrecerte la mejor experiencia en decoración interior. Con años de experiencia en la industria y un equipo apasionado, estamos comprometidos a proporcionarte productos de calidad que reflejen tu estilo personal. Conoce más sobre nuestra historia y nuestra misión de crear espacios que inspiren y deleiten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5 what-offer">
            <div class="row pb-5">
                <div class="text-center">
                    <h2>¿Qué te podemos ofrecer?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/persianas-hogar.svg') }}" alt="Icono de una persiana" class="img-fluid icon-persiana"/>
                        <h2>Percianas</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/cortina-icon.svg') }}" alt="Icono de una cortina" class="img-fluid icon-cortina"/>
                        <h2>Cortinas</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/panel_japones.svg') }}" alt="Icono de un panel Japónes" class="img-fluid icon-panel"/>
                        <h2>Panel Japónes</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/lambrin.svg') }}" alt="Icono de un Lambrin" class="img-fluid icon-lambrin"/>
                        <h2>Lambrin</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/piso.svg') }}" alt="Icono de un Piso" class="img-fluid icon-piso"/>
                        <h2>Piso</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="box-product-index py-5">
                        <img src="{{ asset('front/images/icons/papel-tapiz.svg') }}" alt="Icono de un Papel Tapíz" class="img-fluid icon-papel"/>
                        <h2>Papel Tapiz</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="">
                        <div class="btn-quote-third-section position-relative" data-txt="Quiero una cotización"></div>
                    </a>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
            </div>
        </div>
        
       @include('components.contact_us')
        @include('components.footer')
        @include('components.scripts')
        
    </body>
</html>
