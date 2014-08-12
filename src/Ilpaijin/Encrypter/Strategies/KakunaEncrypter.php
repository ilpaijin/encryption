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
     * @link /src/Encrypter/EncrypterInterface.php
     * @see EncrypterInterface
     */
    public function encrypt($input)
    {
        $result = array();

        foreach (str_split($input) as $key => $value) 
        {
            $ordValue = ord($value);

            if($ordValue >= ((97 + $this->alphaLength) - 5))
            {
                $ordValue -= $this->alphaLength; 
            }

            $ordValue += 5;

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

            if($ordValue <= ((122 - $this->alphaLength) + 5))
            {
                $ordValue += $this->alphaLength; 
            }

            $ordValue -= 5;

            $result[$key] = chr($ordValue);
        }

        return implode($result);
    }
}