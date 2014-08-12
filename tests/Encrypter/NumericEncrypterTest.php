<?php

use Ilpaijin\Encrypter\Strategies\NumericEncrypter;

/**
* NumericEncrypterTest Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class NumericEncrypterTest extends PHPUnit_Framework_TestCase
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
        $this->enc = new NumericEncrypter;
    }

    /**
     * [tearDown description]
     * @return [type] [description]
     */
    public function tearDown()
    {
        $this->enc = null;
    }

    public function testEncryption()
    {
        $expected = "1-2-26";

        $this->assertEquals($expected, $this->enc->encrypt("abz"));
    }

    public function testDecryption()
    {
        $expected = "abz";

        $this->assertEquals($expected, $this->enc->decrypt("1-2-26"));
    }
}
