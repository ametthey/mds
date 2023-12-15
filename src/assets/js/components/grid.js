const grid = document.querySelector('#grid');
const button = document.querySelector('#grid-box span');
const hide = document.querySelector('.grid-hide');
const show = document.querySelector('.grid-show');

button.addEventListener( 'click', (e) => {
    if ( hide.classList.contains('hide') ) {
        hide.classList.remove('hide');
        show.classList.add('hide');
    } else if ( show.classList.contains('hide') ){
        show.classList.remove('hide');
        hide.classList.add('hide');
    }
});
