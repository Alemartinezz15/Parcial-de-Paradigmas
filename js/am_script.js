let slideIndex = 0;

// Función que muestra el siguiente slide
function mostrarSlide() {
    const slides = document.getElementsByClassName("am_carrusel_slide");
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  // Oculta todos los slides
    }
    
    slideIndex++;
    
    // Reinicia el índice si llega al final
    if (slideIndex >= slides.length) { 
        slideIndex = 0; 
    }
    
    slides[slideIndex].style.display = "block";  // Muestra el slide actual
    
    setTimeout(mostrarSlide, 5000);  // Cambia de slide cada 5 segundos
}

// Función para mostrar slides específicos
function am_mostrarSlide(n) {
    const slides = document.getElementsByClassName("am_carrusel_slide");
    slideIndex += n;

    // Ajusta el índice para que se mantenga dentro del rango
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    } else if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    // Muestra el slide correspondiente
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  // Oculta todos los slides
    }
    slides[slideIndex].style.display = "block";  // Muestra el slide actual
}

// Inicializar el rotador de propiedades destacadas al cargar la página
window.onload = () => {
    mostrarSlide();
    // Mostrar el primer slide al cargar
    const slides = document.getElementsByClassName("am_carrusel_slide");
    slides[slideIndex].style.display = "block";  // Muestra el primer slide
};
