$(window).on('load', function () {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
        var preloader = $('.spinner-wrapper');
        setTimeout(function () {
            preloader.fadeOut(preloaderFadeOutTime);
        }, 500);
    }
    hidePreloader();
});

function toggleMode() {
    const html = document.querySelector('html');
    const sun = document.querySelector('.fa-solid.fa-sun');
    const moon = document.querySelector('.fa-solid.fa-moon');

    if (html.getAttribute('data-bs-theme') == 'dark') {
        html.setAttribute('data-bs-theme', 'light');
        sun.style.display = 'flex';
        moon.style.display = 'none';

    } else {
        html.setAttribute('data-bs-theme', 'dark');
        moon.style.display = 'flex';
        sun.style.display = 'none';
    }
}