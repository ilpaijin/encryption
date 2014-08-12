<?php

namespace Ilpaijin\Encrypter\Contracts;

interface EncrypterInterface 
{
    /**
     * [encrypt description]
     * @param  [type] $input [description]
     * @return [type]       [description]
     */
    public function encrypt($input);

    /**
     * [decrypt description]
     * @param  [type] $input [description]
     * @return [type]       [description]
     */
    public function decrypt($input);
}