<?php

require_once "vendor/autoload.php";

$encrypter = 


// $user = $this->getPostParam( 'user' );
// $password = $this->getPostParam( 'password' );

$password = "abz";

$encrypter = Ilpaijin\Encrypter\EncrypterFactory::make('kakuna');

$encryptedPassword = $encrypter->encrypt( $password );

var_dump($encryptedPassword);

$decryptedPassword = $encrypter->decrypt( $encryptedPassword );

var_dump($decryptedPassword);

$encrypter = Ilpaijin\Encrypter\EncrypterFactory::make('numeric');

$encryptedPassword = $encrypter->encrypt( $password );

var_dump($encryptedPassword);

$decryptedPassword = $encrypter->decrypt( $encryptedPassword );

var_dump($decryptedPassword);

// $found = $this->findUserInDB( $user, $encryptedPassword );

// if ($found) 
// {
//     echo “Success!”;
// }
    