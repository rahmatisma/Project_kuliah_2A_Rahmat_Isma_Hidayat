const tglLinks = document.querySelectorAll('.tgl-link');

tglLinks.forEach((link) => {
    link.addEventListener('click', () => {
        tglLinks.forEach((link) => {
            link.parentNode.parentNode.classList.remove('selected');
        });
        link.parentNode.parentNode.classList.add('selected');
    });
});