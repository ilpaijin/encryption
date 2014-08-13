<?php

namespace Ilpaijin\Encrypter\Strategies;

use Ilpaijin\Encrypter\Contracts\EncrypterInterface;

/**
* KakunaEncrypter Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class KakunaEncrypter extends AbstractEncrypter implements EncrypterInterface
{
    /**
     * [$factor description]
     * @var [type]
     */
    private $factor;

    /**
     * [__construct description]
     * @param [type] $strategy [description]
     * @param [type] $factor   [description]
     */
    public function __construct($factor = null)
    {
        $this->factor = is_null($factor) ? 3 : $factor;

        parent::__construct();
    }

    /**
     * @link /src/Encrypter/EncrypterInterface.php
     * @see EncrypterInterface
     */
    public function encrypt($input)
    {
        $result = array();

        foreach (str_split($input) as $key => $value) 
        {
            $ordValue = ord($value);

            if($ordValue >= ((97 + ($l = count($this->alpha))) - $this->factor))
            {
                $ordValue -= $l; 
            }

            $ordValue += $this->factor;

            $result[$key] = chr($ordValue);
        }

        return implode($result);
    }
            
    /**
     * @link /src/Encrypter/EncrypterInterface.php
     * @see EncrypterInterface
     */
    public function decrypt($input)
    {
        $result = array();

        foreach (str_split($input) as $key => $value) 
        {
            $ordValue = ord($value);

            if($ordValue <= ((122 - ($l = count($this->alpha))) + $this->factor))
            {
                $ordValue += $l; 
            }

            $ordValue -= $this->factor;

            $result[$key] = chr($ordValue);
        }

        return implode($result);
    }
}