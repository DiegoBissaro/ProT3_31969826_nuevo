    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* Estilo para centrar el texto en los elementos h1 */
        h1, h2 {
            text-align: center;
        }
        /* Estilo para el párrafo */
        p {
            color: blue; /* Cambia el color del texto a azul */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: green;
            color: white;
            padding: 20px 0;
        }

        /* Asegurarse de que las imágenes del carrusel tengan el tamaño correcto */
        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        /* Estilo para los enlaces del nav */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            /* Agregar sombreado al texto */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="miestilo.css">
  </head>
<body>
<!--- INICIO DE ENCABEZADO --->
    <header>
    <div class="Container" style="background-color: green;"div>
            <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Azurah Sau</h1>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Tus Consultas</h2>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Al siguiente Nivel</h2> 
    <!--- FIN DE ENCABEZADO --->

        <!--- INICIO DE CARRUSEL --->
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\img\imagen_1.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto" alt="imagen_1">
    </div>
    <div class="carousel-item">
      <img src="assets\img\imagen_2.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto" alt="imagen_2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/imagen_3.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto" alt="imagen_3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- FIN DE CARRUSEL -->
            </div>
          </div>
          <div class="image-container" style="text-align: center;">
    <img src="assets/img/logo.png" alt="Azurah SAU" class="logo">
</div>
        <nav>
            <ul>
                <!-- Enlaces a páginas externas -->
            </ul>
        </nav>
    </header>
    <nav class="text-center my-3">
        <ul class="d-inline-block">
            <li><a href="https://www.google.com">Google</a></li>
            <li><a href="https://www.yahoo.com">Yahoo</a></li>
            <li><a href="https://talentosdigitales.ar/">Talentos Digitales</a></li>
        </ul>
    </nav>
    <div class="Container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2>Formulario de productos</h2>
                <form>
                    <div class="mb-3">
                        <label for="Nombre del Lenguje" class="form-label">Lenguajes</label>
                        <input type="text" class="form-control" id="Nombre del Lenguje" placeholder="Lenguaje" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="Descripcion" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="Programadores" class="form-label">Numero de Programadores</label>
                        <input type="number" class="form-control" id="Programadores"/>
                      </div>
                      <div class="d-grid gap-2">
                        <button class="btn btn-success">Guardar</button>
                      <button class="btn btn-light">Limpiar</button>
                      </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h2>Estadistica de Programadores</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Lenguaje</th>
                            <th>cantidad de programadores</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>JavaScrip</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Python</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>C#</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ruby</td>
                                <td>31</td>
                            </tr>

                        </tbody>
                    </thead>
                </table>
                
            </div>
        </div>
    <section style="text-align: center;">
        <p>Contacto @IG_Azurah</p>
    </section>
   
<script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
