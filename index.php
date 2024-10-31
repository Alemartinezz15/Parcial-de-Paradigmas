<?php
include 'php/conexion.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Costa del Sol</title>
    <link rel="stylesheet" href="css/am_styles.css">
    <script src="js/am_script.js" defer></script>
</head>
<body>
    <!-- Encabezado -->
    <header class="am_header">
        <img src="Images/am_logo.png" alt="Logo Inmobiliaria Costa del Sol" class="am_logo">
        <h1>Inmobiliaria Costa del Sol</h1>
    </header>

    <!-- Navegación -->
    <nav class="am_nav">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="html/am_propiedades.html">Propiedades</a></li>
            <li><a href="html/am_contacto.html">Contacto</a></li>
        </ul>
    </nav>

    <!-- Carrusel de Propiedades Destacadas -->
    <section class="am_carrusel">
        <div class="am_carrusel_slide">
            <img src="Images/am_propiedad1.jpg" alt="Propiedad 1">
            <h2>Casa en la Costa</h2>
            <p>Precio: USD 500,000</p>
        </div>
        <div class="am_carrusel_slide">
            <img src="Images/am_propiedad2.jpg" alt="Propiedad 2">
            <h2>Casa con jardin</h2>
            <p>Precio: USD 300,000</p>
        </div>
        <div class="am_carrusel_slide">
            <img src="Images/am_propiedad3.jpg" alt="Propiedad 3">
            <h2>Departamento en el Centro</h2>
            <p>Precio: USD 450,000</p>
        </div>
        <button class="am_carrusel_btn" onclick="am_mostrarSlide(-1)">&#10094;</button>
        <button class="am_carrusel_btn" onclick="am_mostrarSlide(1)">&#10095;</button>
    </section>

    <!-- Footer -->
    <footer class="am_footer">
        <p>&copy; 2024 Inmobiliaria Costa del Sol</p>
    </footer>
</body>
</html>
