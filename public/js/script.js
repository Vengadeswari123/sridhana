const myImgs = document.querySelectorAll('.animated-inter');

observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            console.log('in the view');
            entry.target.classList.add('visible');

            // observer.unobserve(entry.target);
        } else {
            console.log('out of view');
            entry.target.classList.remove('visible');

        }
    });
});

myImgs.forEach(image => {
    observer.observe(image);
});

const myImgs2 = document.querySelectorAll('.animated-inter-unob');

observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            entry.target.classList.add('visible');

        } else {
            console.log('out the view');

            observer.unobserve(entry.target);
        }
    });
});

myImgs2.forEach(image => {
    observer.observe(image);
});
