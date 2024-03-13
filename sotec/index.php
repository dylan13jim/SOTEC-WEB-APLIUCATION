<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"
        />
    </head>

    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
    <div class="container">
    
    <a class="navbar-brand" href="#"> <i class="fas fa-laptop"></i> SOTEC </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicio">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#especializacion">Especializacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonios">Testimonio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="#horarios">Horarios</a>
                </li>                
            </ul>
        </div>
    </div>    
    </nav>

    <section id="banner" class="container-fluid p-0">
        <div class="banner-img" style="position:relative; background:url('imagenes/1.jpg') center/cover no-repeat; height:500px; ">
            <div class="banner-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; color:#fff; " >
                <h1 style="color: #F0F3F4; font-size: 10pc;">SOTEC</h1>                
                <a href="#servicio" class="btn btn-dark">Servicio Técnico</a>
            </div>
        </div>
    </section>

    <section id="id" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white">
        <br/>    
            <h2>Soluciones Tecnológicas</h2>
            <p>
            - Pago de servicios básicos <br/>
            - Venta de equipos y suministros de computación
            </p>              
        <br/>               
        </div>        
    </section>

    <!--seccion de tecnicos -->
    <section id="especializacion" class="container mt-4 text-center" >
        <h2>NOS ESPECIALIZAMOS EN:</h2>
        <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="imagenes/colaboradores/e1.png" 
                    class="card-img-top" alt="hardware">
                    <div class="card-body">
                        <h5 class="card-title">Hardware</h5>
                        <h6 class="card-title">Componentes físicos y dispositivos electrónicos</h6>
                        <p class="card-text">
                            Procesador (CPU) - Memoria RAM - Disco Duro o SSD - Tarjeta Madre (Placa base) - Cables y Conectores 
                        </p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>            

            <div class="col-md-6">
                <div class="card">
                    <img src="imagenes/colaboradores/e2.jpg" 
                    class="card-img-top" alt="software">
                    <div class="card-body">
                        <h5 class="card-title">Software</h5>
                        <h6 class="card-title">Corrección de errores, actualizaciones y mejoras continuas</h6>
                        <p class="card-text">
                            Sistema Operativo - Aplicaciones de Software - Controladores de Dispositivos - Antivirus y Software de Seguridad
                        </p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    
    <!--seccion de testimonios -->
    <section id="testimonios" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">TESTIMONIOS</h2>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Servicio de calidad, en cuanto a hardware </p>
                        </div>
                        <div class="card-footer text-muted">
                            Dylan Jimenez
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Han demostrado tner conocimiento en cuanto a los SO</p>
                        </div>
                        <div class="card-footer text-muted">
                            Luis Carpio
                        </div>
                    </div>
                </div>                
            </div>
        </div>      
    </section>

    <!--seccion del serivio -->
    <section id="servicio" class="container mt-4">
        <h2 class="text-center">Mantenimiento Preventivo de Hardware</h2>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/a1.jpg" 
                    alt="Actualización de Hardware" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Actualización de Hardware</h5>                                   
                        <p class="card-text">
                            Actualización de memoria RAM para mejorar el rendimiento.
                        </p>
                    </div>
                </div>
            </div>  
            
            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/a2.jpg" 
                    alt="Diagnóstico de Problemas" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Diagnóstico de Problemas</h5>                                   
                        <p class="card-text">
                            Identificación y solución de errores de hardware.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/a3.jpg" 
                    alt="Optimización de Rendimiento " 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Optimización de Rendimiento </h5>                                   
                        <p class="card-text">
                            Limpieza física y eliminación de polvo en componentes críticos.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/a4.jpg" 
                    alt="Soporte Especializado para Dispositivos Periféricos" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Dispositivos Periféricos</h5>                                   
                        <p class="card-text">
                            Configuración y solución de problemas en impresoras y escáneres.
                        </p>
                    </div>
                </div>
            </div>    
        </div> 
        <br/>

        <h2 class="text-center">Ensamblaje Personalizado de Computadoras</h2>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/b1.jpg" 
                    alt="Asesoramiento en Configuración" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Asesoramiento en Configuración</h5>                                   
                        <p class="card-text">
                            Consulta personalizada para determinar requisitos y preferencias.
                        </p>
                    </div>
                </div>
            </div>  
            
            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/b2.jpg" 
                    alt="Selección y Adquisición de Componentes" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Selección y Adquisición de Componentes</h5>                                   
                        <p class="card-text">
                            Asistencia en la elección de procesadores, tarjetas gráficas, memoria, etc.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/b3.jpg" 
                    alt="Ensamblaje Profesional" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ensamblaje Profesional</h5>                                   
                        <p class="card-text">
                            Construcción cuidadosa y segura de sistemas personalizados.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/b4.jpg" 
                    alt="Configuración de Software y Drivers" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Configuración de Software y Drivers</h5>                                   
                        <p class="card-text">
                            Instalación del sistema operativo y configuración inicial.
                        </p>
                    </div>
                </div>
            </div>    
        </div>
        <br/>
        
        <h2 class="text-center">Optimización y Mantenimiento de Sistemas Operativos y Software de Cliente</h2>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/c1.jpg" 
                    alt="Actualizaciones y Parches del Sistema Operativo" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Actualizaciones y Parches del Sistema Operativo</h5>                                   
                        <p class="card-text">
                            Gestión proactiva de las actualizaciones del sistema operativo.
                        </p>
                    </div>
                </div>
            </div>  
            
            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/c2.jpg" 
                    alt="Optimización de Rendimiento del Sistema" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Optimización de Rendimiento del Sistema</h5>                                   
                        <p class="card-text">
                            Análisis de configuraciones para mejorar la velocidad y eficiencia del sistema.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/c3.jpg" 
                    alt="Eliminación de Software Malicioso y Protección Antivirus" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Eliminación de Software Malicioso y Protección Antivirus</h5>                                   
                        <p class="card-text">
                            Escaneo y eliminación de malware, virus y software no deseado.
                        </p>
                    </div>
                </div>
            </div>    

            <div class="col d-flex">
                <div class="card">
                    <img src="imagenes/servicio/c4.jpg" 
                    alt="Resolución de Problemas de Software" 
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Resolución de Problemas de Software</h5>                                   
                        <p class="card-text">
                            Identificación y solución de errores en aplicaciones y sistemas operativos.
                        </p>                        
                    </div>
                </div>
            </div>    
        </div>        
    </section>   
    <br/>

    <!--seccion de contacto -->
    <section id="contacto" class="container mt-4">
        <h2 class="text-center">CONTACTANOS</h2>
        <p class="text-center"> Estamos para servirle</p>       

        <form action="?" method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre.." required><br/>
                </div>            
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Correo electronico:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="correo" placeholder="Ejemplo@gmail.com" required><br/>
                </div>            
            </div>
            <div class="form-group row">
                <label for="message" class="col-sm-2 col-form-label">Mensaje:</label>
                <div class="col-sm-10">                    
                    <textarea id="message" class="form-control" name="mensaje" placeholder="Escriba su mensaje..." rows="6" cols="50"></textarea><br /><br/>
                </div>                          
            </div>
            <div class="form-group row">
                <div>
                    <input type="submit" class="btn btn-dark" value="Enviar mensaje"></input>
                </div>
            </div>             
        </form>   
    </section>
    <br/><br/>

    <!-- seccion de horarios-->
    <div id="horarios" class="bg-light py-4 text-center">
        <h3 class="mb-4"> HORARIO DE ATENCIÓN</h3>
        <div>
            <p><strong>Luens a Viernes</strong></p>
            <p>10:00 a.m  -  21:00 p.m</p>            
        </div>
        <div>
            <p><strong>Sabado y Domingo</strong></p>
            <p>11:00 a.m  -  20:00 p.m</p>
        </div>

    </div>
        
        <footer class="bg-dark text-light text-center py-3">
            <!-- place footer here -->
            <p> &copy; 2024 SOTEC, todos los derechos reservados.</p>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
