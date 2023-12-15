/************************************************
 * Back to top
 ***********************************************/
function backToTop() {
    const container = document.querySelector('.home');
    const button = document.querySelector(".container-back-to-top .footer-back-to-top")
    container.addEventListener('scroll', () => {
        if (container.offsetHeight + container.scrollTop >= container.scrollHeight) {

            button.classList.add('visible');

            button.addEventListener("click", scrollToTop)

            function scrollToTop() {
                console.log( 'click ?' );

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


window.addEventListener( 'load', () => {
    backToTop();
    console.log( 'home' );

});
