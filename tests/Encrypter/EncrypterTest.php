<?php

use Ilpaijin\Encrypter\EncrypterFactory;

/**
* EncrypterTest Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class EncrypterTest extends PHPUnit_Framework_TestCase
{
    /**
     * [$enc description]
     * @var [type]
     */
    private $enc;

    /**
     * [setUp description]
     */
    public function setUp()
    {
        $this->enc = EncrypterFactory::make('numeric');
    }

    /**
     * [tearDown description]
     * @return [type] [description]
     */
    public function tearDown()
    {
        $this->enc = null;
    }

    public function testInstanceExists()
    {
        $this->assertInstanceOf("Ilpaijin\\Encrypter\\Strategies\\NumericEncrypter", $this->enc);
    }

    public function testHasRightInterface()
    {
        $this->assertInstanceOf("Ilpaijin\\Encrypter\\Contracts\\EncrypterInterface", $this->enc);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionThrownOnInvalidStrategy()
    {
        $newEnc = EncrypterFactory::make('numc');

        $this->assertInstanceOf("Ilpaijin\\Encrypter\\Contracts\\EncrypterInterface", $newEnc);
    }
}