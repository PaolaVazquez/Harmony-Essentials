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
        
        <div class="bg-brown py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                  <label for="validationCustom01" class="form-label">First name</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <label for="validationCustom02" class="form-label">Last name</label>
                                  <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <label for="validationCustomUsername" class="form-label">Username</label>
                                  <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Please choose a username.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <label for="validationCustom03" class="form-label">City</label>
                                  <input type="text" class="form-control" id="validationCustom03" required>
                                  <div class="invalid-feedback">
                                    Please provide a valid city.
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <label for="validationCustom04" class="form-label">State</label>
                                  <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid state.
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <label for="validationCustom05" class="form-label">Zip</label>
                                  <input type="text" class="form-control" id="validationCustom05" required>
                                  <div class="invalid-feedback">
                                    Please provide a valid zip.
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                      Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                      You must agree before submitting.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b5a582" fill-opacity="1" d="M0,192L34.3,197.3C68.6,203,137,213,206,208C274.3,203,343,181,411,144C480,107,549,53,617,69.3C685.7,85,754,171,823,181.3C891.4,192,960,128,1029,112C1097.1,96,1166,128,1234,144C1302.9,160,1371,160,1406,160L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            </div>
            {{-- <div class="row">
                <img src="{{ asset('front/images/decoration/wave-brow.svg') }}" alt="">
            </div> --}}
        </div>
        @include('components.footer')
        @include('components.scripts')
        
    </body>
</html>
