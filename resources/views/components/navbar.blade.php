<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('front/images/logo-HE.png') }}" alt="Logo de Harmony Essemtials color beige con las letras negras" class="logo-menu"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Persianas
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Enrollables</a></li>
                      <li><a class="dropdown-item" href="#">PVC</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cortinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Panel Japónes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lambrin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Piso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Papel Tapiz</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-quote" href="#">Quiero una cotización</a>
                </li>
            </ul>   
        </div>
    </div>
</nav>