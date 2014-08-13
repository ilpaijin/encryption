<?php

require_once "vendor/autoload.php";

$password = "abz";

try 
{
    $encrypter = Ilpaijin\Encrypter\EncrypterFactory::make('kakuna');
    
    $encryptedPassword = $encrypter->encrypt( $password );
    var_dump($encryptedPassword);

    $decryptedPassword = $encrypter->decrypt( $encryptedPassword );
    var_dump($decryptedPassword);
} catch(Exception $e)
{
    echo $e->getMessage();
}

try 
{
    $encrypter = Ilpaijin\Encrypter\EncrypterFactory::make('numeric');

    $encryptedPassword = $encrypter->encrypt( $password );
    var_dump($encryptedPassword);

    $decryptedPassword = $encrypter->decrypt( $encryptedPassword );
    var_dump($decryptedPassword);
} catch(Exception $e)
{
    echo $e->getMessage();
}