const about_us = document.getElementById('about-us');
const textArea = document.querySelector('textarea');

about_us.addEventListener('click', (e) => {
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
});

textArea.textContent = '';