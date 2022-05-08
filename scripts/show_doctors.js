const about_us = document.getElementById('about-us');

about_us.addEventListener('click', (e) => {
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
});
