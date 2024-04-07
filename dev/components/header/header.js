class Header extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        this.innerHTML = `
        <style>
            header {
                
                background-color: #ff5000;
                display: flex;
                align-items: center;
                height: 100px;
                width: 100%;
                left: 0px;
                top: 0px;
                color: white; /* Color de texto blanco */
            }
            
            header img {
                width: 10%;
            }
            
            nav li {
                right: 0;
                margin: 20px;
            }
            
            nav a {
                text-transform: uppercase;
                color: white; /* Color de texto blanco */
                font-weight: bold;
                font-size: 22px;
                text-decoration: none;
            }

            /* Estilos para el navbar de Bootstrap */
            .navbar {
                background-color: #ff5000; /* Fondo naranja */
            }

            .navbar .navbar-brand {
                color: white !important; /* Color de texto blanco importante */
            }

            .navbar .nav-link {
                color: white !important; /* Color de texto blanco importante */
            }
        </style>
        <header>
            <img src="../imagenes/logo.png">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <a class="navbar-brand" href="../homepage/homepage.html">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Rutas y horarios</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servicios
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Mapa</a></li>
                      <li><a class="dropdown-item" href="#">Precios</a></li>
                      <li><a class="dropdown-item" href="#">Unidades</a></li>
                    </ul>
                  </li>

                    <li class="nav-item">
                      <a class="nav-link" href="../about/about.html">Sobre nosotros</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </header>
        `;
    }
}

customElements.define('header-component', Header);
