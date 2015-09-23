<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/8/15
 * Time: 2:16 PM
 */
class AbsModel{

    static  protected $table;
    protected $data = [];



    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($v)
    {
        return $this->data[$v];
    }

    public function findAll()
    {
        echo $class = get_called_class();
        $sql = 'SELECT * FROM'. static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);

    }
    public function findOneByPk($id)
    {
        $sql = 'SELECT * FROM '.static::$table . 'WHERE id=:id';
        $db = new DB();
        $db->query($sql, [':id'=>$id]);
    }
    public function insert() {
        $cols = array_keys($this->data);
        $data = [];

        foreach($cols as $col){
            $data[':' .$col] = $this->data[$col];

        }


        echo  $sql =
            'INSERT INTO ' . static::$table .
            '('.implode(',', $cols).')
        VALUES
       ('.implode(',', array_keys($data)).')
         ';

        //$this -> data;
        //['title'=>'Foo', 'text'=>'Bar']
        //для подстановки
        //[':title'=>'foo', ':text'=>'Bar']
        $db= new DB();
        $db->execute($sql,$data);

    }


}