// Datos iniciales
const aceleracion = 0.08; // Aceleración en m/s²
const tiempo = 30;        // Tiempo en segundos
const espacioTotal = 500; // Espacio total en metros

// Función para calcular velocidad final
function calcularVelocidadFinal(a, t) {
    return a * t; // Fórmula: v = v0 + at (v0 = 0)
}

// Función para calcular espacio recorrido
function calcularEspacio(a, t) {
    return 0.5 * a * t ** 2; // Fórmula: x = 0.5 * a * t^2
}

// Función para calcular el tiempo para recorrer una distancia
function calcularTiempo(x, a) {
    return Math.sqrt((2 * x) / a); // Fórmula: t = sqrt(2x / a)
}

// Función principal que muestra los resultados en el HTML
function calcula() {
    // Cálculo de los resultados
    const velocidadFinal = calcularVelocidadFinal(aceleracion, tiempo);
    const espacioRecorrido = calcularEspacio(aceleracion, tiempo);
    const tiempoTotal = calcularTiempo(espacioTotal, aceleracion);

    // Actualización de los resultados en el HTML
    const resultadoDiv = document.getElementById("resultadoA");
    resultadoDiv.innerHTML = `
        <p><strong>a)</strong> Velocidad después de 30 segundos: ${velocidadFinal.toFixed(2)} m/s</p>
        <p><strong>b)</strong> Espacio recorrido en 30 segundos: ${espacioRecorrido.toFixed(2)} m</p>
        <p><strong>c)</strong> Tiempo para recorrer 500 m: ${tiempoTotal.toFixed(2)} s</p>
    `;
}
