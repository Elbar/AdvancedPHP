/**
 * Created by fukuro on 9/27/15.
 */
console.log('Я начал выполняться');
window.addEventListener('load', function(){
    var element = document.querySelector('.c1');

    function callback() {
        alert('По мне кликнули');
        element.removeEventListener('click', callback)
    }

// Добавление обработчика события
    element.addEventListener('click', callback);


});