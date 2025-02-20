document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        grabCursor: true,
        centeredSlides: true,
        speed: 400,
        autoplay: {
            delay: 1000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 300, // Aumentar profundidad para más nitidez
            modifier: 2, // Aumentar para mejor renderizado
            slideShadows: false, // Quitar sombras si afectan la calidad
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            1024: { slidesPerView: 3 },
        }
    });
    
});
