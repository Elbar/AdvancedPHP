<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/4/15
 * Time: 9:31 PM
 */

class Show
{
protected $data=[];

    public  function assign($name, $value) {
        $this->data[$name] = $value;

    }

    public function __set($k, $v) {
        $this->data[$k] = $v;
    }

    public function  __get($k) {
        return $this->data[$k];
    }

    public  function render($template)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;//Переменная переменная
            include __DIR__ . '/../views/' . $template;


        }
    }

        public  function  display($template) {
        echo $this->render($template);
    }


}