<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class firstTest extends TestCase
{
    /**
     *
     *
     * dataProvider additionProvider
     */
/*
    public function testAdd($a,$b,$expected)
    {
        $this->assertEquals($expected,$a+$b);
    }

    public function additionProvider()
    {
        return array(
          array(0,1,1),
          array(1,1,3)
        );
    }
*/
    public function testBasicExample()
    {
        $this->visit('/auth/login')
            ->type('cdga@gmail.com', 'email')
            ->type('123456', 'password')
            ->click('login')
            ->seePageIs('/articls');
    }
    public function testBasicExample2()
    {/*
        $this->visit('/articles/create')
            ->type('Laravel 5','title')
            ->type('ia me body','body')
            ->select('1','tag_list')
            ->press('Add Article');
           // ->seePageIs('/articles');
*/
    }
}
