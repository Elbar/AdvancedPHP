
<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/2/15
 * Time: 10:10 PM
 */


abstract class AbstractModel
{
    static protected $table;
    /*
     public static function getTable(){
        return static::$table;
    }
    */
    protected $data = [];

    public function __set($k, $v) {
        $this->data[$k]= $v;

    }

       public function __get($k)
       {
           return $this->data[$k];

       }

public function __isset($k) {

  return isset($this->data[$k]);
}
    public static  function findAll()
    {
         echo  $class = get_called_class();
        $sql = 'SELECT * FROM '. static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static  function  getOne($id) {
        $sql ='SELECT * FROM news where id='.$id;

        $db = new DB();
        $res = $db->query($sql);
        if (empty($res)) {
            throw new E404Exception('Page not found... :(');
        }
        return $res;
    }


   public  function getAll() {
        $sql = 'SELECT * FROM news';
        $db = new DB();
        return $db->query($sql);
    }


    public static function findOneByPk($id)
    {
        $sql = 'SELECT * FROM '. static::$table .' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id'=>$id]);



    }

public static function findOneByColumn($column, $value)
{
    $db = new DB();
    $db->setClassName(get_called_class());
    $sql = 'SELECT * FROM ' . static::$table . ' WHERE' . $column . '=:value';
    $res = $db->query($sql, [':value' => $value]);
    if (empty($res)) {
        throw new ModelException('Record not found... :(');
    }

    if(!empty($res)) {
        return $res[0];
    }
    return false;
}

    public  function insert() {
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
        $this->id = $db -> lastInsertId();

    }

/*
    public function delete()
    {
          $db = new DB();
        echo $sql = 'DELETE from ' .static::$table . 'WHERE id =:id';
        return $db->query($sql, [':id'=>$this->data);
    }
*/
/*
    public   function update()
    {   $cols =[];

        foreach($this->data as $k=>$v){
            if('id' == $k){
               continue;
            }
            $cols[] = $k. '=:' .$k;
        }
        //
        echo $sql = 'UPDATE'.static::$table.'
        SET'.implode(',', $cols). '
        WHERE id=:id
        ';
        die;

    }
*/


    }



