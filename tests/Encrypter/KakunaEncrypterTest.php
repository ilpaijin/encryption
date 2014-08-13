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
        $this->enc5 = new KakunaEncrypter(5);
        $this->enc = new KakunaEncrypter();
    }

    /**
     * [tearDown description]
     * @return [type] [description]
     */
    public function tearDown()
    {
        $this->enc = null;
    }

    public function testEncryption5()
    {
        $expected = "fge";

        $this->assertEquals($expected, $this->enc5->encrypt("abz"));
    }

    public function testDecryption5()
    {
        $expected = "abz";

        $this->assertEquals($expected, $this->enc5->decrypt("fge"));
    }

    public function testEncryption3()
    {
        $expected = "dec";

        $this->assertEquals($expected, $this->enc->encrypt("abz"));
    }

    public function testDecryption3()
    {
        $expected = "abz";

        $this->assertEquals($expected, $this->enc->decrypt("dec"));
    }
}