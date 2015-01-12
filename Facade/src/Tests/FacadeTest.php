<?php

namespace Tests;

use Facade\Support\Form;

class FacadeTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test the method open in class Form, for example this method return 'open'
     */
    public function testFacadeForm() {

        $this->assertEquals(Form::open(), 'open');
    }

    /**
     * @test if method elem return Form type object (see this method in Facade/Library/Form
     */
    public function testIsObjectForm() {
        
        $this->assertInstanceOf('Facade\Library\Form', Form::elem());
    }

}
