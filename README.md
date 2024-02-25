<h1>Proyecto de Programación 3</h1>
<p><h2>Universidad Internacional de las Américas</h2></p>

- Estado del proyecto: <strong>En construcción.</strong>

<p>La empresa de autobuses turísticos LA CAZADORA R.L. ha contratado a su equipo de
trabajo para desarrollar una aplicación web para contratar viajes en línea, dicha aplicación
debe de administrar toda la información relacionada al proceso de buses, viajes y seguimiento
de estos.
<p></p>Par lo anterior deberá desarrollar un documento donde defina la identidad corporativa de la
empresa:</p>
<ul>
<p><il>- Misión, visión y valores de la empresa.</il></p>
<p><il>- Imagen corporativa: Nombre comercial, logo, tipografía y colores</il></p>
<p><il>- Redes sociales (estas pueden ser empresas ya existentes)</il></p>
<p><il>- Las páginas de la sección publica deben tener fragmentos sociales.</il></p>
<p><il>- Cada página del sitio debe cumplir al menos con el nivel 1 de accesibilidad web.</il></p>
</ul>
<p>A continuación, se enlista los módulos y componentes que debe dar solución la aplicación a
desarrollar:</p>

<p><strong>Sección publica</strong>: esta sección podrá acceder cualquier visitante de sitio del sitio y
deberá desarrollar los siguientes elementos:</p>
<ul>
<p><il>o Menú principal y un pie de página común para cada página web del sitio.</il></p>
<p><il>o Página principal: esta debe tener como mínimo un banner con una slider que
muestre imágenes de los autobuses actuales, información general de la
empresa, testimonios, redes sociales (con enlaces).</il></p>
<p><il>o Página acerca de: esta debe tener como mínimo información acerca de la
empresa, misión y visión.</il></p>
<p><il>o Página servicios: esta página debe mostrar información acerca de los
servicios que brinda la empresa en cuanto a viajes.</il></p>
<p><il>o Mapa: en esta página, utilizando un API de mapas, debe cargar un mapa y en
este, un marcador de la ubicación de la empresa en el país.</il></p>
<p><il>o Contáctenos: en esta página se mostrará un formulario de contacto para que
los usuarios pueda realizar consultas y evaluar la experiencia del sitio, debe
ser validado y al enviarse debe ser entregado a una cuenta de correo
valida.</il></p>
<p><il>o Pagina error 404: debe desarrollar una página de error 404personalizada en
el caso que trate de acceder a un recurso que no existe o ya no está disponible.</il></p>
<p><il>o Registro de usuario: para que el usuario pueda solicitar un viaje, deberá crear
una cuenta primero, el sistema debe validar los datos suministrados por el
usuario para poder almacenar el nuevo usuario (no pueden existir dos usuarios
almacenados al mismo tiempo), los datos mínimos esperados son: usuario,
contraseña, nombre, primer segundo apellido, correo electrónico y teléfono
todos estos datos pueden ser modificados posteriormente, a excepción del
usuario que es la llave principal.</il></p>
<p><il>o Inicio de sesión: mediante una opción en el menú el usuario podrá
identificarse ante el sistema, ingresando usuario y contraseña, además debe
mostrarse en el menú el usuario y a través de este podrá actualizar su
información (página de información de usuario), el Login debe validarse con
los datos registrados en la base de datos.</il></p>
<p><il>o Menú: en esta página el usuario podrá navegar y filtrar la información de los
buses que tiene en la flotilla la empresa y puede seleccionarlo para reservar
un viaje (solamente pueden seleccionar viajes usuarios que hayan iniciado
sesión).</il></p>
<p><il>o Toda la información debe ser obtenida de la base de datos.</il></p>
</ul>

<p><strong>Sección privada</strong>: esta sección podrá acceder solamente visitantes que hayan
iniciado sesión y deberá desarrollar los siguientes elementos:</p>
<ul>
<p><il>o Reservar: en esta página se muestra el historial de los viajes gestionados del
usuario que inicio sesión, se debe indicar cuales son pendientes y cuales ya ha
sido realizados, en el caso de estar pendiente se debe mostrar la cantidad de
días faltantes para el viaje. Dicho resumen puede ser exportado a un archivo
PDF. En esta sección se selecciona un autobús y se indica el total de km ida y
vuelta del viaje, fecha del viaje y cantidad de personas y generar el total a
cobrar, posterior a esto el usuario elige si reserva o no.</il></p>
<p><il>o Página de información de usuario: en esta página el usuario puede
actualizar su información personal.</il></p>
</ul>
<p> <strong>Sección administrativa (dashboard)</strong>: esta sección del sitio debe ser independiente
al sitio público, y cuando se ingresa debe mostrarse un login, además solo usuarios
de tipo administrador (debe existir uno por defecto en la base de datos), debe contener
los siguientes elementos:</p>

<ul></ul>
<p><il>o Catalogo Menú (CRUD): en esta página se debe administrar la información de la
flotilla de la empresa (Código, nombre del bus, capacidad, costo x km), los datos
deben ser guardados en una base de datos.</il></p>
<p><il>o Catalogo Usuarios (CRUD): en esta página se debe administrar la información de
los usuarios.</il></p>
<p><il>o Actualizar Reservas: en esta página se establece si ya se realizó un viaje o esta
pendiente, al determinarse que un viaje ya se realizó, se muestra un texto Finalizado
de lo contrario pendiente.</il></p>
</ul>
