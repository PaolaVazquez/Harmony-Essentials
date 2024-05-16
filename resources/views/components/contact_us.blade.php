<div class="bg-brown py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                <div class="contact-section">
                    <div class="mb-4">
                        <h3>¡Contáctanos!</h3>
                        <p>
                            ¿Tienes alguna pregunta, comentario o solicitud? No dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte y responder a todas tus consultas.
                        </p>
                        <p>
                            Completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.
                        </p>
                    </div>
                    <img src="{{ asset('front/images/illustrations/message-phone.svg') }}" alt="Imagen representativa de alguien enviando un formulario de contacto" class="img-fluid image-contact-section"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 mb-4">
                <div class="form-contact-us-section">
                    <form class="row needs-validation" novalidate>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                          <label for="name" class="form-label">Nombre Completo:</label>
                          <input type="text" class="form-control" id="name" name="name" required/>
                          <div class="valid-feedback">
                             ¡Bien!
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                          <label for="email" class="form-label">Correo Electrónico:</label>
                          <input type="email" class="form-control" id="email" name="email"  required>
                          <div class="valid-feedback">
                            ¡Bien!
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                            <label for="phone" class="form-label">Teléfono o Celular:</label>
                            <input type="text" class="form-control" id="phone" name="phone"  required/>
                            <div class="valid-feedback">
                               ¡Bien!
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                            <label for="validationServer04" class="form-label">Necesito una:</label>
                            <select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                  <option selected disabled value="">Selecciona</option>
                                  <option>Visita</option>
                                  <option>Cotización</option>
                            </select>
                            <div id="validationServer04Feedback" class="valid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                            <label for="message" class="form-label">Mensaje:</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Deja aquí tu mensaje" required style="height: 150px"></textarea>
                            <div class="valid-feedback">
                                ¡Bien!
                            </div>
                          </div>
                        
                      
                        <div class="text-center">
                          <button class="btn btn-primary btn-send-contact" type="submit">Enviar <img src="{{ asset('front/images/icons/arrow-right-rounded.svg')}}" alt="Icono de una flecha negra" class="img-fluid"/></button>
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