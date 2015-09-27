/**
 * Created by fukuro on 9/26/15.
 */
console.log('Я начал выполняться');
/**
 * addEventListener

window.addEventListener('load', function(){
    var c1 =document.querySelector('.c1');
    var c2 = document.querySelector('.c2');
    var c3 = document.querySelector('.c3');


    c1.addEventListener('click',function() {
        console.log('1');
    });
        c1.addEventListener('click',function() {
        console.log('2');}, true);

    c2.addEventListener('click',function() {
       console.log('3');
    });
        c2.addEventListener('click',function(e) {

        console.log('4');
    e.stopPropagation();  },true);

    c3.addEventListener('click',function() {
        console.log('5');
    });
        c3.addEventListener('click',function() {
        console.log('6');},true);
});

 */
    /**
     * Решения через document.querySelector('.smth')
     */
    window.addEventListener('load',function(){
    document.querySelector('.c3').addEventListener('click',function(){
      //event.target
        //остановка сплытия

        //event.stopPropagation();
        document.querySelector('.c3').style.backgroundColor = 'white';
    });



  document.querySelector('.c2').addEventListener('click',function(){
    document.querySelector('.c2').style.backgroundColor = 'white';
});


    document.querySelector('.c1').addEventListener('click',function(){
        document.querySelector('.c1').style.backgroundColor = 'lightblue';
    });
});



/**
 *

window.addEventListener('load', function() {
    console.log("Я сделал");

    document.querySelector('h2').innerHTML = 'I changed HTML';
    //MDN Moziilla Developers Network
    document.querySelector('h1').addEventListener('click', function(){
        alert("По мне кликнули!");
    });
});
*/

console.log(' Я закончил выполняться');

