<?php
$url_base="http://localhost/sotec/admin/";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Administrador</title>
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
         
        <header>          
            <!-- place navbar here -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page"><i class="fas fa-laptop"></i> SOTEC-admin <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/banners/">Banners</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/especializacion/">Especialización</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/comentarios/">Comentarios</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/servicio/">Servicio</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/testimonios/">Testimonios</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/usuarios/">Usuarios</a>
                    <a class="nav-item nav-link" href="#">Cerrar Sesión</a>
                </div>
            </nav>
            
        </header>        
        <main>
        <section class="container">