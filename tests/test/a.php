<?php
/**
 * Created by PhpStorm.
 * User: jun
 * Date: 16-8-26
 * Time: 下午9:39
 */


class a{
    private $a=123;

    protected $b=123;

    protected function getChild()
    {
        var_dump($this->dd);
    }
}

class b extends a{

    public $dd = 5321;


    public function index()
    {
        var_dump($this->b); // 123
        var_dump($this->c); // undefind
        var_dump($this->a); // undefind
    }

    public function getChild()
    {
        parent::getChild();
    }


}

$b = new b();
//echo $b->index();
echo $b->getChild();

//私有属性只能被自己访问，受保护的可以在子类中调用，共有的可以随便访问