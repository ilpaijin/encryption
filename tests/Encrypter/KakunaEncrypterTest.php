<?php

use Ilpaijin\Encrypter\Strategies\KakunaEncrypter;

/**
* KakunaEncrypterTest Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class KakunaEncrypterTest extends PHPUnit_Framework_TestCase
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
        $this->enc = new KakunaEncrypter;
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
        $expected = "fge";

        $this->assertEquals($expected, $this->enc->encrypt("abz"));
    }

    public function testDecryption()
    {
        $expected = "abz";

        $this->assertEquals($expected, $this->enc->decrypt("fge"));
    }
}