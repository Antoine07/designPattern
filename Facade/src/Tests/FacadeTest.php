<?php

namespace Tests;

use Facade\Support\Form;

class FacadeTest extends \PHPUnit_Framework_TestCase {

    public function testFacadeForm() {

        $this->assertEquals(Form::open(), 'open');
    }

    public function testIsObjectForm() {
        
        $this->assertInstanceOf('Facade\Library\Form', Form::elem());
    }

}
