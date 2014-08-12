<?php

namespace Ilpaijin\Encrypter\Strategies;

use Ilpaijin\Encrypter\Contracts\EncrypterInterface;

/**
* NumericEncrypter Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class NumericEncrypter extends AbstractEncrypter implements EncrypterInterface
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
            $k = array_search($value, $this->alpha);
            $result[$key] = ++$k;
        }

        return implode("-", $result);
    }
            
    /**
     * @link /src/Encrypter/EncrypterInterface.php
     * @see EncrypterInterface
     */
    public function decrypt($input)
    {
        $result = array();

        foreach (explode("-", $input) as $key => $value) 
        {
            --$value;

            $result[$key] = $this->alpha[$value];
        }

        return implode("", $result);
    }
}