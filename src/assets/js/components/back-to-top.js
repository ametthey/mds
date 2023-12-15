function backToTop() {
    console.log( 'backToTop' );

    const container = document.querySelector('#container');
    const button = document.querySelector(".footer-back-to-top")
    container.addEventListener('scroll', () => {

        if (container.offsetHeight + container.scrollTop >= container.scrollHeight) {


            button.classList.add('visible');
            button.addEventListener("click", scrollToTop)

            function scrollToTop() {
                container.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            }
        } else {
            button.classList.remove('visible');
        }
    });
}

export { backToTop };
