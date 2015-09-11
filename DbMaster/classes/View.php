<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/4/15
 * Time: 10:14 AM
 */
class View
//implements Iterator
implements Countable
{
    protected  $data = [];
    //$k - $key , $v - $value
    //Сеттер
    public function  __set($k, $v)
    {
        $this->data[$k] = $v;


    }
    //Геттер
    public  function __get($k){
        return  $this->data[$k];
    }

    public  function render($template)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;//Переменная переменная

        }
        //Буферизация вывода
        //Начинаем буферизацию
        ob_start();
        include __DIR__ . '/../views/' . $template;
        //Собираем данные
        $content = ob_get_contents();
        //Очищаем буфер
         ob_end_clean();
        return $content;
    }
    public  function  display($template) {
        echo $this->render($template);
    }
/* Interface Iterator
    public function current()
    {
        // TODO: Implement current() method.
    }


    public function next()
    {
        // TODO: Implement next() method.
    }


    public function key()
    {
        // TODO: Implement key() method.
    }


    public function valid()
    {
        // TODO: Implement valid() method.
    }


    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

*/

    /* Interface Countable*/
    public function count()
    {

    return count($this->data);
    }
}