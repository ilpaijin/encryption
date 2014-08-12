<?php

namespace Ilpaijin\Encrypter\Strategies;

/**
* AbstractEncrypter Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
abstract class AbstractEncrypter 
{
    /**
     * [$alphaLength description]
     * @var [type]
     */
    protected $alphaLength;

    /**
     * [$alpha description]
     * @var [type]
     */
    protected $alpha;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->alpha = range('a','z');
        $this->alphaLength = count($this->alpha);
    }
}