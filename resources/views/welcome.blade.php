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
                    <h2>¿Buscas darle un toque único a tu espacio?</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <img src="{{ asset('front/images/decoration/wave-brow.svg') }}" alt="">
            </div>
        </div>
        @include('components.footer')
        @include('components.scripts')
        
    </body>
</html>
