# Encryption

### An encryption/decryption code challenge

- sudo composer install
- phpunit --testdox-html tests.html tests

### Usage

```php
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
```

