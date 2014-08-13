<?php

namespace Ilpaijin\Encrypter;

/**
* EncrypterFactory Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class EncrypterFactory 
{
    /**
     * [make description]
     * @param  [type] $strategyClass [description]
     * @return [type]                [description]
     */
    public static function make($strategyParms)
    {
        list($strategyClass, $option) = array_pad(explode(":", $strategyParms), 2, null);

        $nsClass = __NAMESPACE__ . "\\Strategies\\" . ucfirst($strategyClass) . "Encrypter";

        if(!class_exists($nsClass))
        {
            throw new \InvalidArgumentException("Invalid Encrypter {$strategyClass}");
        }

        return new $nsClass($option);
    }
}