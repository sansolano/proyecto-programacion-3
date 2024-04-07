class Header extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        this.innerHTML = `
        <style>
            header{
                background-color: rgb(116, 193, 238);
                display: flex;
                align-items: center;
                height: 100px;
                width: 100%;
                position: fixed;
                left: 0px;
                top: 0px;
            }
            
            header * {
                display: inline;
            }
            
            header img{
                width: 10%;
            }
            
            nav li{
                right: 0;
                margin: 20px;
            }
            
            nav a{
                text-transform: uppercase;
                color:black;
                font-weight: bold;
                font-size: 22px;
                text-decoration: none;
            }
            
            nav a:hover{
                color: #66ff00;
                text-decoration: underline;
            }
        </style>
        <header>
            <img src="../imagenes/logo.png">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </nav>
        </header>
        `;
    }
}

customElements.define('header-component', Header);