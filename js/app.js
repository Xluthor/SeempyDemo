const slideProduct = new Siema({
    selector: '.slide-product',
    perPage: {
        800: 2, // 2 items for viewport wider than 800px
        1240: 3 // 3 items for viewport wider than 1240px
    },
    duration: 300,
    loop: true
});

const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

prev.addEventListener('click', () => slideProduct.prev());
next.addEventListener('click', () => slideProduct.next());