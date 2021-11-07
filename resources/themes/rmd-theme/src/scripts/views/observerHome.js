const options = {
    rootMargin: '0px',
    threshold: 0.5
}

let observer = new IntersectionObserver( function (entries) {
    entries.forEach((entry) => {
        if (entry.intersectionRatio > 0.5) {
            entry.target.classList.add('js-active__observer');
        } else {
            entry.target.classList.remove('js-active__observer');
        }
    });
}, options);

let items = document.querySelectorAll('.section-image-text__bloc');
if (items) {
    items.forEach((item) => {
        observer.observe(item);
    });
}
