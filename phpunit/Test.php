<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-09-05
 * Time: 19:10
 */


require '../hello.php';

class Test extends PHPUnit_Framework_TestCase
{
    public function testTrue(){
        assertTrue($this->testTrue());
    }
}
