class footer extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        this.innerHTML = `
        <style>
        .footer-distributed{
            background: #E5E1DD;
            background: -moz-linear-gradient(top, #E5E1DD 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, #E5E1DD), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
            background: -webkit-linear-gradient(top, #E5E1DD 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
            background: -o-linear-gradient(top, #E5E1DD 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
            background: -ms-linear-gradient(top, #E5E1DD 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
            background: linear-gradient(to bottom, #E5E1DD 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E5E1DD', endColorstr='#ededed', GradientType=0 );
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 55px 50px;
            bottom:0;
        }
        
        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
            display: inline-block;
            vertical-align: top;
        }
        
        /* Footer left */
        
        .footer-distributed .footer-left{
            width: 40%;
        }
        
        /* The company logo */
        
        
        .footer-distributed h3 span{
            color:  #5383d3;
        }
        
        /* Footer links */
        
        .footer-distributed .footer-links{
            color:  red;
            margin: 20px 0 12px;
            padding: 0;
        }
        
        .footer-distributed .footer-links a{
            display:inline-block;
            line-height: 1.8;
            text-decoration: none;
            color:  inherit;
        }
        
        .footer-distributed .footer-company-name{
            color:  #818181;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }
        
        /* Footer Center */
        
        .footer-distributed .footer-center{
            width: 35%;
        }
        
        .footer-distributed .footer-center i{
            background-color:  #818181;
            color: black;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }
        
        .footer-distributed .footer-center i.fa-envelope{
            font-size: 17px;
            line-height: 38px;
        }
        
        .footer-distributed .footer-center p{
            display: inline-block;
            color: #818181;
            vertical-align: middle;
            margin:0;
        }
        
        .footer-distributed .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }
        
        .footer-distributed .footer-center p a{
            color:  #818181;
            text-decoration: none;;
        }
        
        
        /* Footer Right */
        
        .footer-distributed .footer-right{
            width: 20%;
        }
        
        .footer-distributed .footer-company-about{
            line-height: 20px;
            color:  #818181;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }
        
        .footer-distributed .footer-company-about span{
            display: block;
            color:  #818181;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .footer-distributed .footer-icons{
            margin-top: 25px;
        }
        
        .footer-distributed .footer-icons a{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #818181;
            border-radius: 2px;
        
            font-size: 20px;
            color: #818181;
            text-align: center;
            line-height: 35px;
        
            margin-right: 3px;
            margin-bottom: 5px;
        }
        </style>
        <footer class="footer-distributed" style="margin-top: 0;">

        <div class="footer-left">
    
            <p style="color: black;">GRUPO LA CAZADORA R.L.</p><br>	
            <p class="footer-company-name">Copyright © 2024.</p><br>
            <p class="footer-company-name">Todos los derechos reservados.</p><br>
            <p class="footer-company-name">Sitio desarrollado para proyecto de la Universidad Internacional de las Americas.</p>
    
        </div>
    
        <div class="footer-center">
    
            <div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAT9JREFUSEu1leFRxTAMg/U2gUmASYBJgElgE2ASYBLg46qe6xcnOa71n1zbxFIk2z3p4DgdnF+zABeSHiRdL4Q+Jd1LYu3GDADJP4oslyOQGYDn3yR3BcCjpKfeFWYAvjsJkIhblDEDgDzI1IpdADAXKVqxi0Swf23cAvY3e5hs5tHsIXMfGnlA9bwEbWx4PEdvvFUuVwDWPZvYAuAd+yByVrIZIOuddc4A7Ee62OEbXyJA7NjKwNYNUCcCbc5GAJuInrBoRQVgEKTFtzVHBHBD9eaLZ1LVvVZh9S4CUOtoCfuqKqx17zt5iL/cEcCVQzUwiv8TJrnmyCa7Yz3vy/pO6FMm26g4Flzf70tCAD34WK8WU/3ubPi1Go3Nt+ngSK7pRouJAMJUWJohz/5NsnKjrzRONmRGs2jEfPj9cIAfXkVPGV2XfBIAAAAASUVORK5CYII="/>
                <p>Calles 8 y 10, Avenida 0, Terminal de buses.<span>San José, Costa Rica.</span></p>
            </div>
            <br>
            <div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQNJREFUSEvVlOERwUAQhV86oRJUgkpQCSpBJXRCvpnsTLL2ktyFMfZPZiTet/vu3lb6clVf1tfPAEdJM0lbSY8pU0YTXCQtG9GTpMMUiAe0xa3xvaRzKcQDngk7gDBJdnnAvfE+EiqC5ACukla5I3gAt2cTiHCT5rnifO8BiANpV7F4BOA3fw50XpyFKAfepqLDNQsiAAkmDzytoil4v6sP/lZ/SyDDSu0i/kjnVljEDTKrEGdSS3wyjH3LLkq17SYaMPHexA9t077gRZaQlc6CHAIgkspGyvbOpRgDQAhLyEj74D8KQAzP180zBXpbJ2Mn8N0CW7RgAMNdVQoYvZb+H/AC46swGfTkbMIAAAAASUVORK5CYII="/>
                <p>+506 2222 0000</p>
            </div>
            <br>
            <div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANlJREFUSEvtVcENwjAMvG5CN4FJoJMAk8AmlElgE+hVsWRCLCch/VRYqipZsc93dpwOC1u3cH6sC2AL4AJg86NsTwADgJF5tES3yUmQFkaQPgZ4hcyn6c+vxq4ADiFwLl4zEAD6SuXSsug8JgDB2Yt9BhtWTc0l5uExYDUMOoeDFpuPZgbW7KOYKZEcYB8EJGYTV51i6gIQKMWG/nkEE1XrwcgCSLHJ7U8RgGZzB6C1tsa5GKD0XvwBXMW+JGq57DjGu3gX8cYeG2xUc127nGsOrOvJrFHAjXkDPIYyGQN+Vf4AAAAASUVORK5CYII="/>
                <p><a href="mailto:contraloriadeservicios@grupotuasa.com">contraloriadeservicios@grupocazadora.com</a></p>
            </div>
    
        </div>
    
        <div class="footer-right">
    
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJxJREFUSEvFldENgCAMRI9NHEVHcTM30U0cRRMSDBKwV7DAH6Hc6/WIOhgvZ6yProAdwCw42gCsGtexg4u8qHI9BBCgwVFpTxnOOWABX5k9WbWMSMrMaw8BsCOKHaR3nuZrMsiFqwJQr4Moqs6A0PYlRYCUQfOIzAHsCKS6cRlInbHn/R2cACa2PaHuALCk36KftN8yqr9TTQfmgBtcfikZUMS5+QAAAABJRU5ErkJggg=="/> ACERCA DE NOSOTROS<br>	
            <p style="text-align: justify;" class="footer-company-name">Compremetidos con el carbono neutral, además con el buen servicio hacia ustedes, en busca de la excelencia y la buena relación con el medio ambiente.</p><br>
            <!-- <img src="../imagenes/cn-logo.png"> -->
    
        </div>
    
    </footer>
        `;
    }
}

customElements.define('footer-component', footer);