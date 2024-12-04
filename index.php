<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaStem.js"></script>
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular parámetros del movimiento uniformemente acelerado</h2>
            <p>Descripción:</p>
            <p>
                Un tren del metro arranca con una aceleración constante de 8 cm/s².
                a) ¿Cuál es su velocidad después de 30 segundos?
                b) ¿Qué espacio recorrió en ese tiempo?
                c) ¿Cuánto tiempo tarda en recorrer 500 m?
            </p>
        </section>
        <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/tren.png" alt="Esquema del problema">
            </center>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <ul>
                <li><strong>Velocidad final:</strong>v=v_0+a⋅t</li>
                <li><strong>Espacio recorrido:</strong>x=v_0⋅t+1/2⋅a⋅t^2</li>
                <li><strong>Tiempo total:</strong>t=√2*x_f/a</li>
            </ul>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <ul>
                <li>Aceleración a: 8 cm/s² = 0.08 m/s²</li>
                <li>Tiempo t: 30 s</li>
                <li>Velocidad inicial v_0: 0 m/s</li>
                <li>Espacio total x_f: 500 m</li>
            </ul>
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <button onclick="calcula();">Presiona para calcular</button>
        </section>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
