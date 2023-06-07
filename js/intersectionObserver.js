const faders = document.querySelectorAll('.animate__animated');

const appearOptions = {
    threshold: .6,
    rootMargin: "0px 0px -25px 0px"
};

const appearOnScroll = new IntersectionObserver(
    function (entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.remove('hide');
                entry.target.classList.add('animate__fadeInUp');
                appearOnScroll.unobserve(entry.target)
            }
        })
    },
appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader)
});