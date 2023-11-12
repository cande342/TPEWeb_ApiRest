<h1>TudaiWeb2Tpe2023</h1>

<h2>Facultad de Ciencias Exactas | Universidad Nacional del Centro de la Provincia de Buenos Aires</h2>

<h3>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</h3>

<h4>Trabajo Práctico Especial realizado de manera colaborativa entre Echazú, Candela Azul (gcandela894@gmail.com) y Fernández, Daniela Antonella (liquiddookie.17@gmail.com) para la materia Web II.</h4>

<h4>Endpoints</h4>

<h4>GET /libros</h4>
<p>Este Endpoint devuelve la lista de libros de la base de datos dentro de la tabla "books".</p>

<a>Ej: http://localhost/Carpeta/Subcarpeta/api/libros</a>

<p>Puede recibir distintas opciones parametrizadas:</p>

<p>Parámetros de ordenamiento:</p>
<ul>
  <li>?sort_by: Este parámentro recibe un String y devuelve una lista con todos los libros ordenados por dicho campo, si el parámetro no está definido o el campo no existe, su valor por defecto es id_book.</li>
  <li>?order: Este parámetro recibe un número de tipo Integer y ordena de manera descendente (0) o ascendente (1), si el parámetro no está definido o el número ingresado no es válido, su valor por defecto es 1.</li>
</ul>

<a>Ej: http://localhost/Carpeta/Subcarpeta/api/libros?sort_by=title&order=0</a>

<p>Parámetros de paginado:</p>
<ul>
  <li>?page: Este parámentro recibe un número de tipo Integer e indica la página que se quiere recuperar, si el parámetro no está definido o el número ingresado no es válido, su valor por defecto es 1.</li>
  <li>?per_page: Este parámetro recibe un número de tipo Integer que define la cantidad de elementos contenidos en cada página, si el parámetro no está definido o el número ingresado no es válido, su valor por defecto es 10.
</ul>

<a>Ej: http://localhost/Carpeta/Subcarpeta/api/libros?page=1&per_page=10</a>

<h4>GET /libros/:ID</h4>
<p>Este Endpoint devuelve el libro con el ID indicado.</p>

<a>Ej: http://localhost/Carpeta/Subcarpeta/api/libros/21</a>