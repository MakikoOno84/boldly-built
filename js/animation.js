
/* Set target and animation class name */
targetTitle = 'fadeInUpTitleTrigger';
addClassNameOnTitle = 'fadeInUpTitle';

targetContent = 'animate__animated';
addClassNameOnContent = 'animate__fadeInUp';

const fadersTitle = document.querySelectorAll('.' + targetTitle);
const fadersContent = document.querySelectorAll('.' + targetContent);

const appearOptions = {
    threshold: .1,
    rootMargin: "0px 0px -25px 0px"
};

const appearOnScroll = new IntersectionObserver(
    function (entries, appearOnScroll) {
        entries.forEach(entry => {
            console.log(entry);
            // set class name to be added based on target
            if (entry.target.classList.contains(targetTitle)) {
                addClassName = addClassNameOnTitle;
            } else if (entry.target.classList.contains(targetContent)) {
                addClassName = addClassNameOnContent;
            }
            // apply class name
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.remove('hide');
                entry.target.classList.add(addClassName);
                appearOnScroll.unobserve(entry.target)
            }
        })
    },
appearOptions);

fadersTitle.forEach(fader => {
    appearOnScroll.observe(fader)
});

fadersContent.forEach(fader => {
    appearOnScroll.observe(fader)
});